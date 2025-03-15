<!-- Admin Update Modal -->
<div class="modal fade" id="updateAdminModal" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content rounded-lg shadow-lg">
            <div class="modal-header bg-dark text-white">
                <h5 class="modal-title">Update Admin</h5>
                <button type="button" class="close text-white" data-dismiss="modal">
                    <span>&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="updateAdminForm">
                    <input type="hidden" id="updateAdminID">

                    <div class="form-group">
                        <label for="updateFirstNameAdmin">First Name</label>
                        <input type="text" class="form-control" id="updateFirstNameAdmin" placeholder="Enter first name">
                    </div>

                    <div class="form-group">
                        <label for="updateLastNameAdmin">Last Name</label>
                        <input type="text" class="form-control" id="updateLastNameAdmin" placeholder="Enter last name">
                    </div>

                    <div class="form-group">
                        <label for="updateEmailAdmin">Email</label>
                        <input type="email" class="form-control" id="updateEmailAdmin" placeholder="Enter email">
                    </div>

                    <div class="form-group">
                        <label for="updateUsernameAdmin">Username</label>
                        <input type="text" class="form-control" id="updateUsernameAdmin" placeholder="Enter username">
                    </div>

                    <div class="form-group">
                        <label for="updatePasswordAdmin">New Password</label>
                        <input type="password" class="form-control" id="updatePasswordAdmin" placeholder="Enter new password">
                    </div>

                    <div class="form-group text-center mt-4">
                        <button type="submit" class="btn btn-primary btn-block">Save Changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Close Admin Modal -->

<!-- Include jQuery and Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js"></script>

<script>
    // Open modal function (when admin update is clicked)
    function update_admin(id) {
        $("#updateAdminModal").modal("show");
        // Populate fields with current admin data
        $("#updateAdminID").val($("#adminID-" + id).text());
        $("#updateFirstNameAdmin").val($("#firstNameAdmin-" + id).text());
        $("#updateLastNameAdmin").val($("#lastNameAdmin-" + id).text());
        $("#updateEmailAdmin").val($("#emailAdmin-" + id).text());
        $("#updateUsernameAdmin").val($("#usernameAdmin-" + id).text());
        $("#updatePasswordAdmin").val(""); // Reset the password field
    }

    // Handle form submission via AJAX
    $('#updateAdminForm').on('submit', function(e) {
        e.preventDefault();  // Prevent default form submission

        var formData = {
            tbl_admin_id: $('#updateAdminID').val(),
            first_name: $('#updateFirstNameAdmin').val(),
            last_name: $('#updateLastNameAdmin').val(),
            email: $('#updateEmailAdmin').val(),
            username: $('#updateUsernameAdmin').val(),
            password: $('#updatePasswordAdmin').val()
        };

        $.ajax({
            url: './endpoint/update-admin.php', // Correct PHP endpoint for admin update
            type: 'POST',
            data: formData,
            success: function(response) {
                alert('Admin updated successfully!');
                window.location.reload(); // Or redirect to admin page
            },
            error: function(xhr, status, error) {
                alert('Error: ' + error);
            }
        });
    });
</script>
