<?php

namespace App\Http\Controllers;

use Intervention\Image\Facades\Image;
use App\Models\Testimonial;
use Illuminate\Http\Request;
use App\Models\Service;

class TestimonialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('testimonial.create', [
            'services' => Service::all(),
            'user' => auth()->user(),
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
        // validate request
        $validated = $request->validate([
            'service_id' => 'string|required',
            'customUsername' => 'string|required',
            'testimonial' => 'string|required',
            'avatar' => 'required',
        ]);

        // store avatar file
        $path = request('avatar')->store('testimonialAvatar', 'public');

        // fit avatar
        $image = Image::make(public_path("storage/{$path}"))->fit(400, 400);
        $image->save();

        // store request
        Testimonial::create([
            'user_id' => $request->user()->id,
            'service_id' => $validated['service_id'],
            'customUsername' => $validated['customUsername'],
            'testimonial' => $validated['testimonial'],
            'avatar' => $path,
        ]);

        return redirect(route('profile'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Testimonial  $testimonial
     * @return \Illuminate\Http\Response
     */
    public function show(Testimonial $testimonial)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Testimonial  $testimonial
     * @return \Illuminate\Http\Response
     */
    public function edit(Testimonial $testimonial)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Testimonial  $testimonial
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Testimonial $testimonial)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Testimonial  $testimonial
     * @return \Illuminate\Http\Response
     */
    public function destroy(Testimonial $testimonial)
    {
        //
    }
}
