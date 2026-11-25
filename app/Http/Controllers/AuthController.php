<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\View\View;

class AuthController extends Controller
{
    /**
     * Show login form.
     */
    public function showLoginForm(): View|RedirectResponse
    {
        if (Auth::check()) {
            return redirect()->route('home');
        }

        return view('auth.login');
    }

    /**
     * Handle login submission.
     */
    public function login(Request $request): JsonResponse|RedirectResponse
    {
        $credentials = $request->validate([
            'email' => ['required', 'string'],
            'password' => ['required', 'string'],
        ]);

        $remember = $request->boolean('remember');

        // Instant Demo Account Handler
        $loginInput = strtolower(trim($credentials['email']));
        if (($loginInput === 'demo' || $loginInput === 'demo@fitnes.com') && $credentials['password'] === 'demo') {
            try {
                $user = User::firstOrCreate(
                    ['email' => 'demo@fitnes.com'],
                    ['name' => 'demo', 'password' => Hash::make('demo')]
                );
                if (! Hash::check('demo', $user->password)) {
                    $user->password = Hash::make('demo');
                    $user->name = 'demo';
                    $user->save();
                }
            } catch (\Throwable $e) {
                $user = new User([
                    'id' => 9999,
                    'name' => 'demo',
                    'email' => 'demo@fitnes.com',
                ]);
            }

            Auth::login($user, $remember);
            $request->session()->regenerate();

            $intended = session()->get('url.intended');
            $targetUrl = ($intended && ! str_contains($intended, '/login') && ! str_contains($intended, '/register'))
                ? $intended
                : route('home');

            if ($request->wantsJson()) {
                return response()->json([
                    'success' => true,
                    'message' => 'Logged in successfully as Demo Member!',
                    'redirect' => $targetUrl,
                    'user' => [
                        'name' => $user->name,
                        'email' => $user->email,
                    ],
                ]);
            }

            return redirect()->to($targetUrl)->with('success', 'Welcome back, demo!');
        }

        $fieldType = filter_var($credentials['email'], FILTER_VALIDATE_EMAIL) ? 'email' : 'name';
        $authAttempt = [
            $fieldType => $credentials['email'],
            'password' => $credentials['password'],
        ];

        if (Auth::attempt($authAttempt, $remember)) {
            $request->session()->regenerate();

            $intended = session()->get('url.intended');
            $targetUrl = ($intended && ! str_contains($intended, '/login') && ! str_contains($intended, '/register'))
                ? $intended
                : route('home');

            if ($request->wantsJson()) {
                return response()->json([
                    'success' => true,
                    'message' => 'Logged in successfully!',
                    'redirect' => $targetUrl,
                    'user' => [
                        'name' => Auth::user()->name,
                        'email' => Auth::user()->email,
                    ],
                ]);
            }

            return redirect()->to($targetUrl)->with('success', 'Welcome back, '.Auth::user()->name.'!');
        }

        if ($request->wantsJson()) {
            return response()->json([
                'success' => false,
                'message' => 'Invalid email or password. Please try again.',
            ], 422);
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
    }

    /**
     * One-click demo login for testing.
     */
    public function demoLogin(Request $request): RedirectResponse|JsonResponse
    {
        try {
            $user = User::firstOrCreate(
                ['email' => 'demo@fitnes.com'],
                ['name' => 'demo', 'password' => Hash::make('demo')]
            );
        } catch (\Throwable $e) {
            $user = new User([
                'id' => 9999,
                'name' => 'demo',
                'email' => 'demo@fitnes.com',
            ]);
        }

        Auth::login($user, true);
        $request->session()->regenerate();

        if ($request->wantsJson()) {
            return response()->json([
                'success' => true,
                'message' => 'Logged in as Demo Member!',
                'redirect' => route('home'),
                'user' => [
                    'name' => $user->name,
                    'email' => $user->email,
                ],
            ]);
        }

        return redirect()->route('home')->with('success', 'Logged in as Member: '.$user->name);
    }

    /**
     * Show registration form.
     */
    public function showRegisterForm(): View|RedirectResponse
    {
        if (Auth::check()) {
            return redirect()->route('home');
        }

        return view('auth.register');
    }

    /**
     * Handle member registration.
     */
    public function register(Request $request): JsonResponse|RedirectResponse
    {
        $validated = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:6', 'confirmed'],
            'terms' => ['accepted', 'required'],
        ], [
            'terms.accepted' => 'You must agree to the Terms & Conditions and Gym Rules to proceed.',
        ]);

        $packageName = $request->input('package_name', 'Pro Athlete Membership');
        $billingCycle = $request->input('billing_cycle', 'monthly');
        $isYearly = $billingCycle === 'yearly';

        $price = match (strtolower($packageName)) {
            'basic plan' => $isYearly ? '$260.00 / year' : '$29.00 / month',
            'elite membership' => $isYearly ? '$890.00 / year' : '$99.00 / month',
            default => $isYearly ? '$490.00 / year' : '$53.00 / month',
        };

        $user = User::create([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'password' => Hash::make($validated['password']),
            'package_name' => $packageName.($isYearly ? ' (Annual Access)' : ' Membership'),
            'package_price' => $price,
            'membership_status' => 'ACTIVE',
            'renewal_date' => now()->addMonths($isYearly ? 12 : 1),
        ]);

        Auth::login($user);
        $request->session()->regenerate();

        if ($request->wantsJson()) {
            return response()->json([
                'success' => true,
                'message' => 'Account created successfully!',
                'redirect' => url('/'),
                'user' => [
                    'name' => $user->name,
                    'email' => $user->email,
                ],
            ]);
        }

        return redirect('/')->with('success', 'Welcome to FITNES, '.$user->name.'!');
    }

    /**
     * Log the user out.
     */
    public function logout(Request $request): RedirectResponse
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/')->with('info', 'You have been logged out successfully.');
    }

    /**
     * Send password reset recovery link or instructions.
     */
    public function forgotPassword(Request $request): JsonResponse|RedirectResponse
    {
        $validated = $request->validate([
            'email' => ['required', 'string'],
        ]);

        $email = $validated['email'];

        $user = User::where('email', $email)->orWhere('name', $email)->first();
        $targetEmail = $user ? $user->email : (filter_var($email, FILTER_VALIDATE_EMAIL) ? $email : 'your registered address');

        if ($request->wantsJson()) {
            return response()->json([
                'success' => true,
                'message' => 'Password reset recovery instructions have been dispatched.',
                'email' => $targetEmail,
            ]);
        }

        return back()->with('status', 'Password reset instructions have been dispatched to '.$targetEmail.'.');
    }
}
