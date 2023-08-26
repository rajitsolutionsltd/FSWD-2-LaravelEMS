<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function index(){
        $employees = Employee::paginate(2);

        return view('pages.employee.index', \compact('employees'));
    }

    public function create(){
        return view('pages.employee.create');
    }

    public function store(Request $request){
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required|numeric|digits:11'
        ]);

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

        return redirect()->to('employee/index')->with('success', 'Employee is created successfully');;


    }

    public function edit($id){

        $employee = Employee::find($id);

        return view('pages.employee.edit', \compact('employee'));
        
    }

    public function update(Request $request){

        $this->validate($request, [
            'name' => 'required|max:255|regex:/^[A-Z a-z]+$/',
            'email' => 'required|email',
            'phone' => 'required|numeric|digits:11'
        ]);

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

        return redirect()->to('employee/index')->with('info', 'Employee is updated successful for *<b>'.$employee->name."</b>");

    }

    public function delete($id){
        $employee = Employee::find($id);
        $employee->delete();

        return redirect()->to('employee/index')->with('warning', 'Employee is deleted successfully');
    }
}
