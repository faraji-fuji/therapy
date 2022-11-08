<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use App\Models\Service;
use App\Models\Therapist;
use App\Models\User;
use Spatie\GoogleCalendar\Event;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Google\Service\Script;

class AppointmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // return view('appointment');
        dd("appointment index");
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('appointment', [
            'therapist_user_id' => $_GET['therapist_user_id'],
            'therapist_id' => $_GET['therapist_id'],
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // fetch client id, email and name
        $user_id = $request->user()->id;
        $user_email = $request->user()->email;
        $user_name = $request->user()->name;

        // fetch therapist id, email and name
        $therapist_user_id = $request->input('therapist_user_id');
        $therapist_name = User::find($therapist_user_id)->name;
        $therapist_email = User::find($therapist_user_id)->email;

        // fetch service name
        $therapist_id = $request->input('therapist_id');
        $service_id = Therapist::find($therapist_id)->service_id;
        $service_name = Service::find($service_id)->name;

        // create event object
        // $event = new Event;

        // define event properties
        $name = "Appointment";
        $description = "Therapist: $therapist_name, $therapist_email  Client: $user_name, $user_email Service: $service_name";
        $startDateTime = Carbon::createFromTimeString($request->input('date') . " " . $request->input('time'));
        $endDateTime = Carbon::createFromTimeString($request->input('date') . " " . $request->input('time'))->addHour();

        // set event properties
        // $event->name = $name;
        // $event->description = $description;
        // $event->startDateTime = $startDateTime;
        // $event->endDateTime = $endDateTime;
        // $event->addAttendee(['email' => 'farajiombonya@gmail.com']);

        // save event in db
        Appointment::create([
            'therapist_id' => "$therapist_id",
            'user_id' => "$user_id",
            'service_id' => "$service_id",

            // event
            'name' => "$name",
            'description' => "$description",
            'startDateTime' => "$startDateTime",
            'endDateTime' => "$endDateTime",
        ]);

        // save event in google calendar
        // $event->save();

        // redirect to previous page
        return redirect()->back()->with('status', "Appointment Is Successful");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Appointment  $appointment
     * @return \Illuminate\Http\Response
     */
    public function show(Appointment $appointment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Appointment  $appointment
     * @return \Illuminate\Http\Response
     */
    public function edit(Appointment $appointment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Appointment  $appointment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Appointment $appointment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Appointment  $appointment
     * @return \Illuminate\Http\Response
     */
    public function destroy(Appointment $appointment)
    {
        //
    }
}
