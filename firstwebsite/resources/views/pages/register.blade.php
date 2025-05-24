@include('partials.header')
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
                                <h3 class="fw-bold mb-0" style="color:#6366f1;">Register</h3>
                            </div>
                            @if(session('success'))
                                <div class="alert alert-success text-center mb-3">{{ session('success') }}</div>
                            @endif
                            @if(session('error'))
                                <div class="alert alert-danger text-center mb-3">{{ session('error') }}</div>
                            @endif
                            <div id="messagePage"></div>
                            <form id="registrationFormPage" method="POST">
                                @csrf
                                <div class="mb-3">
                                    <label for="email" class="form-label" style="font-size: 0.95rem;">Email</label>
                                    <input type="email" name="email" id="email" class="form-control form-control-lg rounded-3" placeholder="Enter your email" required style="font-size: 0.95rem;">
                                </div>
                                <div class="mb-3">
                                    @error('password')
                                        <div class="text-danger small mb-2">{{ $message }}</div>
                                    @enderror
                                    <label for="password" class="form-label" style="font-size: 0.95rem;">Password</label>
                                    <input type="password" name="password" id="password" class="form-control form-control-lg rounded-3" placeholder="Enter your password" required style="font-size: 0.95rem;">
                                </div>
                                <div class="mb-3">
                                    <label for="password_confirmation" class="form-label" style="font-size: 0.95rem;">Confirm Password</label>
                                    <input type="password" name="password_confirmation" id="password_confirmation" class="form-control form-control-lg rounded-3" placeholder="Confirm your password" required style="font-size: 0.95rem;">
                                    @error('password_confirmation')
                                        <div class="text-danger small mt-1">{{ $message }}</div>
                                    @enderror
                                </div>
                                <button type="submit" class="btn btn-primary w-100 py-2 rounded-3" style="background: linear-gradient(90deg, #6366f1 0%, #a855f7 100%); border: none; font-size: 1rem;">Register</button>
                            </form>
                            <div class="mb-3 text-center">
                                <a href="/" class="small text-decoration-none" style="color:#6366f1;">Sign in</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
@include('partials.footer')