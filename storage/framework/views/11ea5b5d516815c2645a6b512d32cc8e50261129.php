<div class="left-side-bar">
    <div class="brand-logo">
        <a href="<?php echo e(asset('adminTemplate/')); ?>/index.html">
            <img src="<?php echo e(asset('adminTemplate/')); ?>/vendors/images/deskapp-logo.svg" alt="" class="dark-logo">
            <img src="<?php echo e(asset('adminTemplate/')); ?>/vendors/images/deskapp-logo-white.svg" alt="" class="light-logo">
        </a>
        <div class="close-sidebar" data-toggle="left-sidebar-close">
            <i class="ion-close-round"></i>
        </div>
    </div>
    <div class="menu-block customscroll">
        <div class="sidebar-menu">
            <ul id="accordion-menu">
                <li>
                    <div class="dropdown-divider"></div>
                </li>
                <li>
                    <div class="sidebar-small-cap">Menu</div>
                </li>

                <li>
                    <a href="/" class="dropdown-toggle no-arrow">
                        <span class="micon dw dw-house-1"></span><span class="mtext">Dashboard</span>
                    </a>
                </li>
                <li class="dropdown">
                    <a href="javascript:;" class="dropdown-toggle">
                        <span class="micon dw dw-folder-126"></span><span class="mtext">Data Master</span>
                    </a>
                    <ul class="submenu">
                        <li><a href="/category">Data Category</a></li>
                        <li><a href="/content">Data Content</a></li>
                        <li><a href="#">Data Barang</a></li>
                        <li><a href="#">Jenis Barang</a></li>
                        <li><a href="#">Satuan</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="javascript:;" class="dropdown-toggle">
                        <span class="micon dw dw-shopping-cart1"></span><span class="mtext">Transaksi</span>
                    </a>
                    <ul class="submenu">
                        <li><a href="#">Barang Masuk</a></li>
                        <li><a href="#">Barang Keluar</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="javascript:;" class="dropdown-toggle">
                        <span class="micon dw dw-file"></span><span class="mtext">Laporan</span>
                    </a>
                    <ul class="submenu">
                        <li><a href="#">Stock Barang</a></li>
                        <li><a href="#">Barang Masuk</a></li>
                        <li><a href="#">Barang Keluar</a></li>
                    </ul>
                </li>

            </ul>
        </div>
    </div>
</div>


<!-- <li>
    <div class="dropdown-divider"></div>
</li>
<li>
    <div class="sidebar-small-cap">Menu</div>
</li>

<li>
    <a href="<?php echo e(asset('adminTemplate/')); ?>/index.html" class="dropdown-toggle no-arrow">
        <span class="micon dw dw-house-1"></span><span class="mtext">Dashboard</span>
    </a>
</li>
<li class="dropdown">
    <a href="javascript:;" class="dropdown-toggle">
        <span class="micon dw dw-edit2"></span><span class="mtext">Forms</span>
    </a>
    <ul class="submenu">
        <li><a href="<?php echo e(asset('adminTemplate/')); ?>/form-basic.html">Form Basic</a></li>
        <li><a href="<?php echo e(asset('adminTemplate/')); ?>/advanced-components.html">Advanced Components</a></li>
        <li><a href="<?php echo e(asset('adminTemplate/')); ?>/form-wizard.html">Form Wizard</a></li>
        <li><a href="<?php echo e(asset('adminTemplate/')); ?>/html5-editor.html">HTML5 Editor</a></li>
        <li><a href="<?php echo e(asset('adminTemplate/')); ?>/form-pickers.html">Form Pickers</a></li>
        <li><a href="<?php echo e(asset('adminTemplate/')); ?>/image-cropper.html">Image Cropper</a></li>
        <li><a href="<?php echo e(asset('adminTemplate/')); ?>/image-dropzone.html">Image Dropzone</a></li>
    </ul>
</li> -->
<?php /**PATH C:\xampp\htdocs\coba_tubes\resources\views/admin/layout/sidebar-left.blade.php ENDPATH**/ ?>