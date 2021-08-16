@extends('layouts.app')

@section('content')
  
  <div class="flex justify-center">
    <div class="w-11/12 mb-8">
      <a href="/products" class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded">Back</a>
    </div>
  </div>
  <div class="flex justify-center">
    <div class="w-11/12 rounded-md mx-8 pb-4  ">
        <h2 class="text-3xl antialiased font-bold">{{$product->collection}}</h2>
        <h4 class="text-lg antialiased font-medium">{{$product->product_name}}</h4>
    </div>
  </div>

  <div class="flex justify-center mx-auto	 w-11/12">
    <div class="w-2/12 rounded-md py-4  ">
      <h1 class="font-semibold text-xl">Description</h1>
      <table class="table-fixed">
        <tbody>
          <tr >
            <td class="font-bold pr-4 py-2">Collection</td>
            <td class=" px-4 py-2">{{$product->collection}}</td>
          </tr>
          <tr >
            <td class="font-bold pr-4 py-2">Designed By</td>
            <td class=" px-4 py-2">{{$product->designed_by}}</td>
          </tr>
          <tr>
            <td class="font-bold pr-4 py-2">Design Date</td>
            <td class=" px-4 py-2">{{$product->design_date}}</td>
          </tr>
          <tr >
            <td class="font-bold pr-4 py-2">Fabric</td>
            <td class=" px-4 py-2">{{$product->fabric}}</td>
          </tr>
          <tr >
            <td class="font-bold pr-4 py-2">Fabric Length</td>
            <td class=" px-4 py-2">{{$product->fabric_length}}</td>
          </tr>
          <tr>
            <td class="font-bold pr-4 py-2">Main Colour</td>
            <td class=" px-4 py-2">{{$product->main_color}}</td>
          </tr>
          <tr>
            <td class="font-bold pr-4 py-2">Secondary Colour</td>
            <td class=" px-4 py-2">{{$product->secondary_color}}</td>
          </tr>
        </tbody>
      </table>

      <div class="mt-8 labelSection">
        <p>Clothing Label</p>
        <img class="clothingLabel mx-auto" src="https://wallpaperboat.com/wp-content/uploads/2019/06/kaws-1-920x518.jpg">
      </div>
    </div>
  
    <div class="w-6/12 rounded-md mx-4 px-2">
      <div class="mx-auto">
        <img class="DesignImage mx-auto" src="https://wallpaperboat.com/wp-content/uploads/2019/06/kaws-1-920x518.jpg">
      </div>

      <div class="mt-8">
        <h1 class="font-semibold text-xl">Details & Care</h1>
      </div>
      <table class="table-fixed">
        <tbody>
          <tr >
            <td class="font-bold pr-4">Model’s height:</td>
            <td class=" px-4 py-2">191cm/6ft 3in. Model wears size UK M.</td>
          </tr>
          <tr >
            <td class="font-bold pr-4">Trims:</td>
            <td class=" px-4 py-2">98% cotton, 2% elastane</td>
          </tr>
          <tr >
            <td class="font-bold pr-4">Wash Type:</td>
            <td class=" px-4 py-2">Machine wash</td>
          </tr>
        </tbody>
      </table>
    </div>
  

    {{-- COlumn 3 --}}
    <div class="w-4/12 rounded-md mx-4 px-2">
      <h1 class="font-semibold text-xl">Size Guide</h1>

      <table class="bg-gray-100 text-gray-800 mt-4">
        <tr class="text-left border-b-2 border-gray-300">
          <th class="pr-4 py-3">Measurement Points</th>
          <th class="px-4 py-3">Small</th>
          <th class="px-4 py-3">Medium</th>
          <th class="px-4 py-3">Large</th>
          <th class="px-4 py-3">XLarge</th>
          <th class="px-4 py-3">XXLarge</th>
        </tr>
        
        <tr class="bg-gray-100 border-gray-200">
          <td class="pr-4 py-3">Chest 1/2 [Pit to Pit]</td>
          <td class="bg-gray-50 px-4 py-3">40</td>
          <td class="bg-gray-50 px-4 py-3">50</td>
          <td class="bg-gray-50 px-4 py-3">60</td>
          <td class="bg-gray-50 px-4 py-3">70</td>
          <td class="bg-gray-50 px-4 py-3">80</td>
        </tr> 
        <!-- each row -->
        <tr class="bg-gray-100 border-gray-200">
          <td class="pr-4 py-3">Hem 1/2</td>
          <td class="bg-gray-50 px-4 py-3">40</td>
          <td class="bg-gray-50 px-4 py-3">50</td>
          <td class="bg-gray-50 px-4 py-3">60</td>
          <td class="bg-gray-50 px-4 py-3">70</td>
          <td class="bg-gray-50 px-4 py-3">80</td>
        </tr> 
        <!-- each row -->
        <tr class="bg-gray-100 border-gray-200">
          <td class="pr-4 py-3">Front Shirt Length</td>
          <td class="bg-gray-50 px-4 py-3">40</td>
          <td class="bg-gray-50 px-4 py-3">50</td>
          <td class="bg-gray-50 px-4 py-3">60</td>
          <td class="bg-gray-50 px-4 py-3">70</td>
          <td class="bg-gray-50 px-4 py-3">80</td>
        </tr> 
        <!-- each row -->
        <tr class="bg-gray-100 border-gray-200">
          <td class="pr-4 py-3">Sleeve Length</td>
          <td class="bg-gray-50 px-4 py-3">40</td>
          <td class="bg-gray-50 px-4 py-3">50</td>
          <td class="bg-gray-50 px-4 py-3">60</td>
          <td class="bg-gray-50 px-4 py-3">70</td>
          <td class="bg-gray-50 px-4 py-3">80</td>
        </tr> 
        <!-- each row -->
        <tr class="bg-gray-100 border-gray-200">
          <td class="pr-4 py-3">1/2 Bicep</td>
          <td class="bg-gray-50 px-4 py-3">40</td>
          <td class="bg-gray-50 px-4 py-3">50</td>
          <td class="bg-gray-50 px-4 py-3">60</td>
          <td class="bg-gray-50 px-4 py-3">70</td>
          <td class="bg-gray-50 px-4 py-3">80</td>
        </tr> 
        <!-- each row -->
      
      </table>

      <div class="mt-8  description_details">
        <h1 class="mb-4 font-semibold text-lg">Description</h1>
        <textarea id="w3review" rows="5" cols="75" placeholder="Enter text here"></textarea>
      </div>
      
    </div>
  </div>

@endsection