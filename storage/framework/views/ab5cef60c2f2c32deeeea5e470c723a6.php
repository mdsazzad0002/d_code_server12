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
    <div id="contribution_chart"></div>
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
            name: "Comment",
            data: <?php echo e($comment_array_values); ?>

          },
          {
            name: "Post",
            data: <?php echo e($post_array_values); ?>

          },
          {
            name: "Vote",
            data: <?php echo e($vote_array_values); ?>

          },
          {
            name: "Job",
            data: <?php echo e($job_for_report); ?>

          },
          {
            name: "Job Applied",
            data: <?php echo e($job_apply_for_report); ?>

          }
        ],
          chart: {
          height: 350,
          type: 'bar',
          foreColor: '#ccc',
          stacked: true,
          zoom: {
            enabled: true
          },

          toolbar: {
            show: false
          }
        },
        tooltip: {
            theme: 'dark'
        },
        colors: ['#77B6EA', '#545454','#000','#6befce', '#d6fcdf'],
        dataLabels: {
          enabled: true,
        },
        stroke: {
          curve: 'smooth'
        },
        title: {
          text: "<?php echo e($user->name); ?>'s  Contribute Rate",
          align: 'left'
        },
        grid: {
          borderColor: "#535A6C",
          row: {
            colors: ['#f3f3f3', 'transparent'], // takes an array which will be repeated on columns
            opacity: 0.5
          },
            padding: {
              right: 20
            }

        },
        markers: {
          size: 1
        },
        xaxis: {
          categories: <?php echo e($days30); ?>,
          title: {
            text: 'Date'
          }
        },
        yaxis: {
          title: {
            text: 'Vote * Comment * Post'
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

        var chart = new ApexCharts(document.querySelector("#contribution_chart"), options);
        chart.render();
</script>
<?php $__env->stopPush(); ?>

<?php /**PATH D:\wamp\www\GitHubDesktop\d_code_server12\resources\views/profile/profile_partials/comment_report.blade.php ENDPATH**/ ?>