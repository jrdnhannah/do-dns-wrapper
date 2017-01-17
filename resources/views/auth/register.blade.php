@extends('layout.master')

@section('content')
    <div class="col-lg-10 col-lg-offset-1">
        <form action="{{ route('auth.post_register') }}" method="post" class="form-inline">
            <div class="form-group">
                <input type="email" placeholder="Email" name="email" class="form-control" />
            </div>
            <div class="form-group">
                <input type="password" placeholder="Password" name="password" class="form-control" />
            </div>
            {{ csrf_field() }}
            <button type="submit" class="btn btn-default">Register</button>
        </form>
    </div>
@stop