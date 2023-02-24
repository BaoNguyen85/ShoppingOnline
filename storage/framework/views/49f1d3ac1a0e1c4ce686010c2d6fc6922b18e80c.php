
<?php $__env->startSection('content'); ?>
<div class="features_items"><!--features_items-->
    <h2 style="margin: 0;position:inherit;font-size:22px;" class="title text-center"><?php echo e($meta_title); ?></h2>
    
    <div class="product-image-wrapper">
        <?php $__currentLoopData = $post; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key =>$p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="single-products" style="margin: 10px 0; padding:5px 0">
                <?php echo $p->post_content; ?>

                
        </div>
        <div class="clearfix"></div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
</div>
<h2 style="margin: 0;position:inherit;font-size:22px;" class="title text-center">Bài viết liên quan</h2>
<style class="text/css">
    ul.post_related li{
        list-style-type: disc;
        font-size: 16px;
        padding: 6px;
    }
    ul.post_related li a{
        color: #000;
    }
    ul.post_related li a:hover{
        color: #14c2bf;
    }
</style>
<ul class="post_related">
    <?php $__currentLoopData = $related; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $post_related): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <li><a href="<?php echo e(url('/bai-viet/'.$post_related->post_slug)); ?>"><?php echo e($post_related->post_title); ?></a></li>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</ul>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\XAMPP\htdocs\shopping\resources\views/pages/baiviet/baiviet.blade.php ENDPATH**/ ?>