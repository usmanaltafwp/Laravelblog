@extends('admin.main')

@section('content')

<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Tables</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            DataTables Advanced Tables
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>Title</th>
                                        <th>Content</th>
                                        <th>Image</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                               @foreach ($posts as $post)
                                    <tr class="odd gradeX">
                                        <td>{{ $post['title'] }}</td>
                                        <td>{{ $post['content'] }}</td> 
                                        <td>
                                        <img src="{{URL::asset('/public/uploads/'. $post['image'] )}}" alt="profile Pic" height="200" width="200">
                                        </td>
                                        <td>
                                        	<a href="{{ url('/admin/post/edit/'. $post['id']) }}">Edit</a> | 
                                        	<a href="#">Delete</a>
                                        </td>
                                    </tr>
                               @endforeach
                                </tbody>
                            </table>
                            <!-- /.table-responsive -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
        </div>

@endsection