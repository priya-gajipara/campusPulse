<?php
ob_start();
session_start();
require '../config/db.php';
    $id=$_SESSION['id'];
    $qry = "SELECT * FROM users where id = $id;";
    $result = mysqli_query($conn, $qry);
    $rows = $result->fetch_assoc();
    ?>
    
    <section>
        <table class="table table-stripped table-borderrer">
            <tr>
                <th>ID:</th>
                <td><?php echo $rows['ID']; ?></td>
            </tr>
            <tr>
                <th>First Name:</th>
                <td><?php echo $rows['f_name']; ?></td>
            </tr>
            <tr>
                <th>Middle Name:</th>
                <td><?php echo $rows['m_name']; ?></td>
            </tr>
            <tr>
                <th>Last Name:</th>
                <td><?php echo $rows['l_name']; ?></td>
            </tr>
            <tr>
                <th>Email:</th>
                <td><?php echo $rows['email']; ?></td>
            </tr>
            <tr>
                <th>Date of Birth:</th>
                <td><?php echo $rows['dob']; ?></td>
            </tr>
            <tr>
                <th>Gender</th>
                <td><?php echo $rows['gender']; ?></td>
            </tr>
            <tr>
                <th>Address:</th>
                <td><?php echo $rows['address']; ?></td>
            </tr>
            <tr>
                <th>Mobile Number:</th>
                <td><?php echo $rows['phone_no']; ?></td>
            </tr>
            <tr>
                <th>Year of Study:</th>
                <td><?php echo $rows['year_of_study']; ?></td>
            </tr>
            <?php
            
            ?>
        </table>
        <a href='update.php?id=<?php echo $rows['ID']?>' class='btn btn-success' >edit</a>              
        </section>
<?php
$content = ob_get_clean();

include_once __DIR__ . '/../layout/app_layout2.php';
?>