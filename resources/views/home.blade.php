@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Users List') }}
                    <a href="/post" class="btn btn-sm btn-outline-success pull-right">View All Posts</a>
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <table class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Full Name</th>
                                <th>Email</th>
                                <th>Age</th>
                                <th>Bio</th>
                                <th>Image</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            
                                @foreach ($users as $user)
                                    <tr>
                                        <td>{{ $user['id'] }}</td>
                                        <td>{{ $user['name'] }}</td>
                                        <td>{{ $user['email'] }}</td>
                                        <td>{{ $user['age'] }}</td>
                                        <td>{{ $user['bio'] }}</td>
                                        <td><img src="{{ asset('images/'.$user['image']) }}" height="34px" width="84px" alt="no img"> </td>

                                        <td>
                                            <div class="btn-group">
                                            <a href="/user/{{ $user->id }}/edit" class="btn btn-outline-info m-1">
                                                <i class="fa fa-pencil"></i>
                                            </a>
                                            <form action="/user/{{ $user->id }}/destroy" method="POST" >
                                                @method('DELETE')
                                                @csrf
                                                
                                                <button class="btn btn-outline-danger m-1"><i class="fa fa-trash"></i>&nbsp;Del
                                                </button>
                                            </form>
                                        </div>
                                        </td>
                                    </tr>
                                @endforeach
                            
                    
                        </tbody>
                    </table>
                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
