{{-- resources/views/components/footer.blade.php --}}
<footer class="footer bg-dark py-5" data-bs-theme="dark">
    <div class="container">
        <div class="row gy-4">
            <div class="col-lg-4 col-md-6">
                <h5 class="text-white mb-3">{{ config('app.name') }}</h5>
                <p class="text-muted mb-4">Providing innovative solutions since 2025.</p>
                <div class="social-links d-flex mb-3">
                    <a href="#" class="me-3 text-white-50 hover-text-white"><i class="bi bi-github fs-5"></i></a>
                    <a href="#" class="me-3 text-white-50 hover-text-white"><i class="bi bi-twitter-x fs-5"></i></a>
                    <a href="#" class="me-3 text-white-50 hover-text-white"><i class="bi bi-linkedin fs-5"></i></a>
                    <a href="#" class="text-white-50 hover-text-white"><i class="bi bi-instagram fs-5"></i></a>
                </div>
            </div>
        </div>

        <hr class="my-4 border-secondary">

        <div class="row align-items-center">
            <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                <div class="text-muted">
                    <span class="font-monospace">Copyright &copy; {{ date('Y') }} 
                        <span class="text-decoration-none text-muted fw-semibold hover-text-white" href="" target="_blank">{{ config('app.name') }}</span>
                    </span>
                </div>
            </div>
            <div class="col-md-6 text-center text-md-end">
                <div class="text-muted">
                    <a href="#" class="text-decoration-none text-muted me-3 hover-text-white">Privacy Policy</a>
                    <a href="#" class="text-decoration-none text-muted hover-text-white">Terms of Service</a>
                </div>
            </div>
        </div>
    </div>
</footer>

<style>
    .hover-text-white:hover {
        color: #fff !important;
        transition: color 0.3s ease;
    }
    
    .footer a:hover {
        transform: translateY(-2px);
        display: inline-block;
        transition: transform 0.3s ease;
    }
    
    .social-links a {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        transition: all 0.3s ease;
    }
    
    .social-links a:hover {
        transform: scale(1.2);
    }
</style>