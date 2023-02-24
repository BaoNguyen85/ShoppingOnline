
<?php $__env->startSection('admin_content'); ?>
<div class="row">
    <div class="col-lg-12">
            <section class="panel">
                <header class="panel-heading">
                    Cập nhật danh mục bài viết
                </header>               
                <div class="panel-body">
                    <?php
                    $message = Session::get('message');
                    if($message){
                        echo '<span class="text-alert">',$message,'</span>';
                        Session::put('message',null);
                    }
                    ?>
                    <div class="position-center">
                        <form role="form" action="<?php echo e(URL::to ('/update-category-post/'.$category_post->cate_post_id)); ?>" method="post">
                            <?php echo e(csrf_field()); ?>

                        <div class="form-group">
                            <label for="exampleInputEmail1">Tên danh mục</label>
                            <input type="text" name="cate_post_name" value="<?php echo e($category_post->cate_post_name); ?>" class="form-control" id="exampleInputEmail1" placeholder="Tên danh mục">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Slug</label>
                            <input type="text" name="cate_post_slug" value="<?php echo e($category_post->cate_post_slug); ?>" class="form-control" id="convert_slug" placeholder="Slug">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Mô tả danh mục</label>
                            <textarea style="resize:none" rows="8" class="form-control" name="cate_post_desc" id="ckeditor1" placeholder="Mô tả danh mục"><?php echo e($category_post->cate_post_desc); ?></textarea>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Hiển thị</label>
                            <select name="cate_post_status" class="form-control input-sm m-bot15">
                                <?php if($category_post->cate_post_status==0): ?>
                                <option selected value="0">Ẩn</option>
                                <option value="1">Hiển thị</option>
                                <?php else: ?>
                                <option value="0">Ẩn</option>
                                <option selected value="1">Hiển thị</option>
                                <?php endif; ?>
                            </select>
                        </div>
                        <button type="submit" name="update_post_cate" class="btn btn-info">Cập nhật danh mục bài viết</button>
                    </form>
                    </div>

                </div>
            </section>

    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin_layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\XAMPP\htdocs\shopping\resources\views/admin/category_post/edit_category.blade.php ENDPATH**/ ?>