<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\Permission;
use App\Http\Requests\RoleRequest;
use View;
use App\Helpers\Reply;

class PermissionController extends Controller
{
   public function index(){
   		return view('admin.permissions.index',['listpermissions'=>Permission::all()]);
   }
   public function create(){
      return View::make('admin.permissions.modalcreate')->render();
		//return view('admin.permissions.create');
	}

   public function store(RoleRequest $request){
      try {

         Permission::create($request->except(['_token']));
         return Reply::redirect(url('admin/permissions'), "Permission added with success","redirect");
      } catch (Exception $e) {
         return Reply::redirect(url('admin/permissions'), $e->getMessage(),"redirect");
      }
	}

   public function edit(){

   }
   public function update(){

   }
   public function destroy($id){
      //Permission::whereId($id)->delete();
      Permission::destroy($id);

      return Reply::redirect(url('admin/permissions'), "Permission deleted with success","redirect");
   }
}
