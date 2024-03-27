

<?php $__env->startSection('title'); ?>
- webiqs
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<main id="main" class="main">
    <h1>Portfolio detial</h1>
    <a class="btn btn-secondary" href="<?php echo e(route('portfolio.index')); ?>" role="button">Move back</a>
    <hr>

    <div class="table-responsive">
        <table class="table table-light">
            <thead>
               
            </thead>
            <tbody>
                <tr>  
                    <th> Name</th>
                    <td><?php echo e($value->name); ?></td>
                </tr>
                <tr>  
                    <th> type</th>
                    <td><?php echo e($value->type); ?></td>
                </tr>
                <tr>  
                    <th> about</th>
                    <td><?php echo e($value->about); ?></td>
                </tr>
                <tr>  
                    <th> Name</th>
                    <td>            <img src="<?php echo e(asset('storage/'. $value->img)); ?>" width="100px" class="img-fluid" />
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</main>
    <?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.partials.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\xampp\htdocs\authapp\resources\views/admin/portfolio/view.blade.php ENDPATH**/ ?>