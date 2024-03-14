

<?php $__env->startSection('title'); ?>
- webiqs
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<main id="main" class="main">


<h1>All Services</h1>
<hr>
<ul class="list-group">
    
    <table class="table">
        <thead>
            <tr>
                
                <th scope="col">Names</th>
                <th scope="col">Title</th>
                <th scope="col">view</th>
                <th scope="col">Delete</th>
            </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $service; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                
          
          <tr>
            
            <td><?php echo e($item->servises); ?></td>
            <td><?php echo e($item->title_fst); ?></td>
            
            <td> <a  class="btn btn-outline-secondary" href="<?php echo e(route('service.show', $item->id)); ?>">View</a> </td>
            
            <td>
              <form action="<?php echo e(route('service.destroy' , $item->id)); ?>" method="POST">
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
<br>


 

</main>

<?php $__env->stopSection(); ?>



<?php echo $__env->make('admin.partials.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\xampp\htdocs\authapp\resources\views/admin/servises/all-servises.blade.php ENDPATH**/ ?>