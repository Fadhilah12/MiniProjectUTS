<?php $__env->startSection('content'); ?>
    <div class="container-sm my-5 show">
        <div class="row justify-content-center">
            <div class="p-5 bg-light rounded-3 col-xl-4 border grad">
                <div class="mb-3 text-center">
                    <img src="<?php echo e(Vite::asset('images/main.png')); ?>" alt="image" width=20%>
                    <h4>Detail Barang</h4>
                </div>
                <hr>
                <div class="row fw-bold">
                    <div class="col-md-12 mb-3">
                        <label for="firstName" class="form-label">Kode Barang</label>
                        <h5><?php echo e($barang->kode_barang); ?></h5>
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="lastName" class="form-label">Nama Barang</label>
                        <h5><?php echo e($barang->nama_barang); ?></h5>
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="email" class="form-label">Harga Barang</label>
                        <h5><?php echo e($barang->harga_barang); ?></h5>
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="age" class="form-label">Deskripsi Barang</label>
                        <h5><?php echo e($barang->deskripsi_barang); ?></h5>
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="age" class="form-label">Satuan Barang</label>
                        <h5><?php echo e($barang->satuan->nama_satuan); ?></h5>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-md-12 d-grid">
                        <a href="<?php echo e(route('barangs.index')); ?>" class="btn btn-outline-light btn-lg mt-3">
                            <i class="bi-arrow-left-circle me-2"></i> Back</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Dell\Documents\TUGAS KULIAH\SMT 4\Pemrograman Framework\MiniProject\ProjectUTS\resources\views/barangs/show.blade.php ENDPATH**/ ?>