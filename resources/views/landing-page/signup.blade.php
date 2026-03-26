@vite(['resources/landingpage-css/signin.css'])
@include('landing-page.header')

<body>
    <div class="signin-card text-center" data-aos="fade-up">
        <h2>Sign Up</h2>
        <p class="text-light opacity-75 mb-4">Create a new account to get started.</p>

        <!-- Corrected form start -->
        <form action="{{ route('signup.submit') }}" method="POST">
            @csrf
            <input type="text" class="form-control" name="name" placeholder="Full Name" required autocomplete="name">
            <input type="email" class="form-control" name="email" placeholder="Email Address" required autocomplete="email">
            <input type="password" class="form-control" name="password" placeholder="Password" required autocomplete="new-password">
            <input type="password" class="form-control" name="password_confirmation" placeholder="Confirm Password" required autocomplete="new-password">

            <div class="form-check text-start mb-4">
                <input class="form-check-input" type="checkbox" value="" id="agreeTerms" required>
                <label class="form-check-label text-light" for="agreeTerms">
                    I agree to the <a href="#" class="text-decoration-underline text-light">Terms & Conditions</a>
                </label>
            </div>

            <button type="submit" class="btn btn-primary mb-4">Sign Up</button>
        </form>
        <!-- Corrected form end -->

        <p class="mb-3 opacity-75">Or sign up with</p>
        <div class="d-flex gap-3 justify-content-center">
            <a href="#" class="btn btn-light social-btn"><i class="bi bi-google"></i> Google</a>
            <a href="#" class="btn btn-light social-btn"><i class="bi bi-facebook"></i> Facebook</a>
        </div>

        <p class="mt-4 opacity-75">Already have an account?
            <a href="{{ route('signin') }}" class="text-light text-decoration-none fw-bold">Sign in</a>
        </p>
    </div>
</body>

</html>