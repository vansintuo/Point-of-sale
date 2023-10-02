<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
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


    <!-- link for sweetalert2 -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

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
                                <a href="{{ url('unit_of_measures/Add') }}" class="btn btn-success btn-sm btn-icon-text"
                                    type="submit"> Add New</a>

                                <div class="table-responsive pt-3">
                                    <table id="example" class="table table-striped table-bordered">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Code</th>
                                                <th>description</th>
                                                <th>description_2</th>
                                                <th>factor</th>
                                                <th>inactived</th>
                                                <th>Ation</th>

                                        </thead>
                                        <tbody>
                                            @foreach ($measures as $key => $measures)
                                                <tr>
                                                    <td>{{ $key + 1 }}</td>
                                                    <td>{{ $measures->code }}</td>
                                                    <td>{{ $measures->description }}</td>
                                                    <td>{{ $measures->description_2 }}</td>
                                                    <td>{{ $measures->factor }}</td>
                                                    <td>{{ $measures->inactived }}</td>


                                                    <td>

                                                        <a href="{{ url('unit_of_measures/edit/' . $measures->code) }}"
                                                            class="btn btn-success btn-sm btn-icon-text">Edit</a>
                                                        <a href="#" data-id="{{ $measures->id }}"
                                                            id="delete_measure"
                                                            class="btn btn-danger btn-sm btn-icon-text">Delete</a>

                                                    </td>

                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

                </div <!-- content-wrapper ends -->
                <!-- partial -->
            </div>
        </div>
    </div>



    <!-- link for alert  -->

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
            $(document).on('click', '#delete_measure', function() {
                Swal.fire({
                    title: 'Are you sure?',
                    text: "You won't be able to revert this!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes, delete it!'
                }).then((result) => {
                    if (result.isConfirmed) {
                        var id = $(this).data("id");
                        var token = $("meta[name='csrf-token']").attr("content");

                        $.ajax({
                            url: "unit_of_measures/delete_M/" + id,
                            type: 'DELETE',
                            data: {
                                "id": id,
                                "_token": token,
                            },
                            success: function() {
                                console.log("it Works");
                            }
                        });

                        Swal.fire(
                            'Deleted!',
                            'Your file has been deleted.',
                            'success'
                        )
                    }
                })

            });
        });
    </script>
    <!-- boostrap link -->
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.13.2/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.2/js/dataTables.bootstrap4.min.js"></script>


</body>

</html>
