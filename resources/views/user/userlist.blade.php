@extends('layout.layouts')
@section('content')


<div class="content">
<ul>
	@foreach($users as $user)
		<li>{{$user->name}}</li>

	@endforeach
</ul>
</div>
  @endsection