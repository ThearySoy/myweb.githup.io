
<?php $__env->startSection('admin'); ?>
<div class="pagetitle">
    <h1>Footer Information</h1>
    <nav>
        <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
        <li class="breadcrumb-item active">Dashboard</li>
        </ol>
    </nav>
</div><!-- End Page Title -->
<p style='font-size:15px'>Please make sure before you update</p>
<form method="post" action="<?php echo e(route('admin.updated.footer')); ?>">
    <?php echo csrf_field(); ?>
    <input type="hidden" name="id" value="<?php echo e(@$footer->id); ?>">

    <div class="row mb-3">
        <label for="logo" class="col-sm-2 col-form-label"><strong>logo</strong></label>
        <div class="col-sm-10">
        <input class="form-control" id="logo" name="logo" value="<?php echo e(@$footer->logo); ?>"></input>
        </div>
    </div>
    <div class="row mb-3">
        <label for="twitter" class="col-sm-2 col-form-label"><strong>Twitter</strong></label>
        <div class="col-sm-10">
        <input class="form-control" id="twitter" name="twitter" value="<?php echo e(@$footer->twitter); ?>"></input>
        </div>
    </div>
    <div class="row mb-3">
        <label for="facebook" class="col-sm-2 col-form-label"><strong>Facebook</strong></label>
        <div class="col-sm-10">
        <input class="form-control" id="facebook" name="facebook" value="<?php echo e(@$footer->facebook); ?>"></input>
        </div>
    </div>
    <div class="row mb-3">
        <label for="instagram" class="col-sm-2 col-form-label"><strong>Instagram</strong></label>
        <div class="col-sm-10">
        <input class="form-control" id="instagram" name="instagram" value="<?php echo e(@$footer->instagram); ?>"></input>
        </div>
    </div>
    <div class="row mb-3">
        <label for="linkedin" class="col-sm-2 col-form-label"><strong>LinkedIn</strong></label>
        <div class="col-sm-10">
        <input class="form-control" id="linkedin" name="linkedin" value="<?php echo e(@$footer->linkedin); ?>"></input>
        </div>
    </div>
    <div class="row mb-3">
        <label for="copyright_by" class="col-sm-2 col-form-label"><strong>Copyright-By</strong></label>
        <div class="col-sm-10">
        <input class="form-control" id="copyright_by" name="copyright_by" value="<?php echo e(@$footer->copyright_by); ?>"></input>
        </div>
    </div>
    <div class="row mb-3">
        <label for="designed_by" class="col-sm-2 col-form-label"><strong>Designed-By</strong></label>
        <div class="col-sm-10">
        <input class="form-control" id="designed_by" name="designed_by" value="<?php echo e(@$footer->designed_by); ?>"></input>
        </div>
    </div>
    <div class="text-center">
        <button type="submit" class="btn btn-primary">Save Changes</button>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.admin_master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\website\resources\views/admin/footer/index.blade.php ENDPATH**/ ?>