 <div class="content-wrapper">

  <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1><?php echo Product_Classification; ?></h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo base_url();?>"><?php echo Home; ?></a></li>
              <li class="breadcrumb-item active"><?php echo Product_Classification; ?></li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

        <div class="col-md-8">
            <!-- general form elements disabled -->
            <div class="card card-success">
              <div class="card-header">
                <h3 class="card-title"><?php echo Search_Product; ?></h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <form role="form">
                  <div class="row">
                    <div class="col-sm-6">
                      <!-- text input -->
                        <label><?php echo Product_Code; ?></label>
                         <div class="input-group input-group-sm">
                      <input type="text" class="form-control">
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <!-- text input -->
                       <label><?php echo Product_Name; ?></label>
                      <div class="input-group input-group-sm">
                      <input type="text" class="form-control">
                      <span class="input-group-append">
                      <button type="button" class="btn btn-info btn-flat"><?php echo Search_button; ?></button>
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
                <h3 class="card-title"><?php echo Classification; ?></h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table class="table table-bordered">
                  <thead>                  
                    <tr>
                      <th style="width: 10px">#</th>
                      <th><?php echo Division; ?></th>
                      <th><?php echo Department; ?></th>
                      <th><?php echo Sub_Department; ?></th>
                      <th><?php echo Class_table; ?></th>
                      <th><?php echo Sub_Class; ?></th>
                      <th style="width: 40px"></th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>1.</td>
                      <td>Groceries</td>
                      <td>Liquids</td>
                      <td>Dairy</td>
                      <td>Milk</td>
                      <td>Milk in Bottle</td>
                      <td><span class="badge bg-info"><?php echo Change; ?></span></td>
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
          </div>
        </div>
      </div>
    </section>
     <div class="col-md-10">
            <!-- general form elements disabled -->
            <div class="card card-info">
              <div class="card-header">
                <h3 class="card-title"><?php echo Classification; ?></h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <form role="form">
                  <div class="row">
                    <div class="col-sm-2">
                      <!-- select -->
                      <div class="form-group">
                        <label><?php echo Division; ?></label>
                        <select class="custom-select">
                          <option>Division</option>
                          <option>option 2</option>
                          <option>option 3</option>
                          <option>option 4</option>
                          <option>option 5</option>
                        </select>
                      </div>
                    </div>
                    <div class="col-sm-2">
                      <!-- select -->
                      <div class="form-group">
                        <label><?php echo Department; ?></label>
                        <select class="custom-select">
                          <option>Dept</option>
                          <option>option 2</option>
                          <option>option 3</option>
                          <option>option 4</option>
                          <option>option 5</option>
                        </select>
                      </div>
                    </div>
                    <div class="col-sm-2">
                      <!-- select -->
                      <div class="form-group">
                        <label><?php echo Sub_Department; ?></label>
                        <select class="custom-select">
                          <option>Sub Dept</option>
                          <option>option 2</option>
                          <option>option 3</option>
                          <option>option 4</option>
                          <option>option 5</option>
                        </select>
                      </div>
                    </div>
                    <div class="col-sm-2">
                      <!-- select -->
                      <div class="form-group">
                        <label><?php echo Class_table; ?></label>
                        <select class="custom-select">
                          <option>Class</option>
                          <option>option 2</option>
                          <option>option 3</option>
                          <option>option 4</option>
                          <option>option 5</option>
                        </select>
                      </div>
                    </div>
                    <div class="col-sm-2">
                      <!-- select -->
                      <div class="form-group">
                        <label><?php echo Sub_Class; ?></label>
                        <select class="custom-select">
                          <option>Sub Class</option>
                          <option>option 2</option>
                          <option>option 3</option>
                          <option>option 4</option>
                          <option>option 5</option>
                        </select>
                      </div>
                    </div>
                  </div>
                </form>
              </div>
              <!-- /.card-body -->
            </div>
            <div class="card-footer">
                  <button type="submit" class="btn btn-info float-right"><?php echo Cancel; ?></button>
                  <button type="submit" class="btn btn-success float-right"><?php echo Save; ?></button>
          </div>
          </div>
  </div>