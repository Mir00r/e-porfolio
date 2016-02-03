<!DOCTYPE html>
<html>
	<head>
		<title></title>
			{!! Html::style("login/css/bootstrap.min.css") !!}
			{!! Html::style("login/css/forget.css") !!}

	        {!! Html::style("login/assets/ico/favicon.png") !!}
	        {!! Html::style("login/assets/font-awesome/css/font-awesome.min.css") !!}
	</head>


	<body>
		
		<div class = "container">
			<div class = "row">
		        <div class = "modal-dialog">
		            <div class = "modal-content">

		                <div class="panel panel-info">
		                    <div class="panel-heading" ><h3 id = "matha"> Portfolio HUB</h3></div>
		                </div>

		                <div class="modal-body">

		                	@if (session('status'))
								<div class="alert alert-success">
									{{ session('status') }}
								</div>
							@endif

							@if (count($errors) > 0)
								<div class="alert alert-danger">
									<strong>Whoops!</strong> There were some problems with your email.<br><br>
									<ul>
										@foreach ($errors->all() as $error)
											<li>{{ $error }}</li>
										@endforeach
									</ul>
								</div>
							@endif


		                    <h3 id="reset-header">Reset Password</h3>
		                    <p align="center">Enter your e-mail address below, and we'll send you an e-mail allowing you to reset it.</p>
		                    
		                    <form class = "form-horizontal" role = "form" method = "POST" action="{{ url('/password/email') }}"> 
			                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
			                    
			                    <div class="input-group margin-bottom-sm">
			                        <span class="input-group-addon"><i class="fa fa-envelope-o fa-fw"></i></span>
			                        <input class="form-control" type="text" placeholder="Email address" value="{{ old('email') }}">
			                    </div>
			                
			                    <div class = "modal-footer">
			                    	<a class = "btn btn-default" href="{{ url('/auth/login') }}">Close</a>
			                    	<a class = "btn btn-primary">Send</a>

			                	</div>
			                </form>
		                </div>

		                

		            </div>
		        </div>	
			</div>
		</div>		



	<!--


			<div class="container">
			<div class="row">
				
					<div class="panel panel-info">
						<div class="panel-heading" ><h3 id = "matha"> Portfolio HUB</h3></div>
						<div class="panel-body">

							@if (session('status'))
								<div class="alert alert-success">
									{{ session('status') }}
								</div>
							@endif

							@if (count($errors) > 0)
								<div class="alert alert-danger">
									<strong>Whoops!</strong> There were some problems with your email or password.<br><br>
									<ul>
										@foreach ($errors->all() as $error)
											<li>{{ $error }}</li>
										@endforeach
									</ul>
								</div>
							@endif

							<form class="form-horizontal" role="form" method="POST" action="{{ url('/password/email') }}">
								<input type="hidden" name="_token" value="{{ csrf_token() }}">

								<div class="form-group">
									<label class="col-md-4 control-label">E-Mail Address</label>
									<div class="col-md-6">
										<input type="email" class="form-control" name="email" value="{{ old('email') }}">
									</div>
								</div>

								<div class="form-group">
									<div class="col-md-6 col-md-offset-4">
										<button type="submit" class="btn btn-primary">
											Send Password Reset Link
										</button>
									</div>
								</div>
							</form>
						</div>
					</div>
			
			</div>
		</div>
		 -->

	</body>
</html>