<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;

class EmployeeController extends Controller
{
    public function index(){
        $employees = Employee::all();
        return view('pages.employee.index', \compact('employees'));
    }

    public function create(){
        return view('pages.employee.create');
    }

    public function store(Request $request){
        $name=  $request->name;
        $email = $request->email;
        $phone = $request->phone;
        $address = $request->address;

        $employee = new Employee();
        $employee->name = $name;
        $employee->email = $email;
        $employee->phone = $phone;
        $employee->address = $address;
        $employee->save();

        return redirect()->to('employee/index');


    }

    public function edit($id){

        $employee = Employee::find($id);

        return view('pages.employee.edit', \compact('employee'));
        
    }

    public function update(Request $request){
        $id = $request->id;
        $name=  $request->name;
        $email = $request->email;
        $phone = $request->phone;
        $address = $request->address;

        $employee = Employee::find($id);
        $employee->name = $name;
        $employee->email = $email;
        $employee->phone = $phone;
        $employee->address = $address;
        $employee->save();

        return redirect()->to('employee/index');

    }

    public function delete($id){
        $employee = Employee::find($id);
        $employee->delete();

        return redirect()->to('employee/index');
    }
}
