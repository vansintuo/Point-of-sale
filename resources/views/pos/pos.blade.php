<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>PolluxUI Admin</title>
    <!-- base:css -->
    <link rel="stylesheet" href="{{ asset('vendors/typicons/typicons.css') }}">
    <link rel="stylesheet" href="{{ asset('vendors/css/vendor.bundle.base.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/vertical-layout-light/style.css') }}">
    <!-- endinject -->
    <link rel="shortcut icon" href="images/favicon.png" />
    <!-- for boostrap5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://kit.fontawesome.com/4507fd7002.css" crossorigin="anonymous">
    {{-- iconse css --}}
    <link rel="stylesheet" href="https://kit.fontawesome.com/4507fd7002.css" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.6.3.js" integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM="
        crossorigin="anonymous"></script>
</head>

<body>

    <div class="row" id="proBanner">
        <div class="col-12">

            <i class="typcn typcn-delete-outline" id="bannerClose"></i>
        </div>
    </div>
    <div class="container-scroller">
        @include('pages.header')
        <!-- call for menu -->
        <div class="container-fluid page-body-wrapper">
            @include('pages.menu')
            <!-- partial -->
            <div class="main-panel">

                <div class="content-wrapper">
                    <div class="row">
                        <!-- show return -->
                        @include('pos.return')

                        <!-- product -->
                        @include('pos.product')
                    </div>

                </div>
                {{-- foo ter --}}
                @include('pages.footer')
                {{-- end --}}
                <!-- partial -->
            </div>

        </div>
    </div>
    <!-- for icone Link -->
    <script src="https://kit.fontawesome.com/4507fd7002.js" crossorigin="anonymous"></script>
    <script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
    </script>
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
<script>
    $(document).ready(function() {
        // for discount specifice item
        $('BODY').on('change', '#discount', function() {
            var ethis = $(this);
            var par = ethis.parents('tr');
            var index = par.index();
            var qty = par.find('td:eq(2) input').val()
            var dis = par.find('td:eq(3) input').val();
            var unit_price = par.find('td:eq(4)').text();
            var subtotal = par.find('td:eq(5)').text();
            var total = (unit_price * qty) - ((unit_price * qty) * dis / 100);
            par.find('td:eq(5)').text((total).toFixed(2));
            //for sum total
            let sum = 0;
            $('.subprice').each(function() {
                sum += parseFloat($(this).text());
            });
            $('.total').text(Number(sum).toFixed(2));
            // console.log(sum);
            // //end
            //sum for total discount
            var total_dis_all = total_sum - sum;
            // console.log("This is for Total discount", total_dis_all);
            $('.total_discount').text(Number(total_dis_all).toFixed(2));
            //end
        });



        //change customer
        let list = ['1']
        $('.customerlist').on('change', function() {
            let name = $('.customerlist').val()
            $('span#cos').text(name);
        })





        //for print invoice
        $('.prints').on('click', function() {
            $('#print_invoice').html(`
        <table  id="print_invoice">                 
             <thead>
                <tr>
                    <th scope=" col" >code</th>
                    <th scope=" col" style="margin-left:30px">Title</th>
                    <th scope=" col" style="margin-left:30px">qty</th>
                    <th scope=" col" style="margin-left:30px">Decse</th>
                    <th scope=" col" style="margin-left:30px">total</th>                                
                </tr>
            </thead>
            <tbody>
            </tbody>
        </table>
            `)
            let table = $('#table_lenght').find('tr').length;
            var gb = "";
            for (var i = 1; i < table - 1; i++) {
                gb += `
                     <tr >  
                       <td class="ml-3 code">${$('.table').find(`tr:eq(${Number(i)}) td:eq(0)`).text()}</td>
                       <td class="title">${$('.table').find(`tr:eq(${Number(i)}) td:eq(1)`).text()}</td>
                       <td class="title"> ${$('.table').find(`tr:eq(${Number(i)}) td:eq(2) input`).val()}</td>
                       <td class="title"> ${$('.table').find(`tr:eq(${Number(i)}) td:eq(3) input`).val()}</td>
                       <td class="title"> ${$('.table').find(`tr:eq(${Number(i)}) td:eq(4)`).text()}</td>                     
                     </tr>
        `
            }
            $('#print_invoice').find('tbody').after(gb)

        })
        //end

        //add more qty when input
        $('body').on('change', '#qty', function() {
            var ethis = $(this);
            var par = ethis.parents('tr');
            var index = par.index();
            var qty = par.find('td:eq(2) input').val();
            var unit_price = par.find('td:eq(4)').text();
            var dis = par.find('td:eq(3) input').val();
            var subtotal_item = par.find('td:eq(5)').text();
            var total_dis = ((unit_price * qty) * dis / 100);
            var total_qty = (qty * unit_price) - total_dis;
            par.find('td:eq(5)').text(Number(total_qty).toFixed(2))
            // console.log(total_qty);

        })
        //for search 
        $('#search').on('keyup', function() {
            // console.log($(this).val());
            var search = $('#search').val();
            var data = {
                'search': search,
            }
            $.ajax({
                url: '/sales_lines/item_search',
                type: 'GET',
                datatype: 'json',
                data: data,
                success: function(data) {
                    $(".addMore").html(data);
                    // console.log(data);
                }
            })
        })

        //for add item to cart
        $('body').on('click', '.product-box', function() {
            var ethis = $(this)
            var per = ethis.index();
            var item = ethis.find('.item_no').text();
            var title = ethis.find('.product_title').text();
            var price = ethis.find('.price').text();
            var table = $('#table_lenght tbody');

            // console.log(ethis);
            // console.log(per);
            // console.log(item);
            // console.log(title);
            // console.log(price);
            // console.log(table);

            var getlet = 0;
            for (var i = 0; i < list.length; i++) {
                if (list[i] == item) {
                    getlet = 1;
                    break;
                }
            }
            if (getlet == 1) {
                var dis = $(`.${item.trim()}discount`).val();
                var priceChange = $(`.${item.trim()}qty`).val();
                // console.log(dis)
                var price = $(`.${item.trim()}price`).text();

                console.log(price);

                $(`.${item.trim()}qty`).val(Number(priceChange) + 1);
                var sub_total = $(`.${item.trim()}subprice`).text(Number((price) * (Number(
                        priceChange) + 1) - (Number(price) * (Number(priceChange) + 1)) * dis /
                    100).toFixed(2));
                var gross_total = $(`.${item.trim()}gross_total`).text(Number((price) * (Number(
                    priceChange) + 1)).toFixed(2) + '$');
                let sum = 0;

                // console.log($('.subprice'));

                $('.subprice').each(function() {
                    sum += parseFloat($(this)
                        .text());
                });
                $('.total').text(Number(sum).toFixed(2));
                // console.log("Sub_Total", sum);
                //end

                //sum alll item 
                total_sum = 0;
                $('.gross_total').each(function() {
                    total_sum += parseFloat($(this).text());
                    // console.log($(this).text());
                });
                $('.total_all').text(Number(total_sum).toFixed(2));
                // console.log("Total_all", total_sum);
                //end

                // sun_dis=0';
                // $('total_discount').each(function(){
                //     sun_dis+=parseFloat($(this).text());
                // })
                // $('.total_discount').text(Number(sun_dis).toFixed(2));

            } else {
                var trim = item.trim()
                list.push(item)

                var tr = `
                <tr class="mytable_row">
                    <td>${item}</td>
                    <td>${title}</td>
                    <td><input type="number" class='${trim}qty' id="qty" value="1"></td>
                    <td><input type="number" class='${trim}discount ' id="discount" placeholder="%"></td>
                    <td class='${trim}price' id="isnone">${price}</td>
                    <td class='${trim}subprice subprice'>${price}</td>
                    <td class='${trim}gross_total gross_total ' id="isnone">${price}</td>
                    <td><i type="btn" class="fa-solid fa-trash fa-beat fa-sm fs-4 cart_remove"  style="color: #fa0025;"></i></td>                   
                </tr>    
            `
                table.append(tr)


                let sum = 0;
                $('.subprice').each(function() {
                    sum += parseFloat($(this)
                        .text());
                });
                $('.total').text(Number(sum).toFixed(2));



                //sum alll item 
                total_sum = 0;
                $('.gross_total').each(function() {
                    total_sum += parseFloat($(this).text());
                    // console.log($(this).text());
                });
                $('.total_all').text(Number(total_sum).toFixed(2));
                // console.log("Total_all", total_sum);
                //end

            }

            //for cart remove
            $('body').on('click', '.cart_remove', function(elem) {
                // $(this).closest('tr').remove();
                var remove_item = $(this).parents('tr').remove();
                var ethis = $(this);
                var par = ethis.parents('tr');
                var index = par.index();
                var qty = par.find('td:eq(0)').text();
                var index = list.indexOf(qty.trim());
                list.splice(index, 1);
                // console.log(qty.trim());
                // console.log(remove_item);


                let sum = 0;
                $('.subprice').each(function() {
                    sum += parseFloat($(this)
                        .text());
                });
                $('.total').text(Number(sum).toFixed(2));

                //remove from all total 
                sum = 0;
                $('.gross_total').each(function() {
                    sum += parseFloat($(this).text());
                });
                // console.log(sum);
                $('.total_all').text(Number(sum).toFixed(2));
                //end


                //remove form total discount

                //sum for total discount

                var total_dis_all = (sum + total_sum) - (sum + total_sum);
                // console.log("This is for Total discount:", total_dis_all);
                $('.total_discount').text(Number(total_dis_all).toFixed(2));
                //end
                //end



            })

        })


    });
</script>

</html>
