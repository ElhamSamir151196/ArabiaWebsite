@extends('Dashboard/Dashboard_main')

@section('content')  



{{--
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif--}}
      @if(session()->has('success'))
                <div class="alert alert-warning alert-dismissible fade show mt-3" role="alert">
                    <b>{{session('success')}}</b>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

         @endif


<div class="container">
        <div class="row centered-form">
       
        	<div class="panel panel-default">
        		<div class="panel-heading">
			    		<h3 class="panel-title">Please sign up for Arbia <small>It's free!</small></h3>
			 			</div>
			 			<div class="panel-body">
			    		<form action="{{url('/create_user')}}" method="post" >
						@csrf
			    			<div class="row">
			    				<div class="col-xs-6 col-sm-6 col-md-6">
			    					<div class="form-group">
			                		<input type="text" name="first_name" id="first_name" class="form-control input-sm" placeholder="First Name">
			    					</div>
			    				</div>

								@if ($errors->has('first_name'))
									<div class="alert alert-danger">
										<ul>
											@foreach ($errors->get('first_name') as $error)
												<li>{{ $error }}</li>
											@endforeach
										</ul>
									</div>
								@endif

			    				<div class="col-xs-6 col-sm-6 col-md-6">
			    					<div class="form-group">
			    						<input type="text" name="last_name" id="last_name" class="form-control input-sm" placeholder="Last Name">
			    					</div>
			    				</div>
								@if ($errors->has('last_name'))
									<div class="alert alert-danger">
										<ul>
											@foreach ($errors->get('last_name') as $error)
												<li>{{ $error }}</li>
											@endforeach
										</ul>
									</div>
								@endif
			    			</div>

							

			    			<div class="form-group">
			    				<input type="email" name="email" id="email" class="form-control input-sm" placeholder="Email Address">
			    			</div>

							@if ($errors->has('email'))
								<div class="alert alert-danger">
									<ul>
										@foreach ($errors->get('email') as $error)
											<li>{{ $error }}</li>
										@endforeach
									</ul>
								</div>
							@endif

			    			<div class="form-group">
			    				<input type="text" name="phone" id="phone" class="form-control input-sm" placeholder="Phone">
			    			</div>

							@if ($errors->has('phone'))
								<div class="alert alert-danger">
									<ul>
										@foreach ($errors->get('phone') as $error)
											<li>{{ $error }}</li>
										@endforeach
									</ul>
								</div>
							@endif


			    			<div class="form-group">
			    				<input type="text" name="address" id="address" class="form-control input-sm" placeholder="Address">
			    			</div>

							@if ($errors->has('address'))
								<div class="alert alert-danger">
									<ul>
										@foreach ($errors->get('address') as $error)
											<li>{{ $error }}</li>
										@endforeach
									</ul>
								</div>
							@endif

			    			<div class="row">
			    				<div class="col-xs-6 col-sm-6 col-md-6">
			    					<div class="form-group">
			    						<input type="password" name="password" id="password" class="form-control input-sm" placeholder="Password">
			    					</div>
			    				</div>

								@if ($errors->has('password'))
									<div class="alert alert-danger">
										<ul>
											@foreach ($errors->get('password') as $error)
												<li>{{ $error }}</li>
											@endforeach
										</ul>
									</div>
								@endif

			    				<div class="col-xs-6 col-sm-6 col-md-6">
			    					<div class="form-group">
			    						<input type="password" name="password_confirmation" id="password_confirmation" class="form-control input-sm" placeholder="Confirm Password">
			    					</div>
			    				</div>

								@if ($errors->has('password_confirmation'))
									<div class="alert alert-danger">
										<ul>
											@foreach ($errors->get('password_confirmation') as $error)
												<li>{{ $error }}</li>
											@endforeach
										</ul>
									</div>
								@endif
			    			</div>

			    			
							<div class="form-check">
							  <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1" value="flexRadioDefault1">
							  <label class="form-check-label" for="flexRadioDefault1">
							    Company Owner
							  </label>
							</div>
							<div class="form-check">
							  <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" value="flexRadioDefault2" checked>
							  <label class="form-check-label" for="flexRadioDefault2">
							    Admin
							  </label>
							</div>

							
			    			
							
			    			<input type="submit" value="Register" class="btn btn-info btn-block">
			    		</form>
			    	</div>
	    		
    		</div>
    	</div>
    </div>

@endsection  