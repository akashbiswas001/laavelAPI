<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use App\Models\UploadImgModel;
use Illuminate\Support\Facades\Log;

class UploadImgController extends Controller
{
    // public function UploadImaApi(Request $request)
    // {
    //     try
    //     {
    //         $validator = Validator::make($request->all(), [
    //             'name' => [
    //                 'required',
    //                 'string',
    //                 'max:255',
    //                 'alpha', 
    //             ],
    //             'description' => [
    //                 'required',
    //                 'string',
    //                 'max:255',
    //                 'alpha', 
    //             ],
    //         ], [
    //             'name.required' => 'Please enter name.',
    //             'name.string' => ' name must be a valid string.',
    //             'name.alpha' => ' name must contain only alphabetic characters.',

    //             'description.required' => 'Please enter description.',
    //             'description.string' => 'description must be a valid string.',
    //             'description.alpha' => 'description must contain only alphabetic characters.',
    //         ]);
            
    //         $fieldsToCheck = ['f_name', 'l_name'];
    //         if ($validator->fails()) {
    //             $errors = $validator->errors();
    //             $mainMessage = null;
    //             foreach ($fieldsToCheck as $field) {
    //                 if ($error = $errors->first($field)) {
    //                     $mainMessage = $error;
    //                     break;
    //                 }
    //             }
    //             if (empty($mainMessage)) {
    //                 $mainMessage = 'Validation Error';
    //             }
            
    //             return response()->json([
    //                 'status' => 'false',
    //                 'message' => $mainMessage,
    //                 'errors' => $errors
    //             ], 400);
    //         }
            

    //         $Customer = new UploadImgModel;
    //         $Customer->name = $request->name;
    //         $Customer->description = $request->description;
    //         $Customer = $request->file('image');
    //         if($Customer->hasFile('image')){
    //             $file = $request->file('image');
    //             $path ='https://www.demo604.amrithaa.com/calldriver/public/assets/images/MobileSlider/';
    //             $documentImgName = time() . '.' . $file->getClientOriginalExtension();
    //             $fileName  = $path.$documentImgName;
    //             $file->move('assets/images/', $fileName);
    //         }

    //         $date = date('Y-m-d H:i:s');
    //         if($Customer->save())
    //         {
    //             return response()->json([
    //                 'status' => 'true',
    //                 'message' => 'Registered Successfully',
    //                 'data' => $Customer
    //             ]);
            

    //         }
    //         else
    //         {
    //             return response()->json([
    //                 'status' => 'false',
    //                 'message' => 'Unable to Register'
    //             ]);
    //         }
            
    //     }catch(Exception $e)
    //     {
    //         return response()->json([
    //             'message' => 'Something went wrong!',
    //             'status' => 'false'
    //         ], 500);
    //     }
    // }

   

}
