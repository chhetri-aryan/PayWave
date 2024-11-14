<?php
$total = $payments->where('status', 'success')->sum('amount');
?>

<?php $__env->startSection('content'); ?>  
<div class="container mx-auto mt-8 p-4">
    <h2 class="text-5xl text-indigo-200 font-bold mb-6">Payments:</h2>
    <div class="overflow-x-auto">
        <table class="min-w-full bg-white border border-gray-200 rounded-lg shadow-lg">
            <thead>
            <tr class="bg-indigo-500 text-white text-center">
                <th class="py-3 px-6 font-semibold uppercase">ID</th>
                <th class="py-3 px-6 font-semibold uppercase">Amount</th>
                <th class="py-3 px-6 font-semibold uppercase">Date</th>
                <th class="py-3 px-6 font-semibold uppercase">Status</th>
            </tr>
            </thead>
            <tbody class="text-gray-700 text-center">
            <?php $__currentLoopData = $payments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $payment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr class="border-b border-gray-200 hover:bg-gray-100">
                <td class="py-3 px-6"><?php echo e($payment->id); ?></td>
                <td class="py-3 px-6">$<?php echo e(number_format($payment->amount, 2)); ?></td>
                <td class="py-3 px-6"><?php echo e($payment->created_at->format('Y-m-d')); ?></td>
                <td class="py-3 px-6">
                    <span class="px-3 py-1 inline-flex text-sm font-medium rounded-full 
                    <?php echo e($payment->status === 'success' ? 'bg-green-100 text-green-800' : 'bg-red-100 text-red-800'); ?>">
                    <?php echo e(ucfirst($payment->status)); ?>

                    </span>
                </td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
        <div class="flex justify-end mt-4">
            <h2 class="text-2xl font-bold mb-6 text-white">Total: $<?php echo e($total); ?></h2>
        </div>
        
    </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\aryan\Desktop\Laravel Project\paywave\resources\views/payments/index.blade.php ENDPATH**/ ?>