<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
|--------------------------------------------------------------------------
| Display Debug backtrace
|--------------------------------------------------------------------------
|
| If set to TRUE, a backtrace will be displayed along with php errors. If
| error_reporting is disabled, the backtrace will not display, regardless
| of this setting
|
*/
defined('SHOW_DEBUG_BACKTRACE') OR define('SHOW_DEBUG_BACKTRACE', TRUE);

/*
|--------------------------------------------------------------------------
| File and Directory Modes
|--------------------------------------------------------------------------
|
| These prefs are used when checking and setting modes when working
| with the file system.  The defaults are fine on servers with proper
| security, but you may wish (or even need) to change the values in
| certain environments (Apache running a separate process for each
| user, PHP under CGI with Apache suEXEC, etc.).  Octal values should
| always be used to set the mode correctly.
|
*/
defined('FILE_READ_MODE')  OR define('FILE_READ_MODE', 0644);
defined('FILE_WRITE_MODE') OR define('FILE_WRITE_MODE', 0666);
defined('DIR_READ_MODE')   OR define('DIR_READ_MODE', 0755);
defined('DIR_WRITE_MODE')  OR define('DIR_WRITE_MODE', 0755);

/*
|--------------------------------------------------------------------------
| File Stream Modes
|--------------------------------------------------------------------------
|
| These modes are used when working with fopen()/popen()
|
*/
defined('FOPEN_READ')                           OR define('FOPEN_READ', 'rb');
defined('FOPEN_READ_WRITE')                     OR define('FOPEN_READ_WRITE', 'r+b');
defined('FOPEN_WRITE_CREATE_DESTRUCTIVE')       OR define('FOPEN_WRITE_CREATE_DESTRUCTIVE', 'wb'); // truncates existing file data, use with care
defined('FOPEN_READ_WRITE_CREATE_DESTRUCTIVE')  OR define('FOPEN_READ_WRITE_CREATE_DESTRUCTIVE', 'w+b'); // truncates existing file data, use with care
defined('FOPEN_WRITE_CREATE')                   OR define('FOPEN_WRITE_CREATE', 'ab');
defined('FOPEN_READ_WRITE_CREATE')              OR define('FOPEN_READ_WRITE_CREATE', 'a+b');
defined('FOPEN_WRITE_CREATE_STRICT')            OR define('FOPEN_WRITE_CREATE_STRICT', 'xb');
defined('FOPEN_READ_WRITE_CREATE_STRICT')       OR define('FOPEN_READ_WRITE_CREATE_STRICT', 'x+b');

/*
|--------------------------------------------------------------------------
| Exit Status Codes
|--------------------------------------------------------------------------
|
| Used to indicate the conditions under which the script is exit()ing.
| While there is no universal standard for error codes, there are some
| broad conventions.  Three such conventions are mentioned below, for
| those who wish to make use of them.  The CodeIgniter defaults were
| chosen for the least overlap with these conventions, while still
| leaving room for others to be defined in future versions and user
| applications.
|
| The three main conventions used for determining exit status codes
| are as follows:
|
|    Standard C/C++ Library (stdlibc):
|       http://www.gnu.org/software/libc/manual/html_node/Exit-Status.html
|       (This link also contains other GNU-specific conventions)
|    BSD sysexits.h:
|       http://www.gsp.com/cgi-bin/man.cgi?section=3&topic=sysexits
|    Bash scripting:
|       http://tldp.org/LDP/abs/html/exitcodes.html
|
*/
defined('EXIT_SUCCESS')        OR define('EXIT_SUCCESS', 0); // no errors
defined('EXIT_ERROR')          OR define('EXIT_ERROR', 1); // generic error
defined('EXIT_CONFIG')         OR define('EXIT_CONFIG', 3); // configuration error
defined('EXIT_UNKNOWN_FILE')   OR define('EXIT_UNKNOWN_FILE', 4); // file not found
defined('EXIT_UNKNOWN_CLASS')  OR define('EXIT_UNKNOWN_CLASS', 5); // unknown class
defined('EXIT_UNKNOWN_METHOD') OR define('EXIT_UNKNOWN_METHOD', 6); // unknown class member
defined('EXIT_USER_INPUT')     OR define('EXIT_USER_INPUT', 7); // invalid user input
defined('EXIT_DATABASE')       OR define('EXIT_DATABASE', 8); // database error
defined('EXIT__AUTO_MIN')      OR define('EXIT__AUTO_MIN', 9); // lowest automatically-assigned error code
defined('EXIT__AUTO_MAX')      OR define('EXIT__AUTO_MAX', 125); // highest automatically-assigned error code



/**
 * Custom defines for static keyword
 */

 define('project_title', 'UNICONNECT | Dashboard');
 define('Home', 'Inicio');
 define('Dashboard', 'Dashboard');
 define('Search', 'Buscar...');
 define('Product', 'Productos');
 define('See_product', 'Ver Producto' );
 define('Manage_Product', 'Gestionar Producto' );
 define('Create_Product','Nuevo Producto');
 define('Organization_commercial', 'Organización Comercial'); 
 define('Classify_Product', 'Clasificar Producto' );
 define('Product_Suppliers', 'Proveedores del Producto' );
 define('Price_Managment', 'Gestión de Precio' );
 define('Product_Taxes', 'Impuestos del Producto' );
 define('Product_Classification', 'Clasificación del Producto' );
 define('Search_Product', 'Buscar Producto' );
 define('Product_Code', 'Código de Producto' );
 define('Product_Name', 'Nombre del Producto');
 define('Search_button', 'Buscar' );
 define('Classification', 'Clasificación' );
 define('Division', 'División' );
 define('Department', 'Departamento' );
 define('Sub_Department', 'Sub-Depto' );
 define('Class_table', 'Clase' );
 define('Sub_Class', 'Sub-Clase' );
 define('Change', 'Cambio' );
 define('Save', 'Guardar' );
 define('Cancel', 'Cancelar' );
 define('Product_Details', 'Detalles de Producto' );
 define('List_of_Results', 'Lista de Resultados' );
 define('Details', 'Detalles' );
 define('Produt_Detail', 'Detalles de Producto'); 
 define('Status', 'Estado:' );
 define('Sell_Measure', 'Medida de Venta' );
 define('Sell_Unity', 'Unidad de Venta' );
 define('Unity', 'Unidad');
 define('Net_Price', 'Precio Neto');
 define('Total_Dscto', 'Total Dscto %');
 define('Freight_Price', 'Precio de Flete');
 define('Total_Tax', 'Total Impuestos %');
 define('Purchase_Price', 'Precio de Compra');
 define('Branch_Name', 'Nombre de la Sucursal');
 define('Retail_Price', 'Precio al Por Menor' );
 define('Retail_Margin', 'Margen Minorista' );
 define('Wholesale_Price', 'Precio al Por Mayor' );
 define('Wholesale_Margin', 'Margen Mayorista' );
 define('Main_Provider', 'Proveedor Principal' );
 define('Provider', 'Proveedor');
 define('Rut_Provider', 'Rut. Proveedor' );
 define('Provider_name', 'Nombre del Proveedor' );

 define('Product_Creation', 'Creación de Producto' );
 define('Product_Bar_Code', 'Código de Barras del Producto' );
 define('Generate_Code', 'Generar Codigo' );
 define('Product_Sale_Format', 'Formato de Venta del Producto' );
 define('Product_Packaging_Format', 'Empaque del Producto por el Proveedor');
 define('Product_Packaging_Provider', 'Empaque del Proveedor');
 define('Provider_Packing_Type','Empaque del Proveedor');
 define('Units_per_Packing','Unidades por Empaque');
 define('Sale_Measure_Product','Tipo Unidad de Venta');
 define('Measure_Unity', 'Unidad de Venta');

 define('Provider_Price', 'Precio del Proveedor' );
 define('Dscto_1', '% Dscto 1' );
 define('Dscto_2', '% Dscto 2' );
 define('Dscto_3', '% Dscto 3' );
 define('Dscto_4', '% Dscto 4' );
 define('Sub_Price', 'Sub Precio' );
 define('Price_Without_Tax', 'Precio sin Impuestos' );
 define('Taxes_List', 'Lista de Impuestos' );
 define('Select_Tax', 'Seleccionar Impuesto' );
 define('New_Tax', 'Nuevo Impuesto' );
 define('Sell_Price', 'Precio de Venta por Sucursal' );
 define('Product_Provider', 'Proveedor de Productos' );
 define('Provider_RUT', 'RUT del Proveedor' );
 define('Create_Poduct', 'Crear Producto' );

//Commercial Strucuture Definitions
define('Division_Title', 'Division Comercial');
define('Select_Division', 'Seleccionar Division');
define('New_Division_Button', 'Nueva División');
define('Dept_Title','Departamento');
define('Sub_Dept_Title','Sub-Departamento');
define('Class_Title','Clase');
define('SubClass_Title','Sub-Clase');
define('Edit_Button_Structure','Editar');
define('Add_Dept_Button', '+ Depto');
define('Add_SubDept_Button', '+ Sub-Depto');
define('Add_Class_Button', '+ Clase');
define('Add_SubClass_Button', '+ Sub-Clase');

 //DEFINE DEVELOPMENT SERVER 
 //define('LIVE_URL_BASE', 'http://164.77.122.66:85/' );

 //DEFINE LOCALHOST IN UNICO OFFICE
 define('LIVE_URL_BASE', 'http://192.168.1.175:85/');

 define('ProductsAPIv2', 'ProductsAPIv2/index.php/API/' );
 define('TaxAPI', 'TaxAPI/index.php/API/' );
 define('ProviderAPI', 'ProviderAPI/index.php/API/' );
 define('getProductbyID', 'v1/Products/getProductbyID');
 define('getProductDetailsbyID', 'v1/Products/getProductDetailsbyID' );
 define('getProductsbyName', 'v1/Products/getProductsbyName' );
 define('getAllProductsUnity', 'v1/ProductUnity/getAllProductsUnity' );
 define('getAllTaxes', 'v1/Taxes/getAllTaxes' );
 define('getAllDivision', 'v1/ProductsClassification/getAllDivision' );
 define('getAllDepartmentsByCodeDivision', 'v1/ProductsClassification/getAllDepartmentsByCodeDivision' );
 define('getAllSubDepartmentsByCodeDepartment', 'v1/ProductsClassification/getAllSubDepartmentsByCodeDepartment');
 define('getAllClassBySubDepartment', 'v1/ProductsClassification/getAllClassBySubDepartment' );
 define('getAllSubClassByClass', 'v1/ProductsClassification/getAllSubClassByClass' );
 define('getSuppliersbyName', 'v1/Suppliers/getSuppliersbyName' );
 define('getSuppliersbyID', 'v1/Suppliers/getSuppliersbyID');
 define('getupdateStatus', 'v1/Products/updateStatus');