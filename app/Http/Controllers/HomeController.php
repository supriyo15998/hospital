<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\City;
use App\Hospital;
use App\Department;
use App\Bed;
use App\Doctor;
use App\Emergency;
use App\Laboratory;
use App\HelpDesk;
use Auth;
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
        $bedCount = Auth::user()->beds->count();
        $departmentCount = Auth::user()->departments->count();
        $doctorsCount = Auth::user()->doctors->count();
        $labCount = Auth::user()->laboratories->count();
        $emergencyCount = Auth::user()->emergencies->count();
        $helpCount = Auth::user()->helpdesk->count();
        return view('admin.index')->withHelpCount($helpCount)->withEmergencyCount($emergencyCount)->withLabCount($labCount)->withDoctorsCount($doctorsCount)->withDepartmentCount($departmentCount)->withBedCount($bedCount);
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
        // $user = Auth::user();
        // //dd($user);
        return view('admin.viewhospitals');
    }
    public function addbeds()
    {
        return view('admin.addbeds');
    }
    public function postbeds(Request $request)
    {
        $validatedData = $request->validate([
            'bed_type' => 'required',
            'capacity' => 'required',
            'total_capacity' => 'required',
        ]);
        $validatedData['user_id'] = Auth::user()->id;
        //dd($validatedData);
        $bed = Bed::create($validatedData);
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
        ]);
        $validatedData['user_id'] = Auth::user()->id;
        //dd($validatedData);
        $department = Department::create($validatedData);
        // $department->update(['user_id' => Auth::user()->id]);
        return redirect('/admin/home')->with('message', 'Department Added Successfully');
    }
    public function adddoctor()
    {
        return view('admin.adddoctor');
    }
    public function postdoctor(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'qualification' => 'required',
            'specialization' => 'required',
            'phone' => 'required',
            'opd_day' => 'required|not_in:-1',
            'opd_time' => 'required'
        ]);
        $validatedData['user_id'] = Auth::user()->id;
        //dd($validatedData);
        $doctor = Doctor::create($validatedData);
        return redirect('/admin/home')->with('message', 'Doctor Added Successfully');
    }
    public function viewdoctors()
    {
        return view('admin.viewdoctors');
    }
    public function addemergency()
    {
        return view('admin.addemergency');
    }
    public function postemergency(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required'
        ]);
        $validatedData['user_id'] = Auth::user()->id;
        //dd($validatedData);
        $emergency = Emergency::create($validatedData);
        return redirect('/admin/home')->with('message', 'Emergency service Added Successfully');
    }
    public function addlab()
    {
        return view('admin.addlab');
    }
    public function postlab(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required'
        ]);
        $validatedData['user_id'] = Auth::user()->id;
        //dd($validatedData);
        $laboratory = Laboratory::create($validatedData);
        return redirect('/admin/home')->with('message', 'Laboratory Added Successfully');
    }
    public function addhelp()
    {
        return view('admin.addhelp');
    }
    public function posthelp(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'phone' => 'required'
        ]);
        $validatedData['user_id'] = Auth::user()->id;
        //dd($validatedData);
        $HelpDesk = HelpDesk::create($validatedData);
        return redirect('/admin/home')->with('message', 'HelpDesk Added Successfully');
    }
}
