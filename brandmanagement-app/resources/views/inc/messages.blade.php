@if (count($errors)>0)
    @foreach($errors->all() as $error)
        <div class="alrt alrt-danger bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative w-6/12 mx-auto my-4">
            {{$error}}
        </div>
    @endforeach    
@endif

@if (session('success'))
    <div class="alert bg-teal-400 border border-green-400 text-green-700 px-4 py-3 rounded relative w-6/12 mx-auto my-4">
        {{session('success')}}
    </div>
@endif

@if (session('error'))
    <div class="alert bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative w-6/12 mx-auto my-4">
        {{session('error')}}
    </div>
@endif