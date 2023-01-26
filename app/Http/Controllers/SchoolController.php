<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\School;

class SchoolController extends Controller
{
    public function getInauguratedSchool()
    {
        $school = DB::table('school')
                ->select('id', 'school_name', 'inaugurated_date')
                ->get();

        return response()->json([
            'status' => (bool) $school,
            'message' => 'Data has been retrieved successfully',
            'data' => $school
        ], 200);
    }

    public function index()
    {
        $schools = School::all();
        return view('filter.filter', compact('schools'));
    }

    public function filterpost(Request $request)
    {
        $schools = School::where('inaugurated_date','>=',$request->start_date)
                                    ->where('inaugurated_date','<=',$request->end_date)
                                    ->get();
        // dd($sales_reports);
        return view('filter.filter', compact('schools'));
    }
}
