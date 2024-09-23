@canany(['ver','eliminar','crear','editar'])
<li class="nav-item">
    <a href="{{ route('categorias.index') }}"
       class="nav-link {{ Request::is('categorias*') ? 'active' : '' }}">
        <p>Categorias</p></a>
</li>
@endcan

@canany(['ver','eliminar','crear','editar'])
<li class="nav-item">
    <a href="{{ route('bloques.index') }}"
       class="nav-link {{ Request::is('bloques*') ? 'active' : '' }}">
        <p>Bloques</p></a>
</li>
@endcan

@canany(['ver','eliminar','crear','editar'])
<li class="nav-item">
    <a href="{{ route('movimientos.index') }}"
       class="nav-link {{ Request::is('movimientos*') ? 'active' : '' }}">
        <p>Movimientos</p></a>
</li>
@endcan

@canany(['ver','eliminar','crear','editar'])
<li class="nav-item">
    <a href="{{ route('tarifas.index') }}"
       class="nav-link {{ Request::is('tarifas*') ? 'active' : '' }}">
        <p>Tarifas</p></a>
</li>
@endcan

@canany(['ver','eliminar','crear','editar'])
<li class="nav-item">
    <a href="{{ route('estacionamientos.index') }}"
       class="nav-link {{ Request::is('estacionamientos*') ? 'active' : '' }}">
        <p>Estacionamientos</p></a>
</li>
@endcan

<li class="nav-item">
    <a href="{{ route('users.index') }}"
       class="nav-link {{ Request::is('users*') ? 'active' : '' }}">
        <p>Users</p>
    </a>
</li>


<li class="nav-item">
    <a href="{{ route('roles.index') }}"
       class="nav-link {{ Request::is('roles*') ? 'active' : '' }}">
        <p>Roles</p>
    </a>
</li>


