@php use Illuminate\Pagination\Paginator; @endphp
@extends('admin.base')

@section('content')
	<ul>
		<li><a href="/admin/options/create">create options</a></li>
	</ul>
	<table class="table table-striped table-hover">
		<thead>
		<tr>
			<th scope="col">#</th>
			<th scope="col">Name</th>
			<th scope="col"></th>
			<th scope="col"></th>
		</tr>
		</thead>

		<tbody class="table-group-divider">
		@php /** @var Paginator $options */ @endphp
		@php /** @var App\Models\Option $option */ @endphp
		@foreach($options as $option)
			<tr>
				<th scope="row">{{ $option->id }}</th>
				<td class="w-75">{{ $option->name }}</td>
				<td>
					<a
							href="{{ route('admin.options.edit', ['option' => $option]) }}"
							class="btn btn-secondary"
					>
						Edit
					</a>
				</td>
				<td>
					<form action="{{ route('admin.options.destroy', ['option' => $option]) }}" method="post">
						@csrf
						@method('delete')
						<button class="btn btn-danger">Delete</button>
					</form>
				</td>
			</tr>
		@endforeach
		</tbody>
	</table>
	<div class="d-flex justify-content-center">
		{{ $options->links() }}
	</div>
@endsection
