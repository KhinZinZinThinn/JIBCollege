@extends('layouts.app')
@section('title') Post Upload
@stop
@section('content')
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-8">
                @if(Session('info')) <div class="alert alert-success">{{Session('info')}}</div> @endif
                <div class="card">
                    <div class="card-header">Upload New Post</div>
                    <div class="card-body">
                        <form enctype="multipart/form-data" method="post" action="{{route('new.uploadPost')}}">
                            <div class="form-group">
                                <label for="post_title">Post Title</label>
                                <input type="text" name="post_title" id="post_title" class="form-control @if($errors->has('post_title'))is-invalid @endif">
                                @if($errors->has('post_title'))<span class="invalid-feedback">{{$errors->first('post_title')  }} </span> @endif
                            </div>
                            <div class="form-group">
                                <label for="image">Upload Picture</label>
                                <input type="file" name="image" id="image" class="form-control @if($errors->has('image'))is-invalid @endif" >
                                @if($errors->has('image')) <span class="invalid-feedback">{{$errors->first('image')}}</span> @endif
                            </div>
                            <div class="form-group">
                                <label for="post_content">Post content</label>
                                <textarea name="post_content" id="post_content" class="form-control @if($errors->has('post_content'))is-invalid @endif"></textarea>
                                @if($errors->has('post_content'))<span class="invalid-feedback">{{$errors->first('post_content')  }} </span> @endif
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary btn-lg">Upload</button>
                            </div>

                            @csrf
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                @if(Session('info')) <div class="alert alert-success">{{Session('info')}}</div> @endif
                <div class="card shadow">
                    <div class="card-header"> <i class="fas fa-list-alt"></i> Uploaded Posts</div>
                    <div class="card-body table-responsive">
                        <table class="table">
                            <tr>
                                <td>ID</td>
                                <td>Post Title</td>
                                <td>Created Date</td>
                                <td>Actions</td>
                            </tr>
                            @foreach($jnews as $jnew)
                                <tr>
                                    <td>{{$jnew->id}}</td>
                                    <td>{{$jnew->title}}</td>
                                    <td>{{$jnew->created_at->diffForHumans()}}</td>
                                    <td>
                                        <a href="#" data-toggle="modal" data-target="#e{{$jnew->id}}"><i class="fa fa-edit"></i> </a>

                                        <!-- Modal -->
                                        <div class="modal fade" id="e{{$jnew->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <form method="post" action="{{route('update.category')}}">
                                                        <input type="hidden" name="id" value="{{$jnew->id}}">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalLabel">Edit {{$jnew->title}}</h5>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <div class="form-group">
                                                                <label for="title">Post Title</label>
                                                                <input value="{{$jnew->title}}" type="text" name="title" class="form-control">
                                                            </div>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                            <button type="submit" class="btn btn-primary">Save changes</button>
                                                        </div>
                                                        @csrf
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                        <a href="{{route('remove.uploadPost',['id'=>$jnew->id])}}" class="text-danger"><i class="fa fa-trash"></i></a>
                                    </td>
                                </tr>
                            @endforeach
                        </table>
                        {{$jnew->links()}}

                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection