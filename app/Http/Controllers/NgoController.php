<?php

namespace App\Http\Controllers;

use App\Models\Ngo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class NgoController extends Controller
{
    /**
     *Display a listing of the ngos
     *
     * @return \Illumiate\Http\Response
     */
    public function index(){
        $ngos = Ngo::all();
        if($ngos->count() > 0){
            return response()->json([
                "status" => "200",
                "ngos" => $ngos
            ], 200);
        }else{
            return response()->json([
                "status" => 404,
                "ngos" => "No Records Found!"
            ], 404);
        }
    }

    /**
     * Store a newly created ngo in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request){
        $validator = Validator::make($request->all(), [
            "name" => "required|string",
            "address" => "required|string|max:255",
            "city" => "required|string|max:255",
            "district" => "required|string|max:255",
            "state" => "string|max:45",
            "zip_code" => "required|string|max:45",
            "country_code" => "required|string|max:3",
        ]);

        if($validator->fails()){
            return response()->json([
                "status" => 422,
                "errors" => $validator->messages()
            ], 422);
        }else{
            $ngo = Ngo::updateOrCreate([
                "name" => $request->name,
                "address"=> $request->address,
                "city" => $request->city,
                "district" => $request->district,
                "state" => $request->state,
                "zip_code" => $request->zip_code,
                "country_code" => $request->country_code,
            ]);
            if($ngo){
                return response()->json([
                    "status" => 200,
                    "message" => "Ngo Created Successfully!"
                ],  200);
            }else{
                return response()->json([
                    "status" => 500,
                    "message" => "Something Went Wrong!"
                ],  500);
            }
        }
    }

    /**
     * Display the specified ngo
     *
     *@param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id){
        $ngo = Ngo::find($id);
        if($ngo){
            return response()->json([
                "status" => 200,
                "ngo" => $ngo
            ], 200);
        }else{
            return response()->json([
                "status" => 404,
                "ngos" => "No Such Ngo Found!"
            ], 404);
        }
    }

    /**
     * Update the specified ngo in store
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, int $id){
        $validator = Validator::make($request->all(), [
            "name" => "required|string",
            "address" => "required|string|max:255",
            "city" => "required|string|max:255",
            "district" => "required|string|max:255",
            "state" => "string|max:45",
            "zip_code" => "required|string|max:45",
            "country_code" => "required|string|max:3",
        ]);

        if($validator->fails()){
            return response()->json([
                "status" => 422,
                "errors" => $validator->messages()
            ], 422);
        }else{

            $ngo = Ngo::find($id);
            if($ngo){
                $ngo->update([
                    "name" => $request->name,
                    "address"=> $request->address,
                    "city" => $request->city,
                    "district" => $request->district,
                    "state" => $request->state,
                    "zip_code" => $request->zip_code,
                    "country_code" => $request->country_code,
                ]);
                return response()->json([
                    "status" => 200,
                    "message" => "Ngo Updated Successfully!"
                ],  200);
            }else{
                return response()->json([
                    "status" => 404,
                    "message" => "No Such Ngo Found!"
                ],  404);
            }
        }
    }

    /**
     * Remove the specified ngo from storage
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id){
        $ngo = Ngo::find($id);
        if($ngo){
            $ngo->delete();

            return response()->json([
                "status" => 200,
                "message" => "Ngo Deleted Successfully!"
            ],  200);
        }else{
            return response()->json([
                "status" => 404,
                "message" => "No Such Ngo Found!"
            ],  404);
        }
    }

}
