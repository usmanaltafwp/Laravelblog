@extends('admin.main')

@section('content')

<div id="page-wrapper">
   <div class="container">
    	<div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Add Post</div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="/blog/admin/posts" enctype="multipart/form-data">
                        {{ csrf_field() }}
                         
                        <div class="form-group">
                            <label for="title" class="col-md-4 control-label">Title</label>

                            <div class="col-md-6">
                                <input id="title" type="text" class="form-control" name="title" required autofocus>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="content" class="col-md-4 control-label">Content</label>

                            <div class="col-md-6">
                                <textarea class="form-control" rows="5" id="content" name="content"> </textarea> 
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="image" class="col-md-4 control-label">Image</label>
                            <div class="col-md-6">
                                 <input type="file" class="form-control" name="image" id="image">
                            </div>
                        </div>

                        
                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Add Post
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