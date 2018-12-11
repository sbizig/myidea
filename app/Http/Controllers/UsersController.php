<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\interfaces\CrudInterface;
use App\User;
class UsersController extends Controller implements CrudInterface
{
    public function index(){
    	return view('admin.users.index',['listusers'=>User::all()]);
    }
    public function show($id){}
    public function create(){
    	return view('admin.users.create');
    }
    public function store(Request $request){}
    public function edit($id){}
    public function update(Request $request){}
    public function destroy($id){}


}
