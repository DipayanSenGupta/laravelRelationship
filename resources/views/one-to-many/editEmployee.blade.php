@extends('layouts.app')
@section('content')
	<form method="post" action="{{ route('employee.update', $employee->id) }}">
		<div class="form-group">
			@csrf
			@method('PATCH')
				<div class="form-group">
				<label for="price">Employee Id :</label>
				<input type="text" class="form-control" name="employee_id" value="{{$employee->id}}" readonly />
				</div>
				<label for="name">Employee Name:</label>
				<input type="text" class="form-control" name="employee_name" value="{{$employee->employee_name}}"/>
				</div>
				<div class="form-group">
				<label for="quantity">Employee Salary :</label>
				<input type="text" class="form-control" name="employee_salary" value="{{$employee->amount}}"/>
				</div>
				<button type="submit" class="btn btn-primary">Update Employee</button>
		</div>
	</form>
@endsection('content')