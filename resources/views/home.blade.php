@extends('app')

@section('content')

<div class="container">
    <div class="page-header"><h2>Services</h2></div>
</div>


<div class="container" style="min-height: 400px;">
	<div class="row">

            <div class="col-sm-4 col-md-3">
          <div class="list-group">
            <a href="#" class="list-group-item active">
                <i class="fa fa-home"></i> General
            </a>
            <a href="#" class="list-group-item">
                <i class="fa fa-user"></i> My account
            </a>
            <a href="#" class="list-group-item">
              Billing Information
            </a>
            <a href="#" class="list-group-item">
               Security Questions
            </a>
            <a href="#" class="list-group-item">
               Troubleshooting
            </a>
            <a href="#" class="list-group-item">
               Miscellaneous
            </a>
          </div>
        </div>
            
		<div class="col-md-9">
			<div class="panel panel-primary">
				<div class="panel-heading">Home</div>

				<div class="panel-body">
					You are logged in!
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
