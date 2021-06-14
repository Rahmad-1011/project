@extends ('template.Admin.base')

@section('content')

<div class="container-fluid">
	<div class="row">
		<div class="col-md-12 mt-5">
			<div class="card">
				<div class="card-header">
					Data User
					<div class="card-body">
						<form action="{{ url('Admin/user') }}" method="post">
							@csrf

						<div class="form-group">
							<label for="" class="control-label"> Nama </label>
							@include('template.utils.errors', ['item'=>'nama'])
							<input type="text" class="form-control" name="nama">
						</div>
						<div class="form-group">
							<label for="" class="control-label"> Username </label>
							@include('template.utils.errors', ['item'=>'username'])
							<input type="text" class="form-control" name="username">
						</div>
						<div class="form-group">
							<label for="" class="control-label"> Email </label>
							@include('template.utils.errors', ['item'=>'email'])
							<input type="email" class="form-control" name="email">
						</div>
						<div class="form-group">
							<label for="" class="control-label"> Password </label>
							<input type="password" class="form-control" name="password">
						</div>
				
							<button class="btn btn-primary float-right"><i class="fa fa-save"> Simpan </i></button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

@endsection
