<?php
// Include database connection
require_once "./includes/dbh.inc.php";

// Fetch all admins from the database
$result = mysqli_query($conn, "SELECT * FROM admin");

// Add Admin
if (isset($_POST['add'])) {
    $nic = $_POST['NIC'];
    $name = $_POST['Name'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    
    mysqli_query($conn, "INSERT INTO admin (NIC, Name, password) VALUES ('$nic', '$name', '$password')");
    header('Location: admins.php');
}

// Edit Admin
if (isset($_POST['edit'])) {
    $id = $_POST['id'];
    $nic = $_POST['NIC]'];
    $name = $_POST['Name'];
    
    if ($_POST['password'] != "") {
        $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
        mysqli_query($conn, "UPDATE admin SET NIC = '$nic', Name = '$name', password = '$password' WHERE id = $id");
    } else {
        mysqli_query($conn, "UPDATE admin SET NIC = '$nic', Name = '$name', password = '$password' WHERE id = $id");
    }
    header('Location: admins.php');
}

// Delete Admin
if (isset($_GET['delete'])) {
    $id = $_GET['delete'];
    mysqli_query($conn, "DELETE FROM admin WHERE id = $id");
    header('Location: admins.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admins Management</title>
</head>
<body>

    <h2>Admins Management</h2>

    <!-- Add New Admin Form -->
    <form method="POST">
        <h3>Add New Admin</h3>
        <input type="NIC" name="NIC" placeholder="NIC" required>
        <input type="Name" name="Name" placeholder="Name" required>
        <input type="password" name="password" placeholder="Password" required>
        <button type="submit" name="add">Add User</button>
    </form>

    <hr>

    <h3>admins List</h3>
    <table border="1">
        <tr>
            <th>NIC</th>
            <th>Name</th>
            <th>Actions</th>
        </tr>

        <?php while ($user = mysqli_fetch_assoc($result)) { ?>
        <tr>
            <td><?php echo $user['NIC']; ?></td>
            <td><?php echo $user['Name']; ?></td>
            <td>
                <a href="admins.php?edit=<?php echo $user['id']; ?>">Edit</a> | 
                <a href="admins.php?delete=<?php echo $user['id']; ?>" onclick="return confirm('Are you sure?')">Delete</a>
            </td>
        </tr>
        <?php } ?>
    </table>

    <!-- Edit Admin Form -->
    <?php
    if (isset($_GET['edit'])) {
        $id = $_GET['edit'];
        $user = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM admin WHERE id = $id"));
    ?>
    <h3>Edit Admin</h3>
    <form method="POST">
        <input type="hidden" name="id" value="<?php echo $user['id']; ?>">
        <input type="text" name="NIC" value="<?php echo $user['NIC']; ?>" required>
        <input type="text" name="Name" value="<?php echo $user['Name']; ?>" required>
        <input type="password" name="password" placeholder="New Password (optional)">
        <button type="submit" name="edit">Update Admin</button>
    </form>
    <?php } ?>

</body>
</html>
