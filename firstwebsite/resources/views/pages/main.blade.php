@include('partials.header')


<div class="container-fluid" style="min-height: 100vh;">
    <div class="row">
        <!-- Sidebar -->
        <nav id="sidebar" class="col-md-3 col-lg-2 d-md-block sidebar collapse" style="min-height: 100vh; background: linear-gradient(135deg, #6366f1 0%, #a855f7 100%);">
            <div class="position-sticky pt-3">
                <!-- App Icon at the top of the sidebar -->
                <div class="d-flex flex-column align-items-center py-4">
                    <i class="bi bi-leaf-fill" style="font-size: 2.5rem; color: #fff; background: linear-gradient(135deg, #43e97b 0%, #38f9d7 100%); border-radius: 50%; padding: 0.5rem;"></i>
                    <span class="fw-bold text-white mt-2" style="letter-spacing: 1px;">Eco System</span>
                </div>

                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link active text-white bg-opacity-25 bg-success" href="#">
                            <i class="bi bi-house-door me-2"></i>
                            Overview
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="#" data-bs-toggle="tooltip" data-bs-placement="right" title="Campaigns">
                            <i class="bi bi-tree me-2"></i>
                            Campaigns
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="#" data-bs-toggle="tooltip" data-bs-placement="right" title="Green Projects">
                            <i class="bi bi-flower1 me-2"></i>
                            Green Projects
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="#" data-bs-toggle="tooltip" data-bs-placement="right" title="Volunteers">
                            <i class="bi bi-people me-2"></i>
                            Volunteers
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="#" data-bs-toggle="tooltip" data-bs-placement="right" title="Events">
                            <i class="bi bi-calendar-event me-2"></i>
                            Events
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="#" data-bs-toggle="tooltip" data-bs-placement="right" title="Settings">
                            <i class="bi bi-gear me-2"></i>
                            Settings
                        </a>
                    </li>
                    <li class="nav-item">
                        <form action="/logout" method="POST" id="logoutFormSidebar">
                            @csrf
                            <button type="submit" class="nav-link btn btn-link text-white w-100 text-start" style="text-decoration: none;">
                                <i class="bi bi-box-arrow-right me-2"></i>Logout
                            </button>
                        </form>
                    </li>
                </ul>
            </div>
        </nav>

        <!-- Main Content -->
        <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom border-white">
                <h1 class="h2 text-white">Eco System Dashboard</h1>
                <div class="btn-toolbar mb-2 mb-md-0">
                </div>
            </div>
            

            <!-- Stats Cards -->
            <div class="row mb-4">
                <div class="col-md-3 mb-4">
                    <div class="card h-100 shadow" style="background: linear-gradient(135deg, #6366f1 0%, #a855f7 100%);">
                        <div class="card-body text-white">
                            <h5 class="card-title">Active Campaigns</h5>
                            <h2>5</h2>
                            <p class="card-text">Ongoing eco initiatives</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 mb-4">
                    <div class="card h-100 shadow" style="background: linear-gradient(135deg, #6366f1 0%, #a855f7 100%);">
                        <div class="card-body text-white">
                            <h5 class="card-title">Trees Planted</h5>
                            <h2>1,250</h2>
                            <p class="card-text">This year</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 mb-4">
                    <div class="card h-100 shadow" style="background: linear-gradient(135deg, #6366f1 0%, #a855f7 100%);">
                        <div class="card-body text-white">
                            <h5 class="card-title">Volunteers</h5>
                            <h2>320</h2>
                            <p class="card-text">Active members</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 mb-4">
                    <div class="card h-100 shadow" style="background: linear-gradient(135deg, #6366f1 0%, #a855f7 100%);">
                        <div class="card-body text-white">
                            <h5 class="card-title">Events</h5>
                            <h2>8</h2>
                            <p class="card-text">Upcoming this month</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Recent Activity & Projects -->
            <div class="row">
                <!-- Recent Activity -->
                <div class="col-md-6 mb-4">
                    <div class="card shadow" style="background: linear-gradient(135deg, #6366f1 0%, #a855f7 100%);">
                        <div class="card-header bg-transparent border-0 text-white">
                            <h5 class="card-title mb-0">Recent Eco Activities</h5>
                        </div>
                        <div class="card-body">
                            <div class="list-group list-group-flush">
                                <div class="list-group-item bg-transparent text-white">
                                    <div class="d-flex w-100 justify-content-between">
                                        <h6 class="mb-1">Community Clean-Up Drive</h6>
                                        <small>3 mins ago</small>
                                    </div>
                                    <p class="mb-1">Collected 50kg of plastic waste from the riverbank</p>
                                </div>
                                <div class="list-group-item bg-transparent text-white">
                                    <div class="d-flex w-100 justify-content-between">
                                        <h6 class="mb-1">Tree Planting Event</h6>
                                        <small>2 hours ago</small>
                                    </div>
                                    <p class="mb-1">Planted 200 native trees in the city park</p>
                                </div>
                                <div class="list-group-item bg-transparent text-white">
                                    <div class="d-flex w-100 justify-content-between">
                                        <h6 class="mb-1">Eco Workshop</h6>
                                        <small>5 hours ago</small>
                                    </div>
                                    <p class="mb-1">Hosted a seminar on sustainable living practices</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Current Projects -->
                <div class="col-md-6 mb-4">
                    <div class="card shadow" style="background: linear-gradient(135deg, #6366f1 0%, #a855f7 100%);">
                        <div class="card-header bg-transparent border-0 text-white">
                            <h5 class="card-title mb-0">Ongoing Green Projects</h5>
                        </div>
                        <div class="card-body">
                            <div class="list-group list-group-flush">
                                <div class="list-group-item bg-transparent text-white">
                                    <div class="d-flex w-100 justify-content-between">
                                        <h6 class="mb-1">Urban Garden Initiative</h6>
                                        <span class="badge bg-success">Active</span>
                                    </div>
                                    <div class="progress mt-2" style="height: 5px;">
                                        <div class="progress-bar bg-success" role="progressbar" style="width: 60%;" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                                <div class="list-group-item bg-transparent text-white">
                                    <div class="d-flex w-100 justify-content-between">
                                        <h6 class="mb-1">Plastic-Free Campaign</h6>
                                        <span class="badge bg-primary">In Progress</span>
                                    </div>
                                    <div class="progress mt-2" style="height: 5px;">
                                        <div class="progress-bar bg-primary" role="progressbar" style="width: 40%;" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                                <div class="list-group-item bg-transparent text-white">
                                    <div class="d-flex w-100 justify-content-between">
                                        <h6 class="mb-1">Renewable Energy Awareness</h6>
                                        <span class="badge bg-warning">Planning</span>
                                    </div>
                                    <div class="progress mt-2" style="height: 5px;">
                                        <div class="progress-bar bg-warning" role="progressbar" style="width: 20%;" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
</div>

<script>
    // Enable Bootstrap tooltips for sidebar
    var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'));
    var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
        return new bootstrap.Tooltip(tooltipTriggerEl);
    });
    // Add Bootstrap active class on click
    document.querySelectorAll('#sidebar .nav-link').forEach(function(link) {
        link.addEventListener('click', function() {
            document.querySelectorAll('#sidebar .nav-link').forEach(function(l) {
                l.classList.remove('active', 'bg-opacity-25', 'bg-success');
            });
            this.classList.add('active', 'bg-opacity-25', 'bg-success');
        });
    });
</script>
