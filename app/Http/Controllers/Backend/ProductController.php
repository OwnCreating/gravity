<?php

namespace App\Http\Controllers\Backend;

use App\Product;
use File;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::get();

        return view('backend.product.read', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.product.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request);
        $data = $request->validate([
            'name' => 'required',
            'brand' => 'required',
            'model' => 'required',
            'photos' => 'required',
            'price' => 'required',
            'description' => 'required',
        ]);

        $filearray = array();
        
        if($request->hasfile('photos')) {
            $photos = $request->file('photos');
            foreach ($photos as $photo) {
                $upload_path = public_path().'/back/images/products/';
                $name = uniqid().'_'.$photo->getClientOriginalName();
                $photo->move($upload_path, $name);
                $path = '/back/images/products/'.$name;
                array_push($filearray, $path);
            }
        }
        else {
            $path = "";
        }

        Product::create([
            'name' => request('name'),
            'brand_id' => request('brand'),
            'model_id' => request('model'),
            'photos' => serialize($filearray),
            'price' => request('price'),
            'description' => request('description'),
        ]);

        return back()->with('status', 'Product is succefully created!!!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = Product::whereId($id)->firstOrFail();
        
        return view('backend.product.edit', compact('product'));
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
        // dd($request);
        $filearray = array();
        
        if($request->hasfile('photos')) {
            $photos = $request->file('photos');
            foreach ($photos as $photo) {
                $upload_path = public_path().'/back/images/products/';
                $name = uniqid().'_'.$photo->getClientOriginalName();
                $photo->move($upload_path, $name);
                $path = '/back/images/products/'.$name;
                array_push($filearray, $path);
            }
        }
        else {
            $path = request('oldfile');
            // foreach ($paths as $path) {
            //     // array_push($filearray, $path);
            //     echo $count++;
            //     echo '<br>'.$path;
            // }
        }

        $product = Product::find($id);

        $product->name = request('name');
        $product->brand_id = request('brand');
        $product->model_id = request('model');
        if($request->hasfile('photos')) {
            $product->photos = serialize($filearray);
        }
        $product->price = request('price');
        $product->description = request('description');

        $product->save();

        return back()->with('status', 'Product is succefully updated!!!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::whereId($id)->firstOrFail();
        $product->delete();

        return back()->with('status', 'Product is successfully deleted!!!');
    }

    public function photo(Request $request) {
        $photos = request('photo');
        foreach(unserialize($photos) as $photo) {
            $photo = File::delete(public_path($photo));
        }
        // if(!$photo){
        //     return response()->json([
        //         'status' => 'Successfully Deleted!!!'
        //     ]);
        // }

        return response()->json([
                'status' => 'Successfully Deleted!!!'
        ]);
    }

}
