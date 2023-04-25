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
                                    <h4 class="card-title">Enter Your Info</h4>
                                    <form action="{{ url('item_groups/add_items') }}" method="post" class="add_item">
                                        @csrf
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label for="inputEmail4" name="email">Code</label>
                                                <input type="TEXT" class="form-control" id="inputEmail4"
                                                    name="code">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="inputName" name="name">description</label>
                                                <input type="text" class="form-control" id="inputName"
                                                    placeholder="Name" name="description">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="inputSelesperson"
                                                    name="salesperson_code">description_2</label>
                                                <input type="text" class="form-control" id="inputEmail4"
                                                    placeholder="Selesperson" name="description_2">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="inputSelesperson"
                                                    name="salesperson_code">item_brand_code</label>
                                                <input type="text" class="form-control" id="inputEmail4"
                                                    placeholder="Selesperson" name="item_group_code">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="inputSelesperson"
                                                    name="salesperson_code">item_category_code</label>
                                                <input type="text" class="form-control" id="inputEmail4"
                                                    placeholder="Selesperson" name="item_category_code">
                                            </div>

                                            <div class="form-group col-md-6">
                                                <label for="inputState">Inactived</label>
                                                <select id="inputState" class="form-control" name="inactived">
                                                    <option id="inputState" type="input">No</option>
                                                    <option id="inputState" type="input">Yes</option>
                                                </select>
                                            </div>
                                        </div>


                                        <div class="form-group">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="gridCheck">
                                                <label class="form-check-label" for="gridCheck">
                                                    Check me out
                                                </label>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="submit" class="btn btn-primary">Submit</button>
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
                <script src="sweetalert2.all.min.js"></script>
                <!-- End custom js for this page-->


                <script>
                    $(document).ready(function() {
                        $('.add_item').on('click', function() {
                            Swal.fire({
                                position: 'top-end',
                                icon: 'success',
                                title: 'Your work has been saved',
                                showConfirmButton: false,
                                timer: 1500
                            })
                        })
                    })
                </script>
</body>

</html>
