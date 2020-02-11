@extends('layouts.app')

@section('content')
<div class="container">

<div class="row">
            <div class="col-md-12">
                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Nom du user</th>
                        <th scope="col">Email</th>
                    </tr>
                    </thead>
                    <tbody>
                    @forelse($users as $user)
                    <tr>
                        <td>{{$user->id}}</td>
                        <td>{{$user->name}}</td>
                        <td>{{$user->email}}</td>
                    </tr>
                    @empty
                    <tr>
                        <td>Il n'y a pas encore de user</td>
                    </tr>
                    @endforelse
                    </tbody>
                </table>
            </div>
        </div>

</div>
@endsection