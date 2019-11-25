 <?php error_reporting(0); ?>
 <div class="content-wrapper">
  <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1><?php echo Product_Details; ?></h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo base_url();?>"><?php echo Home; ?></a></li>
              <li class="breadcrumb-item active"><?php echo Product_Details; ?></li>
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
                      <input type="text" class="form-control" id="product_code_to_show" name="product_code_to_show" value="<?php echo (isset($_GET['productCode'])) ? $_GET['productCode'] : "" ?>" onclick="set_product_code();">
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <!-- text input -->
                       <label><?php echo Product_Name; ?></label>
                      <div class="input-group input-group-sm">
                      <input type="text" class="form-control" id="product_name_to_show" name="product_name_to_show" value="<?php echo (isset($_GET['productName'])) ? $_GET['productName'] : "" ?>" onclick="set_product_name();">
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
     
        <div class="row">
          <div class="col-md-12">
            <div class="card card-info">
              <div class="card-header">
                <h3 class="card-title"><?php echo List_of_Results; ?></h3>
              </div>
              <!-- /.card-header -->
              <?php if(!empty($response)){ ?>
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>                  
                    <tr>
                      <th style="width: 10px">#</th>
                      <th><?php echo Product_Code; ?></th>
                      <th><?php echo Product_Name; ?></th>
                      <th style="width: 40px"></th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php $i=1;
                     foreach ($response as $value) { 
                      ?>
                    <tr>
                      <td><?php echo $i++;?></td>
                      <td><?php echo $value['Codigo'];?></td>
                      <td><?php echo $value['Descripcion'];?></td>
                      <td><button  type ='button' class="btn btn-info" data-toggle="modal" data-target="#modal-lg" onclick="view_details('<?php echo $value['Codigo'];?>');" ><?php echo Details; ?></button></td>
                    </tr>
                  <?php } ?>
                  </tbody>
                </table>
              </div>
            <?php } ?>
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

    .switch {
      position: relative;
      display: inline-block;
      width: 30px;
      height: 14px;
    }

    .switch input { 
      opacity: 0;
      width: 0;
      height: 0;
    }

    .slider {
      position: absolute;
      cursor: pointer;
      top: 0;
      left: 0;
      right: 0;
      bottom: 0;
      background-color:#ccc ;
      -webkit-transition: .4s;
      transition: .4s;
    }

    .slider:before {
      position: absolute;
      content: "";
      height: 10px;
      width: 10px;
      left: 2px;
      bottom: 2px;
      background-color: white;
      -webkit-transition: .2s;
      transition: .2s;
    }

    input:checked + .slider {
      background-color: #34C01A;
    }

    input:focus + .slider {
      box-shadow: 0 0 1px #34C01A;
    }

    input:checked + .slider:before {
      -webkit-transform: translateX(15px);
      -ms-transform: translateX(15px);
      transform: translateX(15px);
    }

    /* Rounded sliders */
    .slider.round {
      border-radius: 14px;
    }

    .slider.round:before {
      border-radius: 50%;
    }

</style>
      <div class="modal fade" id="modal-lg">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title"><?php echo Produt_Detail; ?></h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <!-- Product details-->
                <div class="row respo">
                  <div class="col-sm-12">
                  <div class="table-responsive  ">
                      <h6><strong><?php echo Product; ?></strong></h6>
                          <table class="table" >
                            <tr>
                              <th><?php echo Product_Code; ?></th>
                              <td id="product_code">13457654</td>
                              <th><?php echo Product_Name; ?></th>
                              <td id="product_name">Box of milk 12</td>
                              <!--
                              <th><?php echo Status; ?></th>
                              <td id="product_status">   </td>
                              -->
                              <th><?php echo Status; ?></th>
                              <td id="product_status">Deactive</td>
                              <td><label class="switch">
                                  <input type="checkbox" id="myCheck" onclick= "myFunction()">
                                  <span class="slider round"></span>
                                  </label>
                              </td>
                              <td id="product_status">Active</td>
                            </tr>
                            <tr>
                              <th><?php echo Product_Packaging_Provider; ?></th>
                              <td id="sell_measure">Box</td>
                              <th><?php echo Units_per_Packing; ?></th>
                              <td id="package_per_unity">Box</td>
                              
                            </tr>
                            <tr>
                              <th><?php echo Measure_Unity; ?></th>
                              <td id="sell_unity">12</td>
                              <th><?php echo Sale_Measure_Product; ?></th>
                              <td id="type_sale_unity">12</td>
                            </tr>  

                          </table>
                          <hr>
                      <h6><strong><?php echo Product_Details; ?></strong></h6>
                      <table class="table ">
                          <tr>
                            <th><?php echo Net_Price; ?></th>
                            <th><?php echo Total_Dscto; ?></th>
                            <th><?php echo Freight_Price; ?></th>
                            <th><?php echo Total_Tax; ?></th>
                            <th><?php echo Purchase_Price; ?></th>
                          </tr>
                          <tr>
                            <td id="net_price">$400</td>
                            <td id="total_dscto">10%</td>
                            <td id="freight_price">$5</td>
                            <td id="total_tax">19%</td>
                            <td id="purchase_price">$480</td>
                        </tr>
                        <table class="table ">
                           <tr>
                            <th><?php echo Branch_Name; ?></th>
                            <th><?php echo Retail_Price; ?></th>
                            <th><?php echo Retail_Margin; ?></th>
                            <th><?php echo Wholesale_Price; ?></th>
                            <th><?php echo Wholesale_Margin; ?></th>
                          </tr>
                          <tr>
                            <td id="brach_1_name">Branch 1</td>
                            <td id="branch_1_retail_price">$699</td>
                            <td id="branch_1_retail_margin">20%</td>
                            <td id="branch_1_wholesale_price">$650</td>
                            <td id="branch_1_wholesale_margin">15%</td>
                        </tr>
                        <tr>
                            <td id="brach_2_name">Branch 2</td>
                            <td id="branch_2_retail_price">$720</td>
                            <td id="branch_2_retail_margin">35%</td>
                            <td id="branch_2_wholesale_price">$690</td>
                            <td id="branch_2_wholesale_margin">30%</td>
                        </tr>
                        <tr>
                            <td id="brach_3_name">Branch 3</td>
                            <td id="branch_3_retail_price">$705</td>
                            <td id="branch_3_retail_margin">33%</td>
                            <td id="branch_3_wholesale_price">$680</td>
                            <td id="branch_3_wholesale_margin">28%</td>
                        </tr>
                        </table>

                    </table> 
                    <hr>
                    <h6><strong><?php echo Classification; ?></strong></h6>
                     <table class="table ">
                       <tr>
                            <th><?php echo Division; ?></th>
                            <th><?php echo Department; ?></th>
                            <th><?php echo Sub_Department; ?></th>
                            <th><?php echo Class_table; ?></th>
                            <th><?php echo Sub_class; ?></th>
                            
                          </tr>
                          <tr>
                            <td id="division">Groserries</td>
                            <td id="department">Liquids</td>
                            <td id="sub_department">Dairy</td>
                            <td id="class">Milk</td>
                            <td id="sub_class">Milk in Bottle</td>
                        </tr>
                     </table>
                     <hr> 
                      <h6><strong><?php echo Main_Provider; ?></strong></h6>
                     <table class="table ">
                        <tr>
                            <th><?php echo Rut_Provider; ?></th>
                            <th><?php echo Provider_name; ?></th>
                          </tr>
                          <tr>
                            <td id="rut_no">16.121.1231-K</td>
                            <td id="provider_name">National Milk Provider</td>
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
 <script type="text/javascript">




      function myFunction(){
         
            // Get the checkbox
            var checkBox = document.getElementById("myCheck");
            
            if (checkBox.checked == true){
              $GLOBALS['values']=1;
              alert("1");
            } else { $GLOBALS['values']=0;
              alert("0");
            }
      
      }


      function set_product_code(){
     
        $('#product_name_to_show').val('');

      }
      function set_product_name(){
        $('#product_code_to_show').val('');
      }

      function search_data(){
        var url = $('#base_url').val();
        var search_url = $('#product_code_to_show').val()!="" && $('#product_name_to_show').val()=="" ? url+'product/see_product?productCode='+$.trim($('#product_code_to_show').val()) : 
        $('#product_code_to_show').val()=="" && $('#product_name_to_show').val()!="" ? url+'product/see_product?productName='+$.trim($('#product_name_to_show').val()) : url+'product/see_product';

      window.location.replace(search_url);
    }

      function view_details(product_code){
        var urls = $('#base_url').val()+'product/show_product_details';
        $.ajax({
          type:'POST',
          url: urls,
          data: {product_code:product_code},
          success:function(response){
            // alert(response);
            
            // return;
            var json_convert_result =$.parseJSON(response);
            $('#product_code').html('');
            $('#product_code').html(json_convert_result['response'][0]['Codigo']);

            $('#product_name').html('');
            $('#product_name').html(json_convert_result['response'][0]['Descripcion']);

            $('#product_status').html('Inactive');
            if(json_convert_result['response'][0]['Activo']=='1'){
            $('#product_status').html(' 1 ');
            }

            $('#sell_measure').html('');
            $('#sell_measure').html(json_convert_result['response'][0]['Descripcion_Unidad_Empaque']);

            $('#package_per_unity').html('');
            $('#package_per_unity').html(json_convert_result['response'][0]['UnidadesEmpaque']);

            $('#sell_unity').html('');
            $('#sell_unity').html(json_convert_result['response'][0]['Medida_Venta']);

            $('#type_sale_unity').html('');
            $('#type_sale_unity').html(json_convert_result['response'][0]['Descripcion_Unidad_Venta']);

            $('#net_price').html('');
            $('#net_price').html('$'+json_convert_result['response'][1]['Precio_Neto']);

            $('#total_dscto').html('');
            $('#total_dscto').html(json_convert_result['response'][1]['sumaDescuento']+'%');

            $('#freight_price').html('');
            $('#freight_price').html('$'+json_convert_result['response'][1]['Flete']);

            $('#total_tax').html('');
            $('#total_tax').html(json_convert_result['response'][1]['PorcentajeImpuesto']+'%');

            $('#purchase_price').html('');
            $('#purchase_price').html('$'+json_convert_result['response'][1]['Precio_Compra']);

            $('#brach_1_name').html('');
            $('#brach_1_name').html(json_convert_result['response'][2]['Descripcion']);

            $('#branch_1_retail_price').html('');
            $('#branch_1_retail_price').html('$'+json_convert_result['response'][2]['Precio_Minorista']);

            $('#branch_1_retail_margin').html('');
            $('#branch_1_retail_margin').html(json_convert_result['response'][2]['Margen_Minorista']+'%');

            $('#branch_1_wholesale_price').html('');
            $('#branch_1_wholesale_price').html('$'+json_convert_result['response'][2]['Precio_Mayorista']);

            $('#branch_1_wholesale_margin').html('');
            $('#branch_1_wholesale_margin').html(json_convert_result['response'][2]['Margen_Mayorista']+'%');

            $('#brach_2_name').html('');
            $('#brach_2_name').html(json_convert_result['response'][3]['Descripcion']);

            $('#branch_2_retail_price').html('');
            $('#branch_2_retail_price').html('$'+json_convert_result['response'][3]['Precio_Minorista']);

            $('#branch_2_retail_margin').html('');
            $('#branch_2_retail_margin').html(json_convert_result['response'][3]['Margen_Minorista']+'%');

            $('#branch_2_wholesale_price').html('');
            $('#branch_2_wholesale_price').html('$'+json_convert_result['response'][3]['Precio_Mayorista']);

            $('#branch_2_wholesale_margin').html('');
            $('#branch_2_wholesale_margin').html(json_convert_result['response'][3]['Margen_Mayorista']+'%');

            $('#brach_3_name').html('');
            $('#brach_3_name').html(json_convert_result['response'][4]['Descripcion']);

            $('#branch_3_retail_price').html('');
            $('#branch_3_retail_price').html('$'+json_convert_result['response'][4]['Precio_Minorista']);

            $('#branch_3_retail_margin').html('');
            $('#branch_3_retail_margin').html(json_convert_result['response'][4]['Margen_Minorista']+'%');

            $('#branch_3_wholesale_price').html('');
            $('#branch_3_wholesale_price').html('$'+json_convert_result['response'][4]['Precio_Mayorista']);

            $('#branch_3_wholesale_margin').html('');
            $('#branch_3_wholesale_margin').html(json_convert_result['response'][4]['Margen_Mayorista']+'%');

            $('#division').html('');
            $('#division').html(json_convert_result['response'][5]['Nom_Div']);

            $('#department').html('');
            $('#department').html(json_convert_result['response'][5]['Nom_Depto']);

            $('#sub_department').html('');
            $('#sub_department').html(json_convert_result['response'][5]['Nom_SubDespto']);

            $('#class').html('');
            $('#class').html(json_convert_result['response'][5]['Nom_Clase']);

            $('#sub_class').html('');
            $('#sub_class').html(json_convert_result['response'][5]['Nom_SubClase']);

            $('#rut_no').html('');
            $('#rut_no').html(json_convert_result['response'][6]['RUT']);

            $('#provider_name').html('');
            $('#provider_name').html(json_convert_result['response'][6]['Nombre']);
          }});
      }

    </script>
    </html>