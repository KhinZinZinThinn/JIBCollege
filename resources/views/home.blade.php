@extends('layouts.app')
@section('title') Post Upload
@stop
@section('content')
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-8 offset-2">
                @if(Session('info')) <div class="alert alert-success">{{Session('info')}}</div> @endif
                <div class="card">
                    <div class="card-header" style="background: #fdfd96;">Upload New Post</div>
                    <div class="card-body" style="background: #fdfd96;">
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
        </div>
    </div>

@stop
