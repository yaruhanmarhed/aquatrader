@extends('template.main')

@section('content')
			<h2>Add New User</h2>
			
			{!! Form::open(array('url' => 'users')) !!}
				<fielset>

					{!! Form::label('username', 'User name') !!}
					{!! Form::text('username') !!}

					{!! Form::label('firstname', 'First name') !!}
					{!! Form::text('name') !!}

					{!! Form::label('lastname', 'Last name') !!}
					{!! Form::text('lastname') !!}

					{!! Form::label('email', 'Email') !!}
					{!! Form::text('email') !!}

					{!!Form::submit('Create user') !!}
					<!--<label for="">Firstname.</label>
					<input type="text" name="" id="">

					<label for="">Lastname.</label>
					<input type="text" name="" id="">

					<label for="">Email.</label>
					<input type="text" name="" id="">

					<label for="">Username.</label>
					<input type="text" name="" id="">
	
					<input type="submit" value="Send">-->
				</fielset>
			{!! Form::close() !!}
		
@stop			