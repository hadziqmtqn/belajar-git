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
					<table>
						<tr>
							<th>Judul</th>
							<td>: {{$data->judul}}</td>
						</tr>
						<tr>
							<th>Deskripsi</th>
							<td>: {{$data->deskripsi}}</td>
						</tr>
					</table>
					<img src="{{asset($data->photo)}}" style="width: 100px">
				</div>
			</div>
		</div>
	</div>
</div>
@endsection