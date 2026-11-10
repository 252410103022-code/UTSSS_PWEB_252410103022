<?php $__env->startSection('title', 'Pengelolaan Produk | PinkBakery'); ?>

<?php $__env->startSection('content'); ?>
<div class="container page-container">
    <div class="page-heading">
        <p class="eyebrow">PINKBAKERY MANAGEMENT</p>
        <h1>Pengelolaan Produk ♡</h1>
        <p>Daftar produk yang tersedia di toko PinkBakery.</p>
    </div>

    <div class="product-summary">
        <span>🧁 Total produk tersedia</span>
        <strong><?php echo e(count($produk)); ?> Produk</strong>
    </div>

    <div class="row g-4">
        <?php $__currentLoopData = $produk; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col-sm-6 col-lg-4">
                <div class="product-card">
                    <img src="<?php echo e($item['gambar']); ?>" alt="<?php echo e($item['nama']); ?>" class="product-image">
                    <div class="product-info">
                        <span class="product-category"><?php echo e($item['kategori']); ?></span>
                        <h4><?php echo e($item['nama']); ?></h4>
                        <p class="product-price">Rp <?php echo e(number_format($item['harga'], 0, ',', '.')); ?></p>
                        <div class="product-stock">
                            <span>Stok tersedia</span>
                            <strong><?php echo e($item['stok']); ?> pcs</strong>
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\uts_kirana\laragon\www\PinkBakery\resources\views/pengelolaan.blade.php ENDPATH**/ ?>