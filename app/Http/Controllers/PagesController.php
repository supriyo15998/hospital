<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\City;
use App\User;
class PagesController extends Controller
{
    public function city(Request $request, $id)
    {
        $city = City::findOrFail($id);
        return view('city')->withCity($city);
    }
    public function beds(Request $request, $id)
    {
        $user = User::findOrFail($id);
        $beds = User::findOrFail($id)->beds;
        //dd($beds);
        return view('beds')->withBeds($beds)->withUser($user);
    }
    public function emergency(Request $request, $id)
    {
        $user = User::findOrFail($id);
        $emergencies = User::findOrFail($id)->emergencies;
        return view('emergencies')->withEmergencies($emergencies)->withUser($user);
    }
    public function departments(Request $request, $id)
    {
        $user = User::findOrFail($id);
        $departments = $user->departments;
        return view('departments')->withUser($user)->withDepartments($departments);
    }
    public function laboratories(Request $request, $id)
    {
        $user = User::findOrFail($id);
        $laboratories = $user->laboratories;
        return view('laboratories')->withUser($user)->withLaboratories($laboratories);
    }
    public function helpdesk(Request $request, $id)
    {
        $user = User::findOrFail($id);
        $helpdesks = $user->helpdesk;
        return view('helpdesk')->withUser($user)->withHelpdesks($helpdesks);
    }
    public function doctors(Request $request, $id)
    {
        $user = User::findOrFail($id);
        $doctors = $user->doctors;
        return view('doctors')->withUser($user)->withDoctors($doctors);
    }
}
