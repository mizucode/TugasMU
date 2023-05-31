<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Activity;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;

class ActivityController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = Auth::user();
        $activities = $user->activities;
        return view('activities.index', compact('activities'));
    }

    public function create()
    {
        return view('activities.create');
    }

    public function store(Request $request)
    {
        $user = Auth::user();

        $this->validate($request, [
            'NamaKegiatan' => 'required',
            'Deskripsi' => 'required',
            'TanggalMulai' => 'required|date',
            'TanggalSelesai' => 'required|date|after_or_equal:TanggalMulai',
        ]);

        $activity = new Activity([
            'NamaKegiatan' => $request->get('NamaKegiatan'),
            'Deskripsi' => $request->get('Deskripsi'),
            'TanggalMulai' => $request->get('TanggalMulai'),
            'TanggalSelesai' => $request->get('TanggalSelesai'),
        ]);

        ->activities->save($activity); 

        return redirect()->route('activities.index')->with('success', 'Kegiatan berhasil ditambahkan.');
    }
}
