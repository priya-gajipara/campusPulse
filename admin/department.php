<?php
ob_start();
require '../config/db.php';
$pagetitle="Departments";
?>
    <div class="header d-flex justify-content-between align-items-center">
        <div style="text-align: right;">
            <a href="depart_form.php" name= "department"class="btn btn-sm btn-primary">Add Department</a>
        </div>
    </div>
    <?php
    $qry = "SELECT * FROM department";
    $result = mysqli_query($conn, $qry);
    ?>
    <section>
        <table class="table table-stripped table-borderrer">
            <tr>
                <th>ID</th>
                <th>Department Name</th>
                <th>status</th>
                <th>Edit</th>
                <th>Delete</th>
                <th>Classes</th>
            </tr>
            <?php
            session_start();
            while ($row = $result->fetch_assoc()) {
            ?>
                <tr>
                    <td><?php echo $row['ID']; ?></td>
                    <td><?php echo $row['name']; ?></td>
                    <td>
                        <?php if($row['status'] == 1) { ?>
                            <a href="depart_status.php?id=<?php echo $row['ID']; ?>&status=0" class="btn btn-sm btn-success">Active</a>
                        <?php } else { ?>
                            <a href="depart_status.php?id=<?php echo $row['ID']; ?>&status=1" class="btn btn-sm btn-danger">Inactive</a>
                        <?php } ?>
                    </td>
                    <td>
                        <a href="update_dept.php?id=<?php echo $row['ID']; ?>" class="btn btn-sm btn-success">Edit</a>
                    </td>
                    <td>

                        <a href="depart_delete.php?id=<?php echo $row['ID']; ?>" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure you want to delete this user?');">Delete</a>
                    </td>

                    <td>
                        <a href="classes.php" class="btn btn-sm btn-primary">Class</a>
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