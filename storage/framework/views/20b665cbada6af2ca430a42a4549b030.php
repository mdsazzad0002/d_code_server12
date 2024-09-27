<div class="mt-3">
    <table>
        <tbody>
            <tr>
                <td>
                    Organization
                </td>
                <td>
                   : <?php echo e($job_items->company_name); ?>

                </td>
            </tr>
            <tr>
                <td>
                    Type
                </td>
                <td>
                   : <?php echo e($job_items->company_type); ?>

                </td>
            </tr>
             <tr>
                <td>
                    District
                </td>
                <td>
                   : <?php echo e($job_items->district_name); ?>

                </td>
            </tr>
             <tr>
                <td>
                    Location
                </td>
                <td>
                   : <?php echo e($job_items->location); ?>

                </td>
            </tr>
             <tr>
                <td>
                    Start Date
                </td>
                <td>
                   : <span class="text-success"><?php echo e(\Carbon\Carbon::parse($job_items->start_date)->format('d-M-Y')); ?></span>
                </td>
            </tr>
             <tr <?php if($job_items->deadline < \Carbon\Carbon::now()): ?> class="bg-danger"  <?php endif; ?>>
                <td>
                    Dadeline
                </td>
                <td>
                   : <span class="text-dark"><?php echo e(\Carbon\Carbon::parse($job_items->deadline)->format('d-M-Y')); ?></span>
                </td>
            </tr>

        </tbody>
    </table>
</div>
<?php /**PATH D:\wamp\www\GitHubDesktop\d_code_server12\resources\views/frontend/job/partials/company_details.blade.php ENDPATH**/ ?>