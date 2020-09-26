@extends('contact')

@section('main')
<div class="row">
    <div class="col-md-8 offset-sm-2">
    <h2 class="display-6">Edit</h2>
</div>
</div>
<div class="row"> 
    <div class="col-md-8 offset-sm-2">
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
   @endif

       <form action="{{ url("/contacts/{$contact->id}") }}" method="POST">            
        @method('PATCH')
        @csrf
           <div class="form-group">
               <label for="full_name">Full Name :</label>
               {{-- <input value="{{ $contact->nama }}" class="form-control" type="text" name="full_name"> --}}
               <input value="{{ old('full_name', $contact->nama)}}" class="form-control" type="text" name="full_name">

           </div>
           <div class="form-group">
            <label for="phone">Phone :</label>
            <input value="{{ old('phone', $contact->phone )}}" class="form-control" type="text" name="phone">
        </div>
        
        <div class="form-group">
            <label for="email">Email :</label>
            <input value="{{ old('email', $contact->email) }}" class="form-control" type="text" name="email">
        </div>
        <div class="form-group">
            <label for="alamat">Alamat :</label>
           <textarea class="form-control" name="alamat" >{{ old('alamat', $contact->alamat)}}</textarea>
        </div>
        <button type="submit" class="btn btn-success">Save</button>
       </form>
       <a class="btn btn-warning mt-3" href="{{ url('/') }}">Cancel</a>
    </div>
</div>
@endsection