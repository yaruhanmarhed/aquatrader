@extends('template.main')

@section('content')
			<h2>Add New Product</h2>
			
		
			{!! Form::open(array('url' => 'products')) !!}
				<fielset>
					{!! Form::label('name', 'Product name') !!}
					{!! Form::text('name') !!}
					{!! $errors->first('name','<p class="error">:message</p>') !!}

					{!! Form::label('description', 'Description') !!}
					{!! Form::textarea('description') !!}
					{!! $errors->first('description','<p class="error">:message</p>') !!}

					{!! Form::label('price', 'Price') !!}
					{!! Form::text('price') !!}
					{!! $errors->first('price','<p class="error">:message</p>') !!}

                    {!! Form::label('photo', 'Photo') !!}
					{!! Form::text('photo',"shubunkin.jpg") !!}
					

					{!! Form::label('type_id', 'Product type') !!}
					{!! Form::select('type_id',\App\Models\Type::lists("name","id")) !!}
					

					{!!Form::submit('Create product') !!}
					
				</fielset>
			{!! Form::close() !!}
			
@stop			