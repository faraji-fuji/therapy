<?php

namespace App\Http\Controllers;

use App\Models\Therapist;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Users
        $users = User::where("is_admin", 0)->count();

        // Therapists
        $therapists = Therapist::all()->count();

        // Clients
        $clients = ($users - $therapists);

        // Sessions



        // Complete Sessions

        // Pending Sessions

        return view('admin.admin', [
            'users' => $users,
            'therapists' => $therapists,
            'clients' => $clients,
        ]);
    }
}
