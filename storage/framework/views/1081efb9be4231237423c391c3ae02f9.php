<?php
    $currentRouteName = Route::currentRouteName();
?>

<!--Navbar-->
<nav class="navbar navbar-expand-lg navbar-dark fixed-top ps-5" style="background-color: #146C94">
    <div class="container">
        <a href="<?php echo e(route('home')); ?>" class="fw-bold  navbar-brand mb-0 h1"><img src="<?php echo e(Vite::asset('images/main.png')); ?>"
                alt="image" width=10%> KY.DATAMASTER</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-md-auto">
                <li class="nav-item fw-semibold">
                    <a class="nav-link <?php if($currentRouteName == 'home'): ?> active <?php endif; ?>" aria-current="page"
                        href="<?php echo e(route('home')); ?>">Home</a>
                </li>
                <li class="nav-item fw-semibold">
                    <a class="nav-link <?php if($currentRouteName == 'barangs.index'): ?> active <?php endif; ?>""
                        href="<?php echo e(route('barangs.index')); ?>">List Barang</a>
                </li>
            </ul>
            <a href="<?php echo e(route('profile')); ?>" class="btn btn-outline-light ms-md-auto fw-semibold"><i
                    class="bi-person-circle me-1 fw-semibold"></i> My Profile</a>
        </div>
    </div>
</nav>
<!--akhir navbar-->
<?php /**PATH C:\Users\Dell\Documents\TUGAS KULIAH\SMT 4\Pemrograman Framework\MiniProject\masterBarangUts\resources\views/layout/nav.blade.php ENDPATH**/ ?>