
<?php $__env->startSection('content'); ?>
<section id="cart_items">
    <div class="container">
        
        <div class="review-payment">
            <h2>Cảm ơn bạn đã đặt hàng, chúng tôi sẽ liên hệ với bạn trong thời gian sớm nhất!</h2>
            <h2>Vui lòng nhấn hoàn thành để xác nhận đơn hàng</h2>
            <form method="GET" action="<?php echo e(URL::to('/send-mail-order')); ?>">
                <?php echo e(csrf_field()); ?>

                <input type="submit" value="Hoàn thành" name="send_mail_order" class="btn btn-primary btn-sm">
            </form>
        </div>
                
    </div>
</section> <!--/#cart_items-->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\XAMPP\htdocs\shopping\resources\views/pages/checkout/handcash.blade.php ENDPATH**/ ?>