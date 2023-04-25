<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Document</title>
</head>
<style>
    /* THE END OF THE IMPORTANT STUFF */

    /* Basic Styling */
    @media print {

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
        .print_container {
            position: absolute;
            left: 15%;
            top: 0px;

        }
    }
</style>

<body>

    <div class="container print_container bg-white roundd shadow p-4 rounded " style="margin-top:75px">
        <center id="top" class="mt-4">
            <img src="image/1676966775.jpg" width="3px" alt="ogo"
                style="width: 100px;
                border-radius: 150px;
                background: #e0e0e0;
                box-shadow: 5px 5px 8px #9b9b9b, -5px -5px 8px #ffffff;";>
            <p class="fs-2 link-info fw-bold">Bong-POS</p>
            <!--End Info-->
        </center>
        <div style="margin-top:60px">

            <p class="fs-5">Name:<span class="fs-6 link-info">Vansin Tuo</span></p>
            <p class="fs-5">Address:<span class="fs-6 link-info">Phnom Penh</span></p>
            <p class="fs-5">Phone Number:<span class="fs-6 link-info">0889999</span></p>
        </div>



        <table class="table  mt-3">
            <thead>
                <tr>
                    <th scope="col">Desciption</th>
                    <th scope="col">Code</th>
                    <th scope="col">Title</th>
                    <th scope="col">Qty</th>
                    <th scope="col">Discount</th>
                    <th scope="col">Amount</th>


                </tr>
            </thead>
            <tbody>
                <tr>
                    <th>Hello</th>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                </tr>
            </tbody>
            <tfoot>
                <tr>
                    <td class="fs-5 fw-bold">Net Total</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td class="bg-info fs-5 fw-blod">100$</td>
                </tr>
                <tr>
                    <td class="fs-5 fw-bold">Gross Total</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td class="bg-info fs-5 fw-blod">100$</td>
                </tr>
                <tr>
                    <td class="fs-5 fw-bold">Discount Total</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td class="bg-info fs-5 fw-blod">100$</td>

                </tr>
            </tfoot>
        </table>
        {{-- <h3>Resize Me</h3> --}}
    </div>
    <div class="d-flex">
        <button onclick="print_invoice()" class="btn btn-warning ml-auto mt-3 " style="margin-left:80.5%">Print</button>
        <button class="btn btn-warning ml-auto mt-3 ml-2 back" style="margin-left:10px;">Back</button>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
    integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
    integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
</script>
<script src="https://code.jquery.com/jquery-3.6.4.min.js"
    integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>
<script>
    function print_invoice() {
        window.print();
    }
    $(document).ready(function() {
        $('body').on('click', '.back', function() {
            alert("asdfghjkl");
        })
    })
</script>


</html>
