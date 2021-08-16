@extends('layouts.app')

@section('content')
  
  <div class="flex justify-center">
    <div class="w-11/12 mb-8">
      <a href="{{ URL::previous() }}" class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded">Back</a>
    </div>
  </div>
  <div class="flex justify-center">
    <div class="max-w-md mx-auto mb-4 ">
        <h2 class="text-3xl antialiased font-bold">Size Types</h2>
    </div>
 </div>

<div class="w-12/12 bg-gray-200 rounded-md mx-8 p-4 text-white my-4  grid grid-cols-3 gap-5">
@if (count($sizetypes) > 0)
    @foreach ($sizetypes as $sizetype)
    <div class="max-w-md bg-white rounded-xl shadow-md overflow-hidden md:max-w-2xl">
        <div class="md:flex">
            <div class="p-8">
                <div class="uppercase tracking-wide text-sm text-indigo-500 font-semibold">{{$sizetype->gender}}</div>
                <p class="block mt-1 text-lg leading-tight font-medium text-black hover:underline"> {{$sizetype->size_type_name}}</p>

                <div class="rounded-md mt-4 grid grid-cols-9  gap-px">
                    @foreach ($sizetype->measurements as $measurement)
                        <p class="border-2 px-3 m-0 border-black text-black	">{{$measurement}}</p>  
                    @endforeach                 
                </div>
                
            </div>
        </div>
    </div>
    @endforeach
    
@else
    <p>No Collections Created</p>
@endif   
</div>
<div class="mx-8">
    <p> Pagination here </p>
</div>

 

  

@endsection