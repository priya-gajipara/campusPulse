<?php
require 'config/db.php';

$sql="SELECT * FROM  users";
$res=$conn->query($sql);
ob_start();
?>
<div class="col-md-10">
    <div class="row">
        <table class="table table-striped table-borderrer">
            <tr>
                <th>ID</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Eamil</th>
                <th>Password</th>
                <th>Phone Number</th>
                <th>Gender</th>
                <th>Modify</th>
                <th>Status</th>
            </tr>



            <?php
            if($res->num_rows>0)
            
                while($row=$res->fetch_assoc())
            
               {


           
                 
                    echo "
                    <tr>
                     <td> $row[ID] </td>
                     <td> $row[f_name] </td>
                     <td> $row[l_name] </td>
                     <td> $row[email] </td>
                     <td> $row[password] </td>
                     <td> $row[phone_no] </td>
                     <td> $row[gender] </td>
                    
            
                     
                     </td>
                     <td>
                     <a href='update.php?id=$row[ID]' class='btn btn-success' >edit</a>
                     <a class='btn btn-danger' href='delete.php?id=$row[ID]'>delete</a>
                

                     </td> 
                     
                     <td>";

                     
                
                     if($row['status']==1)
                                             {
                                                 ?><p><a href="status.php?id=<?php echo $row['ID']?>&status=0"
                    class="btn btn-success">active</a></p><?php
                                             }
                                             else
                                             {
                                                 ?>
            <p><a href="status.php?id=<?php echo $row['ID']?>&status=1" class="btn btn-danger">inactive</a></p><?php
                                             }
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
include_once __DIR__ . '/layout/app_layout2.php';
?>