@extends('parent')

@section('main')

<div>
<a href="{{ url('/employee/create') }}" class="btn btn-primary btn-sm ">Add Records</a>
</div>
    
<table class="table table-bordered table-striped">
 <tr>
  <th width="10%">Image</th>
  <th width="35%">Name</th>
  <th width="35%">Salary</th>
  <th width="30%">Edit</th>
  <th width="30%">Delete</th>
 </tr>
 @foreach($data as $row)
  <tr>
   <td><img src="{{ URL::to('/') }}/images/{{ $row->image }}" class="img-thumbnail" width="75" /></td>
   <td>{{ $row->name }}</td>
   <td>{{ $row->salary }}</td>
   <td><a href="/employee/{{$row->id}}" class="btn btn-primary btn-sm ">Edit</a>
    
   </td>
   <!-- <td><a href="/employee/{{$row->id}}" class="btn btn-danger btn-sm ">Delete</a></td> -->
   <td>
   <form method="post" action="/employee/{{ $row->id }}">
    {{csrf_field()}}
     <input type="hidden" name="_method" value="delete">
    <button type="submit" class="btn btn-danger">DELETE</button>
   </form>
  </tr>
 @endforeach
</table>
{!! $data->links() !!}
@endsection
