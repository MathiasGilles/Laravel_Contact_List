@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h3>Créer un contact</h3>
                <form action="{{ action('ContactController@store')}}" method="post">

                @csrf
                  
                <div class="form-group">
                <label for="exampleInputEmail1">Name</label>
                <input type="text" class="form-control" id="" aria-describedby="emailHelp" name="name">
                </div>
                @error('name')
                {{$message}}
                @enderror
                <div class="form-group">
                <label for="exampleInputEmail1">Phone number</label>
                <input type="tel" class="form-control" id="" aria-describedby="emailHelp" name="tel">
                </div>
                @error('tel')
                {{$message}}
                @enderror

                <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input type="email" class="form-control" id="" aria-describedby="emailHelp" name="email">
                </div>
                @error('email')
                {{$message}}
                @enderror   
                <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection
