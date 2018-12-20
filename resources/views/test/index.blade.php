@extends('layouts.app')

@section('title','Index page')

@section('content')
    <div class="container">
            @if(count($errors) > 0)
                <ul class="alert alert-danger">
                    @foreach($errors->all() as $error)
                        <li>{{$error}}</li>
                    @endforeach
                </ul>
            @endif
                @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @else
                    @can('create')
                        hello
                    @endcan
                @include('test.form')

                @endif
    </div>

@endsection
