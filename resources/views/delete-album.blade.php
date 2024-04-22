@extends('layouts.app')

@section('content')

<h2 class="text-center">Delete Album</h2>
<div class="card-body">
    @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
    @endif
</div>
<table class="table " style="width: 100%">
  <thead>
    <tr>
      <th>No.</th>
      <th>Name</th>
      <th>Action</th>
    </tr>
  </thead>
  <tbody >
    @foreach ($album as $item)
    <tr>
      <td >
        {{ $loop->iteration}}
      </td>
      <td >
        {{ $item->nama}}
      </td>
      <td >
       
        <form action="/deletes/{{$item->id}}" method="post" >
 
          @csrf

                <input type="hidden" class="form-control" value="{{$item->id}}" placeholder="Nama Kategori">
                @csrf
                                      
          
            <button type="submit" class="btn btn-danger ">Delete</button>
          </form>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>



@endsection