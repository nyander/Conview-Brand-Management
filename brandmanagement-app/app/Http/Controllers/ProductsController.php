<?php

namespace App\Http\Controllers;

use App\Models\Product as Product;
use App\Models\SizeType;
use App\Models\FabricType;
use App\Models\Collection;
use Illuminate\Http\Request;
use \DB;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $products = Product::all();
        // To order by title -  $products = Product::orderBy('title','asc')->get();
        // To find specific records - $post = Post::where('title', 'Post Two')->get();
        //to use SQL query - add use DB at the top and add the following: $post = DB::select('SELECT * FROM posts where title = 'post one'')
        $products = Product::orderBy('updated_at', 'asc')->paginate(8);
        return view('products.index')->with('products', $products);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $sizetypes = SizeType::all();
        $collections = Collection::all();
        $fabrictypes = FabricType::all();
        return view('products.create')->with(['sizetypes' => $sizetypes, 'collections' => $collections, 'fabrictypes' => $fabrictypes]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'collectionId' => 'required',
            'productName' => 'required'
        ]);

        if ($request->hasfile('sampleInpFile')) {
            // Create image name using through the filename, date followed by the extension 
            $thumb = $request->file('sampleInpFile');
            $name = pathinfo($thumb->getClientOriginalName(), PATHINFO_FILENAME);
            $filename =  $name . '-' . time() . '.' . $thumb->getClientOriginalExtension();

            // store the file into the gallery image within public folder
            $location = public_path('./publc/photos/' . $filename);
            $thumb->move(public_path() . '/gallery/', $filename);
        }

        if ($request->hasfile('inpFile')) {
            // Create image name using through the filename, date followed by the extension 
            $thumb = $request->file('inpFile');
            $name = pathinfo($thumb->getClientOriginalName(), PATHINFO_FILENAME);
            $labelfilename =  $name . '-' . time() . '.' . $thumb->getClientOriginalExtension();

            // store the file into the gallery image within public folder
            $location = public_path('./publc/photos/' . $labelfilename);
            $thumb->move(public_path() . '/gallery/', $labelfilename);
        }

        // Create Product
        $product = new Product;
        $product->collection = request('collectionId');
        $product->product_name = request('productName');
        $product->designed_by = request('designedBy');
        $product->design_date = request('designedDate');
        $product->fabric_type = request('fabrictypes');
        $product->fabric = request('fabric');
        $product->fabric_length = request('fabricLength');
        $product->main_color = request('colorMain');
        $product->product_sample_image = $filename;
        $product->clothing_label_image = $labelfilename;
        $product->main_color = request('colorMain');
        $product->save();


        return redirect('/products')->with('success', 'Product Project Created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product = Product::find($id);
        return view('products.show')->with('product', $product);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
