
   <h1>Login form</h1>
   {{Form::open(array('route'=> 'sessions.store')) }}

   <div>
        {{Form::label('email','Email:')}}
        {{Form::text('email')}};
   </div>

   <div>
             {{Form::label('password','Password:')}}
              {{Form::password('password')}};
    </div>

    <div>
            {{Form::submit()}}
    </div>

    {{\Illuminate\Support\Facades\Form::close()}}


