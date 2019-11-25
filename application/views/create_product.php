 <?php error_reporting(0); ?>
 <div class="content-wrapper">

  <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1><?php echo Product_Creation; ?></h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo base_url();?>"><?php echo Home; ?></a></li>
              <li class="breadcrumb-item active"><?php echo Product_Creation; ?></li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
<input type="hidden" name="base_url" id="base_url" value="<?php echo base_url();?>">
        <div class="col-md-8">
            <!-- general form elements disabled -->
            <div class="card card-success">
              <div class="card-header">
                <h3 class="card-title"><?php echo Product_Code; ?></h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <form role="form">
                  <div class="row">
                    <div class="col-sm-6">
                      <!-- text input -->
                        <label><?php echo Product_Bar_Code; ?></label>
                         <div class="input-group input-group-sm">
                      <input type="text" class="form-control" name="product_code" id="product_code" onclick="num()">
                      </div>
                    </div>
                    <div class="col-sm-6">
                     <br>
                      <button type="button" class="btn btn-info btn-flat"><?php echo Generate_Code; ?></button>
               
                    </div>
                  </div>
                    <div class="row">
                      <div class="col-sm-6">
                      <!-- text input -->
                       <label><?php echo Product_Name; ?></label>
                      <div class="input-group input-group-sm">
                      <input type="text" class="form-control">
                      <span class="input-group-append">
                      
                      </span>
                      </div>
                    </div>
                    </div>
                  
                </form>
              </div>
             
              <!-- /.card-body -->
            </div>
          </div>
          <!--Product Packagin Format-->
           <div class="col-md-10">
            <!-- general form elements disabled -->
            <div class="card card-info">
              <div class="card-header">
                <h3 class="card-title"><?php echo Product_Packaging_Format; ?></h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <form role="form">
                  <div class="row">
                    <div class="col-sm-3">
                      <!-- select -->
                      <div class="form-group">
                        <label><?php echo Provider_Packing_Type; ?></label>
                        <select class="custom-select">
                          <?php foreach ($sell_unity['response'] as $unity) { ?>
                          <option><?php echo $unity['Descripcion_Unidad_Medida']; ?></option>
                          <?php } ?>
                        </select>
                      </div>
                    </div>
                    <div class="col-sm-3">
                      <!-- text input -->
                      <div class="form-group">
                        <label><?php echo Units_per_Packing; ?></label>
                        <input type="text" class="form-control" placeholder="Ingrese valor">
                      </div>
                    </div>
                  </div>
                </form>
              </div>
              <!-- /.card-body -->
            </div>
          </div>
          <!--End Product Packagin Format-->

          <!--Product Sale Format-->
          <div class="col-md-10">
            <!-- general form elements disabled -->
            <div class="card card-info">
              <div class="card-header">
                <h3 class="card-title"><?php echo Product_Sale_Format; ?></h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <form role="form">
                  <div class="row">
                    <div class="col-sm-3">
                      <!-- select -->
                      <div class="form-group">
                        <label><?php echo Measure_Unity; ?></label>
                        <input type="text" class="form-control" placeholder="Enter Measure Unity" value="1">
                      </div>
                    </div>  
                    <div class="col-sm-3">
                      <!-- text input -->
                      <div class="form-group">
                        <label><?php echo Sale_Measure_Product; ?></label>
                        <select class="custom-select">
                          <?php foreach ($sell_unity['response'] as $unity) { ?>
                          <option><?php echo $unity['Descripcion_Unidad_Medida']; ?></option>
                          <?php } ?>
                        </select>
                      </div>
                    </div>
                  </div>
                </form>
              </div>
              <!-- /.card-body -->
            </div>
          </div>
          <!--End Product Sale Format-->


          <div class="col-md-10">
            <!-- general form elements disabled -->
            <div class="card card-info">
              <div class="card-header">
                <h3 class="card-title"><?php echo Provider_Price; ?></h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <form role="form">
                  <div class="row">
                    <div class="col-sm-2">
                      <!-- text input -->
                      <div class="form-group">
                        <label><?php echo Net_Price; ?></label>
                        <input type="text" id="net_price" class="form-control" placeholder="Ingrese valor" onclick="num()">
                      </div>
                    </div>
                    <div class="col-sm-2">
                      <!-- text input -->
                      <div class="form-group">
                        <label><?php echo Dscto_1; ?></label>
                        <input type="text" id="disc1" class="form-control" placeholder="Ingrese valor" onclick="num()">
                      </div>
                    </div>
                    <div class="col-sm-2">
                      <!-- text input -->
                      <div class="form-group">
                        <label><?php echo Dscto_2; ?></label>
                        <input type="text" id="disc2" class="form-control" placeholder="Ingrese valor" onclick="num()">
                      </div>
                    </div>
                    <div class="col-sm-2">
                      <!-- text input -->
                      <div class="form-group">
                        <label><?php echo Dscto_3; ?></label>
                        <input type="text" id="disc3" class="form-control" placeholder="Ingrese valor" onclick="num()">
                      </div>
                    </div>
                    <div class="col-sm-2">
                      <!-- text input -->
                      <div class="form-group">
                        <label><?php echo Dscto_4; ?></label>
                        <input type="text" id="disc4" class="form-control" placeholder="Ingrese valor"onclick="num()">
                      </div>
                    </div>
                    <div class="col-sm-2">
                      <!-- text input -->
                      <div class="form-group">
                        <label><?php echo Sub_Price; ?></label>
                        <input type="text" id="sub_price" class="form-control" placeholder="Ingrese valor" onclick="num()">
                      </div>
                    </div>
                    <div class="col-sm-2">
                      <!-- text input -->
                      <div class="form-group">
                        <label><?php echo Freight_Price; ?></label><br>
                        <input type="text" id="freight_price" class="form-control" placeholder="Ingrese valor" onclick="num()">
                      </div>
                    </div>
                    <div class="col-sm-3">
                      <!-- text input -->
                      <div class="form-group">
                        <label><?php echo Price_Without_Tax; ?></label>
                        <input type="text" id="price_without_tax" class="form-control" placeholder="Ingrese valor" onclick="num()">
                      </div>
                    </div>
                    <div class="col-sm-3">
                      <!-- text input -->
                      <div class="form-group">
                        <label><?php echo Purchase_Price; ?></label>
                        <input type="text" id="purchase_price" class="form-control" placeholder="Ingrese valor" onclick="num()">
                      </div>
                    </div>
                    <div class="col-md-12">
                      
                    <div class="col-sm-4">

                      <!-- select -->
                      <div class="form-group">

                        <label><?php echo Taxes_List; ?></label><br>
                        <label><?php echo Select_Tax; ?></label>
                        <div class="row">
                         <div class="col-sm-9"> 
                            <select class="custom-select">
                              <?php foreach ($all_taxes['response'] as $taxes) { ?>
                              <option><?php echo $taxes['Descripcion_Impuesto']; ?></option>
                              <?php } ?>
                            </select>
                         </div>
                      <div class="col-sm-3">
                      <button type="submit" class="btn btn-info float-right">+</button>
                    </div>
                      </div>
                      </div>
                    </div>
                    <div class="col-sm-3">
                      <!-- select -->
                      <div class="form-group">
                        <select class="custom-select">
                          <?php foreach ($all_taxes['response'] as $taxes) { ?>
                          <option><?php echo $taxes['Descripcion_Impuesto']; ?></option>
                          <?php } ?>
                        </select>
                      </div>
                    </div>
                    <button type="submit" class="btn btn-info float-right"><?php echo New_Tax; ?></button>
                    
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
                <h3 class="card-title"><?php echo Sell_Price; ?></h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table class="table table-bordered">
                  <thead>                  
                    <tr style="font-size: 14px">
                      <th><?php echo Branch_Name; ?></th>
                      <th><?php echo Retail_Price; ?></th>
                      <th><?php echo Retail_Margin; ?></th>
                      <th><?php echo Wholesale_Price; ?></th>
                      <th><?php echo Wholesale_Margin; ?></th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td style="font-size: 13px">SUPERMERCADO UNICO - MULCHEN</td>
                      <td contenteditable='true'>$ 400</td>
                      <td contenteditable='true'>5%</td>
                      <td contenteditable='true'>$ 390</td>
                      <td contenteditable='true'>5%</td>
                    </tr>
                    <tr>
                      <td style="font-size: 13px">UNICO MAYORISTA - LOS ANGELES</td>
                      <td contenteditable='true'>$ 400</td>
                      <td contenteditable='true'>5%</td>
                      <td contenteditable='true'>$ 390</td>
                      <td contenteditable='true'>5%</td>
                    </tr>
                    <tr>
                      <td style="font-size: 13px">SUPERMERCADO UNICO - STA. BARBARA</td>
                      <td contenteditable='true'>$ 400</td>
                      <td contenteditable='true'>5%</td>
                      <td contenteditable='true'>$ 390</td>
                      <td contenteditable='true'>5%</td>
                    </tr>
                    <tr>
                      <td style="font-size: 13px">SUPERMERCADO UNICO - LAJA</td>
                      <td contenteditable='true'>$ 400</td>
                      <td contenteditable='true'>5%</td>
                      <td contenteditable='true'>$ 390</td>
                      <td contenteditable='true'>5%</td>
                    </tr>
                    <tr>
                      <td style="font-size: 13px">SUPERMERCADO UNICO - ANGOL</td>
                      <td contenteditable='true'>$ 400</td>
                      <td contenteditable='true'>5%</td>
                      <td contenteditable='true'>$ 390</td>
                      <td contenteditable='true'>5%</td>
                    </tr> 
                  </tbody>
                </table>
              </div>
            </div>
          </div>
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
                    <div class="col-sm-3">
                      <!-- select -->
                      <div class="form-group">
                        <label><?php echo Division; ?></label>
                        <select class="custom-select" id='division' style="font-size:12px" onchange="division_change();">
                          <option value="">Select Division</option>
                          <?php foreach ($all_divisions['response'] as $divisions) { ?>
                          <option value="<?php echo $divisions['Cod_Div'];?>"><?php echo $divisions['Nom_Div'];?></option>
                          <?php } ?>
                        </select>
                      </div>
                    </div>
                    <div class="col-sm-2">
                      <!-- select -->
                      <div class="form-group">
                        <label><?php echo Department; ?></label>
                        <select class="custom-select" id="department" style="font-size:12px" onchange="dept_change();">
                          <option>Select Dept</option>
                        </select>
                      </div>
                    </div>
                    <div class="col-sm-2">
                      <!-- select -->
                      <div class="form-group">
                        <label><?php echo Sub_Department; ?></label>
                        <select class="custom-select" id="sub_department" style="font-size:12px" onchange="sub_dept_change();">
                          <option>Select Sub Dept</option>
                        </select>
                      </div>
                    </div>
                    <div class="col-sm-2">
                      <!-- select -->
                      <div class="form-group">
                        <label><?php echo Class_table; ?></label>
                        <select class="custom-select" id="select_class" style="font-size:12px" onchange="class_change();">
                          <option>Select Class</option>
                        </select>
                      </div>
                    </div>
                    <div class="col-sm-3">
                      <!-- select -->
                      <div class="form-group">
                        <label><?php echo Sub_Class; ?></label>
                        <select class="custom-select" id="select_sub_class" style="font-size:12px" >
                          <option>Select Sub Class</option>
                        </select>
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
                <h3 class="card-title"><?php echo Product_Provider; ?></h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <form role="form">
                  <div class="row">
                    <div class="col-sm-6">
                      <!-- text input -->
                        <label><?php echo Provider_RUT; ?></label>
                         <div class="input-group input-group-sm">
                      <input type="text" class="form-control" id="provider_rut" name="provider_rut" value="<?php echo (isset($_GET['providerCode'])) ? $_GET['providerCode'] : "" ?>" onclick="set_provider_rut();">
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <!-- text input -->
                       <label><?php echo Provider_name; ?></label>
                      <div class="input-group input-group-sm">
                      <input type="text" class="form-control" id="provider_name" name="provider_name" value="<?php echo (isset($_GET['providerName'])) ? $_GET['providerName'] : "" ?>" onclick="set_provider_name();">
                      <span class="input-group-append">
                      <button type="button" class="btn btn-info btn-flat" onclick="search_data();"><?php echo Search_button; ?></button>
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
                <h3 class="card-title"><?php echo List_of_Results; ?></h3>
              </div>
              <!-- /.card-header -->
              <?php if(!empty($response)){ ?>
              <div class="card-body">
                <table class="table table-bordered">
                  <thead>                  
                    <tr>
                      <th style="width: 10px">#</th>
                      <th><?php echo Product_Code; ?></th>
                      <th><?php echo Product_Name; ?></th>
                      <th style="width: 40px"></th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php $i=1; foreach ($response as $value) { if(isset($_GET['providerCode']) && $i!=5){
                      $i++;
                      continue;
                    } ?>
                    <tr>
                      <td><?php echo $i++;?></td>
                      <td><?php echo $value['Codigo'];?></td>
                      <td><?php echo $value['Descripcion'];?></td>
                      <td><button  type ='button' class="btn btn-info" data-toggle="modal" data-target="#modal-lg" onclick="view_details('<?php echo $value['Codigo'];?>');" >Details</button></td>
                    </tr>
                  <?php } ?>
                  </tbody>
                </table>
              </div>
            <?php } ?>
            </div>
          </div>
        </div>
      </div>
    </section>
          <div class="col-md-10">
          <div class="card-footer">
                  <button type="submit" class="btn btn-info float-right"><?php echo Cancel; ?></button>
                  <button type="submit" class="btn btn-success float-right"><?php echo Create_Poduct; ?></button>
          </div>
          </div>
  </div>

  <script type='text/javascript'>
    function num(){
    $(document).ready(function () {
      //called when key is pressed in textbox
      $("#product_code,#net_price,#disc1,#disc2,#disc3,#disc4,#sub_price,#freight_price,#Price_Without_Tax,#purchase_price").keypress(function (e) {
         //if the letter is not digit then display error and don't type anything
         if (e.which != 8 && e.which != 0 && (e.which < 48 || e.which > 57)) {
            //display error message
            alert("Sólo se permiten números").show();
                   return false;
                }
           });
        });


       $('#disc4').keyup(function(){
        var net_price;
        var discount;
        var net_p = $('#net_price').val();
        d1 = parseFloat(net_p*($('#disc1').val()/100));
        d2 = parseFloat(net_p*($('#disc2').val()/100));
        d3 = parseFloat(net_p*($('#disc3').val()/100));
        d4 = parseFloat(net_p*($('#disc4').val()/100));
        net_price = parseFloat($('#net_price').val());
        discount = d1+d2+d3+d4;
        var sub_price = net_price - discount;
        $('#sub_price').val(sub_price.toFixed(2));
      });

       $('#freight_price').keyup(function(){
        var price_without_tax;
        s = parseFloat($('#sub_price').val());
        f = parseFloat($('#freight_price').val());
       
        var price_without_tax = s + f;
        $('#price_without_tax').val(price_without_tax.toFixed(2));
        $('#purchase_price').val(purchase_price.toFixed(2));
      });

      
    }

    


  function set_provider_rut(){
        $('#provider_name').val('');
      }

  function set_provider_name(){
    $('#provider_rut').val('');
  }

  function search_data(){

      var provider_rut = $('#provider_rut').val();
      var provider_rut = $.trim(provider_rut);

      var provider_name = $('#provider_name').val();
      var provider_name = $.trim(provider_name);

      if(provider_rut){

        $.ajax({
        url:'<?php base_url()?>getSuppliersbyID',
        method: 'post',
        data: {provider_rut: provider_rut},
        success: function(response){
        //alert(response);
          var json_converted = JSON.parse(response);
          var converted = JSON.parse(json_converted);
          console.log(converted);
        return;

            $.each(converted['response'],function(k,value){
             $("#department").append('<option value="'+value.Cod_Depto+'">'+value.Nom_Depto+'</option>');
            });
          }
        });

      }
      else if(provider_name){
        $.ajax({
        url:'<?php base_url()?>getSuppliersbyName',
        method: 'post',
        data: {provider_name: provider_name},
        success: function(response){
        //alert(response);
          var json_converted = JSON.parse(response);
          var converted = JSON.parse(json_converted);
          console.log(json_converted);
        return;
         
            $.each(converted['response'],function(k,value){
             $("#department").append('<option value="'+value.Cod_Depto+'">'+value.Nom_Depto+'</option>');
            });
        }
      });
      }

    }

 function division_change(){

      var division = $('#division').val();
      var division = $.trim(division);
      //alert(division);
      $.ajax({
        url:'<?php base_url()?>get_department_ById',
        method: 'post',
        data: {division: division},
        success: function(response){
      // alert(response);
          var json_converted = JSON.parse(response);
          var converted = JSON.parse(json_converted);
          // console.log(converted);
          $('#select_sub_class').find('option').not(':first').remove();
          $('#select_class').find('option').not(':first').remove();
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
     // alert(department);
      $.ajax({
        url:'<?php base_url()?>get_sub_department_ById',
        method: 'post',
        data: {department: department},
        success: function(response){
      // alert(response);
          var json_converted = JSON.parse(response);
          var converted = JSON.parse(json_converted);
          // console.log(converted);
          
          $('#select_sub_class').find('option').not(':first').remove();
          $('#select_class').find('option').not(':first').remove();
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

          $('#select_sub_class').find('option').not(':first').remove();
          $('#select_class').find('option').not(':first').remove();

          // $("#department").children('option:not(:first)').remove();
            $.each(converted['response'],function(k,value){
             $("#select_class").append('<option value="'+value.Cod_Clase+'">'+value.Nom_Clase+'</option>');
            });
        }
     });
 }

  function class_change(){

      var select_class = $('#select_class').val();
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

          $('#select_sub_class').find('option').not(':first').remove();

          // $("#department").children('option:not(:first)').remove();
            $.each(converted['response'],function(k,value){
             $("#select_sub_class").append('<option value="'+value.Cod_SubClase +'">'+value.Nom_SubClase+'</option>');
            });
        }
     });
 }

 //  function sub_class_change(){

 //      var division = $('#division').val();

 //      $.ajax({
 //        url:'<?php #base_url()?>get_department_ById',
 //        method: 'post',
 //        data: {division: division},
 //        success: function(response){
 //      // alert(response);
 //          var json_converted = JSON.parse(response);
 //          var converted = JSON.parse(json_converted);
 //          // console.log(converted);

 //          // $("#department").children('option:not(:first)').remove();
 //            $.each(converted['response'],function(k,value){
 //             $("#department").append('<option value="'+value.Cod_Depto +'">'+value.Nom_Depto+'</option>');
 //            });
 //        }
 //     });
 // }
 
 </script>

 </html>