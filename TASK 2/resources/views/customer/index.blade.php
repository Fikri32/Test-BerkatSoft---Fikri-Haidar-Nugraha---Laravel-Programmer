@extends('layouts/master')

@section('content')
<div class="row">
  <div class="col-md-12 col-sm-12 col-xs-12">
    <div class="x_panel">
      <div class="x_title">
        <h2>List Customer</h2>
        <ul class="nav navbar-right panel_toolbox">
          
        </ul>
        <div class="clearfix"></div>
      </div>
      <div class="x_content">
        <table id="datatable" class="table table-striped table-bordered">
          <thead>
            <tr>
              <th class="text-center">Nama </th>
              <th class="text-center">Alamat</th>
              <th class="text-center">No Handphone</th>
              <th class="text-center">Foto</th>
              <th class="text-center">Action</th>
            </tr>
          </thead>
          <tbody>
            @foreach($customer as $d)
						<tr class="text-center">
							<td>{{ $d->nama }}</td>
							<td>{{ $d->alamat }}</td>
              <td>{{ $d->no_hp }}</td>
              <td><img class="img-rounded"
                style="max-height: 70px; " src="{{url('/build/images/customer/'.$d->foto)}}" alt=""></td>
              <td> 
                <a class="btn btn-success" href="{{route('customer.update',$d->id)}}">Edit</a>
                <a class="btn btn-danger" href="{{route('customer.delete',$d->id)}}">Delete</a>
              </td>
						</tr>
						@endforeach
          </tbody>
        </table>
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