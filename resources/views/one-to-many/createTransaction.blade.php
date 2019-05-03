@extends('layouts.app')
		@section('content')
		<div class="panel panel-primary">
			<div class="panel-heading">
				Add Employee Details
			</div>
			<div class="panel-body">
				<form method="post" action="{{ route('transaction.store')}}">
					{{csrf_field()}}
					<div class="form-group">
						<label class="col-md-4">
							Employee Id	
						</label>
						<input type="text" class="form-control"  name="employee_id"/>
					</div>

					<div class="form-group">
						<label class="col-md-4">
							Transaction Amount	
						</label>
						<input type="text" class="form-control"  name="transaction_amount"/>
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