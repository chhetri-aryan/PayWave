<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>


<?php $__env->startSection('content'); ?>
<div class="container mx-auto p-6">
    <h1 class="text-4xl font-semibold text-white mb-6">Gender Ratio Analysis:</h1>
    
    <div class="w-full max-w-lg mx-auto"> 
        <canvas id="genderRatioChart"></canvas>
    </div>
</div>

<script>
    const genderData = {
        labels: ["Male", "Female", "Other"],
        datasets: [{
            label: "Gender Ratio",
            data: [<?php echo e($maleCount); ?>, <?php echo e($femaleCount); ?>, <?php echo e($otherCount); ?>],
            backgroundColor: ["#3b82f6", "#ec4899", "#a855f7"],
            hoverOffset: 4
        }]
    };

    const config = {
        type: 'pie',
        data: genderData,
        options: {
            responsive: true,
            maintainAspectRatio: true,
            plugins: {
                legend: {
                    position: 'top',
                },
                tooltip: {
                    enabled: true
                }
            },
            layout: {
                padding: 20 
            }
        }
    };

    const genderRatioChart = new Chart(
        document.getElementById('genderRatioChart'),
        config
    );
</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\aryan\Desktop\Laravel Project\paywave\resources\views/analytics/gender_ratio.blade.php ENDPATH**/ ?>