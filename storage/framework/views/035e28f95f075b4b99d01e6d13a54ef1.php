

<?php $__env->startSection('title'); ?>
- webiqs
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<main id="main" class="main">

    <h1>User detial</h1>
    <a class="btn btn-secondary" href="<?php echo e(route('service.index')); ?>" role="button">Move back</a>
    <hr>
    
    <div class="table-responsive">
        <table class="table table-primary">
            <tbody>
                <tr class="">
                    <th>Name:</th>  
                    <td><?php echo e($service->id); ?></td>
                </tr>
                <tr>
                    <th>Service Name:</th>                   
                     <td> <?php echo e($service->servises); ?></td>
                </tr>
                <tr>
                    <th>First title:</th>                   
                     <td><?php echo e($service->title_fst); ?></td>
                </tr>
                <tr>
                    <th>First Description:</th>                   
                     <td><?php echo e($service->description_fst); ?></td>
                </tr>
                <tr>
                    <th>Second title:</th>                   
                     <td><?php echo e($service->title_sec); ?></td>
                </tr>
                <tr>
                    <th>Second Description:</th>                   
                     <td><?php echo e($service->description_sec); ?></td>
                </tr>
            </tbody>
        </table>
    </div>
    

    




</main>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.partials.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\xampp\htdocs\authapp\resources\views/admin/servises/single.blade.php ENDPATH**/ ?>