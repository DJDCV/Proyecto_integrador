

<?php $__env->startSection('title','Panel'); ?>

<?php $__env->startPush('css'); ?>
<link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<?php $__env->stopPush(); ?>

<?php $__env->startSection('content'); ?>

<?php if(session('success')): ?>
<script>
    document.addEventListener("DOMContentLoaded", function() {

        let message = "<?php echo e(session('success')); ?>";
        Swal.fire(message);

    });
</script>
<?php endif; ?>

<div class="container-fluid px-4">
    <h1 class="mt-4">Panel</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Panel</li>
    </ol>
    <div class="row">
        <!----Clientes--->
        <div class="col-xl-3 col-md-6">
            <div class="card bg-primary text-white mb-4">
                <div class="card-body">
                    <div class="row">
                        <div class="col-8">
                            <i class="fa-solid fa-people-group"></i><span class="m-1">Clientes</span>
                        </div>
                        <div class="col-4">
                            <?php

                            use App\Models\Cliente;

                            $clientes = count(Cliente::all());
                            ?>
                            <p class="text-center fw-bold fs-4"><?php echo e($clientes); ?></p>
                        </div>
                    </div>
                </div>
                <div class="card-footer d-flex align-items-center justify-content-between">
                    <a class="small text-white stretched-link" href="<?php echo e(route('clientes.index')); ?>">Ver más</a>
                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                </div>
            </div>
        </div>

        <!----Categoria--->
        <div class="col-xl-3 col-md-6">
            <div class="card bg-warning text-white mb-4">
                <div class="card-body">
                    <div class="row">
                        <div class="col-8">
                            <i class="fa-solid fa-tag"></i><span class="m-1">Categorías</span>
                        </div>
                        <div class="col-4">
                            <?php

                            use App\Models\Categoria;

                            $categorias = count(Categoria::all());
                            ?>
                            <p class="text-center fw-bold fs-4"><?php echo e($categorias); ?></p>
                        </div>
                    </div>
                </div>
                <div class="card-footer d-flex align-items-center justify-content-between">
                    <a class="small text-white stretched-link" href="<?php echo e(route('categorias.index')); ?>">Ver más</a>
                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                </div>
            </div>
        </div>

        <!----Compra--->
        <div class="col-xl-3 col-md-6">
            <div class="card bg-success text-white mb-4">
                <div class="card-body">
                    <div class="row">
                        <div class="col-8">
                            <i class="fa-solid fa-store"></i><span class="m-1">Compras</span>
                        </div>
                        <div class="col-4">
                            <?php

                            use App\Models\Compra;

                            $compras = count(Compra::all());
                            ?>
                            <p class="text-center fw-bold fs-4"><?php echo e($compras); ?></p>
                        </div>
                    </div>
                </div>
                <div class="card-footer d-flex align-items-center justify-content-between">
                    <a class="small text-white stretched-link" href="<?php echo e(route('compras.index')); ?>">Ver más</a>
                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                </div>
            </div>
        </div>

        <!----Marcas--->
        <div class="col-xl-3 col-md-6">
            <div class="card bg-danger text-white mb-4">
                <div class="card-body">
                    <div class="row">
                        <div class="col-8">
                            <i class="fa-solid fa-bullhorn"></i><span class="m-1">Marcas</span>
                        </div>
                        <div class="col-4">
                            <?php

                            use App\Models\Marca;

                            $marcas = count(Marca::all());
                            ?>
                            <p class="text-center fw-bold fs-4"><?php echo e($marcas); ?></p>
                        </div>
                    </div>
                </div>
                <div class="card-footer d-flex align-items-center justify-content-between">
                    <a class="small text-white stretched-link" href="<?php echo e(route('marcas.index')); ?>">Ver más</a>
                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                </div>
            </div>
        </div>

        <!----Presentaciones--->
        <div class="col-xl-3 col-md-6">
            <div class="card bg-danger text-white mb-4">
                <div class="card-body">
                    <div class="row">
                        <div class="col-8">
                            <i class="fa-solid fa-box-archive"></i><span class="m-1">Presentaciones</span>
                        </div>
                        <div class="col-4">
                            <?php

                            use App\Models\Presentacione;

                            $presentaciones = count(Presentacione::all());
                            ?>
                            <p class="text-center fw-bold fs-4"><?php echo e($presentaciones); ?></p>
                        </div>
                    </div>
                </div>
                <div class="card-footer d-flex align-items-center justify-content-between">
                    <a class="small text-white stretched-link" href="<?php echo e(route('presentaciones.index')); ?>">Ver más</a>
                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                </div>
            </div>
        </div>

        <!----Producto--->
        <div class="col-xl-3 col-md-6">
            <div class="card bg-success text-white mb-4">
                <div class="card-body">
                    <div class="row">
                        <div class="col-8">
                            <i class="fa-brands fa-shopify"></i><span class="m-1">Productos</span>
                        </div>
                        <div class="col-4">
                            <?php

                            use App\Models\Producto;

                            $productos = count(Producto::all());
                            ?>
                            <p class="text-center fw-bold fs-4"><?php echo e($productos); ?></p>
                        </div>
                    </div>
                </div>
                <div class="card-footer d-flex align-items-center justify-content-between">
                    <a class="small text-white stretched-link" href="<?php echo e(route('productos.index')); ?>">Ver más</a>
                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                </div>
            </div>
        </div>

        <!----Proveedore--->
        <div class="col-xl-3 col-md-6">
            <div class="card bg-warning text-white mb-4">
                <div class="card-body">
                    <div class="row">
                        <div class="col-8">
                            <i class="fa-solid fa-user-group"></i><span class="m-1">Proveedores</span>
                        </div>
                        <div class="col-4">
                            <?php

                            use App\Models\Proveedore;

                            $proveedores = count(Proveedore::all());
                            ?>
                            <p class="text-center fw-bold fs-4"><?php echo e($proveedores); ?></p>
                        </div>
                    </div>
                </div>
                <div class="card-footer d-flex align-items-center justify-content-between">
                    <a class="small text-white stretched-link" href="<?php echo e(route('proveedores.index')); ?>">Ver más</a>
                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                </div>
            </div>
        </div>

        <!----Users--->
        <div class="col-xl-3 col-md-6">
            <div class="card bg-primary text-white mb-4">
                <div class="card-body">
                    <div class="row">
                        <div class="col-8">
                            <i class="fa-solid fa-user"></i><span class="m-1">Usuarios</span>
                        </div>
                        <div class="col-4">
                            <?php

                            use App\Models\User;

                            $users = count(User::all());
                            ?>
                            <p class="text-center fw-bold fs-4"><?php echo e($users); ?></p>
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </div>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('js'); ?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
<script src="<?php echo e(asset('js/datatables-simple-demo.js')); ?>"></script>
<?php $__env->stopPush(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\ProyectoVentas\resources\views/panel/index.blade.php ENDPATH**/ ?>