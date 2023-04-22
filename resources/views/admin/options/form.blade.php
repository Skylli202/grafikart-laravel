@php
	/** @var App\Models\Option $option */
@endphp

<form class="vstack gap-3" action="" method="post">
	@csrf
	@method($option->id ? 'patch' : 'post')
	<div>
		<label class="form-label" for="optionName">Option name:</label>
		<input
				@class([
					'form-control' => true,
					'is-invalid' => $errors->has('name'),
				])
				id="optionName"
				name="name"
				type="text"
				value="{{ old('name', $option->name) }}"
		/>
		@error('name')
		<div class="invalid-feedback">{{ $message }}</div>
		@enderror
	</div>
	<div class="">
		<button class="btn btn-primary">{{ $option->id ? 'Update' : 'Create' }}</button>
	</div>
</form>