
<?php $__env->startSection('content'); ?>
<section id="cart_items">
    <div class="container">
        <div class="breadcrumbs">
            <ol class="breadcrumb">
              <li><a href="<?php echo e(URL::to('/')); ?>">Trang chủ</a></li>
              <li class="active">Giỏ hàng</li>
            </ol>
        </div>
        <div class="table-responsive cart_info">
            <?php
            $content = Cart::content();
            ?>

            <table class="table table-condensed">
                <thead>
                    <tr class="cart_menu">
                        <td class="image">Hình ảnh sản phẩm</td>
                        <td class="description">Mô tả</td>
                        <td class="price">Giá</td>
                        <td class="quantity">Số lượng</td>
                        <td class="total">Tổng tiền</td>
                        
                    </tr>
                </thead>
                <tbody>
                    <?php $__currentLoopData = $content; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $v_content): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        
                    <tr>
                        <td class="cart_product">
                            <a href=""> <img src="<?php echo e(URL::to ('public/uploads/product/'.$v_content->options->image)); ?>" width="50" alt="" /></a>
                        </td>
                        <td class="cart_description">
                            <h4><a href=""><?php echo e($v_content->name); ?></a></h4>
                            <p>Web ID: 1089772</p>
                        </td>
                        <td class="cart_price">
                            <p><?php echo e(number_format($v_content->price)." VNĐ"); ?></p>
                        </td>
                        <td class="cart_quantity">
                            <div class="cart_quantity_button">
                                <form action="<?php echo e(URL::to('/update-cart-quantity')); ?>" method="POST">
                                    <?php echo e(csrf_field()); ?>

                                <input class="cart_quantity_input" type="number" name="cart_quantity" value="<?php echo e($v_content->qty); ?>" >

                                <input type="hidden" value="<?php echo e($v_content->rowId); ?>" name="rowId_cart" class="form-control">
                                <input type="submit" value="Cập nhật" name="update_qty" class="btn btn-default btn-sm">
                                </form>
                            </div>
                        </td>
                        <td class="cart_total">
                            <p class="cart_total_price">
                                <?php
                                $subtotal = $v_content->price * $v_content->qty;
                                echo number_format($subtotal)." VNĐ";
                                ?>
                            </p>
                        </td>
                        <td class="cart_delete">
                            <a class="cart_quantity_delete" href="<?php echo e(URL::to('/delete-to-cart/'.$v_content->rowId)); ?>"><i class="fa fa-times"></i></a>
                        </td>
                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
        </div>
    </div>
</section> <!--/#cart_items-->
<section id="do_action">
    <div class="container">
       
            <div class="col-sm-6">
                <div class="total_area">
                    <ul>
                        <li>Tổng <span><?php echo e(Cart::priceTotal(0,',','.')." VNĐ"); ?></span></li>
                        <li>Thuế <span><?php echo e(Cart::tax(0,',','.')." VNĐ"); ?></span></li>
                        <li>Phí vận chuyển <span>Free</span></li>
                        <li>Thành tiền <span><?php echo e(Cart::total(0,',','.')." VNĐ"); ?></span></li>
                    </ul>
                        
                        <?php
                            $customer_id = Session::get('customer_id');
                            if($customer_id != NULL){
                        ?>
                         <a class="btn btn-default check_out" href="<?php echo e(URL::to('/checkout')); ?>">Thanh toán</a>
                        <?php
                            }else{
                        ?>
                         <a class="btn btn-default check_out" href="<?php echo e(URL::to('/login-checkout')); ?>">Thanh toán</a>
                        <?php
                            }
                        ?>
                       
                </div>
            </div>
        </div>
    </div>
</section><!--/#do_action-->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\XAMPP\htdocs\shopping\resources\views/pages/cart/show_cart.blade.php ENDPATH**/ ?>