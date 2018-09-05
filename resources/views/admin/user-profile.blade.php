@extends('admin.main')

@section('content')
<?php $user = Auth::user();?>
 <div id="page-wrapper">
            

            <div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Profile</div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="/blog/admin/profile/edit" enctype="multipart/form-data">
                        {{ csrf_field() }}
                         <input name="_method" type="hidden" value="PATCH">
                        <div class="form-group">
                            <label for="name" class="col-md-4 control-label">Full Name</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ $user->name }}" required autofocus>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ $user->email }}" required>
                            </div>
                        </div>
  
                        <div class="form-group">
                            <label for="password-confirm" class="col-md-4 control-label">Designation</label>
                            <div class="col-md-6">
                                 <input type="text" class="form-control" name="designation" value="{{ $user->designation }}">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="profile_pic" class="col-md-4 control-label">profile Picture</label>
                            <div class="col-md-6">
                                 <input type="file" class="form-control" name="profile_pic" id="register_profile_pic">
                            </div>
                         </div>
                         <div class="form-group">
                            <div class="col-md-4">
                            </div>
                            <div class="col-md-6">
                                <img src="{{URL::asset('/public/uploads/'. $user->profile_pic )}}" alt="profile Pic" height="200" width="200">
                            </div>
                         </div>

                        </div>
                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Update
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
           
<!-- /#page-wrapper -->
@endsection
