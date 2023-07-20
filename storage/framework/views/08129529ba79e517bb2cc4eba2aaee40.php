<body class="bg-primary">

<?php $__env->startSection('content'); ?>
<div class="d-flex align-items-center justify-content-center" style="height: 100vh">
    <div class="row justify-content-center">
        <div class="p-5 bg-light rounded-3">
            <div class="mb-3 text-center">
                <div class="mb-3 text-center">
                    <i class="bi bi-hexagon-fill text-primary fs-1"></i>
                    <h4>Employee Data Master</h4>
                </div>
                <hr>
                <form method="POST" action="<?php echo e(route('login')); ?>">
                    <?php echo csrf_field(); ?>

                    <div class="row mb-3">
                        <div class="col-12">
                            <input id="email" type="email"
                                class="form-control <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                placeholder="Enter Your Email" name="email" value="<?php echo e(old('email')); ?>" required
                                autocomplete="email" autofocus>

                            <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <span class="invalid-feedback" role="alert">
                                    <strong><?php echo e($message); ?></strong>
                                </span>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>
                    </div>

                    <div class="row mb-3">

                        <div class="col-12">
                            <input id="password" type="password"
                                class="form-control <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" placeholder="Enter Your Password" name="password"
                                required autocomplete="current-password">

                            <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <span class="invalid-feedback" role="alert">
                                    <strong><?php echo e($message); ?></strong>
                                </span>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>
                    </div>
                    <hr>
                    <div class="row mb-0 align-items-center justify-content-center">
                        <div class="col">
                            <button type="submit" class="btn btn-primary col-12" style="font-size: 18px"><i class="bi bi-box-arrow-in-right"></i>
                                <?php echo e(__('Login')); ?>

                            </button>

                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<?php echo app('Illuminate\Foundation\Vite')('resources/js/app.js'); ?>
        </body>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\gfiqr\OneDrive\Documents\Framework\Praktikum\Modul8\resources\views/auth/login.blade.php ENDPATH**/ ?>