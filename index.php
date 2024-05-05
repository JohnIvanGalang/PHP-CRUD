<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Basic CRUD Applications</title>

    <!-- bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" defer></script>

    <!-- stylesheet -->
    <style>
        body {
            background: grey;
        }
    </style>

</head>

<body>
    <div class="container-fluid d-flex align-items-center justify-content-center" id="whole-container">
        <div class="text-center w-50" id="form-control">
            <form class="p-5" action="function.php" method="post">
                <h1 class="mb-5">Input</h1>
                <input class="form-control mb-4 p-3" type="text" name="ID" placeholder="ID" id="input-id">
                <input class="form-control mb-4 p-3" type="text" name="FNAME" placeholder="First Name" id="fname">
                <input class="form-control mb-4 p-3" type="text" name="LNAME" placeholder="Last Name" id="lname">
                <input class="form-control mb-4 p-3" type="text" name="CONTACT" placeholder="Contact No." id="contact">

                <!-- submit button -->
                <button class="btn btn-primary" type="submit" name="submit">Submit</button>
    
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">View db</button>
            </form>
            

            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel"> Data Table </h1>
                        </div>
                        <div class="modal-body">
                            <div class="table-responsive"> <!-- Fixed typo -->
                                <table class="table table-tertiary">
                                    <thead>
                                        <tr>
                                            <th scope="col">ID</th>
                                            <th scope="col">FirstName</th>
                                            <th scope="col">LastName</th>
                                            <th scope="col">Contact</th>
                                            <th scope="col">Edit</th>
                                            <th scope="col">Delete</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        <tr class="">
                                            <?php
                                                include 'read.php';
                                            ?>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <!-- <script src="script.js"></script> -->
</body>

</html>
