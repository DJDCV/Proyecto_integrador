<div id="layoutSidenav_nav">
    <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
        <div class="sb-sidenav-menu">
            <div class="nav">

                <div class="sb-sidenav-menu-heading">Inicio</div>
                <a class="nav-link" href="<?php echo e(route('panel')); ?>">
                    <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                    Panel
                </a>

                <div class="sb-sidenav-menu-heading">Modulos</div>

                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('ver-compra')): ?>
                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseCompras" aria-expanded="false" aria-controls="collapseLayouts">
                    <div class="sb-nav-link-icon"><i class="fa-solid fa-store"></i></div>
                    Compras
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse" id="collapseCompras" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('ver-compra')): ?>
                        <a class="nav-link" href="<?php echo e(route('compras.index')); ?>">Ver</a>
                        <?php endif; ?>
                        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('crear-compra')): ?>
                        <a class="nav-link" href="<?php echo e(route('compras.create')); ?>">Crear</a>
                        <?php endif; ?>
                    </nav>
                </div>
                <?php endif; ?>

                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('ver-venta')): ?>
                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseVentas" aria-expanded="false" aria-controls="collapseLayouts">
                    <div class="sb-nav-link-icon"><i class="fa-solid fa-cart-shopping"></i></div>
                    Ventas
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse" id="collapseVentas" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('ver-venta')): ?>
                        <a class="nav-link" href="<?php echo e(route('ventas.index')); ?>">Ver</a>
                        <?php endif; ?>
                        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('crear-compra')): ?>
                        <a class="nav-link" href="<?php echo e(route('ventas.create')); ?>">Crear</a>
                        <?php endif; ?>
                    </nav>
                </div>
                <?php endif; ?>

                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('ver-categoria')): ?>
                <a class="nav-link" href="<?php echo e(route('categorias.index')); ?>">
                    <div class="sb-nav-link-icon"><i class="fa-solid fa-tag"></i></div>
                    Categorías
                </a>
                <?php endif; ?>

                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('ver-presentacione')): ?>
                <a class="nav-link" href="<?php echo e(route('presentaciones.index')); ?>">
                    <div class="sb-nav-link-icon"><i class="fa-solid fa-box-archive"></i></div>
                    Presentaciones
                </a>
                <?php endif; ?>

                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('ver-marca')): ?>
                <a class="nav-link" href="<?php echo e(route('marcas.index')); ?>">
                    <div class="sb-nav-link-icon"><i class="fa-solid fa-bullhorn"></i></div>
                    Marcas
                </a>
                <?php endif; ?>

                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('ver-producto')): ?>
                <a class="nav-link" href="<?php echo e(route('productos.index')); ?>">
                    <div class="sb-nav-link-icon"><i class="fa-brands fa-shopify"></i></div>
                    Productos
                </a>
                <?php endif; ?>

                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('ver-cliente')): ?>
                <a class="nav-link" href="<?php echo e(route('clientes.index')); ?>">
                    <div class="sb-nav-link-icon"><i class="fa-solid fa-users"></i></div>
                    Clientes
                </a>
                <?php endif; ?>

                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('ver-proveedore')): ?>
                <a class="nav-link" href="<?php echo e(route('proveedores.index')); ?>">
                    <div class="sb-nav-link-icon"><i class="fa-solid fa-user-group"></i></div>
                    Proveedores
                </a>
                <?php endif; ?>

                <?php if(\Spatie\Permission\PermissionServiceProvider::bladeMethodWrapper('hasRole', 'administrador')): ?>
                <div class="sb-sidenav-menu-heading">OTROS</div>
                <?php endif; ?>

                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('ver-user')): ?>
                <a class="nav-link" href="<?php echo e(route('users.index')); ?>">
                    <div class="sb-nav-link-icon"><i class="fa-solid fa-user"></i></div>
                    Usuarios
                </a>
                <?php endif; ?>

                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('ver-role')): ?>
                <a class="nav-link" href="<?php echo e(route('roles.index')); ?>">
                    <div class="sb-nav-link-icon"><i class="fa-solid fa-person-circle-plus"></i></div>
                    Roles
                </a>
                <?php endif; ?>


            </div>
        </div>
        <div class="sb-sidenav-footer">
            <div class="small">Bienvenido  a nuestro sistema de ventas </div>
            <?php echo e(auth()->user()->name); ?>

        </div>
    </nav>
</div><?php /**PATH C:\laragon\www\ProyectoVentas\resources\views/components/navigation-menu.blade.php ENDPATH**/ ?>