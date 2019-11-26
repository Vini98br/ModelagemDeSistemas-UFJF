<!-- Main Sidebar Container -->
<aside class="main-sidebar elevation-4 sidebar-dark-warning" style="overflow-x: hidden;">
    <!-- Brand Logo -->
    <a href="/" class="brand-link">
        {{-- <img src="{{ asset('img/code.png') }}" class="brand-image img-circle elevation-3" style="opacity: .8"> --}}
        <i class="fas fa-shopping-cart icone-top"></i>
        <span class="brand-text font-weight-light" style="letter-spacing: 2px;font-weight: bold">SIGMA</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <a href="#">
                    <img src="{{ asset('img/user.jpg') }}" class="img-circle elevation-2 perfil-sidebar">
                </a>
            </div>
            <div class="info">
                <a href="#" class="d-block">{{ Auth::user()->username ?? 'Usuário' }}</a>
            </div>
            <div class="info align-self-center">
                <form id="logout-form" method="post" action="{{ route('logout') }}">
                    @csrf
                    <a href="#" onclick="$('#logout-form').submit()" class="d-block"><i class="nav-icon fas fa-power-off"></i></a>
                </form>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column icone_sidebar" role="menu" data-accordion="false">
                <li class="nav-item">
                <a href="{{route('dashboard.index')}}" class="nav-link {{ Route::is('dashboard.index') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <li class="nav-item">
                        <a href="{{ route('clientes.index') }}" class="nav-link {{ Route::is('clientes.index') ? 'active' : '' }}">
                            <i class="nav-icon fas fa-user-tie"></i>
                            <p>Clientes</p>
                        </a>
                    </li>
                <li class="nav-item">
                    <a href="{{route('users.index')}}" class="nav-link {{ Route::is('users.index') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-users"></i>
                        <p>Usuários</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('roles.index') }}" class="nav-link {{ Route::is('roles.index') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-address-card"></i>
                        <p>Cargos</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('compras.index') }}" class="nav-link {{ Route::is('compras.index') ? 'active' : '' }}">
                            <i class="nav-icon fas fa-shopping-cart"></i>
                            <p>Compras</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('categories.index') }}" class="nav-link {{ Route::is('categories.index') ? 'active' : '' }}">
                            <i class="nav-icon fas fa-list-alt"></i>
                            <p>Categorias</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('produtos.index') }}" class="nav-link {{ Route::is('produtos.index') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-boxes"></i>
                        <p>Produtos</p>
                    </a>
                </li>
                <li class="nav-item">
                        <a href="{{ route('vendas.index') }}" class="nav-link {{ Route::is('vendas.index') ? 'active' : '' }}">
                            <i class="nav-icon fas fa-dollar-sign"></i>
                            <p>Vendas</p>
                        </a>
                    </li>
                    <li class="nav-item">
                            <a href="{{ route('fornecedors.index') }}" class="nav-link {{ Route::is('fornecedors.index') ? 'active' : '' }}">
                                <i class="nav-icon fas fa-truck-moving"></i>
                                <p>Fornecedores</p>
                            </a>
                        </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
