@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                   

                </div>

                @if($profile_length==0)    
              <div class="submitform">
                <form action="{{ route('profile_store') }}" method="POST">
                  @csrf  
                  @foreach ($Profileforms as $profileform)
                  <input type="hidden" name="form_required[]" value="{{$profileform->form_required  }}">
                      <div class="form-group">
                        <label for="{{ $profileform->form_name }}">{{ $profileform->form_name }}</label>
                        <input type="{{  $profileform->form_type }}" name="form_name[]" class="form-control">
                      </div>
                    @endforeach
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </form>
              </div>
              @endif
            </div>
        </div>
    </div>
</div>
@endsection
@section('script')
<script>
  
   @if (Session::has('success'))
            Swal.fire(
                  'Success!',
                  "{{ Session::get('success') }}",
                  'success'
                )
    @endif 
</script>
    
@endsection
