@extends('admin.layouts.app')
@section('title')
  profile  
@endsection
@section('content')
<h4>Edit Form</h4>
<form action="{{ route('admin.profile.update',$profileform->id) }}" method="POST">
    @method('PATCH') 
    @csrf

     <div class="form-group">
         <label for="form_name"> {{ $profileform->form_name }}</label>
         <input type="text" class="form-control" value="{{ $profileform->form_name }}" name="form_name" id="form_name"  placeholder="Enter name">
     </div>
     <div class="form-group">
     <label for="form_type">Type</label>
     <select class="form-group" id="form_type" name="form_type">
        @dump($profileform->form_type)
        <option value="text"  {{($profileform->form_type =='text') ? 'selected' : ''}}  >Text</option>
         <option value="number" {{($profileform->form_type =='number') ? 'selected' : ''}}>Number</option>
         <option value="email"  {{($profileform->form_type =='email') ? 'selected' : ''}}>Email</option>
         <option value="textarea" {{($profileform->form_type =='textarea') ? 'selected' : ''}}>textarea</option>
     </select>
     </div>
     <div class="form-check">
         <input class="form-check-input" type="checkbox"
         {{($profileform->form_required==1) ?'checked':""  }}
         name="form_required" value="1" id="form_required">
         <label   class="form-check-label"for="validation">Required  </label>
     </div>
     <button type="submit" class="btn btn-primary">Update</button>
   
 </div>
</form>



   

@endsection
@section('script')
<script>

</script>

@endsection