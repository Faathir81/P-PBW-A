<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames((['disabled' => false]));

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

foreach (array_filter((['disabled' => false]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
}

$__defined_vars = get_defined_vars();

foreach ($attributes->all() as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
}

unset($__defined_vars); ?>

<input <?php if($disabled): echo 'disabled'; endif; ?>
    <?php echo e($attributes->merge(['class' => 'w-full border-zinc-800 focus:outline-none rounded-md shadow-sm bg-zinc-950 text-white'])); ?>><?php /**PATH C:\Users\Faathir.A.N\OneDrive\Documents\Kuliah Moment\SEMESTER 5\P.PBW\Pertemuan 12\sticky\resources\views/components/text-input.blade.php ENDPATH**/ ?>