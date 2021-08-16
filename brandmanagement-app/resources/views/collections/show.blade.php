@extends('layouts.app')

@section('content')
  
  <div class="flex justify-center">
    <div class="w-11/12 mb-8">
      <a href="{{ URL::previous() }}" class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded">Back</a>
    </div>
  </div>
  <div class="flex justify-center">
    <div class="w-11/12 rounded-md mx-8 pb-4  ">
        <h2 class="text-3xl antialiased font-bold">{{$collection->collection_name}}</h2>
        <h2 class="text-lg antialiased font-bold">{{$collection->collection_season}}</h2>
    </div>
  </div>
    <div class="justify-center mx-auto	 w-11/12 mb-12"> 
      <h1 class="mb-4 font-semibold text-lg">Description</h1>
      <div class="bg-gray-100 border-2 border-gray-500 p-4 quickDescription">
        {{$collection->collection_description}}
      </div>
    </div>   
  

@endsection