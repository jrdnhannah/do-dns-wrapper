@extends('layout.master')

@section('content')
    <h1>Welcome to DigitalOcean DNS Wrapper</h1>

    <p>
        <a href="{{ route('oauth.request') }}">Connect Account</a>
    </p>
@stop