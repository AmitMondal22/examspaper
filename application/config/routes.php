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
// $route['default_controller'] = 'welcome';
$route['404_override'] = 'Pub/page_err';
$route['translate_uri_dashes'] = FALSE;

// blank
$route['blan-k']='Admin/blank';

// upd select year
$route['update/(:any)']='Admin/edi_year/$1';
// year update submeit
$route['update_year']='Admin/yupd_sub';
// add year
$route['insert-year']='Admin/ad_year';
// action year
$route['add_year']='Admin/ins_q_year';


// Add stream
$route['insert-stream']='Admin/s_stream';
// action strean
$route['str_q']='Admin/ins_strem';
//edit stram
$route['strem_edit/(:any)']='Admin/edit_stream/$1';
$route['update_stream']='Admin/upd_str';
// delete stream
$route['delete/(:any)']='Admin/str_del/$1';

// institute delect
$route['all-institute']='Admin/inst_ins';
//institute insert
$route['institute-entry']='Admin/insti_ins';
//institute update select
$route['edit-institute/(:any)']='Admin/upd_insti/$1';
//institute update
$route['institute-updaet']='Admin/insti_upd';
//institute delete
$route['del-institute/(:any)']='Admin/indti_dele/$1';


//select type insti
$route['institute-type']='Admin/ins_type';
//ins type insti
$route['instit-type']='Admin/insti_ty';
//select type insti id
$route['edit-institute-type/(:any)']='Admin/e_insti_type/$1';
//update type insti
$route['instit-type-update']='Admin/in_ty_u';



// quastion view
$route['admin-upload-quastion']='Admin/qu_ins';
// quastion submait
$route['submit']='Admin/ins_quartion';
//select quastion
$route['all-quastions']='Admin/select_all_quastion';

//publish quastion 
$route['act_action']='Admin/publish_active';
//delete quastion
$route['remove-quastion/(:any)']='Admin/del_quastion/$1';
//select update
$route['update-quastion/(:any)']='Admin/sel_u_quastion/$1';
//update quastion
$route['submit-act-quas']='Admin/upDateQ';
//contact list
$route['all-contact']="Admin/conta_li";



$route['aprove-quastion']='Admin/select_quastion_activ';
$route['not-aprove-quastion']='Admin/select_quastion_deactiv';


$route['user']='Admin/user_u';






//logni admin
$route['admin-login']="Admin_log/log_page";

$route['log_in']='Admin_log/log_act';

$route['admin-logout']="Admin_log/logout_ad";



/*-----------------------------------------
|               PUBLIC PAGE                 |
 ------------------------------------------*/

//index page
$route['default_controller']='Page/i_page';
//about page
$route['about']='Page/abu';
//contact page
$route['contact']='Page/con';
//submait contact
$route['act-contact']='Page/contact_sub';
//institute page
$route['institute/(:any)']='Page/ins_ti_select/$1';
//quastion page
$route['quastions/(:any)/(:any)/(:any)']='Page/a_quastion/$1/$2/$3';
$route['terms']='Page/tram';
$route['cookie-policy']='Page/cooki';


/*-----------------------------------------
|            PUBLIC PAGE END                |
 ------------------------------------------*/





// create account
 $route['create-account']="Pub/cr_use";
 $route['verification']="Pub/ins_u_data";
 $route['act-userotp']='Pub/otp_v';



 $route['forgot-account']='Pub/em_for';
 $route['forgot-password']='Pub/f_u_email';

 $route['otp-verification']='Pub/m_otp';
 $route['upd-password']='Pub/up_pass';



//user ins
$route['profile']='User/test_v';
$route['upd_profile']='User/user_pro_upd';
$route['upload-quastion']='User/upd_quastion';
$route['ins-insti']='User/isn_inst';
$route['add-stream']='User/ins_str';
$route['updatemyquastion/(:any)']='User/upd_qu_u/$1';
$route['user-update-quastion']='User/upd_dave';


//user login
$route['login']='User_log/view_log';
$route['log_action']='User_log/l_vere';

//log out
$route['logout']='User_log/logout_us';





// side map
$route['sitemap\.xml']='Side_map/sid';