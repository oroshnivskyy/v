{{ Form::open(array('route' => 'login')) }}
@if (Session::has('login_errors'))
    <span class="error">Username or password incorrect.</span>
@endif

<ul>
    <li>
        {{ Form::label('username') }}
        {{ Form::text('username') }}
    </li>
    <li>
        {{ Form::label('password') }}
        {{ Form::password('password') }}
    </li>
    <li>
        {{ Form::submit() }}
    </li>
</ul>
{{ Form::close() }}
