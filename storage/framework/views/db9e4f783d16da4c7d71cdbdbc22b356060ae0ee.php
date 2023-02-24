
<?php $__env->startSection('admin_content'); ?>
<div class="row">
    <div class="col-lg-12">
            <section class="panel">
                <header class="panel-heading">
                    Thêm thông tin website
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
                    <?php $__currentLoopData = $contact; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $cont): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <form role="form" action="<?php echo e(URL::to ('/update-info/'.$cont->info_id)); ?>" method="post" enctype="multipart/form-data">
                        <?php echo e(csrf_field()); ?>

                        
                        <div class="form-group">
                            <label for="exampleInputPassword1">Thông tin liên hệ</label>
                            <textarea style="resize:none" rows="8" class="form-control" name="info_contact" id="ckeditor" ><?php echo e($cont->info_contact); ?></textarea>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Bản đồ</label>
                            <textarea style="resize:none" rows="8" class="form-control" name="info_map" id="" ><?php echo e($cont->info_map); ?></textarea>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Fanpage</label>
                            <textarea style="resize:none" rows="8" class="form-control" name="info_fanpage" id="" ><?php echo e($cont->info_fanpage); ?></textarea>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Hình ảnh logo</label>
                            <input type="file" name="info_image" class="form-control" id="exampleInputEmail1">
                            <img src="<?php echo e(URL('/public/uploads/contact/'.$cont->info_logo)); ?>" height="100" width="100">
                        </div>
                        <button type="submit" name="add_info" class="btn btn-info">Cập nhật thông tin</button>
                    </form>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>

                </div>
            </section>

    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin_layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\XAMPP\htdocs\shopping\resources\views/admin/information/add_information.blade.php ENDPATH**/ ?>