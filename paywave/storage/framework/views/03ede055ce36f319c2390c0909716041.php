<?php echo app('Illuminate\Foundation\Vite')('resources/css/app.css'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Add Employee</title>
</head>
<body class="bg-gradient-to-r from-blue-50 via-indigo-50 to-purple-50">

  <div class="max-w-4xl mx-auto p-8 bg-white rounded-xl shadow-2xl mt-10">
    <h2 class="text-3xl font-bold text-gray-800 text-center mb-6">Add New Employee</h2>

    <form action="" method="POST" class="space-y-6">
      <?php echo csrf_field(); ?>  <!-- CSRF Token -->

      <!-- Name Field -->
      <div class="flex flex-col">
        <label for="employeeName" class="text-lg font-medium text-gray-600 mb-2">Full Name</label>
        <input type="text" id="employeeName" name="employeeName" class="px-4 py-3 border border-gray-300 rounded-lg shadow-sm focus:ring-2 focus:ring-blue-500 focus:outline-none" placeholder="John Doe" required>
        <?php $__errorArgs = ['employeeName'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
          <div class="text-red-500 text-sm mt-1"><?php echo e($message); ?></div>
        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
      </div>

      <!-- Phone Field -->
      <div class="flex flex-col">
        <label for="employeePhone" class="text-lg font-medium text-gray-600 mb-2">Phone Number</label>
        <input type="text" id="employeePhone" name="employeePhone" class="px-4 py-3 border border-gray-300 rounded-lg shadow-sm focus:ring-2 focus:ring-blue-500 focus:outline-none" placeholder="+1 234 567 890" required>
        <?php $__errorArgs = ['employeePhone'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
          <div class="text-red-500 text-sm mt-1"><?php echo e($message); ?></div>
        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
      </div>

      <!-- Email Field -->
      <div class="flex flex-col">
        <label for="employeeEmail" class="text-lg font-medium text-gray-600 mb-2">Email Address</label>
        <input type="email" id="employeeEmail" name="employeeEmail" class="px-4 py-3 border border-gray-300 rounded-lg shadow-sm focus:ring-2 focus:ring-blue-500 focus:outline-none" placeholder="johndoe@example.com" required>
        <?php $__errorArgs = ['employeeEmail'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
          <div class="text-red-500 text-sm mt-1"><?php echo e($message); ?></div>
        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
      </div>

      <!-- Submit Button -->
      <div class="flex justify-center">
        <button type="submit" class="w-full py-3 bg-indigo-600 text-white font-semibold rounded-lg shadow-md hover:bg-indigo-700 focus:ring-4 focus:ring-indigo-300">Add Employee</button>
      </div>

      <?php if(session('success')): ?>
        <div class="mt-4 text-center text-green-600">
          <?php echo e(session('success')); ?>

        </div>
      <?php endif; ?>
    </form>
  </div>

</body>
</html>
<?php /**PATH C:\Users\aryan\Desktop\Laravel Project\paywave\resources\views/addEmp.blade.php ENDPATH**/ ?>