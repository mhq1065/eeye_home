<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Interview;

class ApplicantController extends Controller
{
    /*search xh 
    * @return \Illuminate\Http\Response
    */
    public function index(Interview $interviewModel, $xh)
    {
        $data = $interviewModel
            ->select('name', 'xh', 'time', 'position', 'department')
            ->where('xh', $xh)
            ->get();
        if ($interviewModel->where('xh','=', $xh)->exists()) {
            return response()->json(['state' => 'success', 'data' => $data->toArray()]);
        } else {
            return response()->json(['state' => 'fail']);
        }
    }
}
