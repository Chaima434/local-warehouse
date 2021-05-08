<?php
    require_once('../app/action/Category/findCategoryById.php');
?>
<div class="content-wrapper">
    <div class="row">
        <div class="col-md-12 grid-margin">
            <div class="col-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Update Category</h4>
                        <form class="forms-sample" method="POST" action="../app/action/Category/update.php">
                            <input type="text" name="id" value="<?php echo $category->getId() ; ?>" hidden/>
                            <div class="form-group">
                                <label for="label">Label</label>
                                <input type="text" class="form-control" id="label" name="label" placeholder="label" value="<?php echo $category->getLabel() ; ?>">
                            </div>
                            <div class="form-group">
                               <label for="description">Description</label>
                               <textarea  class="form-control" id="description" rows="4" name="description" > <?php echo $category->getDescription() ; ?> </textarea>
                            </div>
                            <button id="btUpdateCategory" type="submit" class="btn btn-primary mr-2">Submit</button>
                        </form>
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
			$("#btUpdateCategory").click
			(
				function(e)
				{
                    var label = $('#label').val();
                    var description = $('#description').val();
                    if (label === "") // you can use tripe = (===) to compare two string 
                    {
                        $('#label').focus ();
                        alertify.error("You should enter the label !");
                        e.preventDefault();
                    }
                    else
                    {
                        if(description === "") 
                        {
                            $('#description').focus ();
                            alertify.error("You should enter the description !");
                            e.preventDefault();
                        }
                    }
                    
                }
            );
        }
    );
</script>