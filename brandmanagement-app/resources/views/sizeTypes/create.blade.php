@extends('layouts.app')

@section('content')
  
  <div class="flex justify-center">
    <div class="w-11/12 mb-8">
      <a href="{{ URL::previous() }}" class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded">Back</a>
    </div>
  </div>
  <div class="flex justify-center">
    <div class="w-11/12 rounded-md mx-8 pb-4  ">
        <h2 class="text-3xl antialiased font-bold">Create a Size Type</h2>
    </div>
  </div>
  <form method="POST" action="/sizetypes"  enctype="multipart/form-data" onsubmit="myButton.disabled = true; return true;">      
    @csrf
    <div class="justify-center mx-auto	 w-11/12 mb-12"> 
      <div class="field-row">
        <input class="input mt-4 bg-gray-100 border-b-2 border-black" type="text" name="sizeName" id="sizeName" placeholder="Collection Name" >

        <select name="gender" id="gender" class=" mt-4 bg-gray-100 border-b-2 border-black">
            <option value="Male">Male</option>
            <option value="Female">Female</option>
          </select>

      </div>
      <div class="mt-8 mb-4  description_details">
        <h1 class="mb-4 font-semibold text-lg">Sizes</h1>
        <div class="bg-gray-100 border-2 border-gray-500 p-4 max-w-sm">
            <table class="detailsCare table mt-4">
                <thead>
                  <tr>
                    <th scope="col" class="text-left pl-2">Size</th>
                    <th scope="col"><a href="#" class="addRow bg-gray-100 bg-green-700 py-1 px-4 rounded-md cursor-pointer hover:opacity-75 text-white	"><button type="button">Add</button></i></a></th>
                  </tr>
                </thead>
                <tbody class="detailsBody">
                  <tr>
                    <td>
                        <input class="input bg-gray-100 border-b-2 border-black mx-2 pt-3" type="text" name="measurements[]"> 
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
        </div>
      </div>

      <div class="w-1/12 float-left">
        <button class="button is-link bg-white hover:bg-gray-100 text-gray-800 font-semibold py-2 px-4 border border-gray-400 rounded shadow" name="myButton" type="submit">Submit</button>
      </div>

    </div>

    

  </form>
  

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
            '<td><input class="input bg-gray-100 border-b-2 border-black mx-2 pt-4" type="text" name="measurements[]"></td>'+
            '<td><a href="#" class="btn btn-danger remove bg-red-500 hover:bg-red-700 text-white font-bold py-1 px-4 border border-black rounded">X</a></td>'
            '</tr>';
            $('.detailsBody').append(tr);
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
</script>