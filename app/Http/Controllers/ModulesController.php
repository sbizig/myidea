<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\interfaces\CrudInterface;
use App\models\Module;

class ModulesController extends Controller implements CrudInterface
{
    public function index(){
    	return view('admin.modules.index',['listmodules'=>Module::all()]);
    }
    public function show($id){}
    public function create(){}
    public function store(Request $request){}
    public function edit($id){}
    public function update(Request $request){}
    public function destroy($id){}
}
