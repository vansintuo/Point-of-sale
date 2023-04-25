<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>

      <table class="table" id="table_lenght">
            <thead>
                  <tr>
                        <th scope="col">Code</th>
                        <th scope="col">Titla</th>
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

            <tbody class="qty_exchang" id="">

            </tbody>

            <tfoot>
                  <tr>
                        <td>Total</td>
                        <td class="total_all"></td>

                  </tr>
            </tfoot>
      </table>

    <div class="">
        <img src="image/1676966775.jpg" width="3px" alt="ogo"
            style="border-radius: 50%; background: #e0e0e0;box-shadow:  12px -12px 100px #707070,-12px 12px 100px #ffffff ;width: 100px; margin-left:40%;";>
        <div class="col-12 ">
            <img src="" alt="">
            <div class="">
                <span class="bg-warning  fw-bold fs-5">Customer:<span class="  text-center link-info ml-4"
                        id="cos"></span></span>
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
</body>

</html>

<script>
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
      `
    }
    $('#print_payment').find('tbody').after(gb)

    //     window.print();
</script>
