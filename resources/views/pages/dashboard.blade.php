<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-4 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <div
                            class="d-flex align-items-center justify-content-between justify-content-md-center justify-content-xl-between flex-wrap mb-4">
                            <div>
                                <p class="mb-2 text-md-center text-lg-left">
                                    Total Expenses
                                </p>
                                <h1 class="mb-0">8742</h1>
                            </div>
                            <i class="typcn typcn-briefcase icon-xl text-secondary"></i>
                        </div>
                        <canvas id="expense-chart" height="80"></canvas>
                    </div>
                </div>
            </div>
            <div class="col-md-4 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <div
                            class="d-flex align-items-center justify-content-between justify-content-md-center justify-content-xl-between flex-wrap mb-4">
                            <div>
                                <p class="mb-2 text-md-center text-lg-left">
                                    Order Today
                                </p>
                                <h1 class="mb-0">47</h1>
                            </div>
                            <i class="typcn typcn-chart-pie icon-xl text-secondary"></i>
                        </div>
                        <canvas id="budget-chart" height="80"></canvas>
                    </div>
                </div>
            </div>
            <div class="col-md-4 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <div
                            class="d-flex align-items-center justify-content-between justify-content-md-center justify-content-xl-between flex-wrap mb-4">
                            <div>
                                <p class="mb-2 text-md-center text-lg-left">
                                    Total Balance
                                </p>
                                <h1 class="mb-0">$7,243</h1>
                            </div>
                            <i class="typcn typcn-clipboard icon-xl text-secondary"></i>
                        </div>
                        <canvas id="balance-chart" height="80"></canvas>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-8 grid-margin stretch-card flex-column">
                <div class="row h-100">
                    <div class="col-md-12 stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-start flex-wrap">
                                    <div>
                                        <p class="mb-3">Monthly Increase</p>
                                        <h3>67842</h3>
                                    </div>
                                    <div id="income-chart-legend" class="d-flex flex-wrap mt-1 mt-md-0"></div>
                                </div>
                                <canvas id="income-chart"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 grid-margin stretch-card flex-column">
                <div class="row">
                    <div class="col-md-12 grid-margin stretch-card">
                        <div id="piechart" style="width: 900px; height: 500px;"></div>
                    </div>
                </div>
            </div>

        </div>
        {{-- <div class="row">
            <div class="col-xl-4 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body border-bottom">
                        <div class="d-flex justify-content-between align-items-center flex-wrap">
                            <h6 class="mb-2 mb-md-0 text-uppercase font-weight-medium">
                                Overall sales
                            </h6>
                            <div class="dropdown">
                                <button class="btn bg-white p-0 pb-1 text-muted btn-sm dropdown-toggle" type="button"
                                    id="dropdownMenuSizeButton3" data-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false">
                                    Last 30 days
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuSizeButton3">
                                    <h6 class="dropdown-header">
                                        Settings
                                    </h6>
                                    <a class="dropdown-item" href="javascript:;">Action</a>
                                    <a class="dropdown-item" href="javascript:;">Another action</a>
                                    <a class="dropdown-item" href="javascript:;">Something else here</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="javascript:;">Separated link</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <canvas id="sales-chart-c" class="mt-2"></canvas>
                        <div class="d-flex align-items-center justify-content-between border-bottom pb-3 mb-3 mt-4">
                            <div class="d-flex flex-column justify-content-center align-items-center">
                                <p class="text-muted">
                                    Gross Sales
                                </p>
                                <h5>492</h5>
                                <div class="d-flex align-items-baseline">
                                    <p class="text-success mb-0">
                                        0.5%
                                    </p>
                                    <i class="typcn typcn-arrow-up-thick text-success"></i>
                                </div>
                            </div>
                            <div class="d-flex flex-column justify-content-center align-items-center">
                                <p class="text-muted">
                                    Purchases
                                </p>
                                <h5>87k</h5>
                                <div class="d-flex align-items-baseline">
                                    <p class="text-success mb-0">
                                        0.8%
                                    </p>
                                    <i class="typcn typcn-arrow-up-thick text-success"></i>
                                </div>
                            </div>
                            <div class="d-flex flex-column justify-content-center align-items-center">
                                <p class="text-muted">
                                    Tax Return
                                </p>
                                <h5>882</h5>
                                <div class="d-flex align-items-baseline">
                                    <p class="text-danger mb-0">
                                        -04%
                                    </p>
                                    <i class="typcn typcn-arrow-down-thick text-danger"></i>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="dropdown">
                                <button class="btn bg-white p-0 pb-1 pt-1 text-muted btn-sm dropdown-toggle"
                                    type="button" id="dropdownMenuSizeButton3" data-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="false">
                                    Last 7 days
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuSizeButton3">
                                    <h6 class="dropdown-header">
                                        Settings
                                    </h6>
                                    <a class="dropdown-item" href="javascript:;">Action</a>
                                    <a class="dropdown-item" href="javascript:;">Another action</a>
                                    <a class="dropdown-item" href="javascript:;">Something else here</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="javascript:;">Separated link</a>
                                </div>
                            </div>
                            <p class="mb-0">overview</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-xl-4 grid-margin stretch-card">
                <div class="row">
                    <div class="col-md-12 grid-margin stretch-card">
                        <div class="card newsletter-card bg-gradient-warning">
                            <div class="card-body">
                                <div class="d-flex flex-column align-items-center justify-content-center h-100">
                                    <h5 class="mb-3 text-white">
                                        Newsletter
                                    </h5>
                                    <form
                                        class="form d-flex flex-column align-items-center justify-content-between w-100">
                                        <div class="form-group mb-2 w-100">
                                            <input type="text" class="form-control" placeholder="email address" />
                                        </div>
                                        <button class="btn btn-danger btn-rounded mt-1" type="submit">
                                            Subscribe
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 stretch-card">
                        <div class="card profile-card bg-gradient-primary">
                            <div class="card-body">
                                <div class="row align-items-center h-100">
                                    <div class="col-md-4">
                                        <figure class="avatar mx-auto mb-4 mb-md-0">
                                            <img src="images/faces/face20.jpg" alt="avatar" />
                                        </figure>
                                    </div>
                                    <div class="col-md-8">
                                        <h5 class="text-white text-center text-md-left">
                                            Phoebe Kennedy
                                        </h5>
                                        <p class="text-white text-center text-md-left">
                                            kennedy@gmail.com
                                        </p>
                                        <div class="d-flex align-items-center justify-content-between info pt-2">
                                            <div>
                                                <p class="text-white font-weight-bold">
                                                    Birth date
                                                </p>
                                                <p class="text-white font-weight-bold">
                                                    Birth city
                                                </p>
                                            </div>
                                            <div>
                                                <p class="text-white">
                                                    16 Sep 2019
                                                </p>
                                                <p class="text-white">
                                                    Netherlands
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-xl-4 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body border-bottom">
                        <div class="d-flex justify-content-between align-items-center flex-wrap">
                            <h6 class="mb-2 mb-md-0 text-uppercase font-weight-medium">
                                Sales statistics
                            </h6>
                            <div class="dropdown">
                                <button class="btn bg-white p-0 pb-1 text-muted btn-sm dropdown-toggle" type="button"
                                    id="dropdownMenuSizeButton4" data-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false">
                                    Last 7 days
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuSizeButton4">
                                    <h6 class="dropdown-header">
                                        Settings
                                    </h6>
                                    <a class="dropdown-item" href="javascript:;">Action</a>
                                    <a class="dropdown-item" href="javascript:;">Another action</a>
                                    <a class="dropdown-item" href="javascript:;">Something else here</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="javascript:;">Separated link</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <canvas id="sales-chart-d" height="320"></canvas>
                    </div>
                </div>
            </div>
        </div> --}}



        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="table-responsive pt-3">
                        <table class="table table-striped project-orders-table table table-striped table-bordered"
                            style="width:100%">
                            <thead>
                                <tr>
                                    <th class="ml-5">ID</th>

                                    <th>Customer</th>
                                    <th>Date-Time</th>
                                    <th>Dicount Amount</th>
                                    <th>Amount</th>

                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>#D1</td>

                                    <td>Beulah Cummings</td>
                                    <td>03 Jan 2019</td>
                                    <td>$ 5235</td>
                                    <td>1.3K</td>

                                </tr>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>Name</th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th class="bg-info">100$</th>

                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
        </div>


    </div>
    <!-- content-wrapper ends -->
    <!-- partial:partials/_footer.html -->
    <footer class="footer">
        <div class="card">
            <div class="card-body">
                <div class="d-sm-flex justify-content-center justify-content-sm-between">
                    <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2020 <a
                            href="https://www.bootstrapdash.com/" class="text-muted" target="_blank">Bootstrapdash</a>.
                        All rights reserved.</span>
                    <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center text-muted">Free <a
                            href="https://www.bootstrapdash.com/" class="text-muted" target="_blank">Bootstrap
                            dashboard</a> templates from Bootstrapdash.com</span>
                </div>
            </div>
        </div>
    </footer>
    <!-- partial -->
</div>
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

<script>
    google.charts.load('current', {
        'packages': ['corechart']
    });
    google.charts.setOnLoadCallback(drawChart);

    function drawChart() {

        var data = google.visualization.arrayToDataTable([
            ['Task', 'Hours per Day'],
            ['Month', 11],
            ['Week', 2],
            ['day', 2],
            // ['Watch TV', 2],
            // ['Sleep', 7]
        ]);

        var options = {
            title: 'My Daily Activities'
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
    }
</script>
