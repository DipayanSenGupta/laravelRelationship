@extends('layouts.app')

@section('content')
	<table class="table table-striped">
		<thead>
			<tr>
				<td>
				Employee-id
			</td>
			<td>
				Transaction Amount (Salary)
			</td>
			</tr>
		</thead>
		<tbody>
			@foreach($transactions as $transaction)
			<tr>
				<td>{{$transaction->employee_id}}</td>
				<td>{{$transaction->transaction_amount}}</td>
			{{-- 	<td><a href="{{ route('transaction.edit',$transaction->id) }}" class="btn btn-primary">Edit</a>
				</td> --}}
{{-- 				<td>
				<form action="{{ route('transaction.destroy',$transaction->id) }}"
					method="post">
						@csrf
						@method('DELETE')
						<button class="btn btn-danger" type="submit">Delete</button>
				</form>
			</td> --}}
			</tr>
			@endforeach
		</tbody>
	</table>
@endsection