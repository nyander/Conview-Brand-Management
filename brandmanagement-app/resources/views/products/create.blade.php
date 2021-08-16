@extends('layouts.app')

@section('content')
  
  <div class="flex justify-center">
    <div class="w-11/12 mb-8">
      <a href="{{ URL::previous() }}" class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded">Back</a>
    </div>
  </div>
<div class="w-11/12 rounded-md mx-auto pb-4 page-title">
    <h1 class="font-semibold text-3xl">Create Product</h1>
</div>

{{-- FORM START --}}
<form method="POST" action="/products"  enctype="multipart/form-data" onsubmit="myButton.disabled = true; return true;">       
  @csrf  
  <div class="flex justify-center mx-auto	 w-11/12 "> 
    <div class="w-11/12 ml-auto">
        {{-- <h2 class="text-3xl antialiased font-bold">{{$product->collection}}</h2> --}}
        <div class="field row">
            <select name="collectionId" id="collectionId" placeholder="Collection" class=" input text-2xl  antialiased  font-bold mt-4 bg-gray-100 border-b-2 border-black w-2/12	">
              <option class="text-gray-400">Collection</option>
              @foreach ($collections as $collection)
                  <option class="bg-gray-100" value="{{$collection->id}}">{{$collection->collection_name}}</option>
              @endforeach
              
            </select>
        </div>

        


            {{-- <h4 class="text-lg antialiased font-medium">{{$product->product_name}}</h4> --}}
        <div class="field row">
            <input class="input text-lg antialiased font-medium mt-4 bg-gray-100 border-b-2 border-black" type="text" name="productName" id="productName" placeholder="Product Name" >
        </div>
    </div>


    <div class="w-1/12 float-right">
      <button class="button is-link bg-white hover:bg-gray-100 text-gray-800 font-semibold py-2 px-4 border border-gray-400 rounded shadow" name="myButton" type="submit">Submit</button>
    </div>

  </div>

  <div class="flex justify-center mx-auto	 w-11/12 mb-12">
    <div class="w-2/12 rounded-md py-8  ">
      <h1 class="font-semibold text-xl">Description</h1>
      <div class="field-row">
        <input class="input mt-4 bg-gray-100 border-b-2 border-black w-11/12" type="text" name="designedBy" id="designedBy" placeholder="Designer" >
      </div>
      <div class="field-row">
        <input class="input mt-4 bg-gray-100 border-b-2 border-black w-11/12" type="date" name="designedDate" id="designedDate" placeholder="Date of Design" >
      </div>
      <div class="field-row">
        <input class="input mt-4 bg-gray-100 border-b-2 border-black w-11/12" type="text" name="fabricType" id="fabricTypr" placeholder="Fabric Type" >
      </div>
      <div class="field-row">
        <input class="input mt-4 bg-gray-100 border-b-2 border-black w-11/12" type="text" name="fabric" id="fabric" placeholder="Fabric" >
      </div>
      <div class="field-row">
        <select name="fabrictypes" id="fabrictypes" placeholder="Collection" class=" input mt-4 bg-gray-100 border-b-2 border-black w-11/12	">
          <option class="text-gray-400">Fabric Type</option>
          @foreach ($fabrictypes as $fabrictype)
              <option class="bg-gray-100" value="{{$fabrictype->id}}">{{$fabrictype->fabric_type_name}}</option>
          @endforeach
      </div>
      <div class="field-row">
        <input class="input mt-4 bg-gray-100 border-b-2 border-black w-11/12" type="text" name="colorMain" id="colorMain" placeholder="Color" >
      </div>
      <div class="field-row mb-8">
        <select name="sizeTypes" id="sizeTypes" placeholder="Collection" class="sizeTypes sizeChartSelection input mt-4 bg-gray-100 border-b-2 border-black w-11/12	">
          <option class="text-gray-400">Size Type</option>
          @foreach ($sizetypes as $sizetype)
              <option class="bg-gray-100" value="{{$sizetype->id}}">{{$sizetype->gender}} : {{$sizetype->size_type_name}}</option>
          @endforeach          
        </select>
      </div>


      <div class="mt-8 labelSection">
        <label class="font-semibold text-xl mb-4 label">Clothing Label</label>
        
        <div><span class="material-icons cancelImagePreviewImage mt-4 mb-4	">highlight_off</span></div>
        <div class="image-preview clothingLabel bg-gray-300 cursor-pointer" id="imagePreview">
            <img src="" alt="Image Preview" class="imagePreviewImage mx-auto cursor-pointer">
            <input type="file" class="form-control my-4 cursor-pointer" name="inpFile" id="inpFile" >
            <label for="inpFile"><span class="material-icons md-light imagePreviewDefaultText text-4xl py-20 mx-20	 cursor-pointer">add_circle_outline</span></label>
        </div>

              

      </div>
    </div>
  
    <div class="w-6/12 rounded-md mx-4  px-2 py-8">
      <div class="mx-auto">
        <div><span class="material-icons cancelSamplePreviewImage ml-auto mb-4	">highlight_off</span></div>
        <div class="sample-preview DesignImage bg-gray-300" id="samplePreview">
            <img class="samplePreviewImage mx-auto my-4 cursor-pointer" src="">
            <input type="file" class="form-control cursor-pointer " name="sampleInpFile" id="sampleInpFile" >
            <label for="sampleInpFile"><span class="material-icons md-light samplePreviewDefaultText text-center my-auto p-10 text-4xl  cursor-pointer">add_circle_outline</span></label>
        </div>
        
      </div>



      
      <div class="mt-8">
        <h1 class="font-semibold text-xl">Details & Care</h1>
      </div>
      <section>
        <div class="panel panel-header">
                               
        <table class="detailsCare table mt-4">
            <thead>
              <tr>
                <th scope="col" class="text-left pl-2">Title</th>
                <th scope="col" class="text-left pl-2">Description</th>
                <th scope="col"><a href="#" class="addRow bg-gray-100 bg-green-700 py-1 px-4 rounded-md cursor-pointer hover:opacity-75 text-white	"><button type="button">Add</button></i></a></th>
              </tr>
            </thead>
            <tbody class="detailsBody">
              <tr>
                <td>
                    <input class="input bg-gray-100 border-b-2 border-black mx-2 pt-3" type="text" name="title[]"> 
                </td>
                <td>
                    <input class="input bg-gray-100 border-b-2 border-black mx-2 pt-3" type="text" name="detailDescription[]" id="detailDescription" > 
                </td>
              </tr>             
            </tbody>
            <tfoot>
                <tr>
                    <td style="border:none"></td>
                    <td style="border:none"></td>
                </tr>
            </tfoot>
        </table>                        
         
      </section>    
    </div>
  

    {{-- COlumn 3 --}}
    <div class="w-4/12 rounded-md mx-4 px-2">
      <h1 class="font-semibold text-xl">Size Guide</h1>

      <table class="bg-gray-100 text-gray-800 mt-4">
        <thead class="sizeDetailHeader">
          <th scope="col"><a href="#" class="addSize bg-gray-100 bg-green-700 py-1 px-4 rounded-md cursor-pointer hover:opacity-75 text-white	"><button type="button">Add</button></i></a></th>
        </thead>
        <tbody class="sizeDetailsBody">
          <tr class="bg-gray-100 border-gray-200">
            <td class="pr-4 py-3"><input class="input border-b-2 border-black bg-gray-50" type="text" name="measurementName" id="measurementName" placeholder="Name" ></td>
            <td class="bg-gray-50 px-4 py-3"><input class="input inputText border-b-2 border-black bg-gray-50" type="text" name="chestXSmall" id="chestXSmall" placeholder="" ></td>
            <td class="bg-gray-50 px-4 py-3"><input class="input inputText border-b-2 border-black bg-gray-50" type="text" name="chestSmall" id="chestSmall" placeholder="" ></td>
            <td class="bg-gray-50 px-4 py-3"><input class="input inputText border-b-2 border-black bg-gray-50" type="text" name="chestMedium" id="chestMedium" placeholder="" ></td>
            <td class="bg-gray-50 px-4 py-3"><input class="input inputText border-b-2 border-black bg-gray-50" type="text" name="chestLarge" id="chestLarge" placeholder="" ></td>
            <td class="bg-gray-50 px-4 py-3"><input class="input inputText border-b-2 border-black bg-gray-50" type="text" name="chestXLarge" id="chestXLarge" placeholder="" ></td>          
          </tr>
        </tbody> 
        <!-- each row -->
      
      </table>

      <div class="mt-8  description_details">
        <h1 class="mb-4 font-semibold text-lg">Description</h1>
        <textarea id="w3review" rows="5" cols="75" class="bg-gray-100 border-2 border-gray-500 p-4 quickDescription" placeholder="Enter text here"></textarea>
      </div>
      
    </div>
  </div>

</form>

  {{-- FORM END --}}


  <script src="{{ asset('js/sizeChart.js') }}"></script>
  <script src="{{ asset('js/imagePreview.js') }}"></script>
  <script src="{{ asset('js/samplePreview.js') }}"></script>
  
@endsection
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.min.js"></script>
<script type="text/javascript">
 //to add more records  
    document.addEventListener('DOMContentLoaded', function () {
     
        $('.addRow').on('click', function(){
            addRow();
        });
        function addRow()
        {
            var tr = '<tr>' +
            '<td><input class="input bg-gray-100 border-b-2 border-black mx-2 pt-4" type="text" name="title[]"></td>'+
            '<td><input class="input bg-gray-100 border-b-2 border-black mx-2 pt-4" type="text" name="detailDescription[]" id="detailDescription" ></td>'+
            '<td><a href="#" class="btn btn-danger remove bg-red-500 hover:bg-red-700 text-white font-bold py-1 px-4 border border-black rounded">X</a></td>'
            '</tr>';
            $('.detailsBody').append(tr);
        }        
        


        $('#sizeTypes').on('change', function(){
          const dropdown = document.querySelector('#sizeTypes');
          var dropDownText = dropdown.options[dropdown.selectedIndex].value;
          addSizeTypes(dropDownText);
        });


        function addSizeTypes(value) {
        const addButton = document.querySelector('.addSize');
        addButton.style.display = 'block';
        var tr =
        '<tr class="text-left border-b-2 border-gray-300">' +
        '<th class="pr-4 py-3">Measurement Points</th>' +
        @foreach ($sizetypes as $sizetype)
          @if ($sizetype->id == 1)
            @foreach ($sizetype->measurements as $measurement)
              '<th class="py-3 mx-auto text-center">{{$measurement}}</th>' +
            @endforeach
          @endif  
        @endforeach
        '</tr>'

        $('.sizeDetailHeader').append(tr);
      }
    });


    // to remove records
    $('.remove').live('click',function(){
        //this will ensure that when last/one record is displayed it wont remove it - this will count how many tr are there  
        var last = $('tbody tr').length;
            if(last==1){
                alert("You can not delete the last row");
        } 
        else {
            $(this).parent().parent().remove();
        }
    });



    // Ammmendments to be made start here

   

//     dropdown.addEventListener("change", function() {
//     var dropDownValue = dropdown.options[dropdown.selectedIndex].value;
//     var dropDownText = dropdown.options[dropdown.selectedIndex].text;
//     addSizeTypes(dropDownText);
// });

    // Ammendments to be made end here


</script>