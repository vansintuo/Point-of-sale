<!-- Button trigger modal -->
<a type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal "
    href="{{ url('sales_lines.Add') }}">
    AddNew
    <i class="fa-solid fa-plus"></i>
</a>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add Customer</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{ url('sales_lines/add_customers') }}" method="post">
                    @csrf
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputEmail4" name="email">No</label>
                            <input type="TEXT" class="form-control" id="inputEmail4" name="no">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputName" name="name">Name</label>
                            <input type="text" class="form-control" id="inputName" placeholder="Name" name="name">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputEmail4" name="email">Email</label>
                            <input type="email" class="form-control" id="inputEmail4" placeholder="Email"
                                name="email">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputSelesperson" name="salesperson_code">Address</label>
                            <input type="text" class="form-control" id="inputEmail4" placeholder="127 st"
                                name="address">
                        </div>

                        <div class="form-group col-md-6">
                            <label for="inputSelesperson" name="salesperson_code">Phone Number</label>
                            <input type="text" class="form-control" id="inputEmail4" placeholder="+855"
                                name="phone_no_2">
                        </div>

                        <div class="form-group col-md-6">
                            <label for="inputSelesperson" name="salesperson_code">Salesperson</label>
                            <input type="text" class="form-control" id="inputEmail4" placeholder="Selesperson"
                                name="salesperson_code">
                        </div>

                        <div class="form-group col-md-6">
                            <label for="inputState">Inactivated</label>
                            <select id="inputState" class="form-control" name="inactived">
                                <option id="inputState" type="input">No</option>
                                <option id="inputState" type="input">Yes</option>
                            </select>
                        </div>​
                    </div>

                    <div class="form-group">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="gridCheck">
                            <label class="form-check-label" for="gridCheck">
                                Check me out
                            </label>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary" id="go">Submit</button>
                     
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>
<script>
    $(document).ready(function() {
        $('.customer_no').on('change', function() {
            let no = $('.customer_no').val()
            $('span#cos').text(no)
            console.log(no);
        })
    })
</script>
