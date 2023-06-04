
<?php
include 'includes/_header.php';
include 'includes/_navbar.php';
include 'includes/_sidebar.php';
?>




  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Registerd User</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Registerd User</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

<!-- ==========================================================================START=============================================== -->

    <!-- ========================================Table=============================================== -->
    <div>
      <h3 class="text-center text-success text-bold">Total number of user applied</h3>
      <hr>
    </div>
    <div class="container border pt-3 mt-2">

    <table id="userTable" class="display">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
            </tr>
        </thead>
        <tbody id="tableBody">
            <!-- Table rows will be dynamically added here*********************************** -->
        </tbody>
    </table>
    </div>































    </div>




<?php include 'includes/_footer.php'; ?>


<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="//cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>

<script>
     $(document).ready(function() {
        // Load the table data on page load
        loadTableData();

        function loadTableData() {
            $.ajax({
                type: "GET",
                url: "../appliedFor_form.php?type=insert",
                success: function(response) {
                    console.log(response); // Display the response in the browser console

                    // Clear the table body
                    $('#tableBody').empty();

                    // Loop through the data and append rows to the table
                    var i = 0;
                    while (i < response.length) {
                        var row = `<tr>
                                        <td>${response[i].id}</td>
                                        <td>${response[i].name}</td>
                                        <td>${response[i].email}</td>
                                        <td>${response[i].phone}</td>
                                      </tr>`;
                        // Append the row to the table body
                        $('#tableBody').append(row);
                        i++;
                    }
                    // Initialize the DataTable after loading the data
                    $('#userTable').DataTable();

                },
                error: function(xhr, status, error) {
                    console.log(xhr.responseText); // Display any error message in the browser console
                }
            });
        }


















      });
</script>
