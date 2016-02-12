@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    You are logged in!
                    <br><br>

                    @role('owner')
                        <li><a href="/admin/user">Manage Users</a></li>
                    @endrole
                    
                    <li><a href="/admin/post">Manage Posts</a></li>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
