

<?php $__env->startSection('title'); ?>
- webiqs
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<main id="main" class="main">

    <form method="POST" action="<?php echo e(route('testimonial.store')); ?>" enctype="multipart/form-data">
        <?php echo csrf_field(); ?>
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Name</label>
          <input type="text" name="name" class="form-control" >
        </div>
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label"> Company Name</label>
          <input type="text" name="companyName" class="form-control" >
        </div>
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">About</label>
          <input type="text" name="about" class="form-control" >
        </div>
        <div class="mb-3">
          <input type="file" name="image" class="form-control" >
        </div>
       
        
       
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>

</main> 
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.partials.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\xampp\htdocs\authapp\resources\views/admin/testimonial/addtestimonial.blade.php ENDPATH**/ ?>