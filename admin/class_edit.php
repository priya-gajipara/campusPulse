<?php
require '../config/db.php';
ob_start();
session_start();
$id = $_GET['id'];
$dep_id = $_GET['department_id'];
$qry = "SELECT * FROM classes WHERE id=$id;";
$result = mysqli_query($conn, $qry);
$dep = mysqli_fetch_assoc($result);
?>

<div class="row">
    <h2>Update</h2>

    <form action="update_class.php" method="post">
        <div class="form-group">
            <label for="f_name">Name:</label>
            <input type="text" class="form-control" name="name" value="<?php echo $dep['name']; ?>">
        </div>
        <br>
        <input type="hidden" name="id" value="<?php echo $id; ?>">
        <input type="hidden" name="dep_id" value="<?php echo $department_id; ?>">
        <br>
        <button type="submit" name="update" class="btn btn-primary">Update</button>
    </form>
</div>

<?php
$content = ob_get_clean();
include __DIR__ . '/../layout/app_layout2.php';
?>