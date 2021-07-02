<!DOCTYPE html>
<html>

<head>
    <!-- Basic Page Info -->
    <meta charset="utf-8">
    <title>DeskApp - Bootstrap Admin Dashboard HTML Template</title>

    <!-- Site favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo e(asset('adminTemplate/')); ?>/vendors/images/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo e(asset('adminTemplate/')); ?>/vendors/images/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo e(asset('adminTemplate/')); ?>/vendors/images/favicon-16x16.png">

    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <!-- switchery css -->
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('adminTemplate/')); ?>/src/plugins/switchery/switchery.min.css">
    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <!-- CSS -->
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('adminTemplate/')); ?>/vendors/styles/core.css">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('adminTemplate/')); ?>/vendors/styles/icon-font.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('adminTemplate/')); ?>/src/plugins/datatables/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('adminTemplate/')); ?>/src/plugins/datatables/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('adminTemplate/')); ?>/vendors/styles/style.css">



    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-119386393-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-119386393-1');
    </script>
</head>

<body>

    <?php echo $__env->make('admin.layout.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('admin.layout.sidebar-right', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <?php echo $__env->make('admin.layout.sidebar-left', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <div class="mobile-menu-overlay"></div>

    <div class="main-container">
        <div class="pd-ltr-20 xs-pd-20-10">
            <?php echo $__env->yieldContent('statistik'); ?>
            <div class="min-height-200px">
                <?php echo $__env->yieldContent('page-header'); ?>
                <?php echo $__env->yieldContent('content'); ?>
                <!-- Simple Datatable End -->
            </div>

            <?php echo $__env->make('admin.layout.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </div>
    </div>
    <!-- js -->
    <script src="<?php echo e(asset('adminTemplate/')); ?>/vendors/scripts/core.js"></script>
    <script src="<?php echo e(asset('adminTemplate/')); ?>/vendors/scripts/script.min.js"></script>
    <script src="<?php echo e(asset('adminTemplate/')); ?>/vendors/scripts/process.js"></script>
    <script src="<?php echo e(asset('adminTemplate/')); ?>/vendors/scripts/layout-settings.js"></script>
    <!-- <script src="<?php echo e(asset('adminTemplate/')); ?>/src/plugins/apexcharts/apexcharts.min.js"></script> -->
    <script src="<?php echo e(asset('adminTemplate/')); ?>/src/plugins/datatables/js/jquery.dataTables.min.js"></script>
    <script src="<?php echo e(asset('adminTemplate/')); ?>/src/plugins/datatables/js/dataTables.bootstrap4.min.js"></script>
    <script src="<?php echo e(asset('adminTemplate/')); ?>/src/plugins/datatables/js/dataTables.responsive.min.js"></script>
    <script src="<?php echo e(asset('adminTemplate/')); ?>/src/plugins/datatables/js/responsive.bootstrap4.min.js"></script>
    <script src="<?php echo e(asset('adminTemplate/')); ?>/vendors/scripts/dashboard.js"></script>
    <!-- buttons for Export datatable -->
    <script src="<?php echo e(asset('adminTemplate/')); ?>/src/plugins/datatables/js/dataTables.buttons.min.js"></script>
    <script src="<?php echo e(asset('adminTemplate/')); ?>/src/plugins/datatables/js/buttons.bootstrap4.min.js"></script>
    <script src="<?php echo e(asset('adminTemplate/')); ?>/src/plugins/datatables/js/buttons.print.min.js"></script>
    <script src="<?php echo e(asset('adminTemplate/')); ?>/src/plugins/datatables/js/buttons.html5.min.js"></script>
    <script src="<?php echo e(asset('adminTemplate/')); ?>/src/plugins/datatables/js/buttons.flash.min.js"></script>
    <script src="<?php echo e(asset('adminTemplate/')); ?>/src/plugins/datatables/js/pdfmake.min.js"></script>
    <script src="<?php echo e(asset('adminTemplate/')); ?>/src/plugins/datatables/js/vfs_fonts.js"></script>
    <!-- switchery js -->
    <script src="<?php echo e(asset('adminTemplate/')); ?>/src/plugins/switchery/switchery.min.js"></script>
    <!-- bootstrap-touchspin js -->
    <script src="<?php echo e(asset('adminTemplate/')); ?>/src/plugins/bootstrap-touchspin/jquery.bootstrap-touchspin.js"></script>
    <script src="<?php echo e(asset('adminTemplate/')); ?>/vendors/scripts/advanced-components.js"></script>
    <!-- Datatable Setting js -->
    <script src="<?php echo e(asset('adminTemplate/')); ?>/vendors/scripts/datatable-setting.js"></script>

</body>

</html>
<?php /**PATH C:\xampp\htdocs\testmodul6\resources\views/admin/layout/master.blade.php ENDPATH**/ ?>