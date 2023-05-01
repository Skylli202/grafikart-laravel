@php use App\Models\RealEstate;use Illuminate\Pagination\Paginator; @endphp
@extends('admin.base')

@section('content')
	<div>
		<a class="btn btn-primary float-end" href="{{ route('admin.realEstates.create') }}">Create</a>
	</div>


	<table class="table table-striped table-hover">
		<thead>
		<tr>
			<th scope="col">Title</th>
			<th scope="col">Surface</th>
			<th scope="col">Price</th>
			<th scope="col">City</th>
			<th scope="col">Actions</th>
		</tr>
		</thead>
		<tbody class="table-group-divider">
		@php /** @var RealEstate $realEstate */ @endphp
		@foreach($realEstates as $realEstate)
			<tr>
				<td>{{ $realEstate->title }}</td>
				<td>{{ $realEstate->surface }} m²</td>
				<td>{{ number_format($realEstate->price, 0, ".", " ") }}€</td>
				<td>{{ $realEstate->city }}</td>
				<td>

					<a href="{{ route('admin.realEstates.edit', [$realEstate]) }}" class="btn btn-sm btn-warning">Edit</a>
					<form
						class="d-inline"
						action="{{ route('admin.realEstates.destroy', [$realEstate]) }}"
						method="post"
					>
						@csrf
						@method('delete')
						<button class="btn btn-sm btn-danger">Delete</button>
					</form>
				</td>
			</tr>
		@endforeach
		</tbody>
	</table>
@endsection