@extends('layouts.home')

@section('title', 'Sub Page Title')

@section('sidebar')
    @parent

    <p>Sub Page Data</p>
@endsection

@section('content')
    <p>This is my body content.</p>
    aaaaaaaaaaaa <br>
    bbbbbbbbbbbbbbbbbbbbb <br>

@endsection
