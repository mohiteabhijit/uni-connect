 <div class="content-wrapper">

  <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Price Managment</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo base_url();?>">Home</a></li>
              <li class="breadcrumb-item active">Price Managment</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

        <div class="col-md-8">
            <!-- general form elements disabled -->
            <div class="card card-success">
              <div class="card-header">
                <h3 class="card-title">Search Product</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <form role="form">
                  <div class="row">
                    <div class="col-sm-6">
                      <!-- text input -->
                        <label>Product Code</label>
                         <div class="input-group input-group-sm">
                      <input type="text" class="form-control">
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <!-- text input -->
                       <label>Product Name</label>
                      <div class="input-group input-group-sm">
                      <input type="text" class="form-control">
                      <span class="input-group-append">
                      <button type="button" class="btn btn-info btn-flat">Search</button>
                      </span>
                      </div>
                    </div>
                  </div>
                </form>
              </div>
              <!-- /.card-body -->
            </div>
          </div>
          <div class="col-md-10">
            <!-- general form elements disabled -->
            <div class="card card-info">
              <div class="card-header">
                <h3 class="card-title">Product Name</h3>
                <button type="submit" class="btn btn-success float-right">Price Details</button>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <form role="form">
                  <div class="row">
                    <div class="col-sm-2">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Net Price</label>
                        <input type="text" class="form-control" placeholder="Enter Measure Unity" value="1">
                      </div>
                    </div>
                    <div class="col-sm-2">
                      <!-- text input -->
                      <div class="form-group">
                        <label>% Dscto 1</label>
                        <input type="text" class="form-control" placeholder="Enter Measure Unity" value="1">
                      </div>
                    </div>
                    <div class="col-sm-2">
                      <!-- text input -->
                      <div class="form-group">
                        <label>% Dscto 2</label>
                        <input type="text" class="form-control" placeholder="Enter Measure Unity" value="1">
                      </div>
                    </div>
                    <div class="col-sm-2">
                      <!-- text input -->
                      <div class="form-group">
                        <label>% Dscto 3</label>
                        <input type="text" class="form-control" placeholder="Enter Measure Unity" value="1">
                      </div>
                    </div>
                    <div class="col-sm-2">
                      <!-- text input -->
                      <div class="form-group">
                        <label>% Dscto 4</label>
                        <input type="text" class="form-control" placeholder="Enter Measure Unity" value="1">
                      </div>
                    </div>
                    <div class="col-sm-2">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Sub Price</label>
                        <input type="text" class="form-control" placeholder="Enter Measure Unity" value="1">
                      </div>
                    </div>
                    <div class="col-sm-2">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Freight Price</label>
                        <input type="text" class="form-control" placeholder="Enter Measure Unity" value="1">
                      </div>
                    </div>
                    <div class="col-sm-2">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Price Without Tax</label>
                        <input type="text" class="form-control" placeholder="Enter Measure Unity" value="1">
                      </div>
                    </div>
                    <div class="col-sm-2">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Purchase Price</label>
                        <input type="text" class="form-control" placeholder="Enter Measure Unity" value="1">
                      </div>
                    </div>
                    <div class="col-md-12">
                    <div class="col-sm-3">
                      <!-- select -->
                      <div class="form-group">
                        <label>Taxes List</label><br>
                        <label>Select Tax</label>
                        <select class="custom-select">
                          <option>IVA</option>
                          <option>option 2</option>
                          <option>option 3</option>
                          <option>option 4</option>
                          <option>option 5</option>
                        </select>
                      </div>
                    </div>
                    <div class="col-sm-3">
                      <!-- select -->
                      <div class="form-group">
                        <select class="custom-select">
                          <option>Select</option>
                          <option>option 2</option>
                          <option>option 3</option>
                          <option>option 4</option>
                          <option>option 5</option>
                        </select>
                      </div>
                    </div>
                    <button type="submit" class="btn btn-info float-right">Save</button>
                    </div>
                  </div>
                </form>
              </div>
              <!-- /.card-body -->
            </div>
          </div>
          <div class="col-md-10">
            <div class="card card-info">
              <div class="card-header">
                <h3 class="card-title">Sell Price</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table class="table table-bordered">
                  <thead>                  
                    <tr>
                      <th>Branch Name</th>
                      <th>Retail Price</th>
                      <th>Retail Margin</th>
                      <th>Wholesale Price</th>
                      <th>Wholesale Margin</th>
                      <th style="width: 40px"></th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>Branch Name 1</td>
                      <td contenteditable='true'>$ 400</td>
                      <td contenteditable='true'>5%</td>
                      <td contenteditable='true'>$ 390</td>
                      <td contenteditable='true'>5%</td>
                      <td><button  type = 'button' class="btn btn-info" data-toggle="modal" data-target="#modal-lg">equalize</button></td>
                    </tr>
                    <tr>
                      <td>Branch Name 2</td>
                      <td contenteditable='true'>$ 400</td>
                      <td contenteditable='true'>5%</td>
                      <td contenteditable='true'>$ 390</td>
                      <td contenteditable='true'>5%</td>
                      <td><button  type = 'button' class="btn btn-info" data-toggle="modal" data-target="#modal-lg">equalize</button></td>
                    </tr>
                    <tr>
                      <td>Branch Name 3</td>
                      <td contenteditable='true'>$ 400</td>
                      <td contenteditable='true'>5%</td>
                      <td contenteditable='true'>$ 390</td>
                      <td contenteditable='true'>5%</td>
                      <td><button  type = 'button' class="btn btn-info" data-toggle="modal" data-target="#modal-lg">equalize</button></td>
                    </tr>
                  </tbody>
                </table>
                 <button type="submit" class="btn btn-info float-right">Save</button>
              </div>
            </div>
          </div>
  </div>