<nav id="sidebar">
    <div class="sidebar-header d-flex justify-content-center">
        <h3 class="mt-2 d-flex align-items-center justify-content-center"><b>CanMint</b></h3>
    </div>
    <div id="menuLateral">
        <ul class='list-unstyled components'>
            <li class='py-1'>
                <a href='{{ route('admin.home') }}'
                    class='btn btn-outline-light rounded-0 text-start border-0 {{ Request::is('admin/dashboard') ? 'active' : '' }}'>
                    <i class="fa-solid fa-chart-line"></i> Inicio
                </a>
            </li>
            <li class='py-1'>
                <a href='{{ route('admin.home') }}'
                    class='btn btn-outline-light rounded-0 text-start border-0 {{ Request::is('admin/drafts') || Request::is('admin/drafts/*') ? 'active' : '' }}'>
                    <i class='fa-solid fa-book'></i> Minutas
                </a>
            </li>
            <li class='py-1'>
                <a href='{{ route('admin.home') }}'
                    class='btn btn-outline-light rounded-0 text-start border-0 {{ Request::is('admin/keys') || Request::is('admin/keys/*') ? 'active' : '' }}'>
                    <i class="fa-solid fa-key"></i> LLaves
                </a>
            </li>
        </ul>
    </div>
</nav>
