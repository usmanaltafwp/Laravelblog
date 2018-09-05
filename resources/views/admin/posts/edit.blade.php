@extends('admin.main')

@section('content')

<div id="page-wrapper">
   <div class="container">
    	<div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Edit Post</div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ url('/admin/post/'.$post['id']) }}" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <input name="_method" type="hidden" value="PATCH"> 
                        <div class="form-group">
                            <label for="title" class="col-md-4 control-label">Title</label>

                            <div class="col-md-6">
                                <input id="title" type="text" class="form-control" name="title" value="{{ $post['title'] }}" required autofocus>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="content" class="col-md-4 control-label">Content</label>

                            <div class="col-md-6">
                                <textarea class="form-control" rows="5" id="content" name="content">{{ $post['content'] }} </textarea> 
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="image" class="col-md-4 control-label">Image</label>
                            <div class="col-md-6">
                                 <input type="file" class="form-control" name="image" id="image">
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <div class="col-md-4">
                            </div>
                            <div class="col-md-6">
                                <img src="{{URL::asset('/public/uploads/'. $post['image'] )}}" alt="profile Pic" height="200" width="200">
                            </div>
                         </div>
                        
                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Edit Post
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
   </div>
</div>

@endsection