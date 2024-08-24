<?php if (isset($component)) { $__componentOriginal42d934a7d1fb95b9706d4d8ab536daec = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal42d934a7d1fb95b9706d4d8ab536daec = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.card.card','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('card.card'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
    <div id="chart_post"></div>
   <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal42d934a7d1fb95b9706d4d8ab536daec)): ?>
<?php $attributes = $__attributesOriginal42d934a7d1fb95b9706d4d8ab536daec; ?>
<?php unset($__attributesOriginal42d934a7d1fb95b9706d4d8ab536daec); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal42d934a7d1fb95b9706d4d8ab536daec)): ?>
<?php $component = $__componentOriginal42d934a7d1fb95b9706d4d8ab536daec; ?>
<?php unset($__componentOriginal42d934a7d1fb95b9706d4d8ab536daec); ?>
<?php endif; ?>

<?php $__env->startPush('script'); ?>



<script>

    var options = {
          series: [
          {
            name: "Last 30 Days Post",
            data: <?php echo e($post_array_values); ?>

          }
        ],
          chart: {
          height: 350,
          type: 'line',
          foreColor: '#ccc',
          dropShadow: {
            enabled: true,
            color: '#000',
            top: 18,
            left: 7,
            blur: 10,
            opacity: 0.2
          },
          toolbar: {
            show: false
          }
        },
        tooltip: {
            theme: 'dark'
        },
        colors: ['#77B6EA', '#545454','#000'],
        dataLabels: {
          enabled: true,
        },
        stroke: {
          curve: 'smooth'
        },
        title: {
          text: "<?php echo e($user->name); ?>'s Post Contribute Rate",
          align: 'left'
        },
        grid: {
          borderColor: "#535A6C",
          row: {
            colors: ['#f3f3f3', 'transparent'], // takes an array which will be repeated on columns
            opacity: 0.5
          },
        },
        markers: {
          size: 1
        },
        xaxis: {
          categories: <?php echo e($post_array_key); ?>,
          title: {
            text: 'Date'
          }
        },
        yaxis: {
          title: {
            text: 'Post'
          },
          //min: 5,
          //max: 40
        },
        legend: {
          position: 'top',
          horizontalAlign: 'right',
          floating: true,
          offsetY: -25,
          offsetX: -5
        }
        };

        var chart = new ApexCharts(document.querySelector("#chart_post"), options);
        chart.render();
</script>
<?php $__env->stopPush(); ?>

<?php /**PATH /home/hossain/docde/d_code_server12/resources/views/profile/profile_partials/post_report.blade.php ENDPATH**/ ?>