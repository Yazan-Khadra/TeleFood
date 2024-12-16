<?php

namespace App\Http\Controllers;

use App\Http\Resources\Store\ProductResource;
use App\Http\Resources\Store\StoreResource;
<<<<<<< HEAD
use App\Models\Category;
=======

>>>>>>> 08a1fb44af0bcdbae3fe93da68abfca7411f9a4d
use App\Models\Governorate;
use App\Models\Store;
use App\Models\StoreGovernorate;
use App\Traits\AddStore;
use App\Traits\JsonResponseTrait;
use Illuminate\Http\Request;
<<<<<<< HEAD
=======
use Illuminate\Support\Facades\DB;
>>>>>>> 08a1fb44af0bcdbae3fe93da68abfca7411f9a4d
use Illuminate\Support\Facades\Validator;

class StoreController extends Controller{
    use JsonResponseTrait,AddStore;
    public function Create(Request $request){
        //please uncomment all coments when you finish the categories
        $validation=Validator::make($request->all(),[
            'name'=>'required|string|unique:stores',
            'description'=>'required|string',
            'image_url'=>'required|string',
            'rate'=>'required',
            'governorate'=>'required|string',
            'location'=>'required|string',
            'category'=>'required|string',
        ]);
        if($validation->fails()){
            return $this->JsonResponse($validation->errors(),400);
        }
        $this->AddStore($request);
     
        return $this->JsonResponse('Store add Successfully',200);
    }
    public function AddBranch(Request $request){
        $validation=Validator::make($request->all(),[
            'store_id'=>'required',
            'governorate'=>'required|string|unique:governorates,name',
            'location'=>'required|string',
        ]);
        if($validation->fails()){
            return $this->JsonResponse($validation->errors(),400);
        }
        $this->AddStore($request,$request->store_id);
        return $this->JsonResponse('Branch Added Successfully',201);
    }
<<<<<<< HEAD
    public function Delete(request $request){
        Store::where('id',$request->store_id)->delete();
=======
    public function Update(request $request){
        $validation=Validator::make($request->all(),[
            'name'=>'required|string|unique:stores',
            'description'=>'required|string',
            'image_url'=>'required|string',
            'rate'=>'required',
            'governorate'=>'required|string',
            'location'=>'required|string',
            'category'=>'required|string',
        ]);
        if($validation->fails()){
            return $this->JsonResponse($validation->errors(),400);
        }
    }
   

    public function DeleteStore($id){
        Store::find($id)->delete();
>>>>>>> 08a1fb44af0bcdbae3fe93da68abfca7411f9a4d
        return $this->JsonResponse('Deleted Successfully',200);
    }
    public function DeleteBranch(Request $request){
        StoreGovernorate::where('store_id',$request->store_id)->where('governorate_id',$request->governorate_id)->delete();
        return $this->JsonResponse('Branch Deleted Successfully',200);

    }
<<<<<<< HEAD
=======
    public function DeleteAll(){
        DB::table('stores')->delete();
        return $this->JsonResponse('All Stores Deleted Successfully',200);
    }
>>>>>>> 08a1fb44af0bcdbae3fe93da68abfca7411f9a4d
    public function Index(){
        $stores=Store::all();
        return StoreResource::collection($stores);
    }
    public function GetStoreProducts($id){
        $store=Store::where('id',$id)->get()->first();
      
        if(!isset($store->Products)||empty($store->Products)){
            return response()->json(['message'=>'Empty']);
        }
        $products=$store->Products;
       
<<<<<<< HEAD
       
=======
>>>>>>> 08a1fb44af0bcdbae3fe93da68abfca7411f9a4d
        return ProductResource::collection($products);
        
    }
    public function GetGovernorateStores($id){
        $governorate=Governorate::find($id);
        $stores=$governorate->Stores;
        return StoreResource::collection($stores);
    }

}
