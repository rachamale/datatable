<nav class="navbar navbar-dark bg-dark fixed-top navbar-expand-lg">
    <a class="navbar-brand" href="#">MENU</a>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
        <li class="nav-item">
                <a class="btn btn-outline-primary" href="/datatable/menu">INICIO</a>
            </li>
            <li class="nav-item">
                <a class="btn btn-outline-primary" href="/datatable/clientes/index">CLIENTES</a>
            </li>
            <li class="nav-item">
                <a class="btn btn-outline-primary" href="/datatable/clientes/estadistica2">ESTADISTICA CLIENTES</a>
            </li>
            <li class="nav-item">
                <a class="btn btn-outline-primary" href="/datatable/productos/datatable">PRODUCTOS</a>
            </li>
            <li class="nav-item">
                <a class="btn btn-outline-primary" href="/datatable/productos/estadistica">ESTADISTICA PRODUCTOS</a>
            </li>
        </ul>
    </div>
    <a href="/datatable/logout" class="btn btn-danger">CERRAR SESIÓN</a>
</nav>

<h1>ESTADISTICAS DE VENTAS</h1>
<button id="btnActualizar" class="btn btn-info">Actualizar</button>
<div class="row">
    <div class="col-lg-6">
        <canvas id="chartVentas" width="100%"></canvas>
    </div>
</div>
<script src="<?=asset('./build/js/productos/estadistica.js') ?>"></script>