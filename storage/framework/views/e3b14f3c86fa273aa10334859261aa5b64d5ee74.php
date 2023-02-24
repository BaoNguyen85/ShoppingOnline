
<?php $__env->startSection('content'); ?>
<div class="features_items"><!--features_items-->
    <h2 class="title text-center">Liên hệ với chúng tôi</h2>
    <div class="row">
        <?php $__currentLoopData = $contact; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $cont): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="col-md-12">
            <?php echo $cont->info_contact; ?>

            <?php echo $cont->info_fanpage; ?>

            
        </div>
        <div class="col-md-12">
            <h4>Bản đồ</h4>
            <?php echo $cont->info_map; ?>

        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
    
</div><!--/recommended_items-->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\XAMPP\htdocs\shopping\resources\views/pages/lienhe/contact.blade.php ENDPATH**/ ?>