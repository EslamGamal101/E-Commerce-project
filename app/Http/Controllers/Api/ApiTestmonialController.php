<?php

namespace App\Http\Controllers\Api;

use App\Models\Testmonial;
use App\Helpers\ApiResponse;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\TestmonialResource;
use App\Http\Requests\StoreTestmonialRequest;

class ApiTestmonialController extends Controller
{
    public function getTestmonials(){
        $data = Testmonial::get();
        if(count($data)>0)  return ApiResponse::sendResponse(200,'successfully',TestmonialResource::collection($data));
        else if(count($data)>0)  return ApiResponse::sendResponse(204,'No records added to testmonials',[]);
    }

    public function addTestmonial(StoreTestmonialRequest $request){
        $data = $request->validated();
        $Testmonial = Testmonial::create($data);
        if($Testmonial) return ApiResponse::sendResponse(201,'recored added successfully',[]);
        else return ApiResponse::sendResponse(200,'recored did not added ',[]);

    }
}
