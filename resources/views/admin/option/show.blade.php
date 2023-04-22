@php use App\Models\Option; @endphp
@extends('admin.base')

@php
	/** @var Option $option */
@endphp

@section('content')
	<p><span class="fs-5 fw-bolder">Option name: </span>{{ $option->name }}</p>
@endsection
