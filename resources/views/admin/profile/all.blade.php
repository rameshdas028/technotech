@extends('admin.layouts.app')
@section('title')
  profile  
@endsection
@section('content')
<!--Modal  DynamicForm Start-->
<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalScrollable">
    Add Form +
  </button>

  <div class="raw">
  <table class="table">
    <thead class="thead-dark">
      <tr>
        <th scope="col">Id</th>
        <th scope="col">Name</th>
        <th scope="col">Type</th>
        <th scope="col">Required</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($profileforms as $profileform)
        <tr>       
        <th scope="row">{{ $profileform->id }}</th>
        <td>{{ $profileform->form_name }}</td>
        <td>{{ $profileform->form_type }}</td>
        <td>{{ $profileform->form_required==1?"Yes":"No" }}</td>
        <td>
          <a id="profile_form_edit" class="btn btn-success" href="{{ route('admin.profile.edit',$profileform->id) }}" >Edit</a>
          <form action="{{ route('admin.profile.destroy',$profileform->id) }}" method="POST">
          @csrf
          @method('DELETE')
      <button type="submit"><i class="fa fa-trash" style="color: red"></i></button>
          </form>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
  </div>  
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <!-- Modal -->
  <div class="modal fade" id="exampleModalScrollable" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalScrollableTitle">Add Profile Form</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form action="{{ route('admin.profile.store') }}" method="POST">
           @csrf
            <div class="form-group">
                <label for="form_name"> name</label>
                <input type="text" class="form-control" name="form_name" id="form_name"  placeholder="Enter name">
            </div>
            <div class="form-group">
            <label for="form_type">Type</label>
            <select class="form-group" id="form_type" name="form_type">
                <option value="text">Text</option>
                <option value="number">Number</option>
                <option value="email">Email</option>
                <option value="textarea">textarea</option>
            </select>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="form_required" value="1" id="form_required">
                <label   class="form-check-label"for="validation">Required  </label>
            </div>
          
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary" id="btn_save">Save </button>
        </div>
      </form>
      </div>
    </div>
  </div>
<!--Modal DynamicForm Start-->
@endsection
@section('script')
<script>
    $(document).ready(function(){
        $("#btn_save").click(function(){
          $('#exampleModalScrollable').hide();
        });
        $('#profile_form_edit').click(function(){
          $('#exampleModalScrollable').show();

        });
    });
</script>

@endsection
