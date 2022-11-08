<?php

namespace App\Http\Controllers;

use App\Models\Application;
use App\Models\Service;
use App\Models\Therapist;
use Illuminate\Http\Request;
use App\Models\User;
use App\View\Components\application as ComponentsApplication;

class TherapistController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $service_id = $_GET['service_id'];

        return view('therapists', [
            'therapists' => Therapist::with('user')->where('service_id', "$service_id")->get(),
            'service' => Service::find("$service_id"),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $application = Application::find($request->input('id'));

        $therapist = new Therapist;
        $therapist->user()->associate(User::find("$application->user_id"));
        $therapist->application()->associate($application);
        $therapist->service()->associate(Service::where("name", "$application->proficiency")->get()->value('id'));
        $therapist->save();

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Therapist  $therapist
     * @return \Illuminate\Http\Response
     */
    public function show(Therapist $therapist)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Therapist  $therapist
     * @return \Illuminate\Http\Response
     */
    public function edit(Therapist $therapist)
    {
        // 
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Therapist  $therapist
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Therapist $therapist)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Therapist  $therapist
     * @return \Illuminate\Http\Response
     */
    public function destroy(Therapist $therapist)
    {
        //
    }
}
