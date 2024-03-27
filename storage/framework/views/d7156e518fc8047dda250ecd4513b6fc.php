

<?php $__env->startSection('title'); ?>
- webiqs
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<main id="main" class="main">

    
    <h2>Add Portfolio</h2>
    <form method="POST" action="<?php echo e(route('portfolio.store')); ?>" enctype="multipart/form-data">
      <?php echo csrf_field(); ?>
      <div class="mb-3">
        <label class="form-label">Project Name</label>
        <input type="text" class="form-control" name="Pname">
      </div>

      <div class=" mb-3">
        <label class="form-label">Service pic</label><br>
        <input type="file" class="form-control" name="image" ">
      </div>
    
      <div class="mb-3">
        <label class="form-label">About Project</label>
        <input type="text" class="form-control" name="about" >
      </div>

      <div class="mb-3">
        <label class="form-label">Solution</label>
        <input type="text" class="form-control" name="solution" >
      </div>

      <label for="sel1" class="form-label">type</label>
      <select class="form-select" id="sel1" name="type">
        <option>Website</option>
        <option>Landing Page</option>
        <option>Branding Design</option>
      </select>
       <br>
           
      <button type="submit" class="btn btn-primary">Add</button>
    </form>



</main>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.partials.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\xampp\htdocs\authapp\resources\views/admin/portfolio/addportfolio.blade.php ENDPATH**/ ?>