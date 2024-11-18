<?php
// Include database connection
require_once "./includes/dbh.inc.php";

// Fetch all students from the database
$result = mysqli_query($conn, "SELECT * FROM inquary");

if (isset($_GET['delete'])) {
    $id = $_GET['delete'];
    mysqli_query($conn, "DELETE FROM inquary WHERE id = $id");
    header('Location: inquires.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inquire</title>
</head>
<body>

    <h2>Message</h2>

    <h3>Message List</h3>
    <table border="1">
        <tr>
            <th>Name</th>
            <th>Index</th>
            <th>Email</th>
            <th>Subject</th>
            <th>Category</th>
            <th>Message</th>
        </tr>

        <?php while ($user = mysqli_fetch_assoc($result)) {?>
        <tr>
            <td><?php echo $user['name']; ?></td>
            <td><?php echo $user['index_no']; ?></td>
            <td><?php echo $user['email']; ?></td>
            <td><?php echo $user['subject']; ?></td>
            <td><?php echo $user['category']; ?></td>
            <td><?php echo $user['message']; ?></td>
            <td>
                <a href="inquires.php?delete=<?php echo $user['id']; ?>" onclick="return confirm('Are you sure?')">Delete</a>
            </td>
        </tr>
    
<?php } ?>
</table>
</body>
</html>