<?php
namespace App\interfaces;
use Illuminate\Http\Request;
interface CrudInterface {
    public function index();
    public function show($id);
    public function create();
    public function store(Request $request);
    public function edit($id);
    public function update(Request $request);
    public function destroy($id);

}