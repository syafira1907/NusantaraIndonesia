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
            <a href="<?php echo e(route('category.create')); ?>"><button type="button" class="btn btn-sm" data-bgcolor="#3b5998" data-color="#fff"> <i class="fa fa-plus-square"></i> Add</button>
            </a>
        </div>
        <p class="mb-0">Data Table category dari seluruh content</p>
    </div>
    <div class="pb-20">

        <table class="data-table table stripe hover nowrap">
            <thead>
                <tr>
                    <th class="table-plus datatable-nosort" width="5%">No.</th>
                    <th>Nama Category</th>
                    <th>Date Created</th>
                    <th class="datatable-nosort">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $category; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td class="table-plus"> <?php echo e($loop->iteration); ?> </td>
                    <td><?php echo e($data->nama_category); ?></td>
                    <td><?php echo e($data->created_at); ?></td>
                    <td>
                        <div class="dropdown">
                            <a class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle" href="#" role="button" data-toggle="dropdown">
                                <i class="dw dw-more"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
                                <a class="dropdown-item" href="#"><i class="dw dw-eye"></i> View</a>
                                <a class="dropdown-item" href="<?php echo e(route('category.edit', $data->id)); ?>"><i class="dw dw-edit2"></i> Edit</a>
                                <a class="dropdown-item" href="<?php echo e("hapus/".$data->id); ?>"><i class="dw dw-delete-3"></i> Delete</a>
                            </div>
                        </div>
                    </td>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            </tbody>
        </table>

    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\coba_tubes\resources\views/admin/category/list-category.blade.php ENDPATH**/ ?>