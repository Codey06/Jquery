<!DOCTYPE html>
<html lang="en">

<head>
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css"> -->

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
          <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <lin
</head>
<body>
    <!-- Container -->
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-sm-8">
                <h1 class='fs-3 text-center'>Users Info</h1>
                <button class="btn btn-success" id="addNew">Add New Student</button>
                <table class="table m-2" id="studentTable">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Class</th>
                            <th>Action</th>
                        </tr>
                        <tbody>
                           
  
                        </tbody>
                    </thead>
                </table>
            </div>
            <div class="modal" tabindex="-1" id="studentModal">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">User Info</h5>
                         <button type="button" class="fa-solid " data-bs-dismiss="modal" aria-label="Close">
                            X 
                        </button>  
                        </div>
                        <div class="modal-body">
                            <form id="studentForm">
                                <div class="form-group m-2">
                                    <input type="text" name="id" id="id" class="form-control"
                                        placeholder="Enter Student Id" required>
                                </div>
                                <div class="form-group m-2">
                                    <input type="text" name="name" id="name" class="form-control"
                                        placeholder="Enter Student Name"required>
                                </div>
                                <div class="form-group m-2">
                                    <input type="text" name="class" id="class" class="form-control"
                                        placeholder="Enter Student Class"required>
                                </div>

                                <!-- Footer -->
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary"
                                        data-bs-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary">Save changes</button>
                                </div>
                                <!-- End Footer -->
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</div> 
</body>
 </html>
<script src="js/jquery.js"></script>
<script src="js/bootstrap.bundle.min.js"></script>
<script src="js/app1.js"></script>



   