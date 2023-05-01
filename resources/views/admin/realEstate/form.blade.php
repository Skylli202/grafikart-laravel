@php use App\Models\RealEstate; @endphp

@php
	/** @var RealEstate $realEstate */
@endphp

<form class="row gy-2 gtx-3 align-items-center" action="" method="post">
	@csrf
	@method($realEstate->id ? 'patch' : 'post')
	<div class="col-md-6">
		<label class="form-label" for="realEstateTitle">Title:</label>
		<input
			@class([
				'form-control' => true,
				'is-invalid' => $errors->has('title'),
			])
			id="realEstateTitle"
			name="title"
			type="text"
			value="{{ old('title', $realEstate->title) }}"
		/>
		@error('title')
		<div class="invalid-feedback">{{ $message }}</div>
		@enderror
	</div>

	<div class="col-md-3">
		<label class="form-label" for="realEstateSurface">Surface:</label>
		<div class="input-group">
			<input
				@class([
					'form-control',
					'is-invalid' => $errors->has('surface'),
				])
				id="realEstateSurface"
				name="surface"
				type="text"
				value="{{ old('surface', $realEstate->surface) }}"
			/>
			<div class="input-group-text">m²</div>

			@error('surface')
			<div class="invalid-feedback">{{ $message }}</div>
			@enderror
		</div>
	</div>


	<div class="col-md-3">
		<label class="form-label" for="realEstatePrice">Price:</label>
		<div class="input-group">
			<div class="input-group-text">€</div>
			<input
				@class([
					'form-control',
					'is-invalid' => $errors->has('price'),
				])
				id="realEstatePrice"
				name="price"
				type="text"
				value="{{ old('price', $realEstate->price) }}"
			/>
			@error('price')
			<div class="invalid-feedback">{{ $message }}</div>
			@enderror
		</div>

	</div>

	<div class="col-md-4">
		<label class="form-label" for="realEstateRooms">Rooms:</label>
		<input
			@class([
				'form-control',
				'is-invalid' => $errors->has('rooms'),
			])
			type="text"
			class="form-control"
			id="realEstateRooms"
			name="rooms"
			value="{{ old('rooms', $realEstate->rooms) }}"
		/>
	</div>

	<div class="col-md-4">
		<label class="form-label" for="realEstateBedrooms">Bedrooms:</label>
		<input
			@class([
				'form-control',
				'is-invalid' => $errors->has('bedrooms'),
			])
			type="text"
			class="form-control"
			id="realEstateBedrooms"
			name="bedrooms"
			value="{{ old('bed', $realEstate->bedrooms) }}"
		/>
	</div>

	<div class="col-md-4">
		<label class="form-label" for="realEstateFloor">Floor:</label>
		<input
			@class([
				'form-control',
				'is-invalid' => $errors->has('floor'),
			])
			type="text"
			class="form-control"
			id="realEstateFloor"
			name="floor"
			value="{{ old('floor', $realEstate->floor) }}"
		/>
	</div>

	<div class="col-md-4">
		<label class="form-label" for="realEstateAddress">Address:</label>
		<input
			@class([
				'form-control',
				'is-invalid' => $errors->has('address'),
			])
			type="text"
			class="form-control"
			id="realEstateAddress"
			name="address"
			value="{{ old('address', $realEstate->address) }}"
		/>
	</div>

	<div class="col-md-4">
		<label class="form-label" for="realEstateAddress">City:</label>
		<input
			@class([
				'form-control',
				'is-invalid' => $errors->has('city'),
			])
			type="text"
			class="form-control"
			id="realEstateAddress"
			name="city"
			value="{{ old('city', $realEstate->city) }}"
		/>
	</div>

	<div class="col-md-4">
		<label class="form-label" for="realEstateZipcode">Zipcode:</label>
		<input
			@class([
				'form-control',
				'is-invalid' => $errors->has('zipcode'),
			])
			type="text"
			class="form-control"
			id="realEstateZipcode"
			name="zipcode"
			value="{{ old('zipcode', $realEstate->zipcode) }}"
		/>
	</div>


	<div class="col-12">
		<label class="form-label" for="realEstateDescription">Description:</label>
		<textarea class="form-control" id="realEstateDescription" name="description" cols="30" rows="10">
        {{ $realEstate->description }}
        </textarea>
		@error('description')
		<div class="invalid-feedback">{{ $message }}</div>
		@enderror
	</div>

	{{-- <div> --}}
	{{-- <label class="form-label" for="realEstateFIELD_NAME"></label> --}}
	{{-- <input --}}
	{{-- @class([ --}}
	{{-- 'form-control' => true, --}}
	{{-- 'is-invalid' => $errors->has('FIELD_NAME'), --}}
	{{-- ]) --}}
	{{-- id="realEstateFIELD_NAME" --}}
	{{-- name="FIELD_NAME" --}}
	{{-- type="text" --}}
	{{-- value="{{ old('name', $option->FIELD_NAME) }}" --}}
	{{-- /> --}}
	{{-- @error('FIELD_NAME') --}}
	{{-- <div class="invalid-feedback">{{ $message }}</div> --}}
	{{-- @enderror --}}
	{{-- </div> --}}

	<div class="">
		<button class="btn btn-primary">{{ $realEstate->id ? 'Update' : 'Create' }}</button>
	</div>
</form>
