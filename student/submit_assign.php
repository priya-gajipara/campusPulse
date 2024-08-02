<?php
session_start();
require '../vendor/autoload.php';
require '../config/db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $assignment_id = $_POST['assignment_id'];
    $student_id = $_SESSION['id'];
    $file_path = $_FILES['file_path']['name'];
    $submission_date = date('Y-m-d');

    $upload_dir = '../upload_assignment/';
    if (!is_dir($upload_dir)) {
        mkdir($upload_dir, 0777, true);
    }

    $file_destination = $upload_dir . basename($file_path);
    if (move_uploaded_file($_FILES['file_path']['tmp_name'], $file_destination)) {
        $qry = "INSERT INTO submission (assignment_id, user_id, file_path, submission_date) VALUES ('$assignment_id', '$student_id', '$file_destination', '$submission_date')";
        mysqli_query($conn, $qry);
        header('location:submit_assign.php');
    } else {
        echo "Failed to upload file.";
    }
}

$qry = "SELECT * FROM assignment;";
$assignments = mysqli_query($conn, $qry);

ob_start();
?>

<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <h2>Assignments</h2>
            <table class="table table-hover table-striped table-bordered mb-0">
                <thead class="bg-dark text-white text-center">
                    <tr>
                        <th>Title</th>
                        <th>Description</th>
                        <th>Due Date</th>
                        <th>Upload File</th>
                        <th>Submit</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while ($row = mysqli_fetch_assoc($assignments)) {
                        $assignment_id = $row['ID'];
                        $student_id = $_SESSION['id'];
                        $submission_check = "SELECT * FROM submission WHERE assignment_id = '$assignment_id' AND user_id = '$student_id'";
                        $submission_result = mysqli_query($conn, $submission_check);
                        $submitted = mysqli_num_rows($submission_result) > 0;
                    ?>
                        <tr>
                            <td><?php echo $row['title']; ?></td>
                            <td><?php echo $row['description']; ?></td>
                            <td><?php echo $row['due_date']; ?></td>
                            <td class="text-center">

                                <?php if ($submitted) { ?>
                                    <span class="text-success">Submitted</span>
                                <?php } else { ?>
                                    <form action="submit_assign.php" method="post" enctype="multipart/form-data">
                                        <input type="hidden" name="assignment_id" value="<?php echo $row['id']; ?>">
                                        <div class="form-group">
                                            <input type="file" name="file_path" required>
                                        </div>
                            </td>
                            <td class="text-center">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </td>
                            </form>
                        <?php } ?>
                        </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<?php
$content = ob_get_clean();
include_once __DIR__ . '/../layout/app_layout2.php';
?>