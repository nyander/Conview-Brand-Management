@extends('layouts.app')

@section('content')
  
  <div class="flex justify-center">
    <div class="w-11/12 mb-8">
      <a href="{{ URL::previous() }}" class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded">Back</a>
    </div>
  </div>
  <div class="flex justify-center">
    <div class="max-w-md mx-auto mb-4 ">
        <h2 class="text-3xl antialiased font-bold">Collections</h2>
    </div>
 </div>


@if (count($collections) > 0)
    @foreach ($collections as $collection)
    <div class="max-w-md mx-auto bg-white rounded-xl shadow-md overflow-hidden md:max-w-2xl my-4">
        <div class="md:flex">
            <div class="md:flex-shrink-0">
                <img class="h-48 w-full object-cover md:w-48" src="/images/Collection-image.png" alt="Collection">
            </div>
            <div class="p-8">
                <div class="uppercase tracking-wide text-sm text-indigo-500 font-semibold">{{$collection->collection_season}}</div>
                <a href="/collections/{{$collection->id}}" class="block mt-1 text-lg leading-tight font-medium text-black hover:underline">{{$collection->collection_name}}</a>
                <p class="mt-2 text-gray-500">{{$collection->collection_description}}</p>
            </div>
        </div>
</div>
    @endforeach
    <p class="mx-auto"> {{$collections->links()}} </p>
@else
    <p>No Collections Created</p>
@endif   

 

  

@endsection