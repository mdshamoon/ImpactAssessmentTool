@extends('layouts.app')

@section('content')
<div class="container">

	 <div class="alert alert-primary d-none" role="alert" id="success">
 Succesfully added to the original database
</div>

<button class="btn btn-primary float-right m-3" onclick="submitonnet()">Upload on internet</button>

<div id="note">nn</div>

</div>




<script src="{{asset('js/jquery.min.js')}}"></script>
<script src="{{asset('js/retrieve.js') }}"></script>


@endsection