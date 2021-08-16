@extends('layouts.app')

@section('content')
  
  <div class="flex justify-center">
    <div class="w-11/12 mb-8">
      <a href="{{ URL::previous() }}" class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded">Back</a>
    </div>
  </div>
  <div class="flex justify-center">
    <div class="max-w-md mx-auto mb-4 ">
        <h2 class="text-3xl antialiased font-bold">Fabric Types</h2>
    </div>
 </div>

<div class="w-12/12 bg-gray-200 rounded-md mx-8 p-4 text-white my-4  grid grid-rows-3 grid-rows-3 gap-5">
@if (count($fabrics) > 0)
    @foreach ($fabrics as $fabric)
    <div class="max-w-md bg-white rounded-xl shadow-md overflow-hidden md:max-w-2xl">
        <div class="md:flex">
            <div class="p-8">
                <div class="uppercase tracking-wide text-sm text-indigo-500 font-semibold">Fabric Type</div>
                <a href="/fabrictypes/{{$fabric->id}}"> <p class="block mt-1 text-lg leading-tight font-medium text-black hover:underline"> {{$fabric->fabric_type_name}}</p></a>

                <div class="rounded-md mt-4">
                    <p class=" m-0 text-black">{{Str::limit($fabric->description, 300)}}</p>               
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
    <p>{{$fabrics->links()}}</p>
</div>

 

  

@endsection