<form action="{{$url}}" method="post" class="btn-group"onclick="return confirm('yakin ingin menghapus data ini?')">
	@csrf
	@method("delete")
	<button class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></button>
</form>