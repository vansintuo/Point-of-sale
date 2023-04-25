<style>
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
        /* .print_container {
            position: absolute;
            left: 0px;
            top: 0px;
        } */
    }
</style>

<!-- Button trigger modal -->
<button type="button" class="btn btn-warning prints" data-bs-toggle="modal" data-bs-target="#staticBackdrop"
    id="btn_payment">
    <i class="fa-solid fa-print"></i>
    Print
</button>
<!-- Modal -->

<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">

    <div class="modal-dialog print_container ">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Your Invoice</h5>

                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">

                @include('pos.time')

                <div id="invoice-POS">
                    <center id="top">
                        <img src="image/1676966775.jpg" width="3px" alt="ogo"
                            style="border-radius: 50%; background: #e0e0e0;box-shadow:  12px -12px 100px #707070,-12px 12px 100px #ffffff ;width: 100px;";>
                        <!--End Info-->
                    </center>
                    <!--End InvoiceTop-->
                    <div id="mid">
                        <div class="info">
                            <b class="link-primary">customer<span type="text" class="form-control"
                                    id="cos"></span></b>
                        </div>
                        <span><b> Adress::</b>Phnom Penh</span>
                        <p><b>state::</b>127 ganga</p>
                    </div>
                    <!--End Invoice Mid-->


                    <table class="table" id="print_invoice">
                    </table>


                    <p class="fs-6">Net Total</p>
                    <p class="fs-6">Gross Total</p>
                    <p class="fs-6">Discount Total</p>
                    <!--End Table-->
                    <!--End InvoiceBot-->
                </div>
                <!--End Invoice-->
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary print">Print</button>
            </div>
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    // function print() {
    //     Swal.fire('Any fool can use a computer')
    // }
    $(document).ready(function() {
        $('.print').on('click', function() {
            window.print();

        })

        $('.btn_payment').on('click', function() {})


    })
</script>
