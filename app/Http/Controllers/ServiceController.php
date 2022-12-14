<?php

namespace App\Http\Controllers;

use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\DB;
use App\Models\Service;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\Return_;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.services', [
            'services' => Service::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.addService');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'string|required',
            'brief_description' => 'string|required|max:250',
            'full_description' => 'string|required|max:250',
            'image' => 'required|image',
        ]);

        $path = request('image')->store('serviceImageCover', 'public');

        // fit image
        $image = Image::make(public_path("storage/{$path}"))->fit(2497, 971);
        $image->save();

        Service::create([
            'name' => $validated['name'],
            'brief_description' => $validated['brief_description'],
            'full_description' => $validated['full_description'],
            'image' => $path,
        ]);

        return redirect(route('service.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function show(Service $service)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function edit(Service $service)
    {
        return view('admin.editService', [
            'service' => $service,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Service $service)
    {
        $this->authorize('update', $service);

        $validated = $request->validate([
            'name' => 'string|required',
            'brief_description' => 'string|required|max:250',
            'full_description' => 'string|required|max:250',
        ]);

        $service->update($validated);

        return redirect(route('service.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function destroy(Service $service)
    {
        $this->authorize('delete', $service);

        $service->delete();

        return redirect(route('service.index'));
    }
}
