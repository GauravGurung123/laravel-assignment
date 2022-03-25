@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Posts List') }}
                    @can('create-post')
                    <a href="/post/create" class="btn btn-sm btn-outline-success pull-right">New Post</a>
                    @endcan
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
                                <th>Title</th>
                                <th>Description</th>
                                <th>Status</th>
                                <th>Image</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            
                            {{-- @dd(auth()->user()->getPermissionsViaRoles()) --}}
                                @foreach ($posts as $post)
                                    <tr>
                                        <td>{{ $post['id'] }}</td>
                                        <td>{{ $post['title'] }}</td>
                                        <td>{{ $post['description'] }}</td>
                                        <td>{{ $post['status'] }}</td>
                                        <td><img src="{{ asset('images/'.$post['image']) }}" height="34px" width="84px" alt="no img"> </td>
                                        <td>
                                            <div class="btn-group">
                                                @can('edit-post')
                                            <a href="/post/{{ $post->id }}/edit" class="btn btn-outline-info m-1">
                                                <i class="fa fa-pencil"></i>
                                            </a>
                                            @endcan
                                            <form action="/post/{{ $post->id }}/destroy" method="POST" >
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
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
