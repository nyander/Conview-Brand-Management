@extends('layouts.app')

@section('content')
    <div class="flex justify-center">
        <div class="w-10/12 bg-gray-200 rounded-md mx-8 p-4 text-white  grid grid-cols-4 gap-4">
            @if (count($products) > 0)
                @foreach ($products as $product)
                    <a href="/products/{{$product->id}}">
                        <div class=" posts bg-white px-5 rounded-sm border-4 hover:border-black	 transition duration-300	  "
                            style="background:url('/gallery/West Side Highway.jpg') rgba(0, 0, 0, 0.6);
                                background-size:cover;
                                background-blend-mode: multiply;
                                ">
                            <div class="description pt-44 pb-8	">
                                <h5 class="collectionName"><b>{{$product->collection}}</b></h5> 
                                <p class="pieceName"> {{$product->product_name}}</p> 

                                <div class="progression pt-4">
                                    <p class="postprogress">Design Stage: {{$product->design_date}}</p>
                                    <div class="progressbar">---------</div>
                                </div>                    
                            </div>
                        </div>
                    </a>
                @endforeach
               <p class="mx-auto"> {{$products->links()}} </p>
            @else
                <p>No Product Projects created</p>
            @endif  
        </div>      

        <div class="w-2/12 bg-gray-300 rounded-l-md">
            Red
        </div>
    </div>

    {{-- @if (count($products) > 0)
        @foreach ($products as $product)
            <div class="decoration-slice">
                <h2>{{$product->product_name}}</h2>
            </div>
        @endforeach
    @else
        <p>No Product Projects created</p>
    @endif --}}
@endsection