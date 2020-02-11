@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h3>Modification du contact <b>{{$contact->name}}</b></h3>
                <form action="{{route('contacts.update', $contact->id)}}" method="post">
                @csrf
                @method('PUT')
                    <!-- TODO mise en place de la form pour modifier un contact -->
                    <div class="form-group">
                        <label class="col-md-4 text-right">Name</label>
                        <div class="col-md-8">
                           <input type="text" name="name" value="{{$contact->name}}" class="form-control input-lg"/> 
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-4 text-right">Telephone Number</label>
                        <div class="col-md-8">
                            <input type="tel" name="tel" value="{{$contact->tel}}" class="form-control input-lg"/>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-4 text-right">Email</label>
                        <div class="col-md-8">
                        <input type="email" name="email" value="{{$contact->email}}" class="form-control input-lg"/>
                        </div>
                    </div>

                    <div class="form-group text-center">
                        <input type="submit" name="edit" class="btn btn-primary input-lg" value="Edit"/> 
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
