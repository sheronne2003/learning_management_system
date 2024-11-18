<?php
// Include database connection
require_once "./includes/dbh.inc.php";

// Fetch all students from the database
$result = mysqli_query($conn, "SELECT * FROM student");

// Add Student
if (isset($_POST['add'])) {
    $index = $_POST['index_no'];
    $name = $_POST['name'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $intake = $_POST['intake'];
    
    mysqli_query($conn, "INSERT INTO student (index_no, name, password, intake) VALUES ('$index', '$name', '$password', '$intake')");
    header('Location: users.php');
}

// Edit Student
if (isset($_POST['edit'])) {
    $id = $_POST['id'];
    $index = $_POST['index_no]'];
    $name = $_POST['name'];
    $intake = $_POST['intake'];
    
    if ($_POST['password'] != "") {
        $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
        mysqli_query($conn, "UPDATE student SET index_no = '$index', name = '$name', password = '$password', intake = '$intake' WHERE id = $id");
    } else {
        mysqli_query($conn, "UPDATE student SET index_no = '$index', name = '$name', password = '$password', intake = '$intake' WHERE id = $id");
    }
    header('Location: users.php');
}

// Delete Student
if (isset($_GET['delete'])) {
    $id = $_GET['delete'];
    mysqli_query($conn, "DELETE FROM student WHERE id = $id");
    header('Location: users.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Management</title>
</head>
<body>

    <h2>Student Management</h2>

    <!-- Add New Student Form -->
    <form method="POST">
        <h3>Add New Student</h3>
        <input type="index_no" name="index_no" placeholder="Index No" required>
        <input type="name" name="name" placeholder="Name" required>
        <input type="password" name="password" placeholder="Password" required>
        <input type="intake" name="intake" placeholder="Intake" required>
        <button type="submit" name="add">Add Student</button>
    </form>

    <hr>

    <h3>Students List</h3>
    <table border="1">
        <tr>
            <th>Index No</th>
            <th>Name</th>
            <th>Intake</th>
            <th>Actions</th>
        </tr>

        <?php while ($user = mysqli_fetch_assoc($result)) { ?>
        <tr>
            <td><?php echo $user['index_no']; ?></td>
            <td><?php echo $user['name']; ?></td>
            <td><?php echo $user['intake']; ?></td>
            <td>
                <a href="users.php?edit=<?php echo $user['id']; ?>">Edit</a> | 
                <a href="users.php?delete=<?php echo $user['id']; ?>" onclick="return confirm('Are you sure?')">Delete</a>
            </td>
        </tr>
        <?php } ?>
    </table>

    <!-- Edit Student Form -->
    <?php
    if (isset($_GET['edit'])) {
        $id = $_GET['edit'];
        $user = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM student WHERE id = $id"));
    ?>
    <h3>Edit Student</h3>
    <form method="POST">
        <input type="hidden" name="id" value="<?php echo $user['id']; ?>">
        <input type="text" name="index_no" value="<?php echo $user['index_no']; ?>" required>
        <input type="text" name="name" value="<?php echo $user['name']; ?>" required>
        <input type="password" name="password" placeholder="New Password (optional)">
        <input type="intake" name="intake" value="<?php echo $user['intake']; ?>" required>
        <button type="submit" name="edit">Update Student</button>
    </form>
    <?php } ?>

</body>
</html>
