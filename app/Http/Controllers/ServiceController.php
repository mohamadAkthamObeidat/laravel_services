<?php

namespace App\Http\Controllers;

use App\Service;
use Illuminate\Support\Facades\DB;


class ServiceController extends Controller
{
    public function index()
    {
        $services = Service::paginate(16);
        return view('dashboard.dashboard', compact('services'));
    }

    public function create($id)
    {
        $sql = DB::table('service')->where('id', $id);
        Proposal::create([
            'service_id' => $id,
            'client_id' => $sql->client_id
        ]);
    }

    public function details($service_id)
    {
        $one_service = Service::findOrFail($service_id);
        return view('/dashboard.details', compact('one_service'));
    }
}
