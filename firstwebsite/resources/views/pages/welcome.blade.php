@include('partials.header')
@include('partials.nav')

<main>
    <section class="hero-section d-flex align-items-center justify-content-center" style="min-height: 100vh; background: linear-gradient(135deg, #6366f1 0%, #a855f7 100%);">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6 col-lg-4">
                    <div class="card shadow-lg border-0 rounded-4">
                        <div class="card-body p-5">
                            <div class="text-center mb-4">
                                <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" fill="#6366f1" class="bi bi-person-circle mb-3" viewBox="0 0 16 16">
                                    <path d="M11 10a2 2 0 1 1-4 0 2 2 0 0 1 4 0z"/>
                                    <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
                                </svg>
                                <h3 class="fw-bold mb-0" style="color:#6366f1;">Sign In</h3>
                                <p class="text-muted small">Welcome back! Please login to your account.</p>
                            </div>
                            <form method="POST" action="/login">
                                @csrf
                                <div class="mb-3">
                                    <label for="email" class="form-label">Email</label>
                                    <input type="email" name="email" id="email" class="form-control form-control-lg rounded-3" placeholder="Enter your email" required autofocus>
                                </div>
                                <div class="mb-3">
                                    <label for="password" class="form-label">Password</label>
                                    <input type="password" name="password" id="password" class="form-control form-control-lg rounded-3" placeholder="Enter your password" required>
                                </div>
                                <div class="d-flex justify-content-between align-items-center mb-3">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="remember">
                                        <label class="form-check-label" for="remember">Remember me</label>
                                    </div>
                                    <a href="#" class="small text-decoration-none" style="color:#6366f1;">Forgot password?</a>
                                </div>
                                <button type="submit" class="btn btn-primary w-100 py-2 rounded-3" style="background: linear-gradient(90deg, #6366f1 0%, #a855f7 100%); border: none;">Login</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
@include('partials.footer')