<?php $__env->startSection('page-header'); ?>
<div class="page-header">
    <div class="row">
        <div class="col-md-12 col-sm-12">
            <div class="title">
                <h4>Data Category</h4>
            </div>
            <nav aria-label="breadcrumb" role="navigation">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Data Catecory</li>
                </ol>
            </nav>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="card-box mb-30">
    <div class="pd-20">
        <h4 class="text-blue h4">Data Table Category</h4>
        <div class="pull-right">
            <a href="<?php echo e(route('content.create')); ?>"><button type="button" class="btn btn-sm" data-bgcolor="#3b5998" data-color="#fff"> <i class="fa fa-plus-square"></i> Add</button>
            </a>
        </div>
        <p class="mb-0">Data Table category dari seluruh content</p>
    </div>
    <div class="pb-20">

        <table class="data-table table stripe hover nowrap">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Title</th>
                    <th class="table-plus datatable-nosort">Poster</th>
                    <th>Category</th>
                    <th>Start Date</th>
                    <th>End Date</th>
                    <th>Status</th>
                    <th class="datatable-nosort">Action</th>
                    <th>Description</th>
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $content; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td> <?php echo e($loop->iteration); ?> </td>
                    <td class="table-plus"><?php echo e($data->title); ?></td>
                    <td>
                        <?php if(strlen($data->gambar)>0): ?>
                        <img src="<?php echo e(asset('foto/content/'.$data->gambar)); ?>" alt="" width="200px">
                        <?php endif; ?>
                    </td>
                    <td><?php echo e($data->Category->nama_category); ?></td>
                    <td>29-03-2018</td>
                    <td>29-03-2018</td>
                    <td>
                        <?php if($data->status == "Published"): ?>
                        <span class="badge badge-success">Published</span>
                        <?php else: ?>
                        <span class="badge badge-warning">draf</span>
                        <?php endif; ?>
                    </td>
                    <td>
                        <div class="dropdown">
                            <a class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle" href="#" role="button" data-toggle="dropdown">
                                <i class="dw dw-more"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
                                <a class="dropdown-item" href="#"><i class="dw dw-eye"></i> View</a>
                                <a class="dropdown-item" href="<?php echo e(route('content.edit', $data->id)); ?>"><i class="dw dw-edit2"></i> Edit</a>
                                <form class="float-left m-1" action="<?php echo e(route('content.destroy', [$data->id])); ?>" method="POST">
                                    <?php echo method_field('delete'); ?>
                                    <?php echo csrf_field(); ?>
                                    <button class="dropdown-item"><i class="dw dw-delete-3"></i> Delete</button>
                                </form>

                            </div>
                        </div>
                    </td>
                    <td><?php echo e($data->deskripsi); ?></td>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            </tbody>
        </table>

    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\coba_tubes\resources\views/admin/content/list-content.blade.php ENDPATH**/ ?>