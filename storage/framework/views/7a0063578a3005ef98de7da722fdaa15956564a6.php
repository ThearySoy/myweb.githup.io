
<?php $__env->startSection('admin'); ?>
<div class="pagetitle">
    <h1>Profile Detail</h1>
    <nav>
        <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
        <li class="breadcrumb-item active">Dashboard</li>
        </ol>
    </nav>
</div><!-- End Page Title -->
<div class="col-xl-12">
    <div class="card">
        <div class="card-body pt-3">
            <!-- Bordered Tabs -->
            <div class="tab-content pt-2">
                <div class="tab-pane fade show active profile-overview" id="profile-overview">
                    <h5 class="card-title">Profile Details</h5>
                    <div class="nav-link nav-profile d-flex align-items-center pe-0">
                    <img  width="120px" height="120px" id="show-profile" src="<?php echo e((!empty(@$viewAdminData->profile_image)) ?
                     asset('backend/upload/admin_profile/'.@$viewAdminData->profile_image) :
                     asset('backend/upload/No_Image.jpg')); ?>" alt="Profile">
                    </div>
                    <div class="row mt-3">
                        <div class="col-lg-3 col-md-4 label ">Name</div>
                        <div class="col-lg-9 col-md-8"><strong><?php echo e(@$viewAdminData->name); ?></strong></div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-lg-3 col-md-4 label">Username</div>
                        <div class="col-lg-9 col-md-8"><strong><?php echo e(@$viewAdminData->username); ?></strong></div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-lg-3 col-md-4 label">Email</div>
                        <div class="col-lg-9 col-md-8"><strong><?php echo e(@$viewAdminData->email); ?></strong></div>
                    </div>
                    <div class="mt-3">
                      <a href="<?php echo e(route('admin.edit.profile')); ?>" class="btn btn-sm btn-primary">Edit <i class="bi bi-journal-text"></i></a>
                    </div>
                </div>
            </div><!-- End Bordered Tabs -->
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.admin_master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\website\resources\views/admin/viewProfile.blade.php ENDPATH**/ ?>