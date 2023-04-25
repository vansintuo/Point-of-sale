<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>PolluxUI Admin</title>
  <!-- base:css -->
  <link rel="stylesheet" href="{{asset('vendors/typicons/typicons.css')}}">
  <link rel="stylesheet" href="{{asset('vendors/css/vendor.bundle.base.css')}}">
  <link rel="stylesheet" href="{{asset('/css/vertical-layout-light/style.css')}}">
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

          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="table-responsive pt-3">
                  <table id="example" class="table table-striped table-bordered">
                    <div class="container">
                      <form action="{{url('users/update_user/'.$users->id)}}" method="POST">
                        @csrf
                        <div class="form-row">
                          <div class="form-group col-md-6">
                            <label for="inputEmail4" name="email">Email</label>
                            <input type="email" class="form-control" id="inputEmail4" placeholder="Email" value="{{$users->email}}" name="email">
                          </div>
                          <div class="form-group col-md-6">
                            <label for="inputName" name="name">Name</label>
                            <input type="text" class="form-control" id="inputName" placeholder="Name" value="{{$users->name}}" name="name">
                          </div>
                          <div class="form-group col-md-6">
                            <label for="inputState">Gender</label>
                            <select id="inputState" class="form-control" name="gender" value="{{$users->gender}}">
                              <option value="male" id="inputState" name="gender" type="input">Male</option>
                              <option value="female" id="inputState" name="gender" type="input">Female</option>
                            </select>
                          </div>
                          <div class="form-group col-md-6">
                            <label for="inputSelesperson" name="salesperson_code">Selesperson</label>
                            <input type="text" class="form-control" id="inputEmail4" placeholder="Selesperson" name="salesperson_code" value="{{$users->salesperson_code}}">
                          </div>

                          <div class="form-group col-md-6">
                            <label for="inputPassword4">mm/dd/yy</label>
                            <input type="date" class="form-control" id="inputPassword4" value="{{$users->date_of_birth}}" name="date_of_birth">
                          </div>
                          <div class="form-group col-md-6">
                            <label for="inputPassword4">Password</label>
                            <input type="password" class="form-control" id="inputPassword4" placeholder="Password" value="{{$users->password}}" name="password">
                          </div>
                          <div class="form-group col-md-6">
                            <label for="inputPhonNumber">PhonNumber</label>
                            <input type="number" class="form-control" id="inputPhonNumber" placeholder="855+" value="{{$users->phone_no}}" name="phone_no">
                          </div>
                          <div class="form-group col-md-6">
                            <label for="inputRole">User Role</label>
                            <input type="text" class="form-control" id="inputRole" placeholder="Enter Your Role" value="{{ $users->user_role_code}}" name="user_role_code">
                          </div>
                        </div>


                        <div class="form-row">

                          <div class="form-group col-md-6">
                            <label for="inputState">Status</label>
                            <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor" value="{{$users->status}}">
                          </div>

                          <div class="form-group col-md-6">
                            <label for="inputState">Inactuved</label>
                            <select id="inputState" class="form-control" name="inactived" value="{{$users->inactived}}">
                              <option id="inputState" value="0" type="input">No</option>
                              <option id="inputState" type="input" value="1" >Yes</option>
                            </select>
                          </div>

                        </div>
                        <div class="form-group">
                          <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="gridCheck" required>
                            <label class="form-check-label" for="gridCheck">
                              Check me out
                            </label>
                          </div>
                        </div>
                        <div class="modal-footer">
                          <button type="submit" class="btn btn-primary">Update</button>
                        </div>

                      </form>
                    </div>
                  </table>

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
</body>

</html>