@extends('admin.layouts.master')
@section('content')
    <section class="content-2 col-12" style="background-color: rgb(255, 255, 255);">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Role</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($user_details as $user)
                        <tr>
                            <td>{!! $user['user_name'] !!}</td>
                            <td>{!! $user['user_email'] !!}</td>
                            <td>{!! $user['user_role'] !!}</td>
                            <td>
                                <a href="{!! action('UsersController@edit_user', $user['user_id']) !!}" class="btn btn-info pull-left">Edit</a>
                                <form method="post" action="{{ URL::to('/user/single/'.$user['user_id'].'/delete') }}">
                                    <input type="hidden" name="_token" value="{!! csrf_token() !!}">
                                    <button type="submit" onclick="return checkDelete()" class="btn btn-warning">Delete</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        </div>
    </section>
    <script>
       function checkDelete(){
           return confirm('Would you like to delete this User');
       }
    </script>
@endsection
