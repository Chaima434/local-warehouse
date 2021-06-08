<?php
    require_once('../app/action/Product/findProductById.php');    
?>
<div class="content-wrapper">
    <div class="row">
        <div class="col-md-12 grid-margin">
            <div class="col-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <div class="card-body">
                            <h4 class="card-title">Add new product</h4>
                            <form method="POST" action="../app/action/Product/updateImage.php" enctype="multipart/form-data">
                                <input type="text" name="id" id="id" value="<?php echo $product->getId(); ?>" hidden />
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <label for="photo" class="col-sm-3 col-form-label">Photo</label>
                                            <div class="col-sm-9">
                                                <input type="file"  class="form-control" name="image" id="label" />
                                            </div>
                                        </div>
                                        <button type="submit" id="btAddProduct" class="btn btn-primary btn-icon-text">
                                            <i class="ti-file btn-icon-prepend"></i>
                                            Submit
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>