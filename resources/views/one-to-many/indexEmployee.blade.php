@extends('layouts.app')

@section('content')
	<table class="table table-striped">
		<thead>
			<tr>
				<td>
				Employee-id
			</td>
			<td>
				Employee name
			</td>
			<td>
				Amount (Salary)
			</td>
			</tr>
		</thead>
		<tbody>
			@foreach($employees as $employee)
			<tr>
							<td>{{$employee->id}}</td>
			<td>{{$employee->employee_name}}</td>
			<td>{{$employee->amount}}</td>
			<td><a href="{{ route('employee.edit',$employee->id) }}" class="btn btn-primary">Edit</a></td>
			<td>
				<form action="{{ route('employee.destroy',$employee->id) }}"
					method="post">
						@csrf
						@method('DELETE')
						<button class="btn btn-danger" type="submit">Delete</button>
					</form>
			</td>
			<td><a href="{{route('transaction.showAgainstEmployee',$employee->id)}}" class="btn btn-primary">Transaction</a></td>
			</tr>
			@endforeach
		</tbody>
	</table>
@endsection