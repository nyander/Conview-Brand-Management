@extends('layouts.app')

@section('content')
  
  <div class="flex justify-center">
    <div class="w-11/12 mb-8">
      <a href="{{ URL::previous() }}" class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded">Back</a>
    </div>
  </div>
  <div class="flex justify-center">
    <div class="w-11/12 rounded-md mx-8 pb-4  ">
        <h2 class="text-3xl antialiased font-bold">Create a Collection</h2>
    </div>
  </div>
  <form method="POST" action="/collections"  enctype="multipart/form-data" onsubmit="myButton.disabled = true; return true;">      
    @csrf
    <div class="justify-center mx-auto	 w-11/12 mb-12"> 
      <div class="field-row">
        <input class="input mt-4 bg-gray-100 border-b-2 border-black" type="text" name="collectionName" id="collectionName" placeholder="Collection Name" >
      </div>
      <div class="field-row">
        <input class="input mt-4 bg-gray-100 border-b-2 border-black" type="text" name="collectionSeason" id="collectionSeason" placeholder="Collection Season" >
      </div>
      <div class="mt-8  description_details">
        <h1 class="mb-4 font-semibold text-lg">Description</h1>
        <textarea id="collectionDescription" name="collectionDescription" rows="5" cols="75" class="bg-gray-100 border-2 border-gray-500 p-4 quickDescription" placeholder="Collection Description"></textarea>
      </div>

      <div class="w-1/12 float-left">
        <button class="button is-link bg-white hover:bg-gray-100 text-gray-800 font-semibold py-2 px-4 border border-gray-400 rounded shadow" name="myButton" type="submit">Submit</button>
      </div>

    </div>

    

  </form>
  

@endsection