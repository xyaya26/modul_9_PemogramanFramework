<body>
    <div class="d-flex">
        <a href="<?php echo e(route('employees.show', ['employee' => $employee->id])); ?>" class="btn btn-outline-light bg-info btn-sm me-2"><i
                class="bi-person-lines-fill"></i></a>
        <a href="<?php echo e(route('employees.edit', ['employee' => $employee->id])); ?>"
            class="btn btn-outline-warning btn-sm me-2"><i class="bi-pencil-square"></i></a>
        <div>
            <form action="<?php echo e(route('employees.destroy', ['employee' => $employee->id])); ?>" method="POST">
                <?php echo csrf_field(); ?>
                <?php echo method_field('delete'); ?>
                <button type="submit" class="btn btn-outline-danger btn-sm me-2 "><i class="bi-trash"></i></button>
            </form>
        </div>
    </div>  
</body>
<?php /**PATH C:\Users\gfiqr\OneDrive\Documents\Framework\Praktikum\Modul8\resources\views/employee/actions.blade.php ENDPATH**/ ?>