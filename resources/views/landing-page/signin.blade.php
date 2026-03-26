@vite(['resources/landingpage-css/signin.css'])
@vite(['resources/landingpage-css/signup.css'])
@include('landing-page.header')

<body>
    <div class="signin-card text-center" data-aos="fade-up">
        <h2>Sign In</h2>
        <p class="text-light opacity-75 mb-4">Welcome back! Please enter your credentials.</p>

        <form action="{{ route('signin.submit') }}" method="POST">
            @csrf
            <input type="email" name="email" class="form-control" placeholder="Email Address" required>
            <input type="password" name="password" class="form-control" placeholder="Password" required>

            <div class="d-flex justify-content-between align-items-center mb-4">
                <div class="form-check text-start">
                    <input class="form-check-input" type="checkbox" name="remember" id="rememberMe">
                    <label class="form-check-label text-light" for="rememberMe">Remember me</label>
                </div>
                <a href="#" class="text-link">Forgot Password?</a>
            </div>

            <button type="submit" class="btn btn-primary mb-4">Sign In</button>
        </form>

        <p class="mb-3 opacity-75">Or sign in with</p>
        <div class="d-flex gap-3 justify-content-center">
            <a href="#" class="btn btn-light social-btn"><i class="bi bi-google"></i> Google</a>
            <a href="#" class="btn btn-light social-btn"><i class="bi bi-facebook"></i> Facebook</a>
        </div>

        <p class="mt-4 opacity-75">Don't have an account? <a href="{{ route('signup') }}" class="text-light text-decoration-none fw-bold">Sign up</a></p>
    </div>

</body>

</html>