<div class="content-wrapper">
    <div class="row">
        <div class="col-md-12 grid-margin">
            <div class="col-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Add new Category</h4>
                        <form class="forms-sample" method="POST" action="../app/action/Category/add.php">
                            <div class="form-group">
                                <label for="label">Label</label>
                                <input type="text" class="form-control" id="label" name="label" placeholder="label">
                            </div>
                            <div class="form-group">
                               <label for="description">Description</label>
                               <textarea class="form-control" id="description" rows="4" name="description"></textarea>
                            </div>
                            <button id="btAddCategory" type="submit" class="btn btn-primary mr-2">Submit</button>
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
			$("#btAddCategory").click
			(
				function(e)
				{
                    var label = $('#label').val();
                    var description = $('#description').val();
                    if (label=="")
                    {
                        $('#label').focus ();
                        alertify.error("you should enter the label !");
                        e.preventDefault();
                    }
                    else {
                        if(description=="") 
                        {
                            $('#description').focus ();
                        alertify.error("you should enter the description !");
                        e.preventDefault();
                            
                        }
                    }
                    
                }
            );
        }
    );
</script>