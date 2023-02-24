
<?php $__env->startSection('content'); ?>
<div class="features_items"><!--features_items-->
    <h2 class="title text-center"><?php echo e($meta_title); ?></h2>
    
    <div class="product-image-wrapper">
        <?php $__currentLoopData = $post; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key =>$p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="single-products" style="margin: 10px 0; padding:5px 0">
                <div class="text-center">
                    <?php echo csrf_field(); ?>
                    
                        <img style="float:left;width:30%;padding:5px;height:150px  " src="<?php echo e(asset('public/uploads/post/'.$p->post_image)); ?>" alt="<?php echo e($p->post_slug); ?>" />
                        <h4 style="color: black"><?php echo e($p->post_title); ?></h4>
                        <p><?php echo $p->post_desc; ?></p>
                        <a href="<?php echo e(URL::to('/bai-viet/'.$p->post_slug)); ?>">
                        
                </div>
                <div class="text-right">
                    <a href="<?php echo e(url::to('/bai-viet/'.$p->post_slug)); ?>" class="btn btn-default btn-sm">Xem bài viết</a>
                </div>
                
        </div>
        <div class="clearfix"></div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
</div>
<ul class="pagination pagination-sm m-t-none m-b-none"><?php echo $post->links(); ?></ul>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\XAMPP\htdocs\shopping\resources\views/pages/baiviet/danhmucbaiviet.blade.php ENDPATH**/ ?>