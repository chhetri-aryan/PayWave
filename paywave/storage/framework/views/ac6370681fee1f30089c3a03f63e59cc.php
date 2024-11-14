<?php $__env->startSection('content'); ?>   
<div class="diff aspect-[16/3]">
  <div class="diff-item-1">
      <div class="bg-info grid place-content-center text-9xl font-black">
          PayWave 🌊
      </div>
  </div>
  <div class="diff-item-2">
      
      <div id="time" class="bg-primary text-primary-content grid place-content-center text-9xl font-black">DAISY</div>


  </div>
  <div class="diff-resizer"></div>
</div>

<script>
  function updateTime() {
    const now = new Date();
    const timeString = now.toLocaleTimeString();
    document.getElementById('time').textContent = timeString;
  }
  setInterval(updateTime, 1000);
  updateTime();
</script>

  <div class="container mx-auto px-4 py-8">
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 mt-12 justify-items-center">

      <a class="card card-compact w-full max-w-xs shadow-xl bg-neutral-800 cursor-pointer"
      href="/employees/create">
        <figure>
          <img src="<?php echo e(url('images/add.png')); ?>" class="rounded-lg h-44 w-full object-cover" alt="Add Employee" />
        </figure>
        <div class="card-body">
          <h2 class="card-title">Add Employee</h2>
          <p>Quickly onboard new employees.</p>
        </div>
      </a>

      <a class="card card-compact w-full max-w-xs shadow-xl bg-neutral-800"
      href="/employees">
        <figure>
          <img src="<?php echo e(url('images/emp.png')); ?>" class="rounded-lg h-44 w-full object-cover" alt="Employees" />
        </figure>
        <div class="card-body">
          <h2 class="card-title">Manage Employees</h2>
          <p>View and manage employee details.</p>
          
        </div>
      </a>

      <a class="card card-compact w-full max-w-xs shadow-xl bg-neutral-800"
      href="/payments">
        <figure>
          <img src="<?php echo e(url('images/pay.png')); ?>" class="rounded-lg h-44 w-full object-cover" alt="Payment History" />
        </figure>
        <div class="card-body">
          <h2 class="card-title">Payment History</h2>
          <p>Access past payment records.</p>
         
        </div>
      </a>

      <a class="card card-compact w-full max-w-xs shadow-xl bg-neutral-800"
      href="/analytics">
        <figure>
          <img src="<?php echo e(url('images/graph.png')); ?>" class="rounded-lg h-44 w-full object-cover" alt="Shoes" />
        </figure>
        <div class="card-body">
          <h2 class="card-title">Analytics</h2>
          <p>Visualize trends with interactive graphs.</p>
          
        </div>
      </a>
    </div>
  </div>


</body>
</html>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\aryan\Desktop\Laravel Project\paywave\resources\views/dashboard.blade.php ENDPATH**/ ?>