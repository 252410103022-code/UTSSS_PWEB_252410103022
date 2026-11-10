<?php $__env->startSection('title', 'Dashboard | PinkBakery'); ?>

<?php $__env->startSection('content'); ?>
<div class="container page-container">
    <section class="welcome-banner">
        <div>
            <p class="eyebrow">PINKBAKERY MANAGEMENT</p>
            <h1>Halo, <?php echo e($username); ?>! ♡</h1>
            <p>Selamat datang kembali. Yuk, cek perkembangan toko bakery hari ini.</p>
            <a href="<?php echo e(route('pengelolaan', ['username' => $username])); ?>" class="btn btn-pink mt-2">Lihat Produk →</a>
        </div>
        <div class="welcome-decoration">🧁</div>
    </section>

    <div class="section-heading">
        <div>
            <p class="eyebrow">OVERVIEW</p>
            <h2>Ringkasan Toko</h2>
        </div>
        <span class="date-label"><?php echo e(date('d M Y')); ?></span>
    </div>

    <div class="row g-4">
        <div class="col-md-4">
            <div class="stat-card">
                <div class="stat-icon">🧁</div>
                <p>Total Produk</p>
                <h3><?php echo e($totalProduk); ?></h3>
                <small>Produk tersedia di toko</small>
            </div>
        </div>

        <div class="col-md-4">
            <div class="stat-card">
                <div class="stat-icon">♡</div>
                <p>Nama Pengelola</p>
                <h3 class="stat-name"><?php echo e($username); ?></h3>
                <small>Pengelola PinkBakery</small>
            </div>
        </div>

        <div class="col-md-4">
            <div class="stat-card">
                <div class="stat-icon">✨</div>
                <p>Status Toko</p>
                <h3 class="stat-name">Aktif</h3>
                <small>Siap melayani pelanggan</small>
            </div>
        </div>
    </div>

    <section class="dashboard-bottom">
        <div>
            <p class="eyebrow">OUR LITTLE BAKERY</p>
            <h2>Made with love, baked with happiness.</h2>
            <p>Kelola produk bakery dengan lebih mudah melalui PinkBakery.</p>
        </div>
        <div class="cake-decoration">🍰</div>
    </section>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\uts_kirana\laragon\www\PinkBakery\resources\views/dashboard.blade.php ENDPATH**/ ?>