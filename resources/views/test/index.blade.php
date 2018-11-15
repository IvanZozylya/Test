@extends('layouts.app')

@section('title','Index page')

@section('content')
    <div class="container">
            @if(count($errors) > 0)
                <div class="alert alert-danger">
                    @foreach($errors->all() as $error)
                        {{$error}}
                    @endforeach
                </div>
            @endif
                @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @else
                @include('test.form')
                @endif
    </div>

@endsection
