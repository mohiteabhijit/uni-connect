<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product extends CI_Controller {

	 public function __construct() {
        parent::__construct();
        $this->load->helper('url');
       
    }

	public function index()
	{

		$this->load->view('header');
		$this->load->view('index');
		$this->load->view('footer');
	}

	public function see_product()
	{
		$search_url = (isset($_GET['productCode']) && !isset($_GET['productName']) ? LIVE_URL_BASE.ProductsAPIv2.getProductbyID.'?productCode='.$_GET['productCode'] :(!isset($_GET['productCode']) && isset($_GET['productName']) ? LIVE_URL_BASE.ProductsAPIv2.getProductsbyName.'?productName='.$_GET['productName'] : LIVE_URL_BASE ));


		$data = file_get_contents($search_url);
		$mydata = json_decode($data, true);
		//$status = LIVE_URL_BASE.ProductsAPIv2.getupdateStatus;
		
		
		if(empty($mydata)){
			$mydata['response']="";
		}
		$this->load->view('header');
		$this->load->view('show_product', $mydata);
		$this->load->view('footer');
	}

	public function show_product_details()
	{
		$postData = $this->input->post();
		$get_product_url = LIVE_URL_BASE.ProductsAPIv2.getProductDetailsbyID."?productCode=".$postData['product_code'];
		$data = file_get_contents($get_product_url);
		echo $data;
	}

	public function create_product()
	{
		$getAllProductsUnity = LIVE_URL_BASE.ProductsAPIv2.getAllProductsUnity;

		$getAllTaxes = LIVE_URL_BASE.TaxAPI.getAllTaxes;

		$getAllDivision = LIVE_URL_BASE.ProductsAPIv2.getAllDivision;

		$Unity = file_get_contents($getAllProductsUnity);
		$Taxes = file_get_contents($getAllTaxes);
		$Divisions = file_get_contents($getAllDivision);

		$mydata['sell_unity'] = json_decode($Unity, true);
		$mydata['all_taxes'] = json_decode($Taxes, true);
		$mydata['all_divisions'] = json_decode($Divisions, true);

		$this->load->view('header');
		$this->load->view('create_product', $mydata);
		$this->load->view('footer');
	}

	public function get_department_ById(){
		// POST data 
   		$postData = $this->input->post();
    	// get data 
		$getAllDepartmentsByCodeDivision = LIVE_URL_BASE.ProductsAPIv2.getAllDepartmentsByCodeDivision.'?DivCode='.$postData['division'];

		$departments = file_get_contents($getAllDepartmentsByCodeDivision);
    	echo json_encode($departments);
	}

	public function get_sub_department_ById(){
		// POST data 
   		$postData = $this->input->post();
    	// get data 
		$getAllSubDepartmentsByCodeDepartment = LIVE_URL_BASE.ProductsAPIv2.getAllSubDepartmentsByCodeDepartment.'?DeptoCode='.$postData['department'];

		$sub_departments = file_get_contents($getAllSubDepartmentsByCodeDepartment);
    	echo json_encode($sub_departments);
	}

	public function get_class_ById(){
		// POST data 
   		$postData = $this->input->post();
    	// get data 
		$getAllClassBySubDepartment = LIVE_URL_BASE.ProductsAPIv2.getAllClassBySubDepartment.'?SubDeptoCode='.$postData['sub_department'];

		$select_class = file_get_contents($getAllClassBySubDepartment);
    	echo json_encode($select_class);
	}

	public function get_sub_class_ById(){
		// POST data 
   		$postData = $this->input->post();
    	// get data 
		$getAllSubClassByClass = LIVE_URL_BASE.ProductsAPIv2.getAllSubClassByClass.'?ClaseCode='.$postData['select_class'];

		$select_sub_class = file_get_contents($getAllSubClassByClass);
    	echo json_encode($select_sub_class);
	}

	public function getSuppliersbyID(){
		// POST data 
   		$postData = $this->input->post();
    	// get data 
		$getSuppliersbyID = LIVE_URL_BASE.ProviderAPI.getSuppliersbyID.'?providerCode='.$postData['provider_rut'];

		$Supplier = file_get_contents($getSuppliersbyID);
    	echo json_encode($Supplier);
	}

	public function getSuppliersbyName(){
		// POST data 
   		$postData = $this->input->post();
    	// get data 
		$getSuppliersbyName = LIVE_URL_BASE.ProviderAPI.getSuppliersbyName.'?providerName='.$postData['provider_name'];

		$Suppliers_list = file_get_contents($getSuppliersbyName);
    	echo json_encode($Suppliers_list);
	}

	public function organization_commercial()
	{
		$getAllDivision = LIVE_URL_BASE.ProductsAPIv2.getAllDivision;

		$Divisions = file_get_contents($getAllDivision);

		$mydata['all_divisions'] = json_decode($Divisions, true);

		$this->load->view('header');
		$this->load->view('commercial_structure', $mydata);
		$this->load->view('footer');
	}

	public function classify_product()
	{
		$this->load->view('header');
		$this->load->view('classify_product');
		$this->load->view('footer');
	}

	public function product_suppliers()
	{
		$this->load->view('header');
		$this->load->view('product_providers');
		$this->load->view('footer');
	}

	public function price_managment()
	{
		$this->load->view('header');
		$this->load->view('price_managment');
		$this->load->view('footer');
	}

	public function product_taxes()
	{
		$this->load->view('header');
		$this->load->view('tax_managment');
		$this->load->view('footer');
	}
}
