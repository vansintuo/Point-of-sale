<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>PolluxUI Admin</title>
    <!-- base:css -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
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
<!-- <style>
          .delete{
               onClick="return confirm('Are You Sure!!')" ;
          }
     </style> -->

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
                                <a href="{{ url('items/Add/') }}" class="btn btn-success btn-sm btn-icon-text">Add
                                    New_Items</a>

                                <div class="table-responsive pt-3">
                                    <table id="example" class="table table-striped table-bordered">
                                        <thead>
                                            <tr>
                                                <th>no</th>
                                                <th>no_2</th>
                                                <th>description</th>
                                                <th>description_2</th>
                                                <th>item_group_code</th>
                                                <th>item_category_code</th>
                                                <th>unit_price</th>
                                                <th>inactived</th>
                                                <th>picture</th>
                                                <th>Ation</th>
                                        </thead>
                                        <tbody>
                                            {{-- @foreach ($items as $item)
                                                       <tr>
                                                            <td>{{ $item->no }}</td>
                                                            <td>{{ $item->no_2 }}</td>
                                                            <td>{{ $item->description}}</td>
                                                            <td>{{ $item->description_2 }}</td>
                                                            <td>{{ $item->item_group_code}}</td>
                                                            <td>{{ $item->item_category_code}}</td>
                                                            <td>{{ $item->unit_price}}</td>
                                                            <td>{{ $item->inactuved}}</td>
                                                            <td>{{ $item->picture}}</td>


                                                            <td>

                                                                 <a href="{{url('items/edit_items' ,$item->no )}}" class="btn btn-success btn-sm btn-icon-text">Edit</a>
                                                                 <a href="{{url('items/delete_items' ,$item->no )}}" class="btn btn-danger btn-sm btn-icon-text" onClick="return confirm('Are You Sure!!')">Delete</a>

                                                            </td>

                                                       </tr> -->
                                                        @endforeach  --}}
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
        <!-- Button trigger modal -->

        <!-- Modal -->
        @include('items.edtimodel')
    </div>
    <!-- base:js -->
    {{-- <script src="vendors/js/vendor.bundle.base.js"></script> --}}
    <!-- endinject -->
    <!-- Plugin js for this page-->
    <script src="vendors/chart.js/Chart.min.js"></script>
    <!-- End plugin js for this page-->
    <!-- inject:js -->
    <script src="js/off-canvas.js"></script>
    <script src="js/hoverable-collapse.js"></script>
    {{-- <script src="js/template.js"></script> --}}
    <script src="js/settings.js"></script>
    <script src="js/todolist.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page-->
    <script src="js/dashboard.js"></script>
    <!-- End custom js for this page-->
    <!-- In addition to the above code, the following Javascript library files are loaded for use -->
    <script src="https://code.jquery.com/jquery-3.6.3.js" integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM="
        crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.13.2/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.2/js/dataTables.bootstrap4.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"
        integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous">
    </script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>


    <script>
        $(document).ready(function() {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            var datatable
            $(function() {

                datatable = $('#example').DataTable({
                    processing: true,
                    serverSide: true,
                    ajax: " {{ route('GetdataTable') }}",
                    columns: [{
                            data: 'no',
                            name: 'no'
                        },
                        {
                            data: 'no_2',
                            name: 'no_2'
                        },
                        {
                            data: 'description',
                            name: 'description'
                        },
                        {
                            data: 'description_2',
                            name: 'description_2'
                        },
                        {
                            data: 'item_group_code',
                            name: 'item_group_code'
                        },
                        {
                            data: 'item_category_code',
                            name: 'item_category_code'
                        },
                        {
                            data: ('unit_price'),
                            name: 'unit_price'
                        },
                        {
                            data: 'inactived',
                            name: 'inactived'
                        },


                        {
                            data: 'product_brand_logo',
                            name: 'product_brand_logo',
                            orderable: true,
                            searchable: true
                        },
                        {
                            data: 'action',
                            name: 'action'
                        },
                        // {data: 'picture', name: 'picture'},
                    ]

                });

            });
            // $('#example').DataTable();
            // $('body').on('click', '.Edit', function() {

            // })
            // $('body').on('click', '.editbu', function() {
            //      var eThis = $(this);
            //      var par = eThis.parents('tr');
            //      var id = par.find('td:eq(0)').text();

            // })
            $('body').on("click", ".delete", function() {
                // e.preventDefault();
                var eThis = $(this);
                var par = eThis.parents('tr');
                var indd = par.find('td:eq(0)').text();


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

                        $.ajax({
                            url: 'items/delete_items/' + indd,
                            type: 'POST',
                            // datatype:'json',
                            // data:frmdata,
                            contentType: false,
                            cache: false,
                            processData: false,

                            success: function(data) {
                                // $('#edit').modal("hide");
                                datatable.ajax.reload(null, false);
                            }
                        })

                        swalWithBootstrapButtons.fire(
                            'Deleted!',
                            'Item has been deleted.',
                            'success'
                        )
                    } else if (
                        /* Read more about handling dismissals below */
                        result.dismiss === Swal.DismissReason.cancel
                    ) {
                        // swalWithBootstrapButtons.fire(
                        //     'Cancelled',
                        //     'Your imaginary file is safe :)',
                        //     'error'
                        // )
                    }
                })
            })
            //edit 
            $('body').on("click", ".edit", function(e) {
                e.preventDefault();
                var emp_id = $(this).vale
                // $('body').find('#editmodal').modal('show')

                $("#editmodal").modal("show")
                var eThis = $(this);
                var par = eThis.parents('tr');
                var indd = par.find('td:eq(0)').text();
                alert(indd)

            })
        });
    </script>
    <!-- boostrap link -->
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.13.2/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.2/js/dataTables.bootstrap4.min.js"></script>

</body>

</html>
