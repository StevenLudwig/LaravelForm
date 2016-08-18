<!-- resources/views/index.blade.php -->

@extends('layouts.app')

@section('content')
<div class="slide">
    <div id="carousel-principal" class="carousel slide" data-ride="carousel">
     
        <ol class="carousel-indicators">
            <li data-target="#carousel-principal" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-principal" data-slide-to="1"></li>
            <li data-target="#carousel-principal" data-slide-to="2"></li>
            <li data-target="#carousel-principal" data-slide-to="3"></li>
            <li data-target="#carousel-principal" data-slide-to="4"></li>
        </ol>

        <div class="img-rounded carousel-inner" role="listbox">

            <div class="item active">
               	<img class="img-rounded" src="{{URL::asset('images/slides/slide.svg')}}">
            </div>
            <div class="item">
                <img class="img-rounded" src="{{URL::asset('images/slides/slide_1.svg')}}">
            </div>
            <div class="item">
                <img class="img-rounded" src="{{URL::asset('images/slides/slide_2.svg')}}">
            </div>
            <div class="item">
                <img class="img-rounded" src="{{URL::asset('images/slides/slide_3.svg')}}">
            </div>
            <div class="item">
                <img class="img-rounded" src="{{URL::asset('images/slides/slide_4.svg')}}">
            </div>
        </div>
    </div>    
</div>
<br>
<div class="container back">
  	<div class="col-md-6 col-lg-6">
    	<h1 class="one">Welcome</h1>
    	<p>
			Welcome to the [CUSTOMER] Marketing 
			<br>Operations Hub,your destination to learn about,
			<br>request, and manage webinar and marketing
			<br>automation campaings.
    	</p>
    </div>
    <div class="col-md-6 col-lg-6">

    	<div class="hidden-md hidden-lg" style="background-color: white;">
			<!-- Nav tabs -->
			<ul class="nav nav-tabs" role="tablist">
		    	<li role="presentation" class="active">
		    		<a href="#login" aria-controls="login" role="tab" data-toggle="tab">Log In</a>			   	
		    	</li>
				<li role="presentation">
				   	<a href="#request" aria-controls="request" role="tab" data-toggle="tab">Request Access</a>
				</li>
			</ul>

				<!-- Tab panes -->
				<div class="tab-content">
				   	<div role="tabpanel" class="tab-pane active" id="login">
					   	<form>
						  	<div class="form-group">
								<input type="email" class="form-control sin" name="email" placeholder="Email" autocomplete="off">
							</div>
						  	<div class="form-group">
						    	<input type="password" class="form-control sin" name="pass" placeholder="Password" autocomplete="off">
							</div>
						  
						  	<button type="submit" class="btn btn-success btn-block">Submit</button>
						</form>
					</div>
				    <div role="tabpanel" class="tab-pane" id="request">
				    	<form class="form-horizontal">
							<div class="form-group">
								<input type="text" class="form-control sin" name="first_name" placeholder="First name" autocomplete="off">
						  	</div>
							<div class="form-group">
								<input type="text" class="form-control sin" name="last_name" placeholder="Last name" autocomplete="off">
							</div>
							<div class="form-group">
								<input type="text" class="form-control sin" name="title" placeholder="Title" autocomplete="off">
							</div>
							<div class="form-group">
								<input type="text" class="form-control sin" name="company" placeholder="Company" autocomplete="off">
							</div>
							<div class="form-group">
								<input type="email" class="form-control sin" placeholder="Email" autocomplete="off"><br>
								<select class="form-control sin" name="role" style="width: 410px;">
				               		<option value="" selected="selected"> Role </option>
				                	<option value="Direccion General">CEO</option>
				               		<option value="Soporte Tecnico">CTO</option>
				                	<option value="Departamento de Ventas">Student</option>
				                </select>
							</div><br>
				
						 	<button type="submit" class="btn btn-success btn-block">Submit</button>
						</form>
				    </div>
				</div>
			</div>

    	<div class="form-div hidden-xs hidden-sm">
    		<div>
				<!-- Nav tabs -->
				<ul class="nav nav-tabs" role="tablist">
				    <li role="presentation" class="active">
				    	<a href="#home" aria-controls="home" role="tab" data-toggle="tab">Log In</a>
				    </li>
				    <li role="presentation">
				    	<a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Request Access</a>
				    </li>
				</ul>

			  	<!-- Tab panes -->
				<div class="tab-content">
				    <!-- Tab panes -->
					<div class="tab-content">
						<div role="tabpanel" class="tab-pane active" id="home">
							@include('common.errors')
							<div class='alert alert-danger alert-dismissible' role='alert' {{ $alerta or 'hidden'}}>
								<button type='button' class='close' data-dismiss='alert' aria-label='Close'>
									<span aria-hidden='true'>&times;</span>
								</button>
								<strong>Password or email invalid!</strong>
							</div>

							<form class="form-inline" method="post" action="{{ url('form') }}">{{ csrf_field() }}
								  	<div class="form-group">
								    	<input type="email" class="form-control sin" name="email" placeholder="Email" autocomplete="off">
								  	</div>
								  	<div class="form-group">
								    	<input type="password" class="form-control sin" name="pass" placeholder="Password" autocomplete="off">
								  	</div><hr>								  
								  	<button type="submit" class="btn btn-success btn-block">Login</button>
								</form>
							</div>

						    <div role="tabpanel" class="tab-pane" id="profile">
						    	@include('common.errors')
						    	<form class="form-inline" method="post" action="{{ url('users') }}">
						    		{{ csrf_field() }}
								  	<div class="form-group">
								    	<input type="text" class="form-control sin" name="first_name" placeholder="First name" autocomplete="off" id="first-name" required>
								  	</div>
								  	<div class="form-group">
								    	<input type="text" class="form-control sin" name="last_name" placeholder="Last name" autocomplete="off" id="last-name" required>
								  	</div>
								  	<div class="form-group">
								    	<input type="text" class="form-control sin" name="title" placeholder="Title" autocomplete="off" id="title" required>
								  	</div>
								  	<div class="form-group">
								    	<input type="text" class="form-control sin" name="company" placeholder="Company" autocomplete="off" id="company" required>
								  	</div>
								  	<div>
								    	<input type="email" class="form-control sin" placeholder="Email" name="email" autocomplete="off" size="46" id="email" required><br>
								    	<select class="form-control sin" name="role" style="width: 410px;" required>
				                            <option value="" selected="selected"> Role </option>
				                            <option value="Direccion General">CEO</option>
				                            <option value="Soporte Tecnico">CTO</option>
				                            <option value="Departamento de Ventas">Student</option>
				                        </select>
								    </div><br>
				
								  	<button type="submit" class="btn btn-success btn-block">Submit</button>
								</form>
						    </div>

						</div>
				  	</div>

				</div>
    		</div>

    	</div>
    </div><br>
   
@endsection