{{ Form::open(array('route' => 'register.store')) }}
@if (Session::has('login_errors'))
    <span class="error">Username or password incorrect.</span>
@endif

<ul>
    <li>
        {{ Form::label('username') }}
        {{ Form::text('username') }}
    </li>
    <li>
        {{ Form::label('old-password') }}
        {{ Form::password('old-password') }}
    </li>
    <li>
        {{ Form::label('new-password') }}
        {{ Form::password('new-password') }}
    </li>
    <li>
        {{ Form::label('new-password-more') }}
        {{ Form::password('new-password-more') }}
    </li>
    <li>
        {{ Form::submit() }}
    </li>
</ul>
{{ Form::close() }}
