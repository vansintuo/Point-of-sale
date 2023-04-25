<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Payment</title>
</head>
<style>
    @media payment {

        /* hide every other element */
        body * {
            visibility: hidden;
        }

        /* then dispay print conteainer element */
        .print_container,
        .print_container * {
            visibility: visible;
        }

        /* ajust the position to away start from top left */
        /* .print_containers {
            position: absolute;
            left: 0px;
            top: 0px;
        } */
    }
</style>

<body>
    <!-- Button trigger modal -->
    <button type="button" class="btn btn-info " id="btn_payment">
        <i class="fa-regular fa-credit-card"></i>
        Payment
    </button>
    <!-- Modal -->
    <div class="modal fade" id="Payment" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog ">
            <div class="modal-content pay_invioce">
                <div class="modal-header">
                    <h5 class="modal-title text-center" id="staticBackdropLabel"></h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <div class="modal-body ">

                    <div class="">
                        <img src="image/1676966775.jpg" width="3px" alt="ogo"
                            style="border-radius: 50%; background: #e0e0e0;box-shadow:  12px -12px 100px #707070,-12px 12px 100px #ffffff ;width: 100px; margin-left:40%;";>
                        <div class="col-12 ">
                            <img src="" alt="">
                            <div class="">
                                <span class="bg-warning  fw-bold fs-5">Customer:<span
                                        class="  text-center link-info ml-4" id="cos"></span></span>
                                <div class="">
                                    <p class="h7 fw-bold mb-1">Pay this Invoice</p>
                                    <p class="textmuted h8 mb-2">Make payment for this invoice by filling in the
                                        details</p>
                                    <div class="form print_container ">
                                        {{-- for show data table  --}}
                                        <table class="table " id="print_payment">
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>
                    <div class="btn btn-primary d-block h8 " id="payment">PAY
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
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"
        integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>
    <script>
        $(document).ready(function() {
            $.ajaxSetup({

                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $('body').on('click', '#payment', function() {
                let table = $('#table_lenght').find('tr').length;

                var id = $('#exampleDataList').val()
                console.log(id)
                $.ajax({
                    url: '/sales_lines/setcustomer/' + id,
                    type: 'post',
                    cache: false,
                    data: {
                        'id': id,
                    },
                    dataType: "json",
                    success: function(data) {
                        Swal.fire({
                            position: 'top-end',
                            icon: 'success',
                            title: 'Success',
                            showConfirmButton: false,
                            timer: 1500
                        });

                        setTimeout(function() {
                            window.location.href = 'http://127.0.0.1:8000/sales_lines'
                        }, 1500);

                        console.log(data);

                    }
                });

                for (var i = 1; i < table - 1; i++) {
                    var document_no = $('.table').find(`tr:eq(${i}) td:eq(0)`).text();
                    var item_no = $('.table').find(`tr:eq(${i}) td:eq(0)`).text();
                    var item_description = $('table').find(`tr:eq(${i}) td:eq(1)`).text();
                    // var item_desciption_2 = $('table').find(`tr:eq(${i}) td:eq(1)`).text();
                    // var unit_of_measure = $('table').find(`tr:eq(${i}) td:eq(1)`).text();
                    // var qty_per_unit_of_measure = $('table').find(`tr:eq(${i}) td:eq(1)`).text();
                    var quantity = $('table').find(`tr:eq(${i}) td:eq(2)`).text();
                    // var discount_percentage = $('table').find(`tr:eq(${i}) td:eq(1)`).text();
                    var discount_amount = $('.total_discount', 255).text();
                    // var amount_lcy = $('table').find(`tr:eq(${i}) td:eq()`).text();
                    // var item_category_code = $('table').find(`tr:eq(${i}) td:eq()`).text();
                    // var item_group_code = $('table').find(`tr:eq(${i}) td:eq()`).text();
                    var amount = $('table').find(`tr:eq(${i}) td:eq(5)`).text();

                    // console.log("here is items_no:", no);
                    // console.log("here is document_no:", document_no);
                    //varible for customer add to sale_header
                    var data = {
                        'document_no': document_no,
                        'item_no': item_no,
                        'item_description': item_description,
                        'quantity': quantity,
                        // 'item_desciption_2': item_desciption_2,
                        // 'unit_of_measure': unit_of_measure,
                        // 'qty_per_unit_of_measure': qty_per_unit_of_measure,
                        // 'discount_percentage': discount_percentage,
                        'discount_amount': discount_amount,
                        'amount': amount,

                        // 'amount_lcy': amount_lcy,
                        // 'item_category_code': item_category_code,
                        // 'item_group_code': item_group_code,

                    };


                    //for add sale lines
                    $.ajax({
                        url: '/sales_lines/add_salines',
                        type: 'POST',
                        //contentType:false,
                        cache: false,
                        data: data,
                        //processData:false,
                        dataType: "json",
                        beforeSend: function() {
                            $('#payment dive').css({
                                'display': 'block'
                            })
                            // console.log(beforeSend);
                        },
                        success: function(data) {
                            $('body').find('.modal-content').modal("hide");

                        },
                        error: function(xml, error, thrownError) {
                            console.log("Error", thrownError);


                        }
                    });
                }
            });
            //for print invoice
            $('.prints').on('click', function() {
                $('#print_invoice').html(`
        <table  id="print_invoice">                 
             <thead>
                <tr>
                    <th scope=" col" >code</th>
                    <th scope=" col" style="margin-left:30px">Title</th>
                    <th scope=" col" style="margin-left:30px">qty</th>
                    <th scope=" col" style="margin-left:30px">Discount</th>
                    <th scope=" col" style="margin-left:30px">total</th>                                
                </tr>
            </thead>
            <tbody>
            </tbody>
              <tfoot>
                    <tr>
                        <td>Total</td>
                        <td class="total_all"></td>
                        <td>Sub Total</td>
                        <td class="total_all_discount"></td>
                    </tr>
                </tfoot>
        </table>
            `)
                let table = $('#table_lenght').find('tr').length;
                var gb = "";
                for (var i = 1; i < table - 1; i++) {
                    gb += `
                     <tr >  
                       <td>${$('.table').find(`tr:eq(${Number(i)}) td:eq(0)`).text()}</td>
                       <td>${$('.table').find(`tr:eq(${Number(i)}) td:eq(1)`).text()}</td>
                       <td> ${$('.table').find(`tr:eq(${Number(i)}) td:eq(2) input`).val()}</td>
                       <td> ${$('.table').find(`tr:eq(${Number(i)}) td:eq(3) input`).val()}</td>
                       <td> ${$('.table').find(`tr:eq(${Number(i)}) td:eq(4)`).text()}</td>                     
                     </tr>
        `
                }
                $('#print_invoice').find('tbody').after(gb)

            })
            //end


            $('#btn_payment').on('click', function() {

                let name = $('.customerlist').val();

                if (name == '') {
                    Swal.fire({
                        icon: 'error',
                        title: 'Please select customer!',
                        text: 'Something went wrong!',
                    })
                } else {

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


                    $('#payment').on('click', function() {
                        window.print();
                    })
                }
            });
        });
    </script>
</body>

</html>
