<nav class="navbar navbar-dark bg-dark fixed-top navbar-expand-lg">
    <a class="navbar-brand" href="#">MENU</a>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="btn btn-outline-primary" href="/datatable/clientes/index">CLIENTES</a>
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


<h1 class="text-center">FORMULARIO DE CLIENTES</h1>
<div class="row justify-content-center mb-5">
    <form class="col-lg-8 border bg-light p-3" id="formularioClientes">
        <input type="hidden" name="cliente_id" id="cliente_id">
        <div class="row mb-3">
            <div class="col">
                <label for="cliente_nombre">INGRESE EL NOMBRE DEL CLIENTE</label>
                <input type="text" name="cliente_nombre" id="cliente_nombre" class="form-control">
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <label for="cliente_nit">INGRESE EL NIT DEL CLIENTE</label>
                <input type="text" name="cliente_nit" id="cliente_nit" class="form-control">
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <button type="submit" form="formularioClientes" id="btnGuardar" data-saludo="hola" data-saludo2="hola2"
                    class="btn btn-primary w-100">GUARDAR</button>
            </div>
            <div class="col">
                <button type="button" id="btnModificar" class="btn btn-warning w-100">MODIFICAR</button>
            </div>
            <div class="col">
                <button type="button" id="btnBuscar" class="btn btn-info w-100">BUSCAR</button>
            </div>
            <div class="col">
                <button type="button" id="btnCancelar" class="btn btn-danger w-100">CANCELAR</button>
            </div>
        </div>
    </form>
</div>
<div class="row justify-content-center">
    <div class="col table-responsive">

        <table id="tablaClientes" class="table table-bordered table-hover">
        </table>
    </div>
</div>

<script src="<?= asset('./build/js/clientes/index.js') ?>"></script>