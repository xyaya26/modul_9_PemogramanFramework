<?php $__env->startSection('content'); ?>
    <div class="container-sm my-5">
        <div class="row justify-content-center">
            <div class="p-5 bg-white rounded-3 col-xl-4 border">
                <div class="mb-3 text-center">
                    <div class="border-radius-sm">
                        <i class="bi-person-circle fs-1"></i>
                    </div>
                    <h4 class="fw-bold">My Profile</h4>

                </div>
                <hr>
                <div class="row">
                    <div class="col-md-12 mb-3">
                        <label for="firstName" class="form-label">First Name</label>
                        <h5><?php echo e(Auth::user()->name); ?></h5>
                    </div>
                    <hr>

                    <div class="col-md-12 mb-3">
                        <label for="email" class="form-label">Email</label>
                        <h5><?php echo e(Auth::user()->email); ?></h5>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-12 d-grid">
                            <a href="<?php echo e(url('/')); ?>" class="btn btn-outline-dark btn-lg mt-3">Home</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\gfiqr\OneDrive\Documents\Framework\Praktikum\Modul8\resources\views/profile.blade.php ENDPATH**/ ?>