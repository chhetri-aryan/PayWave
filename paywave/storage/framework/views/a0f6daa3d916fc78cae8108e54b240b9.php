<?php $__env->startSection('content'); ?>
<div class="container mx-auto p-6">
  <h1 class="text-5xl font-semibold text-indigo-200 mb-4 text-center">Edit Employee</h1>


  <form action="/employees/<?php echo e($employee->id); ?>" method="POST" class="max-w-2xl mx-auto grid grid-cols-1 gap-4">
    <?php echo csrf_field(); ?> 
    <?php echo e(method_field('PATCH')); ?> 
    <div class="col-span-full">
      <label for="name" class="sr-only">Full Name</label>
      <input type="text" name="name" id="name" value="<?php echo e($employee->name); ?>" class="text-black w-full p-3 rounded-lg border-2 border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-300" placeholder="Full Name" required>
    </div>

    <div class="bg-white rounded-md p-1">
        <label class="block text-gray-600 mb-2">Gender</label>
        <div class="flex items-center space-x-4">
            <label class="inline-flex items-center">
                <input type="radio" name="gender" value="male" <?php echo e(old('gender', $employee->gender ?? '') == 'male' ? 'checked' : ''); ?>  class="form-radio text-indigo-600">
                <span class="ml-2 text-blue-600 font-semibold">Male</span>
            </label>
            <label class="inline-flex items-center">
                <input type="radio" name="gender" value="female" <?php echo e(old('gender', $employee->gender ?? '') == 'female' ? 'checked' : ''); ?>  class="form-radio text-indigo-600">
                <span class="ml-2 text-pink-600 font-semibold">Female</span>
            </label>
            <label class="inline-flex items-center">
                <input type="radio" name="gender" value="other" <?php echo e(old('gender', $employee->gender ?? '') == 'other' ? 'checked' : ''); ?> class="form-radio text-indigo-600">
                <span class="ml-2 text-purple-600 font-semibold">Other</span>
            </label>
        </div>
      </div>

    <div class="col-span-full">
      <label for="email" class="sr-only">Email Address</label>
      <input type="email" name="email" id="email" value="<?php echo e($employee->email); ?>" class="text-black w-full p-3 rounded-lg border-2 border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-300" placeholder="Email Address" required>
    </div>
    
    <div class="col-span-full">
      <label for="phone" class="sr-only">Phone Number</label>
      <input type="text" name="phone" id="phone" value="<?php echo e($employee->phone); ?>" class="text-black w-full p-3 rounded-lg border-2 border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-300" placeholder="Phone Number" required>
    </div>
    
    <div class="col-span-full">
      <label for="department" class="sr-only">Department</label>
      <input type="text" name="department" id="department" value="<?php echo e($employee->department); ?>" class="text-black w-full p-3 rounded-lg border-2 border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-300" placeholder="Department" required>
    </div>
    
    <div class="col-span-full">
      <label for="salary" class="sr-only">Salary</label>
      <input type="number" name="salary" id="salary" value="<?php echo e($employee->salary); ?>" class="text-black w-full p-3 rounded-lg border-2 border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-300" placeholder="Salary" required>
    </div>
    
    <div class="col-span-full flex justify-between">
      <label for="hire_date" class="sr-only">Hire Date</label>
      <input type="date" name="hire_date" id="hire_date" value="<?php echo e($employee->hire_date); ?>" class="text-black w-full p-3 rounded-lg border-2 border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-300">
    </div>

    <div class="col-span-full flex justify-end">
        <button type="submit" class="bg-indigo-600 text-white px-5 py-2.5 rounded-lg hover:bg-indigo-700 transition-all ease-in-out duration-300">Save Employee</button>
    </div>


  </form>

<div class="max-w-2xl mx-auto grid grid-cols-1 mt-4">

  
  <div class="col-span-full flex justify-end">
    <label for="my_modal_6" class="bg-red-500 text-white px-5 py-2.5 rounded-lg hover:bg-red-700 transition-all ease-in-out duration-300 cursor-pointer">Delete Employee</label>
  </div>
  
  <input type="checkbox" id="my_modal_6" class="modal-toggle" />
  <div class="modal" role="dialog">
    <div class="modal-box">
      <h3 class="text-lg font-bold">Are you sure you want to delete?</h3>
      <div class="modal-action">
        <form action="/employees/<?php echo e($employee->id); ?>" method="POST"> 
          <?php echo csrf_field(); ?> 
          <?php echo method_field('DELETE'); ?> 
          <div class="col-span-full flex justify-end">
            <button type="submit" class="bg-red-600 text-white px-5 py-2.5 rounded-lg hover:bg-red-900 transition-all ease-in-out duration-300">Delete</button>
          </div>
        </form>
        <label for="my_modal_6" class="btn">Cancel</label>
      </div>
    </div>
  </div>
  
</div>
  
  
</div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\aryan\Desktop\Laravel Project\paywave\resources\views/employees/edit.blade.php ENDPATH**/ ?>