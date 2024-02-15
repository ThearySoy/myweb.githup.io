
<?php $__env->startSection('admin'); ?>
<div class="pagetitle">
    <h1>Home Page Informaion</h1>
    <nav>
        <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
        <li class="breadcrumb-item active">Dashboard</li>
        </ol>
    </nav>
</div><!-- End Page Title -->

<!-- General Form Elements -->
<p style='font-size:15px'>Please make sure before you update</p>
<form method="post" action="<?php echo e(route('admin.store.home.page.information')); ?>">
    <?php echo csrf_field(); ?>
    <input type="hidden" name="id" value="<?php echo e(@$homepage->id); ?>">
    <div class="row mb-3">
        <label for="short_title" class="col-sm-2 col-form-label"><strong>Short-Titile</strong></label>
        <div class="col-sm-10">
        <input type="text" class="form-control" id="short_title" name="short_title" value="<?php echo e(@$homepage->short_title); ?>">
        </div>
    </div>
    <div class="row mb-3">
        <label for="long_title" class="col-sm-2 col-form-label"><strong>Long-Titile</strong></label>
        <div class="col-sm-10">
        <input class="form-control" id="long_title" name="long_title" value="<?php echo e(@$homepage->long_title); ?>"></input>
        </div>
    </div>
    <div class="row mb-3">
        <label for="url" class="col-sm-2 col-form-label"><strong>URL</strong></label>
        <div class="col-sm-10">
        <input class="form-control" id="url" name="url" value="<?php echo e(@$homepage->url); ?>"></input>
        </div>
    </div>
    <div class="text-center">
        <button type="submit" class="btn btn-primary">Save Changes</button>
    </div>
</form><!-- End General Form Elements -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.admin_master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\website\resources\views/admin/homepage/index.blade.php ENDPATH**/ ?>