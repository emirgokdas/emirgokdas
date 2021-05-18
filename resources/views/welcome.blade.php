@extends('layouts.master')

@section('title', 'page title')

@section('sidebar')
    @parent
    <p>this is appended to the master sidebar.</p>
@stop

@section('content')
    <p>this is my body content.</p>
@stop
