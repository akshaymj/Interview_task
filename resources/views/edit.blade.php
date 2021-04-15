@extends('parent')

@section('main')
            
@if ($errors->any())
  <div class="alert alert-danger">
    <ul>
      @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
      @endforeach
    </ul>
  </div>
@endif
<div align="right">
    <a href="{{ route('employee.index') }}" class="btn btn-default">Back</a>
</div>
<br />
<form method="post" action="{{ route('employee.update', $data->id) }}" enctype="multipart/form-data">
    @csrf
    @method('PATCH')
    <div class="form-group">
        <label class="col-md-4 text-right">Name</label>
           <div class="col-md-8">
              <input type="text" name="name" value="{{ $data->name }}" class="form-control input-lg" />
           </div>
    </div>

    <br />
    <br />
    <br />

    <div class="form-group">
      <label class="col-md-4 text-right">Enter Salary</label>
        <div class="col-md-8">
            <input type="text" name="salary" value="{{ $data->salary }}" class="form-control input-lg" />
        </div>
    </div>
    <br />
    <br />
    <br />

    <div class="form-group">
      <label class="col-md-4 text-right">Select Profile Image</label>
        <div class="col-md-8">
          <input type="file" name="image" />
          <img src="{{ URL::to('/') }}/images/{{ $data->image }}" class="img-thumbnail" width="100" />
          <input type="hidden" name="hidden_image" value="{{ $data->image }}" />
        </div>
    </div>
          <br /><br /><br />

    <div class="form-group text-center">
      <input type="submit" name="edit" class="btn btn-primary input-lg" value="Edit" />
    </div>
</form>

@endsection
