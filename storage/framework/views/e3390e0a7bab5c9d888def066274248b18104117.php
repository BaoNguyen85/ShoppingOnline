
<?php $__env->startSection('admin_content'); ?>
<div class="table-agile-info">
    <div class="panel panel-default">
      <div class="panel-heading">
        Liệt kê đơn hàng
      </div>
      <div class="row w3-res-tb">
        
        
        
      </div>
      <div class="table-responsive">
        <?php
        $message = Session::get('message');
        if($message){
            echo '<span class="text-alert">',$message,'</span>';
            Session::put('message',null);
        }
        ?>
        <table class="table table-striped b-t b-light">
          <thead>
            <tr>
              
              <th>thứ tự</th>
              <th>Mã đơn hàng</th>
              <th>Ngày đặt hàng</th>
              <th>Tình trạng đơn hàng</th>
              
              
              <th style="width:30px;"></th>
            </tr>
          </thead>
          <tbody>
            <?php
                $i = 0;
            ?>
            
            <?php $__currentLoopData = $order; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $ord): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php
                $i++;
            ?>
            <tr>
              <td><i><?php echo e($i); ?></i></td>
              <td><?php echo e($ord -> order_code); ?></td>
              <td><?php echo e($ord -> created_at); ?></td>
              <td>
                <?php if($ord -> order_status == 1): ?>
                  Đơn hàng mới
                <?php else: ?>
                  Đã xử lý
                <?php endif; ?>
              </td>
              
              
              <td>
                <a href="<?php echo e(URL::to ('/view-order/'.$ord->order_code)); ?>" class="active styling-edit" ui-toggle-class="">
                  <i class="fa fa-eye text-success text-active"></i></a>
                <a onclick="return confirm('Are you sure to delete?')" href="<?php echo e(URL::to ('/delete-order/'.$ord->order_code)); ?>" class="active styling-edit" ui-toggle-class="">
                  <i class="fa fa-times text-danger text"></i></a>
              </td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          </tbody>
        </table>
      </div>
      
    </div>
  </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin_layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\XAMPP\htdocs\shopping\resources\views/admin/manage_order.blade.php ENDPATH**/ ?>