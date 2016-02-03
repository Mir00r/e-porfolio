@extends('master')

@section('content')

<style type="text/css">
.about{

	margin-left: 200px;
}

.aboutme{
	margin-left: 20px;
	margin-right: 400px;
}

.write{
	margin-left: 700px;
}
</style>

 <h2 class="about">About me</h2>
  @foreach($aboute_me as $list)
 <p class="aboutme">{{ $list->aboutme }}</p>
 @endforeach
  <a href="{{url('add-aboute')}}" class="btn btn-primary write">Write & edit about yourself</a>
@endsection