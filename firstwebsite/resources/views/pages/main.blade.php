@include('partials.header')
@include('partials.nav')
<main>
    <section class="py-5 mb-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <h1 class="mb-4">Hi, I'm a Programmer</h1>
                    <p class="lead">
                        I craft clean, efficient code and build amazing web experiences.
                        Passionate about technology, innovation, and solving real-world problems.
                    </p>
                    <p>
                        Whether it’s backend logic, frontend design, or full-stack development,
                        I’m here to turn your ideas into reality.
                    </p>
                    <a href="{{ url('/contact') }}" class="btn btn-primary mt-3">Contact Me</a>
                </div>
                <div class="col-md-6 text-center">
                    <img src="https://images.unsplash.com/photo-1519389950473-47ba0277781c?auto=format&fit=crop&w=600&q=80"
                         alt="Programmer working" class="img-fluid rounded shadow">
                </div>
            </div>
        </div>
    </section>

    <section id="about" class="py-5 mb-5" style="background-color: #f8f9fa;">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6 order-md-2 text-center">
                    <img src="https://images.unsplash.com/photo-1504384308090-c894fdcc538d?auto=format&fit=crop&w=600&q=80"
                         alt="About Us" class="img-fluid rounded shadow">
                </div>
                <div class="col-md-6 order-md-1">
                    <h2 class="mb-4">About Us</h2>
                    <p class="lead">
                        We are a team of passionate developers and tech enthusiasts dedicated to delivering innovative solutions
                        and quality software that empowers businesses and individuals alike.
                    </p>
                    <p>
                        Our focus is on clean code, scalable architecture, and user-friendly experiences to help you succeed in the digital world.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section id="skills" class="py-5 mb-5">
        <div class="container">
            <h2 class="mb-4">Skills</h2>
            <div class="row text-center text-md-start">
                <div class="col-md-4 mb-4">
                    <div class="card h-100 shadow-sm">
                        <div class="card-body">
                            <h5 class="card-title">Frontend Development</h5>
                            <ul class="list-unstyled mb-0">
                                <li>HTML, CSS, JavaScript</li>
                                <li>React, Vue.js, Angular</li>
                                <li>Responsive Design</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card h-100 shadow-sm">
                        <div class="card-body">
                            <h5 class="card-title">Backend Development</h5>
                            <ul class="list-unstyled mb-0">
                                <li>Node.js, Express.js</li>
                                <li>Python, Django, Flask</li>
                                <li>Database Management (SQL, NoSQL)</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card h-100 shadow-sm">
                        <div class="card-body">
                            <h5 class="card-title">DevOps & Cloud</h5>
                            <ul class="list-unstyled mb-0">
                                <li>AWS, Azure, Google Cloud</li>
                                <li>Docker, Kubernetes</li>
                                <li>CI/CD Pipelines</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
