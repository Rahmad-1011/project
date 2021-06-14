@extends ('template.Admin.base')

@section('content')

<div class="col-md-12">
            <div class="card ">
              <div class="card-header">
                <h4 class="card-title"> Tabel User </h4>
                <a href="{{ url('Admin/user/create') }}">
					<button class="btn btn-primary" style="float: right;"><i class="tim-icons icon-simple-add"></i> Tambah Data </button>
				</a>
              </div>
              <div class="card-body">
					<table class="table">
						<thead>
							<th> No </th>
							<th width="250px"> Aksi </th>
							<th> Nama </th>
							<th> Username </th>
							<th> Postingan </th>
							<th> Email </th>
						</thead>
						<tbody>
							@foreach($list_user as $user)
							<tr>
								<td>{{$loop->iteration}}</td>
								<td>
									<div class="btn btn-group">

										<a href="{{ url('Admin/user', $user->id) }}" class="btn btn-primary"><i class="fa fa-info" style="width: 1px;"></i></a>

										<a href="{{ url('Admin/user', $user->id) }}/edit" class="btn btn-warning"><i class="fa fa-edit" style="width: 1px;"></i></a>

										@include ('template.utils.delete', ['url' => url('Admin/user', $user->id)])
									</div>	

								</td>
								<td>{{$user->nama}}</td>
								<td>{{$user->username}}</td>
								<td>{{$user->postingan_count}}</td>
								<td>{{$user->email}}</td>
							</tr>
							@endforeach
						</tbody>
					</table>
				</div>
            </div>
          </div>

@endsection