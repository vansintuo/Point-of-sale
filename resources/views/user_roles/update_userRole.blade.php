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
                      <form action="{{url('user_roles/update_userRole/'.$user_roles->code)}}" method="POST">
                        @csrf
                        @method('get')
                        <div class="form-row">
                          <div class="form-group col-md-6">
                            <label for="inputEmail4">Code</label>
                            <input type="text" class="form-control" id="inputCode" placeholder="Code" value="{{$user_roles->code}}" name="code">
                          </div>
                          <div class="form-group col-md-6">
                            <label for="inputName">Description</label>
                            <input type="text" class="form-control" id="inputName" placeholder="description" value="{{$user_roles->description}}" name="description">
                          </div>
                          <div class="form-group col-md-6">
                            <label for="inputState">Description_2</label>
                            <input type="text" class="form-control" id="Description_2" name="description_2" value="{{$user_roles->description_2}}">
                          </div>
                          <div class="form-group col-md-6">
                            <label for="inputState">Inactivated</label>
                            <select id="inputState" class="form-control" name="inactived">
                              <option value="{{$user_roles->inactived}}" id="inputState" name="inactived" type="input">No</option>
                              <option value="{{$user_roles->inactived_2}}" id="inputState" name="inactived" type="input">Yes</option>
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