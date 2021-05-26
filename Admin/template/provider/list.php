<?php
    require_once('../app/action/Provider/getAll.php');
?>
<style>

</style>
<div class="content-wrapper">
    <div class="row">
        <div class="col-md-12 grid-margin">
            <div class="col-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">List of all Provider</h4>
                        <input type="text" id="myInput" onkeyup="myFunction();" placeholder="Search a provider.." />
                        <table class="table table-hover" id="example">
                            <thead>
                                <tr>
                                    <th>First name</th>
                                    <th>Last name</th>
                                    <th>Email</th>
                                    <th>Address</th>
                                    <th>Telephone</th>
                                    <th>Update</th>
                                    <th>Delete</th>
                                     <th>Consult</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    $i = 1;
                                    foreach($provider->getAll() as $v)
                                    {
                                        $id = $v{'id'};
                                        $first_name = $v{'first_name'};
                                        $last_name = $v{'last_name'};
                                        $email = $v{'email'};
                                        $address = $v{'address'};
                                        $telephone = $v{'telephone'};
                                        echo "<tr>";
                                            echo "<td>$first_name</td>";
                                            echo "<td>$last_name</td>";
                                            echo "<td>$email</td>";
                                            echo "<td>$address</td>";
                                            echo "<td>$telephone</td>";
                                            echo "<td><button onclick='update($id);' class='fa fa-pencil'></button></td>";
                                            echo "<td><button onclick='destroy($id);' class='fa fa-trash'></<button></td>";
                                             echo "<td><button onclick='consult($id)' class='fa fa-eye'></<button></td>";
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
            "Do you want to delete this provider ?.",
            function()
            {
                $.ajax
                (
                    {
                        async: false, //if you want to change a global variable you should add this instruction
                        type: 'POST',
                        url: "../app/action/Provider/delete.php",
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
        location.href = "Provider_Management.php?page=update&id="+id;
    }
    function consult(id)
    {
        location.href = "Provider_Management.php?page=listProvider&id="+id;
    }
</script>