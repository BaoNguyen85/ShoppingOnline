
<?php $__env->startSection('admin_content'); ?>
<div class="row">
    <div class="col-lg-12">
            <section class="panel">
                <header class="panel-heading">
                    Cập nhật bài viết
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
                        <form role="form" action="<?php echo e(URL::to ('/update-post/'.$post->post_id)); ?>" method="post" enctype="multipart/form-data">
                            <?php echo e(csrf_field()); ?>

                        <div class="form-group">
                            <label for="exampleInputEmail1">Tên bài viết</label>
                            <input type="text" name="post_title" value="<?php echo e($post->post_title); ?>" class="form-control" onkeyup="ChangToSlug();" id="slug" placeholder="Tên danh mục">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Slug</label>
                            <input type="text" name="post_slug" value="<?php echo e($post->post_slug); ?>" class="form-control" id="convert_slug" placeholder="Slug">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Tóm tắt bài viết</label>
                            <textarea style="resize:none" rows="8" class="form-control" name="post_desc" id="ckeditor" placeholder="Mô tả danh mục"><?php echo e($post->post_desc); ?></textarea>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Nội dung bài viết</label>
                            <textarea style="resize:none" rows="8" class="form-control" name="post_content" id="ckeditor1" placeholder="Mô tả danh mục"><?php echo e($post->post_content); ?></textarea>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Meta từ khóa</label>
                            <textarea style="resize:none" rows="5" class="form-control" name="post_meta_keywords" id="" placeholder="Mô tả danh mục"><?php echo e($post->post_meta_keywords); ?></textarea>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Meta nội dung</label>
                            <textarea style="resize:none" rows="5" class="form-control" name="post_meta_desc" id="" placeholder="Mô tả danh mục"><?php echo e($post->post_meta_desc); ?></textarea>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Hình ảnh bài viết</label>
                            <input type="file" name="post_image" value="<?php echo e($post->post_image); ?>" class="form-control" id="exampleInputEmail1">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Danh mục bài viết</label>
                            <select name="cate_post_id" class="form-control input-sm m-bot15">
                                <?php $__currentLoopData = $cate_post; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $cate): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($cate->cate_post_id); ?>"><?php echo e($cate->cate_post_name); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Hiển thị</label>
                            <select name="post_status" class="form-control input-sm m-bot15">
                                <option value="0">Ẩn</option>
                                <option value="1">Hiển thị</option>
                            </select>
                        </div>
                        <button type="submit" name="update_post" class="btn btn-info">Cập nhật bài viết</button>
                    </form>
                    </div>

                </div>
            </section>

    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin_layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\XAMPP\htdocs\shopping\resources\views/admin/post/edit_post.blade.php ENDPATH**/ ?>