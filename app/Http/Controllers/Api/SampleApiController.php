<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SampleApiController extends Controller
{
    /**
     * Handle the GET request and return sample JSON.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function getSampleData()
    {
        $data = [
            'status' => 'success',
            'message' => 'Sample API response',
            'data' => [
                'id' => 1,
                'name' => 'John Doe',
                'email' => 'johndoe@example.com',
            ],
        ];

        return response()->json($data);
    }
}
