<?php $__env->startSection('title', 'Profile | PinkBakery'); ?>

<?php $__env->startSection('content'); ?>
<div class="container page-container">
    <div class="page-heading text-center">
        <p class="eyebrow">PERSONAL INFORMATION</p>
        <h1>My Profile ♡</h1>
        <p>Informasi pengelola toko PinkBakery.</p>
    </div>

    <div class="profile-card">
        <div class="profile-avatar">♡</div>
        <h2><?php echo e($username); ?></h2>
        <p class="text-muted">Pengelola PinkBakery</p>

        <div class="profile-detail">
            <span>Username</span>
            <strong><?php echo e($username); ?></strong>
        </div>
        <div class="profile-detail">
            <span>Nama Website</span>
            <strong>PinkBakery</strong>
        </div>
        <div class="profile-detail">
            <span>Status</span>
            <strong class="status-active">Aktif</strong>
        </div>

        <a href="<?php echo e(route('dashboard', ['username' => $username])); ?>" class="btn btn-pink w-100 mt-4">
            Kembali ke Dashboard
        </a>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\uts_kirana\laragon\www\PinkBakery\resources\views/profile.blade.php ENDPATH**/ ?>