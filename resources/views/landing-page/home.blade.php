@include('landing-page.header')
<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg fixed-top">
        <div class="container">
            <a class="navbar-brand fw-bold fs-3" href="#"><span class="text-primary"><i class="bi bi-paw-fill"></i> Dog</span>Adopt</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navMenu">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navMenu">
                <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                    <li class="nav-item"><a class="nav-link" href="#">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="#features">Features</a></li>
                    <li class="nav-item"><a class="nav-link" href="#pricing">Pricing</a></li>
                    <li class="nav-item"><a class="nav-link" href="#faq">FAQ</a></li>
                </ul>
                <div class="d-flex gap-3 align-items-center">
                    <a href="{{ route('signin') }}" class="text-light text-decoration-none fw-bold">Sign In</a>
                    <button class="btn btn-primary shadow">Get Started</button>
                </div>
            </div>
        </div>
    </nav>

    <!-- Hero -->
    <section class="hero">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6" data-aos="fade-right">
                    <h1 class="display-3 fw-bold mb-4">Adopt Your <span class="text-primary">Best Friend</span></h1>
                    <p class="lead text-light mb-5">Connect shelters with loving families faster with our modern adoption platform.</p>
                    <button class="btn btn-primary btn-lg me-3">Adopt Today</button>
                    <button class="btn btn-outline-light btn-lg">Shelter Demo</button>
                </div>
                <div class="col-lg-6 text-center" data-aos="zoom-in">
                    <img src="https://images.unsplash.com/photo-1558788353-f76d92427f16?auto=format&fit=crop&w=700&q=80" class="hero-img img-fluid" alt="Dog">
                </div>
            </div>
        </div>
    </section>

    <!-- Stats -->
    <div class="container stats-container" data-aos="fade-up">
        <div class="stats-box shadow-lg">
            <div class="row g-4">
                <div class="col-md-4 border-end border-secondary">
                    <h2 class="display-5 fw-bold">50K+</h2>
                    <p class="opacity-75">Success Stories</p>
                </div>
                <div class="col-md-4 border-end border-secondary">
                    <h2 class="display-5 fw-bold">120+</h2>
                    <p class="opacity-75">Cities Covered</p>
                </div>
                <div class="col-md-4">
                    <h2 class="display-5 fw-bold">24/7</h2>
                    <p class="opacity-75">Shelter Support</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Features -->
    <section id="features" class="py-5">
        <div class="container py-5">
            <div class="text-center mb-5" data-aos="fade-up">
                <h6 class="text-primary fw-bold">CORE FEATURES</h6>
                <h2 class="display-5 fw-bold">Everything You Need</h2>
            </div>
            <div class="row g-4">
                <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="feature-card">
                        <i class="bi bi-clipboard2-pulse mb-3 fs-1"></i>
                        <h4 class="fw-bold mb-2">Smart Health Logs</h4>
                        <p>Automated vaccination, vet notes, and reminders for each dog in the shelter.</p>
                    </div>
                </div>
                <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="feature-card">
                        <i class="bi bi-person-check mb-3 fs-1"></i>
                        <h4 class="fw-bold mb-2">Applicant Scoring</h4>
                        <p>AI-powered scoring to match dogs with the right families perfectly.</p>
                    </div>
                </div>
                <div class="col-md-4" data-aos="fade-up" data-aos-delay="300">
                    <div class="feature-card">
                        <i class="bi bi-cloud-arrow-up mb-3 fs-1"></i>
                        <h4 class="fw-bold mb-2">Centralized Database</h4>
                        <p>Secure cloud storage accessible anywhere on any device.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA -->
    <div class="container my-5" data-aos="zoom-in">
        <div class="cta-section">
            <h2 class="display-4 fw-bold mb-4">Ready to save more lives?</h2>
            <p class="fs-5 mb-5 opacity-75">Join thousands of organizations using DogAdopt to find forever homes.</p>
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="input-group">
                        <input type="email" class="form-control border-0" placeholder="Enter your email">
                        <button class="btn btn-primary">Get Started</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <footer>
        <div class="container">
            <div class="row g-4 mb-4">
                <div class="col-lg-4">
                    <h3 class="fw-bold mb-3">DogAdopt</h3>
                    <p class="opacity-50">Leading platform for dog adoption management worldwide.</p>
                    <div class="d-flex gap-3 fs-4">
                        <i class="bi bi-facebook"></i><i class="bi bi-twitter"></i><i class="bi bi-instagram"></i>
                    </div>
                </div>
            </div>
            <hr class="opacity-25">
            <p class="text-center opacity-50 mb-0">© 2026 DogAdopt Systems Inc. All rights reserved.</p>
        </div>
    </footer>

</body>

</html>