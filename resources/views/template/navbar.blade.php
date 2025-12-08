<ul class="nav bg-utama p-3 justify-content-evenly sticky-top px-sm-0 px-lg-5 px-md-2">
    <li class="nav-item tengah d-flex flex-column align-items-start position-relative">
        <a class="nav-link text-white fw-bold brand m-0 p-0" href="#">
            <img src="{{ asset('resources/images/gasPutih.png') }}" width="50" height="50" class="mb-1 img-brand"
                style="margin-right:-10px; transform: translateY(-3px);">
            G<i class="bi bi-fire"></i>SKU
        </a>
        <!-- Tambahkan teks admin dengan posisi lebih ke kanan -->
        <span class="text-white fw-semibold mt-1 posisi-admin">Admin</span>
    </li>

    <!-- Tambahan Dropdown -->
    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle text-white fw-bold" href="#" role="button" data-bs-toggle="dropdown"
            aria-expanded="false">
            MENU
        </a>
        <ul class="dropdown-menu">
            <li><button type="submit" class="dropdown-item text-success">
                    <i class="bi bi-file-person me-2"></i><a href="#" class="text-decoration-none text-success">Buat
                        Akun</a>
                </button>
            </li>
            <li><button type="submit" class="dropdown-item text-danger">
                    <i class="bi bi-box-arrow-left me-2"></i><a href="../user/logout.php"
                        class="text-decoration-none logout text-danger">Logout</a>
                </button>
            </li>
        </ul>
    </li>
</ul>
