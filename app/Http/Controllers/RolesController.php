<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\Role;
use App\models\Permission;
use App\Http\Requests\RoleRequest;
use App\Helpers\Reply;

class RolesController extends Controller
{
    public function index(){
    	return view('admin.roles.index',['listroles'=>Role::all()]);
    }

	public function create(){
        $permissions = Permission::all();
		return view('admin.roles.create',compact('permissions'));

	}

	public function store(RoleRequest $request){
        /*$role                 = new Role();
		$role->name           = $request->input('name');
		$role->display_name   = $request->input('display_name');
		$role->description    = $request->input('description');
		$role->save();
        foreach ($request->permissions as $key => $value) {
            $role->attachPermission($value);
        }*/
		//return view('admin/roles/index',['messages'=>['alert'=>'alert alert-success','message'=>'<strong>Success!</strong> Role addedd with success']]);
        return Reply::redirect(url('admin/roles'),'role added with success');
	}

    public function edit($id){
    	$role = Role::find($id);
    	return view('admin.roles.edit',['role'=>$role]);
    }

    public function update(RoleRequest $request, $id){
    	$role = Role::find($id);
    	$role->name          = $request->input('name');
    	$role->display_name  = $request->input('display_name');
    	$role->description   = $request->input('description');
    	$role->save();

    	return Redirect('admin/roles');

    }

    public function destroy($id){
		//$rolee = Role::findOrFail($id); // Pull back a given role
        Role::whereId($id)->delete();

    	//Role::destroy($id);
    	return Redirect('admin/roles');

    }

}
