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
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=PT+Serif:ital@1&family=Tilt+Neon&display=swap"
        rel="stylesheet">
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

    <div class="container print_container bg-white roundd shadow p-4 rounded "
        style="margin-top:50px;font-family: 'PT Serif', serif;
        font-family: 'Tilt Neon', cursive;">
        <center id="top" class="mt-4">
            <img src="{{ asset('image/1676966775.jpg') }}" width="3px" alt="ogo"
                style="width: 100px;
                border-radius: 150px;
                background: #e0e0e0;
                box-shadow: 5px 5px 8px #9b9b9b, -5px -5px 8px #ffffff;";>
            <p class="fs-2 link-info fw-bold">Bong-POS</p>
            <!--End Info-->
        </center>
        {{-- <p class="bg-warning col-xl-12" style="height:30px"></p> --}}

        <?php
        // dd($sale_header);
        ?>

        <div style="margin-top:60px">

            @foreach ($sale_header as $header)
                <p class="fs-5">Name : <span class="fs-6 link-info" id="cos">{{ $header->customer_name }}</span>
                </p>
                <p class="fs-5">Address : <span class="fs-6 link-info"> {{ $header->address }} </span></p>

                <p class="fs-5">Phone Number : <span class="fs-6 link-info">0889999</span></p>
            @endforeach



        </div>
        <div>



            <table class="table  mt-3">
                <thead class="bg-info">
                    <tr>
                        <th scope="col">Code</th>
                        <th scope="col">Title</th>
                        <th scope="col">Quantity</th>
                        <th scope="col">Discount</th>
                        <th scope="col">Amount</th>


                    </tr>
                </thead>
                @foreach ($sale_line as $line)
                    <tbody>
                        <tr>
                            <th>{{ $line->item_no }}</th>
                            <td>{{ $line->item_description }}</td>
                            <td>{{ number_format($line->quantity, 2) }}</td>

                            @if ($line->discount_amount != 0)
                                <td>${{ number_format($line->discount_amount, 2) }}</td>
                            @else
                                <td>%{{ number_format($line->discount_percentage, 2) }}</td>
                            @endif


                            <td>${{ number_format($line->amount, 2) }}</td>
                        </tr>
                    </tbody>
                @endforeach

            </table>
        </div>
        <div>
            <div class="d-flex">
                <div class="col-xl-9 grid-margin stretch-card flex-column ">
                    <p class="fs-4">Thank You!!</p>
                    <p class="fs-6 fw-bold">Bong-POS $ Blue Technology</p>
                    <p>
                        <span>Blue technology is a trusted business software solutions provider focusing on the
                            Cambodian and
                            ASEAN
                        </span><br>
                        <span> markets with customers in Cambodia, Vietnam, Myanmar, Laos, and Mongolia.</span>
                    </p>
                </div>
                <div class="col-xl-3 grid-margin stretch-card flex-column ">
                    <div class="ml-3">
                        <div class="">Sub Total:<span style="margin-left:30px;"> ${{ $sale_line->sum('amount') }}
                            </span></div>
                        <div class="mt-2 ">Tax:<span style="margin-left:72px;">0.0$</span></div>
                        <div class=" mt-2 fw-bold text-primary">Total:<span style="margin-left:59px;">
                                ${{ $sale_line->sum('amount') }} </span></div>
                    </div>
                </div>
            </div>
            {{-- <p class="bg-warning col-xl-12" style="height:10px"></p> --}}
        </div>
    </div>
    <div class="d-flex" style="margin-left:85.5%">
        <button onclick="print_invoice()" class="btn btn-warning ml-auto mt-3 ">Print</button>
        <button class="btn btn-warning ml-auto mt-3 ml-2 back" style="margin-left:10px;">Back</button>
    </div>
</body>
@include('srcipt')
<script>
    function print_invoice() {
        window.print();
    }
    $(document).ready(function() {
        $('body').on('click', '.back', function() {
            window.location.href = 'http://127.0.0.1:8000/sales_lines'
        })

    })
</script>


</html>
