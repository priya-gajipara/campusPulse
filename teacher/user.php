<?php
require '../config/db.php';
$title='';
$sql="SELECT * FROM  users";
$res=$conn->query($sql);
ob_start();
?>
<a class="btn btn-success my-3" href="form.php" role="button">Add User</a>
<div class="col-md-10">
    <div class="row">
        <table class="table table-striped table-borderrer">
            <tr>


                <th>ID</th>
                <th>First Name</th>
                <th>Middle Name</th>
                <th>Last Name</th>
                <th>Eamil</th>
                <th>role_id</th>
                <th>Date Of Birth</th>
                <th>Phone Number</th>
                <th>Gender</th>
                <th>Address</th>
                <th>Year of Study</th>
                

            </tr>

            <?php
            if($res->num_rows>0)
            
                while($row=$res->fetch_assoc())
            
               {
                            
                    echo "
                    <tr>
                    
                     <td> $row[ID] </td>
                     <td> $row[f_name] </td>
                     <td> $row[m_name] </td>
                     <td> $row[l_name] </td>
                     <td> $row[email] </td>
                     <td> $row[role_id] </td>
                     <td> $row[dob] </td>
                     <td> $row[phone_no] </td>
                     <td> $row[gender] </td>
                     <td> $row[address] </td>
                     <td> $row[year_of_study] </td>";
                    }
               ?>
        </td>

        </tr>
    </table>
</div>
</div>

<?php

$content = ob_get_clean();
// Include layout
include_once __DIR__ . '/../layout/app_layout2.php';
?>




                    
                     

                     
                
                     