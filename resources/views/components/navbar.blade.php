<nav class="navbar navbar-expand-lg">
    <div class="container-fluid">
        <button type="button" id="sidebarCollapse" class="hb btn btn-outline-primary">
            <i class="fas fa-bars" id="iconHb"></i>
        </button>
        <!-- Drop -->
        <div class="ml-auto">
            <div>
                <div class="btn-group dropstart">
                    <button type="button" class="btn btn-dark dropdown-toggle btn-sm" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        <i class="fa-solid fa-id-card"></i> Perfil
                    </button>
                    <ul class="dropdown-menu">
                        <li>
                            <form action="{{ url('user/logout') }}" method="POST">
                                @csrf
                                <button class="dropdown-item btn  border-0">
                                    <i class="fas fa-sign-out-alt"></i> Cerrar sesion
                                </button>
                            </form>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</nav>
