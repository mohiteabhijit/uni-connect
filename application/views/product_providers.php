 <div class="content-wrapper">

  <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Product Providers Managment</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo base_url();?>">Home</a></li>
              <li class="breadcrumb-item active">Product Providers Managment</li>
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

<section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-10">
            <div class="card card-info">
              <div class="card-header">
                <h3 class="card-title">Product Providers</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table class="table table-bordered">
                  <thead>                  
                    <tr>
                      <th style="width: 10px">#</th>
                      <th>RUT</th>
                      <th>Name</th>
                      <th>Address</th>
                      <th>City</th>
                      <th>Primary Contact Name</th>
                      <th>Contact Phone</th>
                      <th>Contact Email</th>
                      <th style="width: 40px"></th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>1.</td>
                      <td>77 666 666-1</td>
                      <td>Name</td>
                      <td>Address</td>
                      <td>City</td>
                      <td>Contact Name</td>
                      <td>8547854748</td>
                      <td>aaa@gmail.com</td>
                      <td><button  type = 'button' class="btn btn-info" data-toggle="modal" data-target="#modal-lg">Contacts</button></td>
                      <!-- <button type="button" class="btn btn-default" data-toggle="modal" data-target="#modal-lg"> -->
                  <!-- Launch Large Modal -->
                <!-- </button> -->
                    </tr>
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
              <div class="card-footer clearfix">
                <ul class="pagination pagination-sm m-0 float-right">
                  <li class="page-item"><a class="page-link" href="#">&laquo;</a></li>
                  <li class="page-item"><a class="page-link" href="#">1</a></li>
                  <li class="page-item"><a class="page-link" href="#">2</a></li>
                  <li class="page-item"><a class="page-link" href="#">3</a></li>
                  <li class="page-item"><a class="page-link" href="#">&raquo;</a></li>
                </ul>
              </div>
            </div>
        <button type="submit" class="btn btn-info float-right">Add Provider</button>
          </div>
          <div class="col-md-10">
            <!-- general form elements disabled -->
            <div class="card card-info">
              <div class="card-header">
                <h3 class="card-title">Search Provider</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <form role="form">
                  <div class="row">
                    <div class="col-sm-6">
                      <!-- text input -->
                        <label>Provider RUT</label>
                         <div class="input-group input-group-sm">
                      <input type="text" class="form-control">
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <!-- text input -->
                       <label>Provider Name</label>
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
            <div class="card card-info">
              <div class="card-header">
                <h3 class="card-title">Provider List</h3>
              </div>
              <!-- /.card-header -->
              
              <div class="row">
              <div class="col-sm-5">
                <!-- text input -->
                  <label>Product Code</label>
                   <div class="input-group input-group-sm">
                <input type="text" class="form-control" placeholder="012012" disabled>
                </div>
              </div>
              <div class="col-sm-5">
                <!-- text input -->
                  <label>Product Name</label>
                   <div class="input-group input-group-sm">
                <input type="text" class="form-control" placeholder="Bottle of Wine" disabled>
                </div>
              </div>
            </div>

              <div class="card-body">
                <table class="table table-bordered">
                  <thead>                  
                    <tr>
                      <th style="width: 10px">#</th>
                      <th>RUT</th>
                      <th>Provider Name</th>
                      <th>Select</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>1.</td>
                      <td>77 666 666-1</td>
                      <td>Provider Name</td>
                      <td><div class="form-check"><input class="form-check-input" type="checkbox"></div></td>
                    </tr>
                    <tr>
                      <td>2.</td>
                      <td>77 666 666-1</td>
                      <td>Provider Name</td>
                      <td><div class="form-check"><input class="form-check-input" type="checkbox"></div></td>
                    </tr>
                    <tr>
                      <td>3.</td>
                      <td>77 666 666-1</td>
                      <td>Provider Name</td>
                      <td><div class="form-check"><input class="form-check-input" type="checkbox"></div></td>
                    </tr>
                  </tbody>
                </table>
                <button type="submit" class="btn btn-info float-right">Assign Provider</button>
              </div>
              <!-- /.card-body -->
              <div class="card-footer clearfix">
                <ul class="pagination pagination-sm m-0 float-right">
                  <li class="page-item"><a class="page-link" href="#">&laquo;</a></li>
                  <li class="page-item"><a class="page-link" href="#">1</a></li>
                  <li class="page-item"><a class="page-link" href="#">2</a></li>
                  <li class="page-item"><a class="page-link" href="#">3</a></li>
                  <li class="page-item"><a class="page-link" href="#">&raquo;</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
<style type="text/css">
  .respo {
      font-size: 0.8rem ! important;
    }
    .respo td, .respo th{
      padding: 0rem;
      border-top: none ! important;
    }
    .respo th{
      color: #007bff;
    }
</style>
      <div class="modal fade" id="modal-lg">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Providers Contacts</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <!-- Product details-->
                <div class="row respo">
                  <div class="col-12">
                  <div class="table-responsive ">
                    <h6><strong>Providers Contacts</strong></h6>
                     <table class="table ">
                       <tr>
                            <th>Name</th>
                            <th>Last Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Position</th>
                            <th>Comments</th>
                            
                          </tr>
                          <tr>
                            <td>Name</td>
                            <td>Last Name</td>
                            <td>Email</td>
                            <td>8574859658</td>
                            <td>Seller</td>
                            <td>Comments</td>
                        </tr>
                          <tr>
                            <td>Name</td>
                            <td>Last Name</td>
                            <td>Email</td>
                            <td>8574859658</td>
                            <td>Seller</td>
                            <td>Comments</td>
                        </tr>
                          <tr>
                            <td>Name</td>
                            <td>Last Name</td>
                            <td>Email</td>
                            <td>8574859658</td>
                            <td>Seller</td>
                            <td>Comments</td>
                        </tr>
                     </table>
                  </div>
                </div>
                <!-- /.col -->
              </div>
            </div>
            <!-- <div class="modal-body">
              <p>One fine body&hellip;</p>
            </div> -->
            <!-- <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <button type="button" class="btn btn-primary">Save changes</button>
            </div> -->  
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      <!-- /.modal -->