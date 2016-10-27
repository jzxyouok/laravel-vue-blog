@extends('layouts.app')

@section('content')
	<form method="POST" action="/articles" class="row main-form">
		{!! csrf_field() !!}
	    @include('articles.form', compact('submitButtonText', 'categories', 'tags'))
    <form>
@endsection