@extends('main')

@section('title', '| Forgot my Password')

@section('content')
     
     <div class="row">
         <div class="col-md-6 col-md-offset-3">
             <div class="panel panel-default">
                     <div class="panel-header">
                         Reset Password 
                     </div>
                         <div class="panel-body">
                             {!! Form::open(['url' => 'password/email', 'method'=> 'POST']) !!}
                                
                             {{ form::hidden('token', $token) }}

                             {{ Form::label('email', 'Enter your Email:')}}
                             {{ Form::email('email', $email, ['class' => 'form-control']) }}

                             {{ Form::label('password', 'New Password:')}}
                             {{ Form::password('password', ['class' => 'form-control'])}}

                             {{ Form::label('password_confirmation', 'Confirm New Password:')}}

                             {{ Form::submit('Reset Password' ['class' => 'btn btn-primary'])}}

                             {!! Form::close() !!}
                         </div>
             </div>

         </div>
     </div>

@stop