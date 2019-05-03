<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\Employee;
// use app\Http\Requests\EmployeeStoreRequest;

class EmployeeController extends Controller
{

	public function show() {
		$employees = Employee::all();
		return view('one-to-many/indexEmployee',compact('employees'));
	}

	public function index() {
		$employees = Employee::all();
		return view('one-to-many/indexEmployee',compact('employees'));
	}

	public function create() {
		return view('one-to-many/createEmployee');
	}

	public function store(Request $request) {
		// dd($request->input());
		$rules = [
			'employee_name' => 'required|min:6|max:50',
			'amount' => 'required'
		];

		$messages = [
			'employee_name.min' => 'Cant afford to have a long name ?',
			'employee_name.max' => 'What is up with this huge ass name ?'
			// 'employee_salary.digits_between' => 'Just type what you get paid, no more, no less BITCH !'
		];
		Validator::make($request->input(),$rules,$messages)->validate();
		$employee = Employee::create($request->input());

		flash('Employee created bitces !')->success();
		return redirect()->route('employee.index')->with('employee', $employee);
	}

	public function edit($id) {
		$employee = Employee::findOrFail($id);
		return view('one-to-many/editEmployee',compact('employee'));
	}

	public function update(Request $request, $id){
		// dd($request->input());
		$rules = [
			'employee_name' => 'required|min:6|max:50',
			'employee_salary' => 'required'
		];

		$messages = [
			'employee_name.min' => 'Cant afford to have a long name ?',
			'employee_name.max' => 'What is up with this huge ass name ?'
			// 'employee_salary.required' => 'Just type what you get paid, no more, no less BITCH !'
		];
		Validator::make($request->input(),$rules,$messages)->validate();
		$employee = Employee::findOrFail($id);
		$employee->update($request->input());
		flash('Employee stored bitces !')->success();

		return redirect()
		->route('employee.show',$employee)
		->with('message','Employee updated Bitch!');
	}

	public function destroy($id) {
		$employee = Employee::findOrFail($id);
		$employee->delete();

		return redirect()
		->route('employee.index')
		->with('message', 'The employee has been deleted! bitch');
	}	
}
