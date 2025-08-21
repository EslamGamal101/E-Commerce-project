<?php

namespace App\Http\Controllers\Api;

use App\Helpers\ApiResponse;
use App\Models\Contact;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\SendMessageRequest;
use App\Http\Resources\ContactResource;

class ApiContactController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(SendMessageRequest $request)
    {
        $data = $request->validated();
        $record = Contact::create($data);
        if($record) return ApiResponse::sendResponse(200,'massage sent successfully', new ContactResource($data));
        

        
    }
}
