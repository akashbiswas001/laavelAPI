<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use App\Models\UploadImgModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;


class ApiController extends Controller
{
    // public function UploadImaApi(Request $request)
    // {
    //     try {
    //         $validator = Validator::make($request->all(), [
    //             'title' => 'required|string|max:255',
    //             'description' => 'required|string|max:255',
    //             'image' => 'required|image|mimes:jpeg,png,jpg,gif',
    //         ], [
    //             'title.*' => 'Please Enter Image Title',
    //             'description.*' => 'Please Enter Image Title',
    //             'image.required' => 'Please upload an image.',
    //             'image.image' => 'Uploaded file is not an image.',
    //             'image.mimes' => 'Allowed image formats: jpeg, png, jpg, gif.',
    //         ]);
    
    //         if ($validator->fails()) {
    //             return response()->json([
    //                 'status' => 'false',
    //                 'errors' => $validator->errors(),
    //             ], 400);
    //         }
    
    //         $customer = new UploadImgModel;
    //         $customer->name = $request->title;
    //         $customer->description = $request->description;
    
    //         if ($request->hasFile('image')) {
    //             $file = $request->file('image');
    //             $path = 'assets/images/';
    //             $documentImgName = time() . '.' . $file->getClientOriginalExtension();
    //             $fileName = $path . $documentImgName;
    //             $file->move('assets/images/', $fileName);
    //             $customer->image = $fileName; 
    //         }
    
    //         if ($customer->save()) {
    //             return response()->json([
    //                 'status' => 'true',
    //                 'message' => 'Image Uploaded Successfully',
    //                 'data' => $customer,
    //             ]);
    //         } else {
    //             return response()->json([
    //                 'status' => 'false',
    //                 'message' => 'Unable to Uploaded Image',
    //             ]);
    //         }
    //     } catch (Exception $e) {
    //         return response()->json([
    //             'message' => 'Something went wrong!',
    //             'status' => 'false',
    //         ], 500);
    //     }
    // }

    public function UploadImaApi(Request $request)
    {
        $title       = $request->input('title');
        $description = $request->input('description');
        $image       = $request->input('image');

        $rules = [
            'title'        => 'required|string|max:255',
            'description'  => 'required|string|max:255',
            'image'        => 'required|image|mimes:jpeg,png,jpg,gif',
        ];

        $validator = Validator::make($request->all(), $rules);
        if (!$validator->fails()) {
            
            $img = new UploadImgModel;
            $img->image_name = $request->title;
            $img->image_description = $request->description;
    
            if ($request->hasFile('image')) {
                $file = $request->file('image');
                $path = 'http://127.0.0.1:8000/assets/images/';
                $ImgName = time() . '.' . $file->getClientOriginalExtension();
                $fileName = $path . $ImgName;
                $file->move('assets/images/', $fileName);
                $img->image_url = $fileName; 
            }
    
            if ($img->save()) {
                return response()->json([
                    'status' => 1,
                    'message' => 'Image Uploaded Successfully',
                ]);
            }else {
                return response()->json([
                    'status' => 0,
                    'message' => 'Unable to Uploaded Image',
                ]);
            }
        } else {
            return response()->json(['status_code' => 2, 'message' => $validator->errors()->first()]);
        }
    }
    
    public function Getimage(Request $request)
    {
        try
        {
            $data = DB::select("SELECT * FROM image");

            if (!empty($data)) {
                return response()->json([
                    'status' => 'true',
                    'data' => $data
                ]);
            } else {
                return response()->json([
                    'status' => 'false',
                    'data' => $data
                ]);
            }
        } catch (Exception $e) {
            return response()->json([
                'message' => 'Something went wrong!',
                'status' => 'false'
            ], 500);
        }
    }

   
}
