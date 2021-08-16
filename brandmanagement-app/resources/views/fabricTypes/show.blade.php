@extends('layouts.app')

@section('content')
  
  <div class="flex justify-center">
    <div class="w-11/12 mb-8">
      <a href="{{ URL::previous() }}" class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded">Back</a>
    </div>
  </div>
  <div class="flex justify-center">
    <div class="max-w-md mx-auto mb-4 ">
        <h2 class="text-3xl antialiased font-bold">Fabric Type</h2>
    </div>
 </div>

    <div class="max-w-md bg-white rounded-xl shadow-md overflow-hidden md:max-w-2xl mx-auto mt-10">
        <div class="md:flex">
            <div class="p-8">
                <div class="uppercase tracking-wide text-sm text-indigo-500 font-semibold">Fabric Type</div>
                <p class="block mt-1 text-lg leading-tight font-medium text-black hover:underline"> {{$fabric->fabric_type_name}}</p>

                <div class="rounded-md mt-4">
                    <p class=" m-0 text-black">{{$fabric->description}}</p>               
                </div>
                
            </div>
        </div>
    </div>
  

@endsection