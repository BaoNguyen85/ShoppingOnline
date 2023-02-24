
<?php $__env->startSection('content'); ?>
<div class="features_items"><!--features_items-->
    <h2 class="title text-center">Kết quả tìm kiếm</h2>
    <?php $__currentLoopData = $search_product; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key =>$product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <a href="<?php echo e(URL::to ('/chi-tiet-san-pham/'.$product->product_id)); ?>">
    <div class="col-sm-4">
        <div class="product-image-wrapper">
            <div class="single-products">
                    <div class="productinfo text-center">
                        
                        <form>
                            <?php echo csrf_field(); ?>
                        <input type="hidden" name="" value="<?php echo e($product->product_id); ?>" class="cart_product_id_<?php echo e($product->product_id); ?>">
                        <input type="hidden" name="" value="<?php echo e($product->product_name); ?>" class="cart_product_name_<?php echo e($product->product_id); ?>">
                        <input type="hidden" name="" value="<?php echo e($product->product_image); ?>" class="cart_product_image_<?php echo e($product->product_id); ?>">
                        <input type="hidden" name="" value="<?php echo e($product->product_price); ?>" class="cart_product_price_<?php echo e($product->product_id); ?>">
                        <input type="hidden" name="" value="1" class="cart_product_qty_<?php echo e($product->product_id); ?>">

                        <a href="<?php echo e(URL::to ('/chi-tiet-san-pham/'.$product->product_id)); ?>">
                        <img src="<?php echo e(URL::to ('public/uploads/product/'.$product->product_image)); ?>" alt="" />
                        <h2><?php echo e(number_format($product->product_price).' VNĐ'); ?></h2>
                        <p><?php echo e($product->product_name); ?></p>
                        
                        </a>
                        <button type="button" class="btn btn-default add-to-cart" name="add-to-cart" data-id_product="<?php echo e($product->product_id); ?>">Thêm giỏ hàng</button>
                        </form>
                    </div>
                    
            </div>
            
        </div>
    </div>
    </a>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div><!--features_items-->
</div><!--/recommended_items-->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\XAMPP\htdocs\shopping\resources\views/pages/sanpham/search.blade.php ENDPATH**/ ?>