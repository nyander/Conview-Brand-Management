const dropdown = document.querySelector('#sizeTypes');
const addButton = document.querySelector('.addSize');



function addMeasurement() {

    var tr = '<tr class="bg-gray-100 border-gray-200">' +
        '<td class="pr-4 py-3"><input class="input border-b-2 border-black bg-gray-50" type="text" name="measurementName" id="measurementName" placeholder="Name" ></td>' +
        '<td class="bg-gray-50 px-4 py-3"><input class="input inputText border-b-2 border-black bg-gray-50" type="text" name="chestXSmall" id="chestXSmall" placeholder="" ></td>' +
        '<td class="bg-gray-50 px-4 py-3"><input class="input inputText border-b-2 border-black bg-gray-50" type="text" name="chestSmall" id="chestSmall" placeholder="" ></td>' +
        '<td class="bg-gray-50 px-4 py-3"><input class="input inputText border-b-2 border-black bg-gray-50" type="text" name="chestMedium" id="chestMedium" placeholder="" ></td>' +
        '<td class="bg-gray-50 px-4 py-3"><input class="input inputText border-b-2 border-black bg-gray-50" type="text" name="chestLarge" id="chestLarge" placeholder="" ></td>' +
        ' <td class="bg-gray-50 px-4 py-3"><input class="input inputText border-b-2 border-black bg-gray-50" type="text" name="chestXLarge" id="chestXLarge" placeholder="" ></td>' +
        '<td><a href="#" class="btn btn-danger remove bg-red-500 hover:bg-red-700 text-white font-bold py-1 px-4 border border-black rounded">X</a></td>' +
        '</tr> ';
    $('.sizeDetailsBody').append(tr);
}


addButton.addEventListener("click", function() {
    addMeasurement();
})