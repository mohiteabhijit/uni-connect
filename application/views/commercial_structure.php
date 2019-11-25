 <div class="content-wrapper">

  <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1><?php echo Organization_commercial;?></h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo base_url();?>">Home</a></li>
              <li class="breadcrumb-item active"><?php echo Organization_commercial;?></li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

        <div class="col-md-7">
            <!-- general form elements disabled -->
            <div class="card card-success">
              <div class="card-header">
                <h3 class="card-title"><?php echo Division_Title;?></h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
               
                  <div class="row">
                    <div class="col-sm-6">
                      <!-- select -->
                      <div class="form-group">
                        <label><?php echo Select_Division;?></label>
                        <select class="custom-select" id='division' onchange="divisonChange();" style="font-size: 14px">
                          <option>Lista</option>
                          <?php foreach ($all_divisions['response'] as $divisions) { ?>
                          <option value="<?php echo $divisions['Cod_Div'];?>"><?php echo $divisions['Cod_Div'],"  - ",$divisions['Nom_Div'];?></option>
                          <?php } ?>
                        </select>
                      </div>
                      <div class="card-footer">
                              <button type="submit" class="btn btn-info float-right" data-toggle="modal" data-target="#modal-sm1"><?php echo New_Division_Button;?></button>
                              <!--
                              <button type="submit" class="btn btn-info " data-toggle="modal" >Check</button>
                              -->
                      </div>
                    </div>
                  </div>
                
              </div>
              <!-- /.card-body -->
            </div>
          </div>

          <div class="col-md-10">
            <!-- general form elements disabled -->
            <div class="card card-info">
              <div class="card-header">
                <h3 class="card-title"></h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                
                  <div class="row">
                    <div class="col-sm-3">
                      <!-- select -->
                      <div class="form-group">
                        <label><?php echo Dept_Title;?></label>
                        <select multiple class="form-control" id="department" onchange="dept_change()" style="font-size: 13px">
                          
                        </select>
                      </div>
                      <div class="card-footer">
                              <button type="button" class="btn btn-info float-right" data-toggle="modal"><?php echo Edit_Button_Structure;?></button><br><br>
                              <button type="button" class="btn btn-info float-right" data-toggle="modal" data-target="#modal-sm"><?php echo Add_Dept_Button;?></button>
                      </div>
                    </div>
                    <div class="col-sm-3">
                      <!-- select -->
                      <div class="form-group">
                        <label><?php echo Sub_Dept_Title;?></label>
                        <select multiple class="form-control" id="sub_department" onchange="sub_dept_change()" style="font-size: 13px">
                         
                          
                        </select>
                      </div>
                      <div class="card-footer">
                              <button type="button" class="btn btn-info float-right" data-toggle="modal"><?php echo Edit_Button_Structure;?></button><br><br>
                              <button type="button" class="btn btn-info float-right" data-toggle="modal" data-target="#modal-sm2"><?php echo Add_SubDept_Button;?></button>
                      </div>
                    </div>
                    <div class="col-sm-3">
                      <!-- select -->
                      <div class="form-group">
                        <label><?php echo Class_Title;?></label>
                        <select multiple class="form-control" id="new_class" onchange="class_change();" style="font-size: 13px">
                          
                         
                        </select>
                      </div>
                      <div class="card-footer">
                              <button type="button" class="btn btn-info float-right" data-toggle="modal"><?php echo Edit_Button_Structure;?></button><br><br>
                              <button type="button" class="btn btn-info float-right" data-toggle="modal" data-target="#modal-sm3"><?php echo Add_Class_Button;?></button>
                      </div>
                    </div>
                    <div class="col-sm-3">
                      <!-- select -->
                      <div class="form-group">
                        <label><?php echo SubClass_Title;?></label>
                        <select multiple class="form-control" id="sub_class" style="font-size: 13px"></select>
                      </div>
                      <div class="card-footer">
                              <button type="button" class="btn btn-info float-right" data-toggle="modal"><?php echo Edit_Button_Structure;?></button><br><br>
                              <button type="button" class="btn btn-info float-right" data-toggle="modal" data-target="#modal-sm4"><?php echo Add_SubClass_Button;?></button>
                      </div>
                    </div>
                  </div>
                
              </div>
              <!-- /.card-body -->
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
<!--popup form for department -->
      <div class="modal fade" id="modal-sm">
        <div class="modal-dialog modal-sm">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">New Department</h4>
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
                        <label>Deparment Name</label>
                        <input type="text" class="form-control" placeholder="Enter">
                      </div>
                    </div>
                    <div class="col-sm-12">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Deparment Code</label>
                        <input type="text" class="form-control" placeholder="Enter">
                      </div>
                    </div>
                    <div class="col-sm-12">
                      <!-- select -->
                      <div class="form-group">
                        <label>Select Parent Division</label>
                        <select class="custom-select">
                          <option>Items</option>
                          <?php foreach ($all_divisions['response'] as $divisions) { ?>
                          <option value="<?php echo $divisions['Cod_Div'];?>"><?php echo $divisions['Nom_Div'];?></option>
                          <?php } ?>
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
              <button type="button" class="btn btn-info">Guardar</button>
            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      <!-- /.modal -->
    <!--popup form for division -->
       <div class="modal fade" id="modal-sm1">
        <div class="modal-dialog modal-sm1">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">New Division</h4>
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
                        <label>Division Code</label>
                        <input type="text" class="form-control" placeholder="Enter">
                      </div>
                      <div class="form-group">
                        <label>Division Name</label>
                        <input type="text" class="form-control" placeholder="Enter">
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
              <button type="button" class="btn btn-info" data-dismiss="modal">Cancel</button>
              <button type="button" class="btn btn-info">Guardar</button>
            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      <!-- /.modal -->

      <!--popup form for sub-department -->
      <div class="modal fade" id="modal-sm2">
        <div class="modal-dialog modal-sm2">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">New Sub Department</h4>
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
                        <label>Sub Deparment Name</label>
                        <input type="text" class="form-control" placeholder="Enter">
                      </div>
                    </div>
                    <div class="col-sm-12">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Sub Deparment code</label>
                        <input type="text" class="form-control" placeholder="Enter">
                      </div>
                    </div>
                    <div class="col-sm-12">
                      <!-- select -->
                      <div class="form-group">
                        <label>Select Parent Deparment</label>
                        <select class="custom-select">
                          <option>Items</option>
                          <?php foreach ($all_divisions['response'] as $divisions) { ?>
                          <option value="<?php echo $divisions['Cod_Div'];?>"><?php echo $divisions['Nom_Div'];?></option>
                          <?php } ?>
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
              <button type="button" class="btn btn-info" data-dismiss="modal">Cancel</button>
              <button type="button" class="btn btn-info">Guardar</button>
            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      <!-- /.modal -->
<!--popup form for class -->
      <div class="modal fade" id="modal-sm3">
        <div class="modal-dialog modal-sm3">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">New Class</h4>
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
                        <label>Class Name</label>
                        <input type="text" class="form-control" placeholder="Enter">
                      </div>
                    </div>
                    <div class="col-sm-12">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Class Code</label>
                        <input type="text" class="form-control" placeholder="Enter">
                      </div>
                    </div>
                    <div class="col-sm-12">
                      <!-- select -->
                      <div class="form-group">
                        <label>Select Parent Sub Deparment</label>
                        <select class="custom-select">
                          <option>Items</option>
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
<!--popup form for sub-class -->
      <div class="modal fade" id="modal-sm4">
        <div class="modal-dialog modal-sm4">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">New Sub class</h4>
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
                        <label>Sub Class Name</label>
                        <input type="text" class="form-control" placeholder="Enter">
                      </div>
                    </div>
                    <div class="col-sm-12">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Sub Class Code</label>
                        <input type="text" class="form-control" placeholder="Enter">
                      </div>
                    </div>
                    <div class="col-sm-12">
                      <!-- select -->
                      <div class="form-group">
                        <label>Select Parent class</label>
                        <select class="custom-select">
                          <option>Items</option>
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
      <script type="text/javascript">
        function divisonChange(){

           var division = $('#division').val();
           var division = $.trim(division);
           alert(division);
           $.ajax({
        url:'<?php base_url()?>get_department_ById',
        method: 'post',
        data: {division: division},
        success: function(response){
       //alert(response);
          var json_converted = JSON.parse(response);
          var converted = JSON.parse(json_converted);
           //console.log(converted);
          $('#sub_class').find('option').not(':first').remove();
          $('#new_class').find('option').not(':first').remove();
          $('#sub_department').find('option').not(':first').remove();
          $('#department').find('option').not(':first').remove();

          // $("#department").children('option:not(:first)').remove();
            $.each(converted['response'],function(k,value){
             $("#department").append('<option value="'+value.Cod_Depto+'">'+value.Nom_Depto+'</option>');
            });
        }
     });
   }

   function dept_change(){

      var department = $('#department').val();
      var department = $.trim(department);
     //alert(department);
      $.ajax({
        url:'<?php base_url()?>get_sub_department_ById',
        method: 'post',
        data: {department: department},
        success: function(response){
      // alert(response);
          var json_converted = JSON.parse(response);
          var converted = JSON.parse(json_converted);
          // console.log(converted);
          
          $('#sub_class').find('option').not(':first').remove();
          $('#new_class').find('option').not(':first').remove();
          $('#sub_department').find('option').not(':first').remove();

          // $("#department").children('option:not(:first)').remove();
            $.each(converted['response'],function(k,value){
             $("#sub_department").append('<option value="'+value.Cod_SubDepto+'">'+value.Nom_SubDespto+'</option>');
            });
        }
     });
 }

 function sub_dept_change(){

      var sub_department = $('#sub_department').val();
      var sub_department = $.trim(sub_department);
      //alert(sub_department);
      $.ajax({
        url:'<?php base_url()?>get_class_ById',
        method: 'post',
        data: {sub_department: sub_department},
        success: function(response){
        // alert(response);
          var json_converted = JSON.parse(response);
          var converted = JSON.parse(json_converted);
          // console.log(converted);

          $('#sub_class').find('option').not(':first').remove();
          $('#new_class').find('option').not(':first').remove();

          // $("#department").children('option:not(:first)').remove();
            $.each(converted['response'],function(k,value){
             $("#new_class").append('<option value="'+value.Cod_Clase+'">'+value.Nom_Clase+'</option>');
            });
        }
     });
 }

  function class_change(){

      var select_class = $('#new_class').val();
      var select_class = $.trim(select_class);
      //alert(select_class);
      $.ajax({
        url:'<?php base_url()?>get_sub_class_ById',
        method: 'post',
        data: {select_class: select_class},
        success: function(response){
      // alert(response);
          var json_converted = JSON.parse(response);
          var converted = JSON.parse(json_converted);
          // console.log(converted);

          $('#sub_class').find('option').not(':first').remove();

          // $("#department").children('option:not(:first)').remove();
            $.each(converted['response'],function(k,value){
             $("#sub_class").append('<option value="'+value.Cod_SubClase +'">'+value.Nom_SubClase+'</option>');
            });
        }
     });
 }
</script>