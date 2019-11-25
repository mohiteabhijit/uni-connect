 <div class="content-wrapper">

  <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Tax Managment</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo base_url();?>">Home</a></li>
              <li class="breadcrumb-item active">Tax Managment</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
<section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-10">
            <div class="card card-success">
              <div class="card-header">
                <h3 class="card-title">Tax Managment</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table class="table table-bordered">
                  <thead>                  
                    <tr>
                      <th style="width: 10px">#</th>
                      <th>Tax Name</th>
                      <th>Percentage</th>
                      <th>Tax Description</th>
                      <th style="width: 40px">Edit</th>
                      <th style="width: 40px">Delete</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>1.</td>
                      <td>IVA</td>
                      <td>19%</td>
                      <td>Tax Description</td>
                      <td><button  type = 'button' class="btn btn-info" data-toggle="modal" data-target="#modal-lg">Edit</button></td>
                      <td><button  type = 'button' class="btn btn-info" data-toggle="modal" data-target="#modal-lg">Delete</button></td>
                    </tr>
                    <tr>
                      <td>2.</td>
                      <td>ILAB</td>
                      <td>18%</td>
                      <td>Tax Description</td>
                      <td><button  type = 'button' class="btn btn-info" data-toggle="modal" data-target="#modal-lg">Edit</button></td>
                      <td><button  type = 'button' class="btn btn-info" data-toggle="modal" data-target="#modal-lg">Delete</button></td>
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
            <button type="button" class="btn btn-info float-right" data-toggle="modal" data-target="#modal-sm1">Add Tax</button>
          </div>
        </div>
      </div>
    </section>
     <div class="col-md-10">
            <!-- general form elements disabled -->
            <div class="card card-info">
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
            <div class="card card-info">
              <div class="card-header">
                <h3 class="card-title">Tax By Product</h3>
              </div>
              <!-- /.card-header -->
              <div class="row">
              <div class="col-sm-6">
                <!-- text input -->
                  <label>Product Code</label>
                   <div class="input-group input-group-sm">
                <input type="text" class="form-control" placeholder="012012" disabled>
                </div>
              </div>
              <div class="col-sm-6">
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
                      <th>Tax Description</th>
                      <th>Tax Value</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>1.</td>
                      <td>IVA</td>
                      <td>19%</td>
                      <td><button  type = 'button' class="btn btn-info" data-toggle="modal" data-target="#modal-lg">Delete</button></td>
                    </tr>
                    <tr>
                      <td>2.</td>
                      <td>Alchohol Tax</td>
                      <td>2%</td>
                      <td><button  type = 'button' class="btn btn-info" data-toggle="modal" data-target="#modal-lg">Delete</button></td>
                    </tr>
                  </tbody>
                </table>
                <button type="button" class="btn btn-info float-right" data-toggle="modal" data-target="#modal-sm">Add</button>
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
      <!-- tax product pop up modal -->
     <div class="modal fade" id="modal-sm">
        <div class="modal-dialog modal-sm">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Edit Tax Product</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <!-- Product details-->
                <div class="row respo">
                  <div class="col-12">
                  <div class="table-responsive ">
                    <div class="col-sm-12">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Product Code</label>
                        <input type="text" class="form-control" placeholder="1325484" disabled>
                      </div>
                    </div>
                    <div class="col-sm-12">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Product Name</label>
                        <input type="text" class="form-control" placeholder="Wine of Chile" disabled>
                      </div>
                    </div>
                    <div class="col-sm-12">
                      <!-- select -->
                      <div class="form-group">
                        <label>Select Tax</label>
                        <select class="custom-select">
                          <option>List Tax</option>
                          <option>option 2</option>
                          <option>option 3</option>
                          <option>option 4</option>
                          <option>option 5</option>
                        </select>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- /.col -->
              </div>
            </div>
            <!-- <div class="modal-body">
              <p>One fine body&hellip;</p>
            </div> -->
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-info" data-dismiss="modal">Cancle</button>
              <button type="button" class="btn btn-info">Save</button>
            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      <!-- /.modal -->

      <!-- Tax detail pop up modal -->
      <div class="modal fade" id="modal-sm1">
        <div class="modal-dialog modal-sm">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Tax Details</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <!-- Product details-->
                <div class="row respo">
                  <div class="col-12">
                  <div class="table-responsive ">
                    <div class="col-sm-12">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Tax Name</label>
                        <input type="text" class="form-control" placeholder="Tax Name">
                      </div>
                    </div>
                    <div class="col-sm-12">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Tax Percentage</label>
                        <input type="text" class="form-control" placeholder="Tax Percentage">
                      </div>
                    </div>
                    <div class="col-sm-12">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Tax Description</label>
                        <input type="text" class="form-control" placeholder="Tax Description">
                      </div>
                    </div>
                  </div>
                </div>
                <!-- /.col -->
              </div>
            </div>
            <!-- <div class="modal-body">
              <p>One fine body&hellip;</p>
            </div> -->
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-info" data-dismiss="modal">Cancle</button>
              <button type="button" class="btn btn-info">Save Tax</button>
            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      <!-- /.modal -->