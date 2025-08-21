<?php

namespace App\Http\Controllers\Api;

use App\Models\Category;
use App\Helpers\ApiResponse;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\ProductResource;
use App\Http\Requests\StoreCategoryRequest;

class ApiShopController extends Controller
{
    public function products(){
        $products = Category::paginate(4);
        if(count($products)>0) return ApiResponse::sendResponse(200,'data retrived successfully',$products);
        else return ApiResponse::sendResponse(200,'No products added yet',[]);
    }

    public function addProduct(StoreCategoryRequest $request){
        $data = $request->validated();

        if ($request->hasFile('image')) 
        {
          $image = $request->file('image');
          $newImageName = time() . '-' . $image->getClientOriginalName();
          $image->storeAs('categories', $newImageName, 'public');
          $data['image'] = $newImageName;
        }

         Category::create($data);
         return ApiResponse::sendResponse(201,'record added successfully',new ProductResource($data));
        
        

    }

    public function productDetails($id){
        if (!Category::where('id', $id)->exists()) {
            // If no category found with the given $id, return a not found response
            return ApiResponse::sendResponse(200, 'product not found', []);
        }
        $record = Category::findOrFail($id);
        return ApiResponse::sendResponse(200,'successfully',$record);

    }
    
}
