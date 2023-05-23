<?php

namespace App\Http\Controllers;

use App\Models\LearningCenter;
use Illuminate\Http\Request;

class LearningCenterController extends Controller
{
    /**
     * Display a list of learning centers
     *
     * @returns \Illuminate\Http\Response
     */
    public function index(){
        $learningCenters = LearningCenter::all();
        if($learningCenters->count() > 0){
            return response()->json([
                "learningCenters" => $learningCenters
            ], 200);
        }else{
            return response()->json([
                "learningCenters" => "No Records Found!"
            ], 404);
        }
    }
}
