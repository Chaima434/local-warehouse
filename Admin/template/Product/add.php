<div class="content-wrapper">
    <div class="row">
        <div class="col-md-12 grid-margin">
            <div class="col-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <div class="card-body">
                            <h4 class="card-title">Add new product</h4>
                            <form method="POST" action="../app/action/Product/add.php" enctype="multipart/form-data">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <label for="label" class="col-sm-3 col-form-label">Label</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" name="label" id="label" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <label for="number" class="col-sm-3 col-form-label">Number</label>
                                            <div class="col-sm-9">
                                                <input type="number" class="form-control" name="number" id="number" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <label for="price" class="col-sm-3 col-form-label">Price</label>
                                            <div class="col-sm-9">
                                                <input type="number" class="form-control" name="price" id="price" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <label for="photo" class="col-sm-3 col-form-label">Photo</label>
                                            <div class="col-sm-9">
                                                <input type="file" accept="image/*"  name="photo" id="photo" class="form-control" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <label for="description" class="col-sm-3 col-form-label">Description</label>
                                            <div class="col-sm-9">
                                                <textarea class="form-control" id="description" name="description" > </textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <label for="provider" class="col-sm-3 col-form-label">Provider</label>
                                            <div class="col-sm-9">
                                            <select class="form-control" name="idProvider" id="idProvider">
                                                <option>
                                                    
                                                </option>
                                                <?php
                                                require_once("../app/action/Provider/getAll.php");
                                                foreach($list_provider as $v)
                                                {
                                                    $id=$v{'id'};
                                                    $name=$v{'first_name'}. ' ' . $v{'last_name'} . ' '  .$v{'id'};
                                                    echo "<option value='$id'> $name </option> ";
                                                }
                                                ?>
                                            </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row" >
                                    <div class="col-md-6">
                                        <div class="form-group row">
                                             <label for="idCat" class="col-sm-3 col-form-label">Category</label>
                                             <div class="col-sm-9">
                                                <select class="form-control" name="idCat" id="idCat">
                                                <option>
                                                    
                                                </option>
                                                <?php
                                                require_once("../app/action/Category/getAll.php");
                                                foreach($listcat as $v)
                                                {
                                                    $id=$v{'id'};
                                                    $label=$v{'label'};
                                                    echo "<option value='$id'> $label </option> ";
                                                }
                                                ?>
                                            </select>
                                             </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <div class="col-sm-9">
                                                <button type="submit" id="btAddProduct" class="btn btn-primary btn-icon-text">
                                                    <i class="ti-file btn-icon-prepend"></i>
                                                    Submit
                                                </button>
                                            </div>
                                        </div>
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
<script>   
    $(document).ready
	(
		function()
		{
			$("#btAddProduct").click
			(
				function(e)
				{
                    var label = $('#label').val();
                    var number = $('#number').val();
                    var price = $('#price').val();
                    var photo = $('#photo').val();
                    var description = $('#description').val();
                    var idProvider = $('#idProvider').val();
                    var idCat = $('#idCat').val();
                    if (label=== "")
                    {
                        $('#label').focus ();
                        alertify.error("You Should enter the label");
                        e.preventDefault();
                        
                    }
                    else
                    {
                        if (number==="")
                        {
                            $('#number').focus ();
                            alertify.error("You should enter how many "+ label);
                            e.preventDefault();
                        }
                        else
                        {
                            if (price==="")
                            {
                                $('#price').focus ();
                                alertify.error("You Should enter how much");
                                e.preventDefault();
                            }
                            else
                            {
                                if(photo==="")
                                {
                                    $('#photo').focus ();
                                    alertify.error("You Should insert the photo of this product");
                                    e.preventDefault();
                                }
                                else
                                {
                                    if (description==="")
                                    {
                                        $('#description').focus ();
                                        alertify.error("You Should enter the description");
                                        e.preventDefault();
                                    }
                                    else
                                    {
                                        if (idProvider==="")
                                        {
                                            $('#idProvider').focus ();
                                            alertify.error("You Should choose the provider");
                                            e.preventDefault();
                                        }
                                        else
                                        {
                                            if(idCat==="")
                                            {
                                                $('#idCat').focus ();
                                                alertify.error("You Should choose the category");
                                                e.preventDefault(); 
                                            }
                                        }
                                    }
                                }
                            }
                        }
                    }
                }
            );
        }
    );
</script>