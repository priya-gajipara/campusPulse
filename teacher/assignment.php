
<body>
    <div class="container">
        <h2>Create Assignment</h2>
        <form action="assignment_verify.php" method="post">
            <div class="form-group">
                <label for="title">Title:</label>
                <input type="text" class="form-control" id="title" name="title" required>
            </div>
            <div class="form-group">
                <label for="description">Description:</label>
                <textarea class="form-control" id="description" name="description" required></textarea>
            </div>
            <div class="form-group">
                <label for="deadline">Due Date:</label>
                <input type="datetime-local" class="form-control" id="deadline" name="due_date" required>
            </div>
            <div class="form-group">
                <label for="teacher_id">Maximum Marks:</label>
                <input type="text" class="form-control" id="teacher_id" name="max_marks" required>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</body>

<?php
$content = ob_get_clean();
include_once __DIR__ . '/../layout/app_layout2.php';
?>

