<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>PolluxUI Admin</title>
    <!-- base:css -->
    <link rel="stylesheet" href="{{ asset('vendors/typicons/typicons.css') }}">
    <link rel="stylesheet" href="{{ asset('vendors/css/vendor.bundle.base.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/vertical-layout-light/style.css') }}">
    <!-- endinject -->
    <link rel="shortcut icon" href="images/favicon.png" />
</head>

<body>
    <base href="/public">
    <div class="container-scroller">
        @include('pages.header')
        <!-- call for menu -->
        <div class="container-fluid page-body-wrapper">
            @include('pages.menu')
            <!-- partial -->
            <div class="main-panel">
                <div class="content-wrapper">

                    <div class="modal-body">
                        <div class="col-12 grid-margin">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Please Enrer Your Information</h4>
                                    <form action="{{ url('users/create') }}" method="post">
                                        @csrf
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label for="inputName" name="name">Name</label>
                                                <input type="text" class="form-control" id="inputName"
                                                    placeholder="Name" name="name">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="inputEmail4" name="email">Email</label>
                                                <input type="email" class="form-control" id="inputEmail4"
                                                    placeholder="Email" name="email">
                                            </div>

                                            <div class="form-group col-md-6">
                                                <label for="inputSelesperson"
                                                    name="salesperson_code">Selesperson</label>
                                                <input type="text" class="form-control" id="inputEmail4"
                                                    placeholder="Selesperson" name="salesperson_code">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="inputState">Gender</label>
                                                <select id="inputState" class="form-control" name="gender">
                                                    <option value="male" id="inputState" name="gender"
                                                        type="input">Male</option>
                                                    <option value="female" id="inputState" name="gender"
                                                        type="input">Female</option>
                                                </select>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="inputPassword4">mm/dd/yy</label>
                                                <input type="date" class="form-control" id="inputPassword4"
                                                    placeholder="Password" name="date_of_birth">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="inputPassword4">Password</label>
                                                <input type="password" class="form-control" id="inputPassword4"
                                                    name="password" required>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="inputPhonNumber">PhonNumber</label>
                                                <input type="number" class="form-control" id="inputPhonNumber"
                                                    placeholder="855+" name="phone_no">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="inputState">User Role</label>
                                                <select id="user_role_code" class="form-control" name="user_role_code">
                                                    <option  id="user_role_code" name="user_role_code"
                                                        type="input">Super User</option>
                                                    <option  id="user_role_code" name="user_role_code"
                                                        type="input">Normal User</option>
                                                </select>
                                            </div>


                                            <div class="form-group col-md-6">
                                                <label for="inputRole">Permission code</label>
                                                <input type="text" class="form-control" id="permission_code"
                                                    placeholder="Enter Your Role" name="permission_code:">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="inputAddress">Address</label>
                                            <input type="text" class="form-control" id="address"
                                                placeholder="1234 Main St">
                                        </div>
                                        <div class="form-group">
                                            <label for="inputAddress2">Address 2</label>
                                            <input type="text" class="form-control" id="address_2"
                                                placeholder="Apartment, studio, or floor">
                                        </div>

                                        <div class="form-group">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="gridCheck"
                                                    required>
                                                <label class="form-check-label" for="gridCheck">
                                                    Check me out
                                                </label>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="submit" class="btn btn-primary submit_t">Submit</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>


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
                <!-- endinject -->
                <!-- Custom js for this page-->
                <script src="js/dashboard.js"></script>
                <!-- End custom js for this page-->

                <script src="https://code.jquery.com/jquery-3.6.4.min.js"
                    integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>
                <script src="sweetalert2.min.js"></script>
                <link rel="stylesheet" href="sweetalert2.min.css">


                <script>
                    $(document).ready('click', function() {
                        $('.submit_t').on('click', function() {
                            Swal.fire({
                                position: 'top-end',
                                icon: 'success',
                                title: 'Success',
                                showConfirmButton: false,
                                timer: 1500
                            })
                        })
                    })
                </script>
</body>

</html>
