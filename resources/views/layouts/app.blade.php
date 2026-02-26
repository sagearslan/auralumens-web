<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'AuraLumens - Immersive Light Therapy & Meditation')</title>
    <meta name="description" content="@yield('description', 'Transform your space with AuraLumens - the ultimate light therapy and meditation app featuring synchronized strobe effects and audio tracks.')">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
    @stack('styles')
</head>
<body>
    <!-- Header -->
    <header class="header">
        <nav class="nav">
            <div class="nav-container">
                <div class="nav-logo">
                    <i class="fas fa-lightbulb"></i>
                    <span>AuraLumens</span>
                </div>
                <ul class="nav-menu">
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li><a href="{{ route('home') }}#features">Features</a></li>
                    <li><a href="{{ route('home') }}#about">About</a></li>
                    <li><a href="{{ route('home') }}#download">Download</a></li>
                    <li><a href="{{ route('privacy') }}">Privacy</a></li>
                    <li><a href="{{ route('terms') }}">Terms</a></li>
                </ul>
                <div class="nav-toggle">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </div>
        </nav>
    </header>

    @yield('content')

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="footer-content">
                <div class="footer-brand">
                    <div class="footer-logo">
                        <i class="fas fa-lightbulb"></i>
                        <span>AuraLumens</span>
                    </div>
                    <p>Transform your space with immersive light therapy and meditation.</p>
                </div>
                <div class="footer-links">
                    <div class="footer-section">
                        <h4>App</h4>
                        <ul>
                            <li><a href="{{ route('home') }}#features">Features</a></li>
                            <li><a href="{{ route('home') }}#download">Download</a></li>
                            <li><a href="#">Support</a></li>
                        </ul>
                    </div>
                    <div class="footer-section">
                        <h4>Company</h4>
                        <ul>
                            <li><a href="{{ route('home') }}#about">About</a></li>
                            <li><a href="#">Contact</a></li>
                            <li><a href="#">Blog</a></li>
                        </ul>
                    </div>
                    <div class="footer-section">
                        <h4>Legal</h4>
                        <ul>
                            <li><a href="{{ route('privacy') }}">Privacy Policy</a></li>
                            <li><a href="{{ route('terms') }}">Terms of Use</a></li>
                            <li><a href="#">EULA</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="footer-bottom">
                <p>&copy; {{ date('Y') }} Arslan Studios. All rights reserved.</p>
            </div>
        </div>
    </footer>

    <script src="{{ asset('js/script.js') }}"></script>
    @stack('scripts')
</body>
</html>
