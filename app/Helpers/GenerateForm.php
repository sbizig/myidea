<?php 
namespace App\Helpers;
class GenerateForm {
/*
*  title : title grid
*  columns : columns to show => array('id'=>'ID','name'=>'name','description'=>'description') 
*  data  : data grid
*  url_actions : urls CRUD ['create'=>'localhost/create','edit'=>'localhost/update','delete'=>'localhost/delete']
*  menus : breadcrumb menus => array('home','manage','roles')
*/
public static function GridView($title, array $columns,$data,$url_actions,array $menus){
	$html = '
    <header class="head">
        <div class="main-bar row">
            <div class="col-lg-6 col-sm-4">
                <h4 class="nav_top_align">
                    <i class="fa fa-user"></i>
                   '.$title.'
                </h4>
            </div>
            '.GenerateForm::BreadCrumb($menus).'
        </div>
    </header>
    <div class="outer">
        <div class="inner bg-container">            
            <div class="card">
                <div class="card-header bg-white">
                    '.$title.'
                </div>
                <div class="card-block m-t-35" id="user_body">
                    <div class="table-toolbar">
                        <div class="btn-group">
                            <a href="'.url($url_actions['create']).'" id="editable_table_new" class=" btn btn-default">
                                '.__('app.users.adduser').' <i class="fa fa-plus"></i>
                            </a>
                        </div>
                        <div class="btn-group float-xs-right users_grid_tools">
                            <div class="tools"></div>
                        </div>
                    </div>
                    <div>
                        <div>
                            '.GenerateForm::tabledata($columns, $data, $url_actions).'
                        </div>
                    </div>
                    <!-- END EXAMPLE TABLE PORTLET-->
                </div>
            </div>
        </div>
        <!-- /.inner -->
    </div>
    <!-- /.outer -->';
   return $html;
}
/*
* Variable menus array 
* example => array('home','manage','users')
*/
public static function BreadCrumb($menus){
	$html = '
            <div class="col-lg-6 col-sm-8 col-xs-12">
                <ol class="breadcrumb float-xs-right  nav_breadcrumb_top_align">';
	foreach ($menus as $menu) {
		$html .= '<li class="breadcrumb-item">
                        <a href="#">
                            '.$menu.'
                        </a>
                    </li>';
	}
	$html .='
                </ol>
            </div>';
            return $html;
}
/*
*
* array('id'=>'ID','name'=>'name','description'=>'description');
*/
public static function tabledata($columns, $data, $url_actions){
	  $html='<table class="table  table-striped table-bordered table-hover dataTable no-footer"
                                   id="editable_table" role="grid">
                                <thead><tr role="row">';
                 foreach ($columns as $key => $value) {
                 	$html.='<th class="sorting wid-10" tabindex="0" rowspan="1" colspan="1">'.$value.'</th>';
                 }
                               
                                $html.='<th>Actions</th></tr>
                                </thead>
                                <tbody>';
                                  foreach($data as $row){
                                    $html .= '<tr role="row" class="even">';
	                                   foreach ($columns as $key => $value) {
	                                   	 $html.='<td>'.$row->$key.'</td>';
	                                   }

                                   $html .= '
                                    <td>
                                        <form action="'.url($url_actions['delete']).'/'.$row->id.'" method="post">
                                            <a href="'.url($url_actions['edit']).'/'.$row->id.'" class="edit" data-toggle="tooltip" data-placement="top" title="Edit"
                                                href="edit_user"><i class="fa fa-pencil text-warning"></i></a>
                                                 '.csrf_field().'
                                               <input type="hidden" name="_method" value="DELETE">
                                            <button type="submit" class="delete hidden-xs hidden-sm" data-toggle="tooltip"
                                                 data-placement="top" title="Delete" ><i
                                                    class="fa fa-trash text-danger"></i></a>
                                        </form>
                                    </td>';
                                $html .= '</tr>';
                                }
                                $html .= '</tbody>
                            </table>';
                            return $html;
}

}
