<div class="col-xl-5 grid-margin stretch-card flex-column ">
    <!-- for search  -->
    <div class="search-wrapper d-flex flex-row text-align: center;">
        <div class="form-group ml-3">
            <input type="search" class="search-box " placeholder="Search" name="search" id="search"
                aria-controls="example">
        </div>
        <div id="search_list"></div>


        <div class="form-group ml-3">
            <input style="width: 170px;" class="form-control customerlist" list="datalistOptions" id="exampleDataList"
                placeholder="Select Customer">
            {{-- <label for=""> Select Customer </label> --}}
            <datalist id="datalistOptions">
                @foreach ($customer as $data)
                    <option value="{{ $data->name }}">{{ $data->no }}</option>
                @endforeach
            </datalist>
        </div>

    </div>
    @include('pos.add_new')
    <!-- end -->
    <div class=" bg-primary rounded">

        <div class="col align-items-center p-2 bg-white">
            <div class="size mr-1">
                <span class="font-weight-bold">
                    <i class="fa-solid fa-user"></i>
                    &nbsp;Costomer
                </span>
            </div>
            <span type="text" class="form-control" id="cos"></span>
        </div>
    </div>
    <div class="row">
        <div class=" flex-row justify-content-between align-items-center p-2 bg-white px-3 rounded mt-4 cart">
            <div class=" bx-shopping-bag">
                <div class="cart-icon">
                    <h2 class="cart-title">Your Cart</h2>
                    {{-- for return produch --}}
                    <table class="table" id="table_lenght">
                        <thead>
                            <tr>
                                <th scope="col">Code</th>
                                <th scope="col">Title</th>
                                <th scope="col">QTY</th>
                                <th scope="col">
                                    Discount
                                    <select>
                                        <option value="saab">%</option>
                                        <option value="opel">$</option>
                                    </select>
                                </th>
                                <th scope="col">Price</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>

                        <tbody class="qty_exch" id="">

                        </tbody>

                        <tfoot>
                            <tr>
                                <td>Total</td>
                                <td class="total_all"></td>

                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
        {{-- total show --}}
        <div class="shadow p-3 mb-5 bg-body rounded mt-4">
            <div class="row d-flex">
                <div class="justify_contain"></div>
                <div class="col">
                    <span class="fs-4 fw-bold">Net Total</span>
                </div>
                <div class="col">
                    <span class="fs-4 fw-bold total_all">0</span>
                    <span class="fs-4 fw-bold ">$</span>
                </div>
            </div>
            <div class="row d-flex">
                <div class="col">
                    <span class="fs-5 ">Gross Total</span>

                </div>
                <div class="col">
                    <span class="fs-5 total" id="">0</span>
                    <span class="fs-4 fw-bold ">$</span>
                </div>
            </div>

            <div class="mt-3">
                <div class="d-flex">
                    <div class="col">
                        <span class="fs-5">Total Discount</span>
                    </div>
                    <div class="col">
                        <span class="fs-5">Payment</span>
                    </div>
                </div>
                <div class="justify"></div>
                <div class="d-flex">
                    <div class="col">
                        <span class="fs-5  total_discount">0</span>
                        <span class="fs-5">$</span>
                    </div>
                    <div class="col">
                        <span class="fs-5 total">0</span>
                        <span class="fs-5">$</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- end --}}





</div>
