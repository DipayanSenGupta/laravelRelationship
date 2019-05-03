<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Employee;
class EmployeeController extends Controller
{
public function create() {
	return view('one-to-many/createEmployee');
}
public function store(Request $request) {
	$employee = new Employee;
	$employee->employee_name = $request->get('employee_name');
	$employee->amount = $request->get('employee_salary');
	$employee->save();
	return 'Success';
}
}
