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
          <div class="modal-body">
            <div class="col-12 grid-margin">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Please Enrer Your Permission</h4>
                  <form action="{{url('permissions/update/' .$permissions->code)}}" method="POST">
                    {{csrf_field()}}
                    <div class="form-row">
                      <div class="form-group col-md-6">
                        <label for="inputEmail4" >code</label>
                        <input type="TEXT" class="form-control" id="inputEmail4" name="code" value="{{$permissions->code}}">
                      </div>
                      <div class="form-group col-md-6">
                        <label for="inputName">description</label>
                        <input type="text" class="form-control" id="inputName" placeholder="Name" name="description" value="{{$permissions->description}}">
                      </div>
                      <div class="form-group col-md-6">
                        <label for="inputSelesperson" >description_2</label>
                        <input type="text" class="form-control" id="inputEmail4" placeholder="Selesperson" name="description_2" value="{{$permissions->description_2}}">
                      </div>
                      <div class="form-group col-md-6">
                        <label for="inputState">Inactivated</label>
                        <select id="inputState" class="form-control" name="inactived" value="{{$permissions->anactived}}">
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
                      <button type="submit" class="btn btn-primary">Update</button>
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
</body>

</html>