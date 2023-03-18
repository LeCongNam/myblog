@extends('master.form')

@section('title', 'Login Account')


@section('form-login')
    <div class="form">
        <h2>Login</h2>
        {!! Form::open(['method' => 'POST', 'url' => '/login']) !!}
        {{ Form::text('username', null, ['placeholder' => 'Username']) }}
        {{ Form::password('password', ['placeholder' => 'Password']) }}

        @if ($errors->any())
            <h4 style="color: red" class="my-2 font-bold">{{ $errors->first() }}</h4>
        @endif

        <button>Submit</button>
        {!! Form::close() !!}

        <p class="message">Not registered? <a href="/signup">Create an account</a></p>
        <p class="message">Forgot your password? <a href="/forgot-password">Click here to reset it</a></p>
    </div>
@endsection
