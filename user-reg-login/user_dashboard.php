<!-- user_dashboard.php -->
<div class="row">
    <div class="col-12">
        <h4>Users</h4>
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>User ID</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Contact Number</th>
                    <th>Email</th>
                    <th>Username</th>
                    <th>Password</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                    $stmt = $conn->prepare("SELECT * FROM `tbl_user`");
                    $stmt->execute();
                    foreach ($stmt->fetchAll() as $row) {
                ?>
                <tr>
                    <td id="userID-<?= $row['tbl_user_id'] ?>"><?= $row['tbl_user_id'] ?></td>
                    <td id="firstName-<?= $row['tbl_user_id'] ?>"><?= $row['first_name'] ?></td>
                    <td id="lastName-<?= $row['tbl_user_id'] ?>"><?= $row['last_name'] ?></td>
                    <td id="contactNumber-<?= $row['tbl_user_id'] ?>"><?= $row['contact_number'] ?></td>
                    <td id="email-<?= $row['tbl_user_id'] ?>"><?= $row['email'] ?></td>
                    <td id="username-<?= $row['tbl_user_id'] ?>"><?= $row['username'] ?></td>
                    <td id="password-<?= $row['tbl_user_id'] ?>"><b>......</b></td>
                    <td>
                        <button class="btn btn-primary" type="button" onclick="update_user(<?= $row['tbl_user_id'] ?>)">Edit</button>
                        <button class="btn btn-danger" type="button" onclick="delete_user(<?= $row['tbl_user_id'] ?>)">Delete</button>
                    </td>
                </tr>    
                <?php } ?>
            </tbody>
        </table>
    </div>
</div>
<!-- user_dashboard.php -->
