@extends ('template.Admin.base')

@section ('content')
<div class="container-fluid">
	<div class="row mt-5">
		<div class="col-md-4">
			<div class="card">
				<div class="card-body">
					<img style="width: 100%;" src="{{url("public/$post->foto")}}" class="img-fluid">
				</div>
			</div>
		</div>
		<div class="col-md-8">
			<div class="card">
				<div class="card-header">
					Edit Data Produk
				</div>
				<div class="card-body">
					<form action="{{ url('Admin/beranda', $post->id) }}" method="post" enctype="multipart/form-data">
						@csrf
					@method("PUT")
					<div class="form-group">
						<label for="" class="control-label"> Nama </label>
						<input type="text" class="form-control" value="{{$post->nama}}" name="nama">
					</div>
				</div>
				<div class="row">
					<div class="col-md-3">
						<div class="card-body">
							<div class="form-group">
								<label for="" class="control-label"> Foto </label>
								<input type="file" class="form-control" name="foto" accept="image/*">
							</div>
						</div>
					</div>
				</div>
				<div class="card-body">
					<div class="form-group">
						<label for="" class="control-label"> Deskripsi </label>
						<textarea name="deskripsi" id="deskripsi" class="form-control">{{$post->deskripsi}}</textarea>
					</div>
				</div>
				
				<button class="btn btn-primary float-right"><i class="fa fa-save"> Simpan </i></button>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection

@push('style')
	<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
@endpush

@push('script')
	<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
	<script>
		$(document).ready(function() {
  		$('#deskripsi').summernote();
		});
	</script>
@endpush