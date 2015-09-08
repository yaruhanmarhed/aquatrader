
@extends('template.main')

@section('content')
            <h2>{{$type->name}}</h2>

            @foreach($type->products as $product)
			  <article class="group">
				<img src="productphotos/shubunkin.jpg" alt="">
				<h4>{{$product->name}}</h4>
				<p>{{$product->description}}</p>
				<span class="price"><i class="icon-dollar"></i> 4.00</span>
				<span class="addtocart"><i class="icon-plus"></i></span>
			  </article>
		 @endforeach
			
@endsection	