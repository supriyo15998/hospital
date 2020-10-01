<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\City;
use App\Hospital;
use App\Department;
use App\Bed;
use App\Doctor;
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
        $cityCount = City::count();
        $bedCount = Bed::count();
        $departmentCount = Department::count();
        $doctorsCount = Doctor::count();
        return view('admin.index')->withDoctorsCount($doctorsCount)->withDepartmentCount($departmentCount)->withHospitalCount($hospitalCount)->withCityCount($cityCount)->withBedCount($bedCount);
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
    
    public function adddepartment()
    {
        $hospitals = Hospital::all();
        return view('admin.adddepartment')->withHospitals($hospitals);
    }
    public function postdepartment(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'hospital_id' => 'required|not_in:-1'
        ]);
        //dd($validatedData);
        $department = Department::create($validatedData);
        return redirect('/admin/home')->with('message', 'Department Added Successfully');
    }
    public function adddoctor()
    {
        $hospitals = Hospital::all();
        return view('admin.adddoctor')->withHospitals($hospitals);
    }
    public function postdoctor(Request $request)
    {
        $validatedData = $request->validate([
            'hospital_id'=> 'required|not_in:-1',
            'name' => 'required',
            'qualification' => 'required',
            'specialization' => 'required',
            'phone' => 'required',
            'opd_day' => 'required|not_in:-1',
            'opd_time' => 'required'
        ]);
        // dd($validatedData);
        $doctor = Doctor::create($validatedData);
        return redirect('/admin/home')->with('message', 'Doctor Added Successfully');
    }
    public function viewdoctors()
    {
        $hospitals = Hospital::all();
        return view('admin.viewdoctors')->withHospitals($hospitals);
    }
}
