<?php



namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;


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
        if (Auth::check()) {
            $user = Auth::user();
            $activities = $user->activities;
            return view('activities.index', compact('activities'));
        } else {
            // Pengguna tidak terautentikasi, tambahkan logika penanganan kasus yang sesuai di sini
            return redirect()->route('login')->with('error', 'Anda harus login untuk mengakses halaman ini.');
        }
    }

    public function store(Request $request)
    {
        if (Auth::check()) {
            $user = Auth::user();

            // Kode validasi dan pembuatan aktivitas

            $activity = new Activity([
                'NamaKegiatan' => $request->get('NamaKegiatan'),
                'Deskripsi' => $request->get('Deskripsi'),
                'TanggalMulai' => $request->get('TanggalMulai'),
                'TanggalSelesai' => $request->get('TanggalSelesai'),
            ]);

            $user->activities->save($activity);

            return redirect()->route('activities.index')->with('success', 'Kegiatan berhasil ditambahkan.');
        } else {
            // Pengguna tidak terautentikasi, tambahkan logika penanganan kasus yang sesuai di sini
            return redirect()->route('login')->with('error', 'Anda harus login untuk mengakses halaman ini.');
        }
    }
}
