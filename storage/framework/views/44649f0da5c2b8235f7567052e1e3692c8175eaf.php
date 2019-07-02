<?php $__env->startSection('content'); ?>

<div class='panel-body'>
    <!-- Display validation errors-->
    <?php echo $__env->make('common.errors', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <!-- New Task Form -->
    <form action="<?php echo e(url('/task')); ?>" method="POST" class='from-horizontal'>
        <?php echo e(csrf_field()); ?>


        <!--Task name-->
        <div class='form-group'>
            <label for='task' class='col-sm-3 control-label'>Task</label>

            <div class='col-sm-6'>
                <input type='text' name='name' id='task-name' class='form-control'>
            </div>
        </div>

        <!--Add Task Button-->
        <div class='form-group'>
            <div class='col-sm-offset-3 col-sm-6'>
                <button type='submit' class='btn btn-primary'>
                    <i class='fa fa-plus'></i> Add Task
                </button>
            </div>
        </div>
    </form>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\moj_projekt\resources\views/tasks.blade.php ENDPATH**/ ?>