<?php
ob_start();
require '../config/db.php';
$pagetitle="Departments";
?>
    <div class="header d-flex justify-content-between align-items-center">
        <div style="text-align: right;">
            <a href="class_form.php" name= "department"class="btn btn-sm btn-primary">Add class</a>
        </div>
    </div>
    <?php
    $qry = "SELECT * FROM classes";
    $result = mysqli_query($conn, $qry);
    ?>
    <section>
        <table class="table table-stripped table-borderrer">
            <tr>
                <th>ID</th>
                <th>Department ID</th>
                <th>Class Name</th>
                <th>Status</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
            <?php
            session_start();
            while ($row = $result->fetch_assoc()) {
            ?>
                <tr>
                    <td><?php echo $row['ID']; ?></td>
                    <td><?php echo $row['department_id']; ?></td>
                    <td><?php echo $row['name']; ?></td>
                    <td>
                        <?php if($row['status'] == 1) { ?>
                            <a href="class_status.php?id=<?php echo $row['ID']; ?>&status=0" class="btn btn-sm btn-success">Active</a>
                        <?php } else { ?>
                            <a href="class_status.php?id=<?php echo $row['ID']; ?>&status=1" class="btn btn-sm btn-danger">Inactive</a>
                        <?php } ?>
                    </td>
                    <td>
                        <a href="update_class.php?id=<?php echo $row['ID']; ?>" class="btn btn-sm btn-success">Edit</a>
                    </td>
                    <td>

                        <a href="class_delete.php?id=<?php echo $row['ID']; ?>" class="btn btn-sm btn-danger" >Delete</a>
                    </td>

                    

                </tr>
            <?php
            }
            ?>
        </table>
    </section>
<?php
$content = ob_get_clean();

include_once __DIR__ . '/../layout/app_layout2.php';
?>