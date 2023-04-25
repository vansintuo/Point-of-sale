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
                                                      <h4 class="card-title">Enrer Your Item Info</h4>
                                                      <form action="{{url('item_unit_of_measures/update_item_measures/' .$item_measures->id)}}" method="post">
                                                            @csrf
                                                            <div class="form-row">
                                                                  <div class="form-group col-md-6">
                                                                        <label for="inputEmail4" name="email">Item_no</label>
                                                                        <input type="TEXT" class="form-control" id="inputEmail4" name="item_no" value="{{$item_measures->item_no}}">
                                                                  </div>
                                                                  <div class="form-group col-md-6">
                                                                        <label for="inputEmail4" name="email">Unit of measure code</label>
                                                                        <input type="TEXT" class="form-control" id="inputEmail4" name="unit_of_measure_code" value="{{$item_measures->unit_of_measure_code}}">
                                                                  </div>
                                                                  <div class="form-group col-md-6">
                                                                        <label for="inputName" name="name">identifier_code</label>
                                                                        <input type="text" class="form-control" id="inputName"  name="identifier_code" value="{{$item_measures->identifier_code}}">
                                                                  </div>
                                                                  <div class="form-group col-md-6">
                                                                        <label for="inputName" name="name">Description</label>
                                                                        <input type="text" class="form-control" id="inputName"  name="description" value="{{$item_measures->description}}">
                                                                  </div>
                                                                  <div class="form-group col-md-6">
                                                                        <label for="inputSelesperson" name="salesperson_code">description_2</label>
                                                                        <input type="text" class="form-control" id="inputEmail4" name="description_2" value="{{$item_measures->description_2}}">
                                                                  </div>
                                                                  <div class="form-group col-md-6">
                                                                        <label for="inputSelesperson" name="salesperson_code">qty_per_unit</label>
                                                                        <input type="text" class="form-control" id="inputEmail4" name="qty_per_unit" value="{{$item_measures->qty_per_unit}}">
                                                                  </div>
                                                                  <div class="form-group col-md-6">
                                                                        <label for="inputSelesperson" name="salesperson_code">Price</label>
                                                                        <input type="text" class="form-control" id="inputEmail4" name="price" value="{{$item_measures->price}}">
                                                                  </div>                                                               
                                                            </div>

                                                            <div class="form-group">
                                                                  <div class="form-check">
                                                                        <input class="form-check-input" type="checkbox" id="gridCheck" require>
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
                        <!-- End custom js for this page-->
</body>

</html>