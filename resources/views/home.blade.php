@extends('layouts.app')

@section('title', 'AuraLumens - Immersive Light Therapy & Meditation')
@section('description', 'Transform your space with AuraLumens - the ultimate light therapy and meditation app featuring synchronized strobe effects and audio tracks.')

@section('content')
    <!-- Hero Section -->
    <section class="hero">
        <div class="hero-container">
            <div class="hero-content">
                <h1 class="hero-title">Transform Your Space with <span class="gradient-text">AuraLumens</span></h1>
                <p class="hero-description">Experience immersive light therapy and meditation with synchronized strobe effects, customizable frequencies, and premium audio tracks.</p>
                <div class="hero-buttons">
                    <a href="#download" class="btn btn-primary">
                        <i class="fab fa-apple"></i>
                        Download for iOS
                    </a>
                    <a href="#features" class="btn btn-secondary">
                        <i class="fas fa-play"></i>
                        Watch Demo
                    </a>
                </div>
            </div>
            <div class="hero-image">
                <div class="phone-mockup">
                    <div class="phone-screen">
                        <div class="app-preview">
                            <div class="strobe-effect"></div>
                            <div class="app-interface">
                                <div class="track-info">
                                    <h3>Noche en Sevilla</h3>
                                    <p>Ambient • 8:42</p>
                                </div>
                                <div class="controls">
                                    <div class="frequency-control">
                                        <label>Frequency: 1.0x</label>
                                        <div class="slider"></div>
                                    </div>
                                    <div class="brightness-control">
                                        <label>Brightness: 0.8x</label>
                                        <div class="slider"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section id="features" class="features">
        <div class="container">
            <div class="section-header">
                <h2>Powerful Features</h2>
                <p>Everything you need for the perfect light therapy experience</p>
            </div>
            <div class="features-grid">
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-adjust"></i>
                    </div>
                    <h3>Dynamic Strobe Control</h3>
                    <p>Precise frequency control from ultra-slow 0.1x to normal speed with smooth transitions and customizable brightness levels.</p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-music"></i>
                    </div>
                    <h3>Premium Audio Tracks</h3>
                    <p>Curated collection of ambient soundscapes, binaural beats, and meditation music perfectly synchronized with light effects.</p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-mobile-alt"></i>
                    </div>
                    <h3>iPhone Flashlight Integration</h3>
                    <p>Transform your iPhone's flashlight into a powerful therapeutic tool with precise timing and intensity control.</p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-sliders-h"></i>
                    </div>
                    <h3>Real-time Adjustments</h3>
                    <p>Modify frequency and brightness multipliers instantly during playback for the perfect therapeutic experience.</p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-palette"></i>
                    </div>
                    <h3>Immersive Interface</h3>
                    <p>Beautiful, distraction-free design with hidden navigation that lets you focus on your meditation and therapy session.</p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-moon"></i>
                    </div>
                    <h3>Session Tracking</h3>
                    <p>Track your meditation sessions and light therapy progress with detailed analytics and personalized recommendations.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="about">
        <div class="container">
            <div class="about-content">
                <div class="about-text">
                    <h2>About AuraLumens</h2>
                    <p class="lead">AuraLumens combines cutting-edge light therapy technology with premium audio experiences to create a powerful tool for meditation, relaxation, and wellness.</p>
                    <p>Our app uses your iPhone's flashlight to create precisely timed strobe effects that can help with meditation, focus, and therapeutic applications. Combined with our curated audio tracks, AuraLumens offers a unique sensory experience that promotes relaxation and mindfulness.</p>
                </div>
                <div class="about-image">
                    <div class="meditation-scene">
                        <div class="ambient-light"></div>
                        <div class="person-silhouette"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Download Section -->
    <section id="download" class="download">
        <div class="container">
            <div class="download-content">
                <h2>Ready to Transform Your Space?</h2>
                <p>Download AuraLumens today and experience the future of light therapy and meditation.</p>
                <div class="download-buttons">
                    <a href="#" class="app-store-btn">
                        <img src="https://developer.apple.com/app-store/marketing/guidelines/images/badge-download-on-the-app-store.svg" alt="Download on App Store">
                    </a>
                </div>
                <div class="download-info">
                    <div class="info-item">
                        <i class="fas fa-mobile-alt"></i>
                        <span>iOS 15.0 or later</span>
                    </div>
                    <div class="info-item">
                        <i class="fas fa-download"></i>
                        <span>Free with Premium Features</span>
                    </div>
                    <div class="info-item">
                        <i class="fas fa-shield-alt"></i>
                        <span>Privacy Focused</span>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
