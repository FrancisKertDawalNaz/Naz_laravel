<nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #0E2148;">
    <div class="container">
        {{-- Google Logo as Main Logo --}}
        <a class="navbar-brand" href="{{ url('/') }}">
            <img src="https://www.google.com/images/branding/googlelogo/2x/googlelogo_color_92x30dp.png" alt="Google Logo" height="40">
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link rounded px-3 py-2" href="{{ url('#') }}" 
                       onmouseover="this.style.background='linear-gradient(135deg, #6366f1 0%, #a855f7 100%)'; this.style.color='white';"
                       onmouseout="this.style.background=''; this.style.color='';">
                        Home
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link rounded px-3 py-2" href="{{ url('#') }}" 
                       onmouseover="this.style.background='linear-gradient(135deg, #6366f1 0%, #a855f7 100%)'; this.style.color='white';"
                       onmouseout="this.style.background=''; this.style.color='';">
                        About
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link rounded px-3 py-2" href="{{ url('#') }}" 
                       onmouseover="this.style.background='linear-gradient(135deg, #6366f1 0%, #a855f7 100%)'; this.style.color='white';"
                       onmouseout="this.style.background=''; this.style.color='';">
                        Skills
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link rounded px-3 py-2" href="{{ url('#') }}" 
                       onmouseover="this.style.background='linear-gradient(135deg, #6366f1 0%, #a855f7 100%)'; this.style.color='white';"
                       onmouseout="this.style.background=''; this.style.color='';">
                        Contact
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>
