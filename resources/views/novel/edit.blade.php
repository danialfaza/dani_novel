@extends('layout.master')


@section('content')
<div class="main">
		<div class="main-content">
			<div class="caontainer-fluid">
				<div class="row">
					<div class="col-md-12">
						<div class="panel">
				<div class="panel-heading">
					<h3 class="panel-title">Inputs</h3>
				</div>
				<div class="panel-body">
					<form action="/novel/{{$novel->id}}/update" method="POST" enctype="multipart/form-data">
					       	{{csrf_field()}}

								  <div class="form-group">
								    <label for="exampleInputEmail1">Judul Novel</label>
								    <input name="judul" type="text" class="form-control" id="exampleInputEmail1" placeholder="Judul" value="{{$novel->judul}}">
								  </div>

								  <div class="form-group">
								    <label for="exampleInputPassword1">Penerbit</label>
								    <input name="penerbit" type="text" class="form-control" id="exampleInputPassword1" placeholder="Penerbit" value="{{$novel->penerbit}}">
								  </div>

								   <div class="form-group">
								    <label for="exampleInputPassword1">Penulis</label>
								    <select class="form-control" id="penulis" name="penulis">
		                                <option value="" hidden>Pilih Penulis</option>
		                                @foreach($penulis as $pen)
		                                    <option value="{{ $pen->id }}" {{ ($novel->penulis == $pen->id) ? 'selected' : ''}} >{{ $pen->penulis }}</option>
		                                @endforeach
		                            </select>
								  </div>

								   <div class="form-group">
								    <label for="exampleInputPassword1">Tahun Terbit</label>
								    <input name="thn_terbit" type="text" class="form-control" id="exampleInputPassword1" placeholder="Tahun" value="{{$novel->thn_terbit}}">
								  </div>

								   <div class="form-group">
								    <label for="exampleInputPassword1">Harga</label>
								    <input name="harga" type="text" class="form-control" id="exampleInputPassword1" placeholder="Harga" value="{{$novel->harga}}">
								  </div>

								   <div class="form-group">
								    <label for="exampleInputPassword1">Kategori</label>
								    <input name="kategori" type="text" class="form-control" id="exampleInputPassword1" placeholder="Kategori Novel" value="{{$novel->kategori}}">
								  </div>

								  <div class="form-group">
								    <label for="exampleFormControlTextarea1">Gambar</label>
								    <input type="file" name="gambar" class="form-control">
								  </div>


								   <div class="form-group">
								    <label for="exampleFormControlTextarea1">Sinopsis</label>
								    <textarea name="sinopsis" class="form-control" id="exampleFormControlTextarea1" rows="3" >{{$novel->sinopsis}}</textarea>
								  </div>
								
								  <div class="modal-footer">
					       
					       <button type="submit" class="btn btn-warning btn-lg">Update</button>
					      </div>
								</form>
				</div>
			</div>
					</div>
				</div>
@stop
@section('content1')		
		@if(session('sukses'))
		<div class="alert alert-success" role="alert">
		  {{session('sukses')}}
		</div>
		@endif

		<div class="row">
			<div class="col-lg-12">
			

		</div>
		</div>
	</div>
		<!-- Modal -->
					<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
					  <div class="modal-dialog" role="document">
					    <div class="modal-content">
					      <div class="modal-header">
					        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
					        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
					          <span aria-hidden="true">&times;</span>
					        </button>
					      </div>
					      <div class="modal-body">

					       
					      </div>
					     
					    </div>
					  </div>
					  @endsection
					