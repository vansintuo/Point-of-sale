<!-- Button trigger modal -->

<!-- Modal -->
<div class="modal fade" id="editmodal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
            <div class="modal-content">
                  <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                        <form method="post">
                              @csrf
                              <div class="form-row">
                                    <div class="form-group col-md-6">
                                          <label for="inputEmail4" name="email">no</label>
                                          <input type="TEXT" class="form-control"   name="no" id="no" required>

                                    </div>
                                    <div class="form-group col-md-6">
                                          <label for="inputEmail4" name="email">no_2</label>
                                          <input type="TEXT" class="form-control"   name="no_2" id="no2">
                                    </div>
                                    <div class="form-group col-md-6">
                                          <label for="inputName" name="name">description</label>
                                          <input type="text" class="form-control"  id="des" placeholder="Name" name="description">
                                    </div>
                                    <div class="form-group col-md-6">
                                          <label for="inputSelesperson" name="salesperson_code">description_2</label>
                                          <input type="text" class="form-control" id="des2"   name="description_2">
                                    </div>
                                    <div class="form-group col-md-6">
                                          <label for="inputSelesperson" name="salesperson_code">item_group_code</label>
                                          <input type="text" class="form-control" id="itemgcode"   name="item_group_code">
                                    </div>
                                    <div class="form-group col-md-6">
                                          <label for="inputSelesperson" name="salesperson_code">item_category_code</label>
                                          <input type="text" class="form-control" id="itemccode"   name="item_category_code">
                                    </div>
                                    <div class="form-group col-md-6">
                                          <label for="inputSelesperson" name="salesperson_code">unit_price</label>
                                          <input type="text" class="form-control" id="sale"  name="unit_price">
                                    </div>

                                    <div class="form-group col-md-6">
                                          <label for="inputSelesperson" name="salesperson_code">picture</label>
                                          <input type="file" id="avatar" name="avatar" accept="image/png, image/jpeg" name='picture'>
                                    </div>
                                    <div class="form-group col-md-6">
                                          <label for="inputSelesperson" name="salesperson_code">Remark</label>
                                          <input type="text" class="form-control" id="remark"   name="remark">
                                    </div>

                                    <div class="form-group col-md-6">
                                          <label for="inputState">Inactuved</label>
                                          <select id="inputState" class="form-control" name="inactived" id="active">
                                                <option id="inputState" type="input" value="no">No</option>
                                                <option id="inputState" type="input" value="yes">Yes</option>
                                          </select>
                                    </div>
                              </div>6

 
                              
                        </form>
                  </div>
                  <div class="modal-footer">
                        <button type="button" class="btn btn-secondary save" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save changes</button>
                  </div>
            </div>
      </div>
</div>