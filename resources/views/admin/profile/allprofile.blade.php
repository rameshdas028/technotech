@extends('admin.layouts.app')
@section('title')
all profile
@endsection
@section('content')
<a href="{{ route('admin.all_profile.export',"xlsx") }}" class="btn btn-success">Export to .xslx</a>
<a href="{{ route('admin.all_profile.export',"xls") }}" class="btn btn-primary">Export to .xls</a>
<table class="table">
    <thead class="thead-dark">
      <tr>

      @foreach($data['profileFields'] as $profileField )
        <th scope="col">{{ $profileField->form_name }}</th>
      @endforeach  
      </tr>
    </thead>
    <tbody>
        <tr>       
            @foreach ($data['profileAll'] as $profile)
            <tr>  
            @foreach ($profile->profileforms as $item)
                <td>{{ $item->form_name }}</td>
            @endforeach
           </tr>
            {{-- <td>{{ $profile->$profileforms</td> --}}
         @endforeach

      </tr>

    </td>
  </table>
@endsection
@section('script')
<script>
 
</script>

@endsection