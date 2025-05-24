@include('partials.header')
<main>
    <section class="py-5">
        <div class="container">
            <h1 class="mb-4">About Us</h1>
            <p>
                Welcome to our website! We are dedicated to providing the best services and solutions for our clients.
            </p>
            <p>
                Our team is passionate about technology and innovation, always striving to deliver high-quality results.
            </p>
            <p>
                Thank you for visiting and learning more about us!
            </p>
            <p>hahahah</p>
            <p>hahh</p>
            <form action="/logout" method="POST" class="mt-4" id="logoutForm">
                @csrf
                <button type="submit" class="btn btn-danger">Logout</button>
            </form>
            <script>
                document.addEventListener('DOMContentLoaded', function() {
                    var logoutForm = document.getElementById('logoutForm');
                    if (logoutForm) {
                        logoutForm.addEventListener('submit', function(e) {
                            if (!confirm('Are you sure you want to logout?')) {
                                e.preventDefault();
                            }
                        });
                    }
                });
            </script>
        </div>
    </section>
</main>