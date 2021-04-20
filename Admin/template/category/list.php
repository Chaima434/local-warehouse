<?php
    require_once('../app/action/Category/getAll.php');
?>
<style>

</style>
<div class="content-wrapper">
    <div class="row">
        <div class="col-md-12 grid-margin">
            <div class="col-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">List of all Category</h4>
                        <input type="text" id="myInput" onkeyup="myFunction();" placeholder="Search a categori.." />
                        <table class="table table-hover" id="example">
                            <thead>
                                <tr>
                                    
                                    <th> Label </th>
                                    <th> Description </th>
                                    <th>Update</th>
                                    <th>Delete</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    $i = 1;
                                    foreach($listcat as $v)
                                    {
                                        $id = $v{'id'};
                                        $Label= $v{'label'};
                                       $Description = $v{'description'};
                                        echo "<tr>";
                                            echo "<td> $Label </td> ";
                                            echo "<td> $Description </td> ";
                                            echo "<td><button onclick='update($id);' class='fa fa-pencil'></button></td>";
                                            echo "<td><button onclick='destroy($id);' class='fa fa-trash'></<button></td>";
                                        echo "<tr>";
                                        $i++;
                                    }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    function myFunction()
    {
        var input, filter, table, tr, td, i, txtValue;
        input = document.getElementById("myInput");
        filter = input.value.toUpperCase();
        table = document.getElementById("example");
        tr = table.getElementsByTagName("tr");
        for (i = 0; i < tr.length; i++)
        {
            td = tr[i].getElementsByTagName("td")[0];
            if (td)
            {
                txtValue = td.textContent || td.innerText;
                if (txtValue.toUpperCase().indexOf(filter) > -1)
                {
                    tr[i].style.display = "";
                }
                else
                {
                    tr[i].style.display = "none";
                }
            }       
        }
    }
    
    function destroy(id)
    {
        alertify.confirm
        (
            "Do you want to delete this category ?.",
            function()
            {
                $.ajax
                (
                    {
                        async: false, //if you want to change a global variable you should add this instruction
                        type: 'POST',
                        url: "../app/action/Category/delete.php",
                        data:
                        {
                            'id' : id
                        },
                        success: 
                        function(result)
                        {
                            alertify.success(result);
                        }
                    }
                );
            },
            function()
            {
                alertify.error('You cancelled the deleting');
            }
        );
    }
    
    function update(id)
    {
        location.href = "Category_Management.php?page=update&id="+id;
    }
</script>