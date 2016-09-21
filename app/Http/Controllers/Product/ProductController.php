<?php

namespace App\Http\Controllers\Product;

use App\Model\Product\Product;
use App\Model\Product\Mark;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Validation\Validator;

class ProductController extends Controller
{
    public function index() {
        $product = Product::select('products.id','products.name as product','price','marks.name as mark')
                ->join('marks','marks.id','=','products.marks_id')->orderBy('products.id')
                ->get();
        return view('product/index',  compact('product'));
    }
    public function store(Request $request){
        $validator = Validator::make($request->all(),[
            'nombre'=>'required|max:20'
        ]);
        
        if($validator->fails()){
            
            return redirect('/product/create')->withErrors($validator)->withInput();
        }
        Product::create($request->all());
        return redirect()->route('product');
    }
    public function create(){
       $marks = Mark::lists('name','id')->prepend('Seleccione la Marca');
        return view('product/create',  compact('marks'));
    }
    public function show($id){
       $products = Product::FindOrFail($id); 
       return view('product/show', compact('products'));
    }

    public function save(){
        
    }
    public function edit($id){
        $marks = Mark::lists('name','id');
        $product = Product::FindOrFail($id);
        return view('product/edit',  compact('marks','product'));
        
    }
    public function update(Request $request,$id){
        $products = Product::FindOrFail($id);
        $input = $request->all();
        $products->fill($input)->save();
        return redirect()->route('product');
    }
    public function destroy($id){
         $products = Product::FindOrFail($id);
         $products->delete();
         return redirect()->route('product');
    }
}
