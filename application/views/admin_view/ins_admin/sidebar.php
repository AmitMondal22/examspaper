
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

<!-- Sidebar - Brand -->
<a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?php echo base_url(); ?>">
    <div class="sidebar-brand-icon rotate-n-15">
        <!-- <i class="fas fa-laugh-wink"></i> -->
        <img src="<?php echo base_url(); ?>admin/img/logo.png" alt="" style="width: 30px;">
    </div>
    <div class="sidebar-brand-text mx-3">examspaper.in</div>
</a>

<!-- Divider -->
<hr class="sidebar-divider my-0">

<!-- Nav Item - Dashboard -->
<!-- <li class="nav-item">
    <a class="nav-link" href="index.html">
        <i class="fas fa-fw fa-tachometer-alt"></i>
        <span>Dashboard</span></a>
</li>


<hr class="sidebar-divider"> -->

<!-- Heading -->
<div class="sidebar-heading">
    PAGE INFO
</div>

<!-- Nav Item - Pages Collapse Menu -->
<!-- <li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
        aria-expanded="true" aria-controls="collapseTwo">
        <i class="fas fa-fw fa-cog"></i>
        <span>Components</span>
    </a>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Custom Components:</h6>
            <a class="collapse-item" href="buttons.html">Buttons</a>
            <a class="collapse-item" href="cards.html">Cards</a>
        </div>
    </div>
</li> -->

<!-- Nav Item - Utilities Collapse Menu -->
<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
        aria-expanded="true" aria-controls="collapseUtilities">
        <i class="fas fa-fw fa-eye"></i>
        <span>Public</span>
    </a>
    <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
        data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Custom Utilities:</h6>
            <a class="collapse-item" href="<?php echo base_url(); ?>all-contact">Contact list</a>
            <a class="collapse-item" href="<?php echo base_url(); ?>user">All User</a>
            <!-- <a class="collapse-item" href="">Animations</a>
            <a class="collapse-item" href="">Other</a> -->
        </div>
    </div>
</li>

<!-- Divider -->
<hr class="sidebar-divider">

<!-- Heading -->
<div class="sidebar-heading">
    Addons
</div>

<!-- Nav Item - Pages Collapse Menu -->
<li class="nav-item">
    <a class="nav-link" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true"
        aria-controls="collapsePages">
        <i class="fas fa-fw fa-database"></i>
        <span>Add Data ins</span>
    </a>
    <div id="collapsePages" class="collapse " aria-labelledby="headingPages"
        data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Login Screens:</h6>
            <a class="collapse-item" href="<?php echo base_url(); ?>insert-year">Add Yera</a>
            <a class="collapse-item" href="<?php echo base_url(); ?>insert-stream">Add Stream</a>
            <a class="collapse-item" href="<?php echo base_url(); ?>all-institute">Institute</a>
            <a class="collapse-item" href="<?php echo base_url(); ?>institute-type">Institute Tupe</a>
            
        </div>
    </div>
</li>

<!-- Nav Item - Charts -->
<li class="nav-item">
    <a class="nav-link" href="<?php echo base_url(); ?>admin-upload-quastion">
        <i class="fas fa-fw fa-file-import"></i>
        <span>Upload Quastion</span></a>
</li>

<!-- Nav Item - Tables -->
<!-- <li class="nav-item">
    <a class="nav-link" href="<?php echo base_url(); ?>all-quastions">
        <i class="fas fa-fw fa-table"></i>
        <span>All quastion</span></a>
</li> -->

<li class="nav-item active">
    <a class="nav-link" href="#" data-toggle="collapse" data-target="#collapsePagess" aria-expanded="true"
        aria-controls="collapsePagess">
        <i class="fab fa-fw fa-pied-piper-pp"></i>
        <span>Quastion</span>
    </a>
    <div id="collapsePagess" class="collapse" aria-labelledby="headingPages"
        data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Post Quastion</h6>
            <a class="collapse-item" href="<?php echo base_url(); ?>all-quastions">all quastions</a>
            <a class="collapse-item" href="<?php echo base_url(); ?>aprove-quastion">aprove quastion</a>
            <a class="collapse-item" href="<?php echo base_url(); ?>not-aprove-quastion">notaprove quastion</a>
            
        </div>
    </div>
</li>

<!-- Divider -->
<hr class="sidebar-divider d-none d-md-block">

<!-- Sidebar Toggler (Sidebar) -->
<div class="text-center d-none d-md-inline">
    <button class="rounded-circle border-0" id="sidebarToggle"></button>
</div>

</ul>