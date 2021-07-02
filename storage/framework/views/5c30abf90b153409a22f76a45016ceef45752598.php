<?php $__env->startSection('page-header'); ?>
<div class="page-header">
    <div class="row">
        <div class="col-md-12 col-sm-12">
            <div class="title">
                <h4>Tambah Category</h4>
            </div>
            <nav aria-label="breadcrumb" role="navigation">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/">Home</a></li>
                    <li class="breadcrumb-item"><a href="/category">Data Category</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Tambah Catecory</li>
                </ol>
            </nav>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="pd-20 card-box mb-30">
    <div class="clearfix">
        <div class="pull-left">
            <h4 class="text-blue h4">Default Basic Forms</h4>
            <p class="mb-30">All bootstrap element classies</p>
        </div>

    </div>
    <form action="<?php echo e(route('category.store')); ?>" method="POST">
        <?php echo method_field('POST'); ?>
        <?php echo csrf_field(); ?>
        <div class="form-group row">
            <label class="col-sm-12 col-md-2 col-form-label">Kategory</label>
            <div class="col-sm-12 col-md-10">
                <input class="form-control" type="text" name="nama_category" placeholder="Input Category" value="<?php echo e(old('nama_category')); ?>">
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-12 col-md-2 col-form-label">slug</label>
            <div class="col-sm-12 col-md-10">
                <input class="form-control" placeholder="input slug" name="slug" type="text" value="<?php echo e(old('slug')); ?>">
            </div>
        </div>
        <div class="box-footer">
            <a href="/category" class="btn btn-danger">Kembali</a>
            <button type="submit" class="btn btn-primary">
                Submit
            </button>
        </div>
    </form>

</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\testmodul6\resources\views/admin/category/add-category.blade.php ENDPATH**/ ?>