@extends('layouts.app')
		@section('content')
		<div class="panel panel-primary">
			<div class="panel-heading">
				Add Employee Details
			</div>
			<div class="panel-body">
				<form method="post" action="{{ route('employee.store')}}">
					{{csrf_field()}}
					<div class="form-group">
						<label class="col-md-4">
							Employee Name	
						</label>
						<input type="text" class="form-control"  name="employee_name"/>
					</div>

					<div class="form-group">
						<label class="col-md-4">
							Employee Salary	
						</label>
						<input type="text" class="form-control"  name="amount"/>
					</div>

					<div class="form-group">
					<button type="submit" class="btn btn-primary">
						Add
					</button>
					</div>					

				</form>
			</div>
		</div>
		@endsection