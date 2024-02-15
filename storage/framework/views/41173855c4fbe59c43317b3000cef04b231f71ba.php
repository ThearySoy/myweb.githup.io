<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Dashboard - NiceAdmin Bootstrap Template</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="<?php echo e(asset('backend/assets/img/favicon.png')); ?>" rel="icon">
  <link href="<?php echo e(asset('backend/assets/img/apple-touch-icon.png')); ?>" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="<?php echo e(asset('backend/https://fonts.gstatic.com')); ?>" rel="preconnect">
  <link href="<?php echo e(asset('backend/https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i')); ?>" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="<?php echo e(asset('backend/assets/vendor/bootstrap/css/bootstrap.min.css')); ?>" rel="stylesheet">
  <link href="<?php echo e(asset('backend/assets/vendor/bootstrap-icons/bootstrap-icons.css')); ?>" rel="stylesheet">
  <link href="<?php echo e(asset('backend/assets/vendor/boxicons/css/boxicons.min.css')); ?>" rel="stylesheet">
  <link href="<?php echo e(asset('backend/assets/vendor/quill/quill.snow.css')); ?>" rel="stylesheet">
  <link href="<?php echo e(asset('backend/assets/vendor/quill/quill.bubble.css')); ?>" rel="stylesheet">
  <link href="<?php echo e(asset('backend/assets/vendor/remixicon/remixicon.css')); ?>" rel="stylesheet">
  <link href="<?php echo e(asset('backend/assets/vendor/simple-datatables/style.css')); ?>" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="<?php echo e(asset('backend/assets/css/style.css')); ?>" rel="stylesheet">

  <!-- Toaster CSS -->
  <link rel="stylesheet" type="text/css" 
  href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
	
  <!-- =======================================================
  * Template Name: NiceAdmin
  * Updated: Nov 17 2023 with Bootstrap v5.3.2
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>
<?php echo $__env->make('admin.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('admin.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

  <main id="main" class="main">
    <?php echo $__env->yieldContent('admin'); ?>
  </main><!-- End #main -->

<?php echo $__env->make('admin.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="<?php echo e(asset('backend/assets/vendor/apexcharts/apexcharts.min.js')); ?>"></script>
  <script src="<?php echo e(asset('backend/assets/vendor/bootstrap/js/bootstrap.bundle.min.js')); ?>"></script>
  <script src="<?php echo e(asset('backend/assets/vendor/chart.js/chart.umd.js')); ?>"></script>
  <script src="<?php echo e(asset('backend/assets/vendor/echarts/echarts.min.js')); ?>"></script>
  <script src="<?php echo e(asset('backend/assets/vendor/quill/quill.min.js')); ?>"></script>
  <script src="<?php echo e(asset('backend/assets/vendor/simple-datatables/simple-datatables.js')); ?>"></script>
  <script src="<?php echo e(asset('backend/assets/vendor/tinymce/tinymce.min.js')); ?>"></script>
  <script src="<?php echo e(asset('backend/assets/vendor/php-email-form/validate.js')); ?>"></script>

  <!-- Template Main JS File -->
  <script src="<?php echo e(asset('backend/assets/js/main.js')); ?>"></script>

  <!-- Toaster Js-->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>

  <script>
    <?php if(Session::has('message')): ?>
    var dataType = "<?php echo e(Session::get('alert-type','info')); ?>";
    switch(dataType){
      case 'info':
      toastr.info("<?php echo e(Session::get('message')); ?>");
      break;

      case 'success':
      toastr.success("<?php echo e(Session::get('message')); ?>");
      break;

      case 'warning':
      toastr.warning("<?php echo e(Session::get('message')); ?>");
      break;

      case 'error':
      toastr.error("<?php echo e(Session::get('message')); ?>");
      break;
    }
    <?php endif; ?>
  </script>
</body>

</html><?php /**PATH C:\wamp64\www\website\resources\views/admin/admin_master.blade.php ENDPATH**/ ?>