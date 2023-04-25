<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title> Tuoo </title>
    <!-- base:css -->
    <link rel="stylesheet" href="vendors/typicons/typicons.css">
    <link rel="stylesheet" href="vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="{{ asset('css/vertical-layout-light/style.css') }}">
    <!-- endinject -->
    <link rel="shortcut icon" href="images/favicon.png" />
    <!-- The following CSS library files are loaded for use in this example to provide the styling of the table -->
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.2/css/dataTables.bootstrap4.min.css"> -->
    <!-- boostrap link -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <script src="https://kit.fontawesome.com/4507fd7002.js" crossorigin="anonymous"></script>

</head>

<body>

    <div class="container-scroller">
        @include('pages.header')
        <!-- call for menu -->
        <div class="container-fluid page-body-wrapper">
            @include('pages.menu')
            <!-- partial -->

            <div class="main-panel">
                <div class="content-wrapper">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <a href="{{ url('users/insert/') }}" class="btn btn-success btn-sm btn-icon-text ">Add
                                    User</a>


                                <div class="table-responsive pt-3">
                                    <table id="example" class="table table-striped table-bordered">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Email</th>
                                                <th>Salesperson_code</th>
                                                <th>Name</th>
                                                <th>Gender</th>
                                                <th>Phone Number</th>
                                                <th>User Role</th>
                                                <th>Pesmission_user</th>
                                                <th>Inactived</th>
                                                <th>Action</th>


                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($users as $user)
                                                <tr>
                                                    <td>{{ $user->id }}</td>
                                                    <td>{{ $user->email }}</td>
                                                    <td>{{ $user->salesperson_code }}</td>
                                                    <td>{{ $user->name }}</td>
                                                    <td>{{ $user->gender }}</td>
                                                    <td>{{ $user->phone_no }}</td>
                                                    <td>{{ $user->user_role_code }}</td>
                                                    <td>{{ $user->permission_code }}</td>
                                                    <td>{{ $user->inactived }}</td>


                                                    <td>
                                                        <a href="{{ url('users/edit/' . $user->id) }}"
                                                            class="btn btn-success btn-sm btn-icon-text">Edit</a>
                                                        <a href="{{ url('users/delete_user/' . $user->id) }}"
                                                            class="btn btn-danger btn-sm btn-icon-text delete">delete</a>

                                                    </td>



                                                </tr>
                                            @endforeach
                                        </tbody>

                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- content-wrapper ends -->
                <!-- partial -->
            </div>




        </div>
        <!-- test -->



    </div>
    <!-- base:js -->
    <script src="vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page-->
    <script src="vendors/chart.js/Chart.min.js"></script>
    <!-- End plugin js for this page-->
    <!-- inject:js -->
    <script src="js/off-canvas.js"></script>
    <script src="js/hoverable-collapse.js"></script>
    <script src="js/template.js"></script>
    <script src="js/settings.js"></script>
    <script src="js/todolist.js"></script>
    <script src="sweetalert2.min.js"></script>
    <link rel="stylesheet" href="sweetalert2.min.css">
    <script src="sweetalert2.all.min.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page-->
    <script src="js/dashboard.js"></script>
    <!-- End custom js for this page-->
    <!-- In addition to the above code, the following Javascript library files are loaded for use -->

    <script>
        $(document).ready(function() {
            $('#example').DataTable();
            $('body').on('click', '.Edit', function() {

            })
            $('body').on('click', '.editbu', function() {
                var eThis = $(this);
                var par = eThis.parents('tr');
                var id = par.find('td:eq(0)').text();

            })
            $('body').on('click', '.delete', function() {
                Swal.fire({
                    position: 'top-end',
                    icon: 'success',
                    title: 'Success',
                    showConfirmButton: false,
                    timer: 1500
                })
            })
        });
    </script>
    <!-- boostrap link -->
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.13.2/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.2/js/dataTables.bootstrap4.min.js"></script>

</body>

</html>
