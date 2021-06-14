@extends ('template.Admin.base')

@section('content')
<h2>

</h2>
<div class="container" style="margin-bottom: 50px;">
	<div class="row">
		<a href="{{ url('Admin/beranda/create') }}">
			<button class="btn btn-primary"><i class="tim-icons icon-simple-add"></i> Tambah Postingan </button>
		</a>
	</div>
</div>
@foreach($list_post as $post)
<div class="container">
	<div class="row">	
		@foreach($list_post as $post)
		<div class="card">
			<div class="col-md-12">
				<div class="col-md-3">
					<div class="btn btn-group">
						<div class="btn" style="margin-left: -45px;">
						<a href="{{ url('Admin/beranda', $post->id) }}/edit" class="btn btn-warning"><i class="fa fa-edit"></i></a>
						</div>
						<div class="btn" style="margin-right: -45px;">
						@include ('template.utils.delete', ['url' => url('Admin/beranda', $post->id)])
						</div>
					</div>
				</div>
				<div class="row">
				<div class="col-md-8">
					<div class="card-body">
						<h4>{{($post->nama)}}</h4>
						<p>{{($post->deskripsi)}}</p>
					</div>
				</div>
				<div class="col-md-4">
					<div class="card-body">
						<img style="width: 100%;" src="{{url("public/$post->foto")}}" class="img-fluid">
					</div>
				</div>
				</div>
			</div>
		</div>
		@endforeach
	</div>
</div>
<div class="container">
	<div class="row">
	</div>
</div>
@endforeach

@endsection