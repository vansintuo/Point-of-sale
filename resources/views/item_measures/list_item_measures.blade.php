<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>PolluxUI Admin</title>
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
                                <a href="{{ url('item_unit_of_measures/Add') }}"
                                    class="btn btn-success btn-sm btn-icon-text" type="submit"> Add New</a>

                                <div class="table-responsive pt-3">
                                    <table id="example" class="table table-striped table-bordered">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Item_no</th>
                                                <th>unit_of_measure_code</th>
                                                <th>identifier_code</th>
                                                <th>description</th>
                                                <th>description_2</th>
                                                <th>qty_per_unit</th>
                                                <th>Price</th>
                                                <th>Ation</th>

                                        </thead>
                                        <tbody>
                                            @foreach ($item_measures as $measures)
                                                <tr>
                                                    <td>{{ $measures->id }}</td>
                                                    <td>{{ $measures->item_no }}</td>
                                                    <td>{{ $measures->unit_of_measure_code }}</td>
                                                    <td>{{ $measures->identifier_code }}</td>
                                                    <td>{{ $measures->description }}</td>
                                                    <td>{{ $measures->description_2 }}</td>
                                                    <td>{{ $measures->qty_per_unit }}</td>
                                                    <td>{{ $measures->Price }}</td>
                                                    <td>

                                                        <a href="{{ url('item_unit_of_measures/edit_item_measures/' . $measures->id) }}"
                                                            class="btn btn-success btn-sm btn-icon-text">Edit</a>
                                                        <button
                                                            href="{{ url('item_unit_of_measures/delete_items/' . $measures->id) }}"
                                                            class="btn btn-danger btn-sm btn-icon-text delete_uom">Delete</button>

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
    </div>
    <!-- base:js -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
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

            //delete
            $('.delete_uom').on('click', function() {
                const swalWithBootstrapButtons = Swal.mixin({
                    customClass: {
                        confirmButton: 'btn btn-success',
                        cancelButton: 'btn btn-danger'
                    },
                    buttonsStyling: false
                })

                swalWithBootstrapButtons.fire({
                    title: 'Are you sure?',
                    text: "You won't be able to revert this!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonText: 'Yes, delete it!',
                    cancelButtonText: 'No, cancel!',
                    reverseButtons: true
                }).then((result) => {
                    if (result.isConfirmed) {
                        swalWithBootstrapButtons.fire(
                         
                            'Deleted!',
                            'Your file has been deleted.',
                            'success'
                        )
                    } else if (
                        /* Read more about handling dismissals below */
                        result.dismiss === Swal.DismissReason.cancel
                    ) {
                        swalWithBootstrapButtons.fire(
                            'Cancelled',
                            'Your imaginary file is safe :)',
                            'error'
                        )
                    }
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
