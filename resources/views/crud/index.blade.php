@extends('layouts.app')
@section('title')
<title>{{ $title }}</title>
@endsection
@section('content')
<div class="container">
	<div class="row justify-content-center">
		<div class="col-md-8">
			<div class="card">
				<div class="card-header">{{$title}}</div>
				<div class="card-body">
					<a href="{{ route('crud.create') }}" class="btn btn-success btn-sm">Tambah Baru</a>
					@if ($message = Session::get('sukses'))
					<div class="alert alert-success">
						<p>{{ $message }}</p>
					</div>
					@endif
					<table class="table">
						<thead class="thead-dark">
							<tr>
								<th scope="col">#</th>
								<th scope="col">Judul</th>
								<th scope="col">Deskripsi</th>
								<th scope="col">Gambar</th>
								<th scope="col">Opsi</th>
							</tr>
						</thead>
						<tbody>
							@foreach($data as $dt)
							<tr>
								<th scope="row">{{ ++$i }}</th>
								<td>{{$dt->judul}}</td>
								<td>{{$dt->deskripsi}}</td>
								<td><img src="{{ asset($dt->photo) }}" style="width: 50px"></td>
								<td>
									<form action="{{ route('crud.destroy',$dt->id) }}" method="POST">
										<a href="{{ route('crud.show',$dt->id) }}" class="btn btn-success btn-sm">Lihat</a>
										<a href="{{ route('crud.edit',$dt->id) }}" class="btn btn-warning btn-sm">Edit</a>
										@csrf
										@method('DELETE')
										<button type="submit" class="btn btn-danger btn-sm">Hapus</button>
									</form>
								</td>
							</tr>
							@endforeach
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection