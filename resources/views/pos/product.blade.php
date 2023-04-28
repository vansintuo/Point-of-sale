<!-- for product -->
<div class="col-xl-7 grid-margin stretch-card flex-column ">
    <div class="row">
        <div class="container-fluid">
            <div class="px-lg-5">
                <!-- For demo purpose -->
                <div class="row py-1">
                    <div class="col-lg-12 mx-auto">
                        {{-- @include('pos.add_new') --}}

                        @include('report.Payment')
                        {{-- <button type="button" class="btn btn btn-danger prints" href="{'dashboards'}"> --}}
                        <a type="button" class="btn btn btn-danger " href="{{ url('homePage') }}"> <i
                                class="fa-regular fa-credit-card"></i> Report</a>


                        <a type="button" class="btn btn btn-danger prints" href="{{ url('invoice') }}"> <i
                                class="fa-regular fa-credit-card"></i>Invoice</a>
                        {{-- @include('report.receipt') --}}
                        {{-- <i class="fa-regular fa-credit-card"></i> --}}
                        {{-- Report
                        </button> --}}
                    </div>
                </div>
                <!-- End -->
                <div class="row  mt-4 d-flex addMore ">
                    @foreach ($datatest as $data)
                        <!-- Gallery item -->
                        <div class="col-xl-3 col-lg-4 col-md-6 mb-4 product-box ">
                            <div class="bg-white rounded add-cart">
                                <img src="{{ asset('/img/' . $data->picture) }}" alt="Wireless earbud"
                                    class="product-img" value>
                                <div class="p-4">
                                    <p class="item_no">
                                        {{ Str::limit($data->item_no, 100) }}</p>
                                    <p class="product_title">
                                        {{ Str::limit($data->description, 7) }} </p>
                                    <p class="price">{{ Str::substr($data->price, 0, 4) }}</p>
                                </div>
                                <button class="btn bg-primary btn_add" type="submit">Add</button>
                            </div>
                        </div>
                    @endforeach

                    <!-- End -->
                </div>
                <div>
                    <a href="#" class="btn btn-warning px-5 py-3 text-uppercase">Proces Topay</a>
                    <a href="#" class="btn btn-dark px-5 py-3 text-uppercase">Show me more</a>
                </div>

                <!-- Modal -->
                <div class="modal fade" id="Payment" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
                    aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog ">
                        <div class="modal-content ">
                            <div class="modal-header">
                                <h5 class="modal-title text-center" id="staticBackdropLabel">Payment</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>

                            <div class="modal-body">
                                <div class="container">
                                    <div class="col-12 ">
                                        <div class="">
                                            <span class="fw-bold h7 text-center" id="cos"></span>
                                            <div class="">
                                                <p class="h7 fw-bold mb-1">Pay this Invoice</p>
                                                <p class="textmuted h8 mb-2">Make payment for this invoice by filling in
                                                    the details</p>
                                                <div class="form">
                                                    <div class="row">
                                                        <div class="col-6">
                                                            <span class="form-control my-3 total-price" type="text"
                                                                placeholder="Total Amount">
                                                        </div>
                                                        <div class="col-6">
                                                            <input class="form-control my-3" list="datalistOptionse"
                                                                id="exampleDataList" placeholder="Type to search...">
                                                            <datalist id="datalistOptionse">
                                                                <option value="Cash">
                                                                <option value="Unite">

                                                            </datalist>
                                                        </div>
                                                        <div class="col-12">
                                                            <div class="card border-0 ">

                                                                <input class="form-control ps-5" type="text"
                                                                    placeholder="Card number"> <span
                                                                    class="far fa-credit-card"></span>
                                                            </div>
                                                        </div>


                                                        <p class="p-blue h8 fw-bold mb-3">MORE PAYMENT METHODS</p>
                                                    </div>
                                                    <div class="btn btn-primary d-block h8 ">PAY
                                                        <span class="fas  ms-2"></span>
                                                        <span class=" total"></span>
                                                        <i class="fa-duotone fa-dollar-sign"
                                                            style="--fa-primary-color: #3a8ffd; --fa-secondary-color: #3a8ffd;"></i>
                                                        <span class="ms-3 fas fa-arrow-right"></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>

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
        $('.prints').on('click', function() {
            $('#Payment').modal('show');

            $('#print_payment').html(`
                                <table  id="print_invoice">                 
                                    <thead>
                                        <tr>
                                            <th scope=" col" >code</th>
                                            <th scope=" col " style="margin-left:30px">Title</th>
                                            <th scope=" col" style="margin-left:30px">qty</th>
                                            <th scope=" col" style="margin-left:30px">Discount</th>
                                            <th scope=" col" style="margin-left:30px">total</th>                                
                                        </tr>
                                    </thead>
                                    <tbody>
                                    </tbody>
                                </table>
                            `);
            let table = $('#table_lenght').find('tr').length;
            var gb = "";
            for (var i = 1; i < table - 1; i++) {
                gb += `
                                <tr >  
                                <td class="code">${$('.table').find(`tr:eq(${Number(i)}) td:eq(0)`).text()}</td>
                                <td class="description">${$('.table').find(`tr:eq(${Number(i)}) td:eq(1)`).text()}</td>
                                <td class="quantity009"> ${$('.table').find(`tr:eq(${Number(i)}) td:eq(2) input`).val()}</td>
                                <td class=""> ${$('.table').find(`tr:eq(${Number(i)}) td:eq(3) input`).val()}</td>
                                <td class=""> ${$('.table').find(`tr:eq(${Number(i)}) td:eq(5)`).text()}</td>                     
                                </tr>
                                `;
            }
            $('#print_payment').find('tbody').after(gb);
        })
    })
</script>
