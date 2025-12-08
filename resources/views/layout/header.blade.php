<!-- start header -->
<header class="d-flex justify-content-between align-items-center bg-success px-5 py-3">
    <!-- Home -->
    <a href="{{ route('admin.home') }}" class="d-flex align-items-center text-white text-decoration-none">
        <i class="bi bi-house-fill me-2 fs-3"></i>
        <span class="fw-bold fs-3">Home</span>
    </a>

    <!-- Brand -->
    <div class="text-white fw-bold fs-3 d-flex align-items-center">
        <img src="{{ asset('images/gasPutih.png') }}" width="30" height="30" class="me-1">
        <div>G<i class="bi bi-fire fs-4" style="position: relative; top: -3px;"></i>SKU</div>
    </div>

    <!-- User Menu -->
    <div class="d-flex align-items-center gap-2">
        <span class="text-white fw-bold fs-3">username</span>
        <img src="{{ asset('images/tokito.jpg') }}" class="rounded-circle"
            style="width:40px; height:40px; object-fit:cover;">

        <div class="dropdown">
            <a class="nav-link text-white fw-bold dropdown-toggle p-0" href="#" role="button" data-bs-toggle="dropdown"
                aria-expanded="false"></a>
            <ul class="dropdown-menu bg-success border-white p-1" style="width:100%;">
                <li>
                    <a href="#" class="btn btn-success w-100 text-white text-decoration-none py-1">
                        <i class="bi bi-person-circle me-2"></i>Profile
                    </a>
                </li>
                <li>
                    <hr class="dropdown-divider border-white my-1">
                </li>
                </li>
                <li>
                    <a href="{{ route('logout') }}" class="btn btn-success w-100 text-white text-decoration-none py-1">
                        <i class="bi bi-box-arrow-left me-2"></i>Logout
                    </a>
                </li>
                <hr class="dropdown-divider border-white my-1">

                <li>
                    <a href="{{ route('admin.buat_account') }}"
                        class="btn btn-success w-100 text-white text-decoration-none py-1">
                        <i class="bi bi-person-add me-2"></i>Buat Akun
                    </a>
                </li>
                <li>

            </ul>
        </div>
    </div>
</header>
<!-- end header -->