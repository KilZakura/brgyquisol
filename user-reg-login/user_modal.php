<!-- Update User Modal -->
<div class="modal fade" id="updateUserModal" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content rounded-lg shadow-lg">
            <div class="modal-header bg-dark text-white">
                <h5 class="modal-title">Update User</h5>
                <button type="button" class="close text-white" data-dismiss="modal">
                    <span>&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="updateUserForm" action="update_user.php" method="POST">
                    <input type="hidden" id="updateUserID" name="tbl_user_id">

                    <div class="form-group">
                        <label for="updateFirstName">First Name</label>
                        <input type="text" class="form-control" id="updateFirstName" name="first_name" placeholder="Enter first name" required>
                    </div>

                    <div class="form-group">
                        <label for="updateLastName">Last Name</label>
                        <input type="text" class="form-control" id="updateLastName" name="last_name" placeholder="Enter last name" required>
                    </div>

                    <div class="form-group">
                        <label for="updateEmail">Email</label>
                        <input type="email" class="form-control" id="updateEmail" name="email" placeholder="Enter email" required>
                    </div>

                    <div class="form-group">
                        <label for="updateUsername">Username</label>
                        <input type="text" class="form-control" id="updateUsername" name="username" placeholder="Enter username" required>
                    </div>

                    <div class="form-group">
                        <label for="updateContact">Contact Number</label>
                        <input type="text" class="form-control" id="updateContact" name="contact_number" placeholder="Enter contact number" required>
                    </div>

                    <div class="form-group">
                        <label for="updatePassword">New Password</label>
                        <input type="password" class="form-control" id="updatePassword" name="password" placeholder="Enter new password">
                    </div>

                    <div class="form-group text-center mt-4">
                        <button type="submit" class="btn btn-primary btn-block">Save Changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- CLOSE User Modal -->

<!-- Include jQuery and Bootstrap -->
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js"></script>

<script>
    // Update user
// Open modal function (when user update is clicked)
function update_user(id) {
    $("#updateUserModal").modal("show");
    // Populate fields with current user data
    $("#updateUserID").val($("#userID-" + id).text());
    $("#updateFirstName").val($("#firstName-" + id).text());
    $("#updateLastName").val($("#lastName-" + id).text());
    $("#updateEmail").val($("#email-" + id).text());
    $("#updateUsername").val($("#username-" + id).text());
    $("#updateContact").val($("#contactNumber-" + id).text());  // Populate the contact number field
    $("#updatePassword").val(""); // Reset the password field
}

// Handle form submission via AJAX
$('#updateUserForm').on('submit', function(e) {
    e.preventDefault();  // Prevent default form submission

    var formData = {
        tbl_user_id: $('#updateUserID').val(),
        first_name: $('#updateFirstName').val(),
        last_name: $('#updateLastName').val(),
        email: $('#updateEmail').val(),
        username: $('#updateUsername').val(),
        contact_number: $('#updateContact').val(),  // Add contact number
        password: $('#updatePassword').val()
    };

    $.ajax({
        url: './endpoint/update-user.php', // Correct PHP endpoint for user update
        type: 'POST',
        data: formData,
        success: function(response) {
            alert('User updated successfully!');
            window.location.reload(); // Or redirect to user page
        },
        error: function(xhr, status, error) {
            alert('Error: ' + error);
        }
    });
});


        // Delete user
        function delete_user(id) {
            if (confirm("Do you want to delete this user?")) {
                window.location = "./endpoint/delete-user.php?user=" + id;
            }
        }

 </script>


