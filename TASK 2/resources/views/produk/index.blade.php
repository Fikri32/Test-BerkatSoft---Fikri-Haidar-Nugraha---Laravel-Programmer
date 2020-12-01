@extends('layouts/master')

@section('content')
<div class="row">
  <div class="col-md-12 col-sm-12 col-xs-12">
    <div class="x_panel">
      <div class="x_title">
        <h2>List Produk</h2>
        <ul class="nav navbar-right panel_toolbox">
          
        </ul>
        <div class="clearfix"></div>
      </div>
      <div class="x_content">
        <table id="datatable" class="table table-striped table-bordered">
          <thead>
            <tr>
              <th class="text-center">Nama </th>
              <th class="text-center">Harga</th>
              <th class="text-center">Gambar</th>
              <th class="text-center">Action</th>
            </tr>
          </thead>
          <tbody>
            @foreach($produk as $d)
						<tr class="text-center">
							<td>{{ $d->nama }}</td>
							<td>@currency($d->harga)</td>
              <td><img class="img-rounded"
                style="max-height: 70px; " src="{{url('/build/images/produk/'.$d->gambar)}}" alt=""></td>
              <td> 
                <a class="btn btn-success" href="{{route('produk.update',$d->id)}}">Edit</a>
                <a class="btn btn-danger" href="{{route('produk.delete',$d->id)}}">Delete</a>
              </td>
						</tr>
						@endforeach
          </tbody>
      </div>
    </div>
  </div>
</div>  
<script>
  $(document).ready(function() {
  $('#datatable').DataTable();
} );
</script>
@endsection