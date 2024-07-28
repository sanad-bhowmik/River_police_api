<?php

namespace App\Http\Controllers;

use App\Models\Division;
use App\Models\Faq;
use App\Models\Service;
use App\Models\Thana;
use Illuminate\Http\Request;

class DivisionController extends Controller
{
    public function index()
    {
        $divisions = Division::all();

        return response()->json([
            'message' => 'Divisions retrieved successfully.',
            'divisions' => $divisions
        ], 200);
    }


    public function getAllDivisionsAndDistricts($division_id = null)
    {
        if ($division_id) {
            $divisions = Division::with('districts')->where('id', $division_id)->get();
        } else {
            $divisions = Division::with('districts')->get();
        }

        $result = [];

        foreach ($divisions as $division) {
            $divisionData = [
                'id' => $division->id,
                'name' => $division->name,
                'created_at' => $division->created_at,
                'updated_at' => $division->updated_at,
                'districts' => []
            ];

            foreach ($division->districts as $district) {
                $divisionData['districts'][] = [
                    'id' => $district->id,
                    'division_id' => $district->division_id,
                    'district_name' => $district->district_name,
                    'created_at' => $district->created_at,
                    'updated_at' => $district->updated_at,
                ];
            }

            $result[] = $divisionData;
        }

        return response()->json([
            'message' => 'Divisions and districts retrieved successfully.',
            'divisions' => $result
        ], 200);
    }


    public function getAllThanas($district_id = null)
    {
        if ($district_id) {
            $thanas = Thana::with(['division', 'district'])->where('district_id', $district_id)->get();
        } else {
            $thanas = Thana::with(['division', 'district'])->get();
        }

        $result = [];

        foreach ($thanas as $thana) {
            $result[] = [
                'id' => $thana->id,
                'thana' => $thana->thana,
                'number' => $thana->number,
                'created_at' => $thana->created_at,
                'updated_at' => $thana->updated_at,
                // 'division' => [
                //     'id' => $thana->division->id,
                //     'name' => $thana->division->name,
                //     'created_at' => $thana->division->created_at,
                //     'updated_at' => $thana->division->updated_at,
                // ],
                'district' => [
                    'id' => $thana->district->id,
                    'name' => $thana->district->district_name,
                    'created_at' => $thana->district->created_at,
                    'updated_at' => $thana->district->updated_at,
                ],
            ];
        }

        return response()->json([
            'message' => 'Thanas retrieved successfully.',
            'thanas' => $result,
        ], 200);
    }

    public function getAllServices()
    {
        $services = Service::all();

        return response()->json([
            'message' => 'Services retrieved successfully.',
            'services' => $services,
        ], 200);
    }

    public function getAllFaqs()
    {
        $faqs = Faq::all();

        return response()->json([
            'message' => 'FAQs retrieved successfully.',
            'faqs' => $faqs
        ], 200);
    }
}
