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

<h1>Datatable de productos</h1>
<div class="row justify-content-center">
    <div class="col table-responsive">
        <table id="tablaProductos" class="table table-bordered table-hover">
        </table>
    </div>
</div>
<script src="<?= asset('./build/js/productos/index.js') ?>"></script>