<?php
    require_once('../app/action/Provider/nbProvider.php');
    require_once('../app/action/Category/nbCategory.php');
?>

<div class="content-wrapper">
    <div class="row">
        <div class="col-md-12 grid-margin">
            <div class="d-flex justify-content-between align-items-center">
                <div>
                    <button type="button" class="btn btn-primary btn-icon-text btn-rounded">
                        <i class="ti-clipboard btn-icon-prepend"></i>Report
                    </button>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-3 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <p class="card-title text-md-center text-xl-left">Sales</p>
                    <div class="d-flex flex-wrap justify-content-between justify-content-md-center justify-content-xl-between align-items-center">
                        <h3 class="mb-0 mb-md-2 mb-xl-0 order-md-1 order-xl-0">34040</h3>
                        <i class="ti-calendar icon-md text-muted mb-0 mb-md-3 mb-xl-0"></i>
                    </div>  
                    <p class="mb-0 mt-2 text-danger">0.12% <span class="text-black ml-1"><small>(30 days)</small></span></p>
                </div>
            </div>
        </div>
        <div class="col-md-3 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <p class="card-title text-md-center text-xl-left">Provider</p>
                    <div class="d-flex flex-wrap justify-content-between justify-content-md-center justify-content-xl-between align-items-center">
                        <h3 class="mb-0 mb-md-2 mb-xl-0 order-md-1 order-xl-0"><?php echo $nb ; ?></h3>
                        <i class="ti-user icon-md text-muted mb-0 mb-md-3 mb-xl-0"></i>
                    </div>  
                    <p class="mb-0 mt-2 text-danger">0.47% <span class="text-black ml-1"><small>(30 days)</small></span></p>
                </div>
            </div>
        </div>
        <div class="col-md-3 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <p class="card-title text-md-center text-xl-left">Category</p>
                    <div class="d-flex flex-wrap justify-content-between justify-content-md-center justify-content-xl-between align-items-center">
                        <h3 class="mb-0 mb-md-2 mb-xl-0 order-md-1 order-xl-0"><?php echo $nbcat ; ?></h3>
                        <i class="ti-agenda icon-md text-muted mb-0 mb-md-3 mb-xl-0"></i>
                    </div>  
                    <p class="mb-0 mt-2 text-success">64.00%<span class="text-black ml-1"><small>(30 days)</small></span></p>
                </div>
            </div>
        </div>
        <div class="col-md-3 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <p class="card-title text-md-center text-xl-left">Returns</p>
                    <div class="d-flex flex-wrap justify-content-between justify-content-md-center justify-content-xl-between align-items-center">
                        <h3 class="mb-0 mb-md-2 mb-xl-0 order-md-1 order-xl-0">61344</h3>
                        <i class="ti-layers-alt icon-md text-muted mb-0 mb-md-3 mb-xl-0"></i>
                    </div>  
                    <p class="mb-0 mt-2 text-success">23.00%<span class="text-black ml-1"><small>(30 days)</small></span></p>
                </div>
            </div>
        </div>
    </div>
</div>