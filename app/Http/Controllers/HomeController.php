<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\City;
use App\Hospital;
use App\Bed;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $hospitalCount = Hospital::count();
        return view('admin.index')->withHospitalCount($hospitalCount);
    }
    public function addhospital()
    {
        $cities = City::all();
        return view('admin.addhospital')->withCities($cities);
    }
    public function posthospital(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'city_id' => 'required|not_in:-1'
        ]);
        // dd($validatedData);
        $hospital = Hospital::create($validatedData);
        return redirect('/admin/home')->with('message', 'Hospital Added Successfully');
    }
    public function viewhospitals()
    {
        $hospitals = Hospital::all();
        return view('admin.viewhospitals')->withHospitals($hospitals);
    }
    public function addbeds()
    {
        $hospitals = Hospital::all();
        return view('admin.addbeds')->withHospitals($hospitals);
    }
    public function postbeds(Request $request)
    {
        $validatedData = $request->validate([
            'hospital_id' => 'required|not_in:-1',
            'bed_type' => 'required',
            'capacity' => 'required',
        ]);
        // dd($validatedData);
        $beds = Bed::create($validatedData);
        return redirect('/admin/home')->with('message', 'Bed Added Successfully');
    }
    public function viewbeds()
    {
        $hospitals = Hospital::all();
        return view('admin.viewbeds')->withHospitals($hospitals);
    }
}
