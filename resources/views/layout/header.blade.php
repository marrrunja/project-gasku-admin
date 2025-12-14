<!-- start header -->
<header class="d-flex justify-content-between align-items-center bg-success px-2 px-md-2 px-xl-4 py-3 flex-wrap">
    <!-- Home -->
    <a href="{{ route('admin.home') }}" class="d-flex align-items-center text-white text-decoration-none me-3 mb-2 mb-md-0">
        <i class="bi bi-house-fill me-0 me-md-1 fs-4"></i>
        <span class="fw-bold fs-5 d-none d-md-block">Home</span>
    </a> 

    <!-- Brand -->
    <div class="text-white fw-bold d-flex align-items-center me-3 mb-2 mb-md-0">
        <img src="{{ asset('images/gasPutih.png') }}" width="35" height="35" class="me-1">
        <div class="fs-4">G<i class="bi bi-fire fs-4" style="position: relative; top: -2px;"></i>SKU</div>
    </div>

    <!-- User Menu -->
    <div class="d-flex align-items-center gap-2 mb-2 mb-md-0">
        <span class="text-white fw-bold fs-6 d-none d-md-block">username</span>
        <img src="{{ asset('images/tokito.jpg') }}" class="rounded-circle"
            style="width:40x; height:40px; object-fit:cover;">

        <div class="dropdown">
            <a class="nav-link text-white fw-bold dropdown-toggle p-0 fs-6" href="#" role="button" data-bs-toggle="dropdown"
                aria-expanded="false"></a>
            <ul class="dropdown-menu bg-success border-white p-1" style="min-width:150px;">
                <li>
                    <a href="#" class="btn btn-success w-100 text-white text-decoration-none py-1">
                        <i class="bi bi-person-circle me-1"></i>Profile
                    </a>
                </li>
                <li>
                    <hr class="dropdown-divider border-white my-1">
                </li>
                <li>
                    <a href="{{ route('logout') }}" class="btn btn-success w-100 text-white text-decoration-none py-1">
                        <i class="bi bi-box-arrow-left me-1"></i>Logout
                    </a>
                </li>
                <li>
                    <hr class="dropdown-divider border-white my-1">
                </li>
                <li>
                    <a href="{{ route('admin.buat_account') }}"
                        class="btn btn-success w-100 text-white text-decoration-none py-1">
                        <i class="bi bi-person-add me-1"></i>Buat Akun
                    </a>
                </li>
            </ul>
        </div>
    </div>
</header>
<!-- end header -->
