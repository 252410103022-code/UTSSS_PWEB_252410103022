<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames((['username' => 'Pengunjung']));

foreach ($attributes->all() as $__key => $__value) {
    if (in_array($__key, $__propNames)) {
        $$__key = $$__key ?? $__value;
    } else {
        $__newAttributes[$__key] = $__value;
    }
}

$attributes = new \Illuminate\View\ComponentAttributeBag($__newAttributes);

unset($__propNames);
unset($__newAttributes);

foreach (array_filter((['username' => 'Pengunjung']), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
}

$__defined_vars = get_defined_vars();

foreach ($attributes->all() as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
}

unset($__defined_vars, $__key, $__value); ?>

<nav class="navbar navbar-expand-lg navbar-pink">
    <div class="container">
        <a class="navbar-brand" href="<?php echo e(route('dashboard', ['username' => $username])); ?>">
            <span>♡</span> PinkBakery
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#menuNavbar" aria-controls="menuNavbar" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="menuNavbar">
            <ul class="navbar-nav ms-auto align-items-lg-center">
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo e(route('dashboard', ['username' => $username])); ?>">Dashboard</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo e(route('pengelolaan', ['username' => $username])); ?>">Pengelolaan</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo e(route('profile', ['username' => $username])); ?>">Profile</a>
                </li>
                <li class="nav-item ms-lg-3">
                    <form action="<?php echo e(route('logout')); ?>" method="POST">
                        <?php echo csrf_field(); ?>
                        <button class="btn btn-pink btn-sm" type="submit">Keluar</button>
                    </form>
                </li>
            </ul>
        </div>
    </div>
</nav><?php /**PATH D:\uts_kirana\laragon\www\PinkBakery\resources\views/components/navbar.blade.php ENDPATH**/ ?>