<?php
// $employees = [
//     ['id' => 1, 'name' => 'Sarah Johnson', 'position' => 'Senior Developer', 'department' => 'Engineering', 'salary' => 95000],
//     ['id' => 2, 'name' => 'Michael Chen', 'position' => 'Product Manager', 'department' => 'Product', 'salary' => 88000],
//     ['id' => 3, 'name' => 'Emily Davis', 'position' => 'UX Designer', 'department' => 'Design', 'salary' => 75000],
//     ['id' => 4, 'name' => 'James Wilson', 'position' => 'Marketing Lead', 'department' => 'Marketing', 'salary' => 82000],
//     ['id' => 5, 'name' => 'Lisa Anderson', 'position' => 'HR Manager', 'department' => 'Human Resources', 'salary' => 78000],
// ];
// ?>

<?php $__env->startSection('content'); ?>
<div class="container mx-auto overflow-x-auto">
    <table class="min-w-full divide-y divide-gray-200 mx-auto bg-white">
        <thead>
            <tr>
                <th class="px-6 py-3 text-left text-lg font-medium text-gray-900 uppercase tracking-wider">Employee</th>
                <th class="px-6 py-3 text-left text-lg font-medium text-gray-900 uppercase tracking-wider">Department</th>
                <th class="px-6 py-3 text-left text-lg font-medium text-gray-900 uppercase tracking-wider">Salary</th>
                <th class="px-6 py-3 text-left text-lg font-medium text-gray-900 uppercase tracking-wider"></th>
            </tr>
        </thead>
        <tbody class="bg-indigo-200 divide-y divide-gray-200">
            <?php $__currentLoopData = $employees; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $employee): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr class="hover:bg-gray-50">
                    <td class="px-6 py-4 whitespace-nowrap">
                        <div class="flex items-center">
                            <div class="flex-shrink-0 h-10 w-10">
                                <div class="h-10 w-10 rounded-full bg-indigo-100 flex items-center justify-center">
                                    <span class="text-indigo-700 font-medium text-sm">
                                        <?php echo e(strtoupper(substr($employee['name'], 0, 1) . substr(strstr($employee['name'], ' '), 1, 1))); ?>

                                    </span>
                                </div>
                            </div>
                            <div class="ml-4">
                                <div class="text-sm font-medium text-gray-900"><?php echo e($employee['name']); ?></div>
                                <div class="text-sm text-gray-500"><?php echo e($employee['position']); ?></div>
                            </div>
                        </div>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap">
                        <div class="text-sm text-gray-900"><?php echo e($employee['department']); ?></div>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap">
                        <div class="text-sm text-gray-900">$<?php echo e(number_format($employee['salary'], 2)); ?></div>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                        <button class="text-gray-400 hover:text-gray-500">
                            <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 4h.01M20.24 4.5c-.88-.88-2.3-.88-3.18 0L9.34 12.24c-.63.63-.2 1.71.7 1.71h6.71l4.42 4.43c.88.88 2.3.88 3.18 0l.54-.54c.88-.88.88-2.3 0-3.18L20.24 4.5z"></path>
                            </svg>
                        </button>
                    </td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\aryan\Desktop\Laravel Project\paywave\resources\views/index.blade.php ENDPATH**/ ?>