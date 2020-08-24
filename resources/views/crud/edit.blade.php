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
					<form action="{{route('crud.update',$data->id)}}" method="POST" enctype="multipart/form-data">
						{{ csrf_field() }}
						@method('PATCH')
						<div class="form-group row">
							<label for="inputEmail3" class="col-sm-2 col-form-label">Judul</label>
							<div class="col-sm-10">
								<input type="text" name="judul" class="form-control" id="inputEmail3" value="{{$data->judul}}">
							</div>
						</div>
						<div class="form-group row">
							<label for="inputPassword3" class="col-sm-2 col-form-label">Deskripsi</label>
							<div class="col-sm-10">
								<textarea type="text" name="deskripsi" class="form-control" id="inputPassword3">{{$data->deskripsi}}</textarea>
							</div>
						</div>
						<div class="form-group row">
							<label class="col-sm-2 col-form-label">Upload Photo</label>
							<div class="col-sm-10">
								<input type="file" name="photo" class="form-control-file" id="exampleFormControlFile1">
							</div>
						</div>
						<div class="form-group row">
							<div class="col-sm-10">
								<button type="submit" class="btn btn-primary">Simpan</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection