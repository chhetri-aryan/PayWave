<?php echo app('Illuminate\Foundation\Vite')('resources/css/app.css'); ?>

<div class="hero bg-base-200 min-h-screen">
    <div class="hero-content flex-col lg:flex-row-reverse">
        <div class="text-center lg:text-left">
            <h1 class="text-5xl font-bold">PayWave 🌊</h1>
            <p class="py-6">
                Empowering teams through seamless payroll management—because every detail matters.
            </p>
        </div>
        
        <div class="card bg-base-100 w-full max-w-lg shrink-0 shadow-2xl">
            <form action="<?php echo e(url('/login')); ?>" method="POST" class="card-body">
                <?php echo csrf_field(); ?> 
                
                <?php if(session('status')): ?>
                    <div class="alert alert-success">
                        <?php echo e(session('status')); ?>

                    </div>
                <?php endif; ?>
                <?php if($errors->any()): ?>
                    <div class="alert alert-danger">
                        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div><?php echo e($error); ?></div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                <?php endif; ?>
                
                <div class="form-control">
                    <label class="label">
                        <span class="label-text">Username</span>
                    </label>
                    <input 
                        type="text" 
                        name="username" 
                        placeholder="Enter username" 
                        class="input input-bordered"
                        required
                    />
                </div>
                
                <div class="form-control">
                    <label class="label">
                        <span class="label-text">Password</span>
                    </label>
                    <input 
                        type="password" 
                        name="password" 
                        placeholder="Enter password" 
                        class="input input-bordered"
                        required
                    />
                    <label class="label">
                        <a href="#" class="label-text-alt link link-hover">Forgot password?</a>
                    </label>
                </div>
                
                <div class="form-control mt-6">
                    <button type="submit" class="btn btn-primary">Login</button>
                </div>
            </form>
        </div>
    </div>
</div>
<?php /**PATH C:\Users\aryan\Desktop\Laravel Project\paywave\resources\views/login.blade.php ENDPATH**/ ?>