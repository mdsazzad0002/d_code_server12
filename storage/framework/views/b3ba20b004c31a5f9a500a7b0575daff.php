
<!-- REQUIRED SCRIPTS -->
<!-- jQuery -->
<script src="<?php echo e(static_asset('plugins/jquery/jquery.min.js')); ?>"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="<?php echo e(static_asset('plugins/bootstrap/js/bootstrap.bundle.min.js')); ?>"></script>
<!-- overlayScrollbars -->

<!-- AdminLTE App -->
<script src="<?php echo e(static_asset('common/main.js')); ?>"></script>
<script src="<?php echo e(static_asset('frontend/js/adminlte.js')); ?>"></script>
<script src="<?php echo e(static_asset('plugins/')); ?>/select2/js/select2.full.min.js"></script>
<!-- PAGE PLUGINS -->

<script src="<?php echo e(static_asset('plugins/')); ?>/markdown/simplemde.min.js"></script>
<script src="<?php echo e(static_asset('plugins/')); ?>/prism/prism.js"></script>



<script>


    // Function to vertically center the active link within its list item
function verticallyCenterActiveLink() {
  // Get all list items and active links
  var sidebar = document.querySelector('.sidebar .os-viewport-native-scrollbars-invisible');
    var activeLink = document.querySelector('#nav_left_sidebar a.active');

    if (activeLink && sidebar) {
      // Calculate the position of the active link relative to the sidebar
      var linkTop = activeLink.getBoundingClientRect().top - sidebar.getBoundingClientRect().top;
      var linkHeight = activeLink.offsetHeight;
      var containerHeight = sidebar.clientHeight;
      var scrollPosition = linkTop - (containerHeight / 2) + (linkHeight / 2);

      // Scroll the sidebar to center the active link
      sidebar.scrollTop = scrollPosition;
    }
    }

// Call the function when the page loads and whenever it's resized
$(document).ready(function() {
    window.onload = window.onresize = verticallyCenterActiveLink;
})

</script>




<?php /**PATH D:\wamp\www\GitHubDesktop\d_code_server\resources\views/frontend/layouts/partials/js.blade.php ENDPATH**/ ?>