<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="#">My Website 12</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link active" href="/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/about">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#" data-bs-toggle="modal" data-bs-target="#registerModal">Register</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/show-sample-email">Send Email</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/view_student">View Student</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<!-- Register Modal Triggered by Navbar -->
<div class="modal fade" id="registerModal" tabindex="-1" aria-labelledby="registerModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header bg-primary text-white">
        <h5 class="modal-title" id="registerModalLabel">User Registration</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form id="registrationFormModal">
            @csrf
                <div id="messageModal"></div>
            <div class="mb-3">
                <label for="first_name_modal" class="form-label">First Name</label>
                <input type="text" name="first_name" id="first_name_modal" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="last_name_modal" class="form-label">Last Name</label>
                <input type="text" name="last_name" id="last_name_modal" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="email_modal" class="form-label">Email</label>
                <input type="email" name="email" id="email_modal" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="birthdate_modal" class="form-label">Birthday</label>
                <input type="date" name="birthdate" id="birthdate_modal" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-primary w-100">Register</button>
        </form>
      </div>
    </div>
  </div>
</div>

