<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
$route['default_controller'] = 'Home/index';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

// Custom Routes para Consultas
$route[''] = 'Home/index';
$route['bienvenido'] = 'Home/bienvenido';
$route['consulta'] = 'Consultas/busqueda';
$route['resultado'] = 'Consultas/resBusqueda';
$route['detalle'] = 'Consultas/detBusqueda';


// Custom Routes para Catalogo
$route['catalogo'] = 'Catalogo/catBusqueda';
$route['agregar'] = 'Catalogo/catAgregar';


// Custom Routes para prestamos
$route['organizaciones'] = 'Prestamos/prestOrg';
$route['exposiciones'] = 'Prestamos/prestExp';
$route['movimientos'] = 'Prestamos/prestMov';
$route['nuevo_prestamo'] = 'Prestamos/prestAddOrg';

// Custom Routes para investigacion
$route['investigacion'] = 'Investigacion/invBusqueda';
$route['resultado'] = 'Investigacion/invResBus';

// Custom Routes para restauracion
$route['restauracion'] = 'Restauracion/index';

// Custom Routes para administracion
$route['administracion'] = 'administracion/adminConjuntos';
$route['colecciones'] = 'administracion/adminColecciones';
$route['registrar'] = 'administracion/adminRegistrar';
