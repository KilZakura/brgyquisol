<?php 
include ('./conn/conn.php'); // Make sure to adjust the path if necessary

// Fetch admin data from the database
$stmt = $conn->prepare("SELECT * FROM `tbl_admin`");
$stmt->execute();
?>

<h4 class="mt-5">Admin</h4>
<table class="table table-hover">
    <thead>
        <tr>
            <th>Admin ID</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Email</th>
            <th>Username</th>
            <th>Password</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <?php 
        foreach ($stmt->fetchAll() as $row) {
        ?>
        <tr>
            <td id="adminID-<?= $row['tbl_admin_id'] ?>"><?= $row['tbl_admin_id'] ?></td>
            <td id="firstNameAdmin-<?= $row['tbl_admin_id'] ?>"><?= $row['first_name_admin'] ?></td>
            <td id="lastNameAdmin-<?= $row['tbl_admin_id'] ?>"><?= $row['last_name_admin'] ?></td>
            <td id="emailAdmin-<?= $row['tbl_admin_id'] ?>"><?= $row['email_admin'] ?></td>
            <td id="usernameAdmin-<?= $row['tbl_admin_id'] ?>"><?= $row['username_admin'] ?></td>
            <td id="passwordAdmin-<?= $row['tbl_admin_id'] ?>"><b>......</b></td>
            <td>
                <button class="btn btn-primary" type="button" onclick="update_admin(<?= $row['tbl_admin_id'] ?>)">Edit</button>
                <button class="btn btn-danger" type="button" onclick="delete_admin(<?= $row['tbl_admin_id'] ?>)">Delete</button>
            </td>
        </tr>    
        <?php } ?>
    </tbody>
</table>
