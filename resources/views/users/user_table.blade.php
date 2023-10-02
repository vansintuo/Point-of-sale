<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title> Tuoo </title>
    <link rel="stylesheet" href="vendors/typicons/typicons.css">
    <link rel="stylesheet" href="vendors/css/vendor.bundle.base.css">
    <link rel="stylesheet" href="{{ asset('css/vertical-layout-light/style.css') }}">
    <link rel="shortcut icon" href="images/favicon.png" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.2/css/dataTables.bootstrap4.min.css">
    <!-- boostrap link -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <script src="https://kit.fontawesome.com/4507fd7002.js" crossorigin="anonymous"></script>
    <script src="sweetalert2.all.min.js"></script>
</head>

<body>

    <div class="container-scroller">
        @include('pages.header')
        <div class="container-fluid page-body-wrapper">
            @include('pages.menu')
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
                                                <th>NO.</th>
                                                <th>@lang('user.email')</th>
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
                                            @foreach ($users as $key => $user)
                                                <tr>
                                                    <td>{{ $key + 1 }}</td>
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
                                                        <a href="{{ url('users/delete_user/' . $user->id) }}"id="delete_users"
                                                            class="btn btn-danger btn-sm btn-icon-text "
                                                            data-id="{{ $user->Id }}">delete</a>


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
            </div>

        </div>




    </div>
    <script>
        $(document).ready(function() {
            $('#example').DataTable();
        });
    </script>


</body>

</html>
