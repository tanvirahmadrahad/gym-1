@extends('layouts.app')

@section('content')
    <!-- 1. Hero Section -->
    @include('components.hero')

    <!-- 2. About Us Section -->
    @include('components.about')

    <!-- 4. Why Choose Us? (Key Strengths) -->
    @include('components.why-choose-us')

    <!-- 5. Programs That Deliver Real Results -->
    @include('components.programs')

    <!-- 6. Smart Member App & Connected Biometrics -->
    @include('components.member-app')

    <!-- 7. The Gymstick Difference & Comparison Matrix -->
    @include('components.comparison')

    <!-- 8. Membership & Pricing Plans -->
    @include('components.pricing')

    <!-- 9. Free 1-Day Trial Pass (High-Conversion Lead Capture) -->
    @include('components.free-trial')

    <!-- 10. Member Transformations (Before & After Results) -->
    @include('components.transformations')

    <!-- 11. Achievements & Stats Counter (2000+, 160+, 92+) -->
    @include('components.stats')

    <!-- 12. Certified Elite Trainers & Coaches -->
    @include('components.trainers')

    <!-- 13. Training Facility & Atmosphere Gallery -->
    @include('components.gallery')

    <!-- 14. Member Testimonials & Social Proof (Google 4.9★ Ratings) -->
    @include('components.testimonials')

    <!-- 15. Frequently Asked Questions (FAQ Accordion) -->
    @include('components.faq')

    <!-- 16. Latest Fitness Insights (Blog & Tips) -->
    @include('components.blog')

    <!-- 17. Location, Timings & Live WhatsApp Bar -->
    @include('components.location-contact')
@endsection
