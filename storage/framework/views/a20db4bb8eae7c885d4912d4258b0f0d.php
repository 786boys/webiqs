

<?php $__env->startSection('title'); ?>
- webiqs
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<main id="main" class="main">
 <center>   
<h1>All Testimonials</h1>
</center>
<hr>
<ul class="list-group">
    
    <table class="table">
        <thead>
            <tr>
                
                <th scope="col">Num</th>
                <th scope="col">Name</th>
                <th scope="col">picture</th>
                <th scope="col">Detail</th>
                <th scope="col">view</th>
                <th scope="col">Delete</th>
            </tr>
        </thead>
        <tbody>
          <?php
                $i=0;
            ?>
            <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                
          
          <tr>
            
            <th ><?php echo e(++$i); ?></th>
            <td><?php echo e($item->name); ?></td>
            <td>            
            <img src="<?php echo e(asset('storage/'. $item->image)); ?>" width="100px" class="img-fluid" />
            </td>
            <td><?php echo e($item->about); ?></td>
            
           
            <td> <a  class="btn btn-outline-secondary" href="<?php echo e(route('testimonial.show', $item->id)); ?>">View</a> </td>
          
            
            

            <td>
              <form action="<?php echo e(route('testimonial.destroy' , $item->id)); ?>" method="POST">
                <input name="_method" type="hidden" value="DELETE">
                <?php echo e(csrf_field()); ?>

            
                <div class="">
                    <button type="submit" class="btn btn-outline-danger">Delete</button>
                </div>
            </form>
            </td>
          </tr>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
         
        </tbody>
        
      </table>
    
</ul>
</main> 
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.partials.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\xampp\htdocs\authapp\resources\views/admin/testimonial/testimonial.blade.php ENDPATH**/ ?>