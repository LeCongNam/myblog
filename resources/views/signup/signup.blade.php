@extends('master.form')



@section('title', 'Sign Up')

@section('form-signup')
    <div class="form">
        <h2>Create Account</h2>
        {!! Form::open(['method' => 'POST', 'url' => '/signup']) !!}
        {{ Form::text('firstname', null, ['placeholder' => 'firstname']) }}
        {{ Form::text('lastname', null, ['placeholder' => 'lastname']) }}
        {{ Form::text('username', null, ['placeholder' => 'Username']) }}
        {{ Form::email('email', null, ['placeholder' => 'email']) }}
        {{ Form::password('password', ['placeholder' => 'Password']) }}
        <button>Submit</button>
        {!! Form::close() !!}
        @if ($errors->any())
            <h4 style="color: red">{{ $errors->first() }}</h4>
        @endif
        <p class="message">Have An Account? <a href="/login">Login</a></p>
        <p class="message">Forgot your password? <a href="/forgot-password">Click here to reset it</a></p>
    </div>
@endsection
