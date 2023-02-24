
<?php $__env->startSection('content'); ?>
<?php $__currentLoopData = $product_details; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<div class="product-details"><!--product-details-->
    <div class="col-sm-5">
        <div class="view-product">
            <img src="<?php echo e(URL::to ('/public/uploads/product/'.$value->product_image)); ?>" alt="" />
            <h3 style="border-radius: 10px 0 0 0;background-image: linear-gradient(to bottom right,#D46C4E, #F9AD6A);">NEW</h3>
        </div>
        

    </div>
    <div class="col-sm-7">
        <div class="product-information"><!--/product-information-->
            <img src="images/product-details/new.jpg" class="newarrival" alt="" />
            <h2><?php echo e($value->product_name); ?></h2>
            <p>Mã ID: <?php echo e($value->product_id); ?></p>
            
            
            <form action="<?php echo e(URL::to('/save-cart')); ?>" method="POST">
                <?php echo e(csrf_field()); ?>

            <span>
                <span><?php echo e(number_format($value->product_price).' VNĐ'); ?></span>
                <br>
                <label>Số lượng:</label>
                <input name="qty" type="number" min="1" value="1" />
                <input name="productid_hidden" type="hidden" value="<?php echo e($value->product_id); ?>" />
                <br><br>
                <button type="submit" class="btn btn-fefault cart">
                    <i class="fa fa-shopping-cart"></i>
                    Thêm giỏ hàng
                </button>
            </span>
            </form>
            <p><b>Tình trạng:</b> Còn hàng</p>
            <p><b>Điều kiện:</b> Mới 100%</p>
            <p><b>Thương hiệu:</b> <?php echo e($value->brand_name); ?></p>
            <p><b>Danh mục:</b> <?php echo e($value->category_name); ?></p>
            <a href=""><img src="images/product-details/share.png" class="share img-responsive"  alt="" /></a>
        </div><!--/product-information-->
    </div>
</div><!--/product-details-->

<div class="category-tab shop-details-tab"><!--category-tab-->
    <div class="col-sm-12">
        <ul class="nav nav-tabs">
            <li class="active"><a href="#details" data-toggle="tab">Mô tả</a></li>
            <li><a href="#companyprofile" data-toggle="tab">Chi tiết</a></li>
            <li><a href="#reviews" data-toggle="tab">Đánh giá</a></li>
        </ul>
    </div>
    <div class="tab-content">
        <div class="tab-pane fade active in" id="details" >
            <p><?php echo $value->product_desc; ?></p>
        </div>
        
        <div class="tab-pane fade" id="companyprofile" >
            <p><?php echo $value->product_content; ?></p>
        </div>
        
        <div class="tab-pane fade" id="reviews" >
            <div class="col-sm-12">
                
                
                
                    
                    <form method="POST">
                        <?php echo e(csrf_field()); ?>

                        <div class="form-group">
                            <label for="email">Email:</label>
                            <input required type="email" class="form-control" id="email" name="email">
                        </div>
                        <div class="form-group">
                            <label for="name">Tên:</label>
                            <input required type="text" class="form-control" id="name" name="name">
                        </div>
                        <div class="form-group">
                            <label for="cm">Bình luận:</label>
                            <textarea required rows="10" id="cm" class="form-control" name="content"></textarea>
                        </div>
                        <div class="form-group text-right">
                            <button type="submit" class="btn btn-default"> Đăng tải
                            </button>

                        </div>
                        
                    </form>
                    
                
            </div>
        </div>
        
    </div>
</div><!--/category-tab-->
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<div class="row list-product">
<div class="col-md12 comment-list">
    <div class="col-md-12 comment">
        <?php $__currentLoopData = $comments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $comment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <ul>
            <li class="com-title">
                <?php echo e($comment->com_name); ?>

                <br>
                <span><?php echo e(date('d/m/Y H:i',strtotime($comment->created_at))); ?></span>
            </li>
            <li class="com-details">
                <?php echo e($comment->com_content); ?>

            </li>
        </ul>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>

</div>
</div>

<div class="recommended_items"><!--recommended_items-->
    <h2 class="title text-center">Sản phẩm liên quan</h2>
    
    <div id="recommended-item-carousel" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="item active">
                <?php $__currentLoopData = $related; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $lienquan): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-sm-4">
                    <div class="product-image-wrapper">
                        <div class="single-products">
                            <div class="productinfo text-center">
                                <img src="<?php echo e(URL::to ('public/uploads/product/'.$lienquan->product_image)); ?>" alt="" />
                                <h2><?php echo e(number_format($lienquan->product_price).' VNĐ'); ?></h2>
                                <p><?php echo e($lienquan->product_name); ?></p>
                                <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Thêm giỏ hàng</a>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>

        
         <a class="left recommended-item-control" href="#recommended-item-carousel" data-slide="prev">
            <i class="fa fa-angle-left"></i>
          </a>
          <a class="right recommended-item-control" href="#recommended-item-carousel" data-slide="next">
            <i class="fa fa-angle-right"></i>
          </a>			
    </div>
</div><!--/recommended_items-->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\XAMPP\htdocs\shopping\resources\views/pages/sanpham/show_details.blade.php ENDPATH**/ ?>