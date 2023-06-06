<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo e($pageTitle); ?></title>
    <?php echo app('Illuminate\Foundation\Vite')('resources/sass/app.scss'); ?>
</head>

<body>
    <!--Navbar-->
    <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #146C94">
        <div class="container">
            <a href="<?php echo e(route('home')); ?>" class="fw-bold  navbar-brand mb-0 h1"><img
                    src="<?php echo e(Vite::asset('images/main.png')); ?>" alt="image" width=10%> KY.DATAMASTER</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-md-auto">
                    <li class="nav-item fw-semibold">
                        <a class="nav-link " aria-current="page" href="<?php echo e(route('home')); ?>">Home</a>
                    </li>
                    <li class="nav-item fw-semibold">
                        <a class="nav-link active " href="<?php echo e(route('stores.index')); ?>">List Barang</a>
                    </li>
                </ul>
                <a href="<?php echo e(route('profile')); ?>" class="btn btn-outline-light ms-md-auto fw-semibold"><i
                        class="bi-person-circle me-1 fw-semibold"></i> My Profile</a>
            </div>
        </div>
    </nav>
    <!--akhir navbar-->

    <div class="container mt-4">
        <div class="row mb-0">
            <div class="col-lg-9 col-xl-10">
                <h4 class="mb-3"><?php echo e($pageTitle); ?></h4>
            </div>
            <div class="col-lg-3 col-xl-2">
                <div class="d-grid gap-2">
                    <a href="<?php echo e(route('stores.create')); ?>" class="btn btn-primary">Create Employee</a>
                </div>
            </div>
        </div>
        <hr>
        <div class="table-responsive border p-3 rounded-3">
            <table class="table table-bordered table-hover table-striped mb-0 bg-white">
                <thead>
                    <tr>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Email</th>
                        <th>Age</th>
                        <th>Position</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <?php $__currentLoopData = $stores; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $store): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><?php echo e($store->gambar); ?></td>
                            <td><?php echo e($store->namaBarang); ?></td>
                            <td><?php echo e($store->stock); ?></td>
                            <td><?php echo e($store->harga); ?></td>
                            <td><?php echo e($store->jenis); ?></td>
                            <td>
                                <div class="d-flex">
                                    <a href="<?php echo e(route('stores.show', ['store' => $store->store_id])); ?>"
                                        class="btn btn-outline-dark btn-sm me-2"><i
                                            class="bi-person-lines-fill"></i></a>
                                    <a href="<?php echo e(route('stores.edit', ['store' => $store->store_id])); ?>"
                                        class="btn btn-outline-dark btn-sm me-2"><i class="bi-pencil-square"></i></a>

                                    <div>
                                        <form action="<?php echo e(route('stores.destroy', ['store' => $store->store_id])); ?>"
                                            method="POST">
                                            <?php echo csrf_field(); ?>
                                            <?php echo method_field('delete'); ?>
                                            <button type="submit" class="btn btn-outline-dark btn-sm me-2"><i
                                                    class="bi-trash"></i></button>
                                        </form>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>

        </div>
    </div>

    <?php echo app('Illuminate\Foundation\Vite')('resources/js/app.js'); ?>
</body>

</html>
<?php /**PATH C:\Users\Dell\Documents\TUGAS KULIAH\SMT 4\Pemrograman Framework\MiniProject\ProjectUTS\resources\views/store/index.blade.php ENDPATH**/ ?>