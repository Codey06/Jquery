<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="style/bootstrap.min.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-sm-8">
                <h1 class='fs-3 text-center'>Users Info</h1>
                <button class="btn btn-success" id="addNew">Add New Student</button>
                <table class="table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Class</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                </table>
            </div>

            <div class="modal" tabindex="-1" id="studentModal">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">User Info</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form id="studentForm">
                                <div class="form-group m-2">
                                    <input type="text" name="id" id="id" class="form-control"
                                        placeholder="Enter Student Id">
                                </div>
                                <div class="form-group m-2">
                                    <input type="text" name="name" id="name" class="form-control"
                                        placeholder="Enter Student Name">
                                </div>
                                <div class="form-group m-2">
                                    <input type="text" name="class" id="class" class="form-control"
                                        placeholder="Enter Student Class">
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
    <script src="style/bootstrap.bundle.min.js"></script>

    <script src="https://code.jquery.com/jquery-3.7.1.min.js" -->
    integrity = "sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo="
    crossorigin = "anonymous" >
    </script>

</body>
< </html>
    <script src="style/app.js"></script>