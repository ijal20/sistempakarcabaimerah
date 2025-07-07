<nav class="navbar fixed-top navbar-expand-lg navbar-dark" data-aos="fade-down">
    <div class="container">
        <a class="navbar-brand d-flex align-items-center" href="#">
            <div class="logo-container me-2 d-flex justify-content-center align-items-center">
                <i class="fa-solid fa-seedling fa-lg"></i>
            </div>
            <span class="logo-text fw-bold">{{ config('app.name') }}</span>
        </a>
        
        <button class="navbar-toggler border-0 shadow-none" type="button" data-bs-toggle="collapse" 
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" 
                aria-expanded="false" aria-label="Toggle navigation">
            <i class="fa-solid fa-bars"></i>
        </button>
        
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link beranda px-3" href="#beranda">
                        <i class="fa-solid fa-home me-2"></i>Beranda
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link diagnosis px-3" href="#diagnosis">
                        <i class="fa-solid fa-stethoscope me-2"></i>Diagnosa
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link penyakit px-3" href="#penyakit">
                        <i class="fa-solid fa-virus me-2"></i>Informasi Penyakit
                    </a>
                </li>
            </ul>
       
            @if (Auth::check() && Gate::check('asUser'))
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle d-flex align-items-center user-dropdown-toggle" href="#" 
                           id="userDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <div class="user-avatar me-2">
                                <i class="fa-solid fa-user-circle fa-lg"></i>
                            </div>
                            <span>{{ Auth::user()->name }}</span>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end border-0 shadow-lg" aria-labelledby="userDropdown">
                            <li>
                                <a href="{{ route('edit-profile') }}" class="dropdown-item py-2" id="btnNavLinkProfile">
                                    <i class="fa-solid fa-user-edit me-2 text-primary"></i>
                                    Profil Saya
                                </a>
                            </li>
                            <li><hr class="dropdown-divider"></li>
                            <li>
                                <a href="#" id="btnLogout" class="dropdown-item py-2 text-danger">
                                    <i class="fa-solid fa-sign-out-alt me-2"></i>
                                    Keluar
                                </a>
                                <form action="{{ route('logout') }}" method="POST" id="formLogout" hidden style="display: none">
                                    @csrf
                                </form>
                            </li>
                        </ul>
                    </li>
                </ul>
            @else
                <div class="d-flex">
                    <a href="{{ route('login') }}" class="btn btn-light btn-sm rounded-pill px-4 d-flex align-items-center">
                        <i class="fa-solid fa-right-to-bracket me-2"></i>
                        <span>Masuk</span>
                    </a>
                    <a href="{{ route('register') }}" class="btn btn-outline-light btn-sm rounded-pill px-4 ms-2 d-flex align-items-center">
                        <i class="fa-solid fa-user-plus me-2"></i>
                        <span>Daftar</span>
                    </a>
                </div>
            @endif
        </div>
    </div>
</nav>

<style>
/* Navbar Styling */
.navbar {
    background: linear-gradient(90deg,rgb(14, 83, 221),rgb(211, 165, 151));
    padding: 15px 0;
    transition: all 0.3s ease;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
}

.navbar.scrolled {
    padding: 10px 0;
    background: linear-gradient(90deg, #1a237e, #1976d2) !important;
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
}

/* Logo */
.logo-container {
    background-color: #ffffff;
    width: 34px;
    height: 34px;
    border-radius: 8px;
    color: #1a237e;
    transition: all 0.3s ease;
}

.navbar-brand:hover .logo-container {
    transform: rotate(15deg);
}

.logo-text {
    letter-spacing: 0.5px;
}

/* Nav Links  */
.navbar-nav .nav-link {
    position: relative;
    font-weight: 500;
    padding: 0.5rem 1rem;
    transition: all 0.3s ease;
    color: rgb(250, 250, 250) !important;
}

.navbar-nav .nav-link:before {
    content: "";
    position: absolute;
    width: 0;
    height: 2px;
    bottom: 0;
    left: 50%;
    background-color:rgb(250, 243, 243);
    visibility: hidden;
    transform: translateX(-50%);
    transition: all 0.3s ease;
}

.navbar-nav .nav-link:hover:before, 
.navbar-nav .nav-link.active:before {
    width: 70%;
    visibility: visible;
}

.navbar-nav .nav-link:hover,
.navbar-nav .nav-link.active {
    color: #ffffff !important;
}

/* User Dropdown */
.user-dropdown-toggle {
    background-color: rgba(255, 255, 255, 0.1);
    border-radius: 30px;
    padding: 8px 16px !important;
    transition: all 0.3s ease;
}

.user-dropdown-toggle:hover {
    background-color: rgba(255, 255, 255, 0.2);
}

.dropdown-menu {
    border-radius: 12px;
    margin-top: 10px;
    overflow: hidden;
}

.dropdown-item {
    padding: 10px 20px;
    transition: all 0.2s ease;
}

.dropdown-item:hover {
    background-color: rgba(25, 118, 210, 0.1);
}

.dropdown-item:active {
    background-color: rgba(25, 118, 210, 0.2);
}

/* Mobile Toggle */
.navbar-toggler {
    padding: 8px 12px;
    background-color: rgba(255, 255, 255, 0.1);
    border-radius: 8px;
    color: white;
}

.navbar-toggler:focus {
    box-shadow: 0 0 0 3px rgba(255, 255, 255, 0.3);
}

@media (max-width: 991.98px) {
    .navbar-nav .nav-link:before {
        display: none;
    }
    
    .navbar-nav .nav-link {
        padding: 12px 20px;
        margin: 2px 0;
        border-radius: 8px;
    }
    
    .navbar-nav .nav-link:hover,
    .navbar-nav .nav-link.active {
        background-color: rgba(255, 255, 255, 0.1);
    }
    
    .user-dropdown-toggle {
        background-color: transparent;
    }
}
</style>

@push('scriptPerPage')
    <script type="text/javascript">
        document.addEventListener('DOMContentLoaded', function() {
            // Add active class based on current section
            const sections = document.querySelectorAll('.section');
            const navLinks = document.querySelectorAll('.navbar-nav .nav-link');
            
            function setActiveNavLink() {
                let current = '';
                
                sections.forEach((section) => {
                    const sectionTop = section.offsetTop - 100;
                    const sectionHeight = section.offsetHeight;
                    
                    if (window.scrollY >= sectionTop && window.scrollY < sectionTop + sectionHeight) {
                        current = section.getAttribute('id');
                    }
                });
                
                navLinks.forEach((link) => {
                    link.classList.remove('active');
                    if (link.classList.contains(current)) {
                        link.classList.add('active');
                    }
                });
            }
            
            // Initial check
            setActiveNavLink();
            
            // On scroll check
            window.addEventListener('scroll', setActiveNavLink);
            
            // Toggle navbar background on scroll
            window.addEventListener('scroll', function() {
                const navbar = document.querySelector('.navbar');
                if (window.scrollY > 50) {
                    navbar.classList.add('scrolled');
                } else {
                    navbar.classList.remove('scrolled');
                }
            });
            
            // Logout button functionality
            const buttonLogout = document.getElementById('btnLogout');
            if (buttonLogout) {
                buttonLogout.addEventListener('click', function(e) {
                    e.preventDefault();
                    document.getElementById('formLogout').submit();
                });
            }
        });
    </script>
@endpush