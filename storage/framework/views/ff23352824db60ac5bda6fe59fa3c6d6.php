<?php if(general_setting('system_showup')=='on'): ?>
<div class="content-header pb-0">
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-12">
          <?php $__env->startComponent('components.frontend.ads', ['where'=>'footer_showup']); ?><?php echo $__env->renderComponent(); ?>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <?php endif; ?>
<?php /**PATH /home/hossain/docde/d_code_server12/resources/views/frontend/layouts/partials/footer_ads.blade.php ENDPATH**/ ?>