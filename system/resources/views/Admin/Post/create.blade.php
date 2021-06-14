@extends ('template.Admin.base')

@section ('content')
<div class="container-fluid">
	<div class="row">
		<div class="col-md-12 mt-5">
			<div class="card">
				<div class="card-header">
					Data Produk
				</div>
				<div class="card-body">
					<form action="{{ url('Admin/beranda') }}" method="post" enctype="multipart/form-data">
						@csrf

					<div class="form-group">
						<label for="" class="control-label"> Nama </label>
						<input type="text" class="form-control" name="nama">
					</div>
				</div>
				<div class="card-body">
					<div class="form-group">
						<label for="" class="control-label"><i class="tim-icons icon-image-02"></i> Foto </label>
						<input type="file" class="form-control" name="foto" accept="image/*">
					</div>
				</div>
				<div class="card-body">
					<div class="form-group">
						<label for="" class="control-label"> Deskripsi </label>
						<textarea name="deskripsi" id="deskripsi" class="form-control"></textarea>
					</div>
				</div>
				
				<button type="submit" class="btn btn-primary float-right"><i class="fa fa-save"> Simpan </i></button>

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