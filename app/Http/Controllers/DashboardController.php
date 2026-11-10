<?php

namespace App\Http\Controllers;

use Illuminate\Http\Client\ConnectionException;
use Illuminate\Support\Facades\Http;
use App\Models\book;
use App\Models\member;
use App\Models\loan;

class DashboardController extends Controller
{
    public function index()
    {
        $stats = [
            'total_buku'       => book::count(),
            'total_anggota'    => Member::count(),
            'peminjaman_aktif' => Loan::where('status', 'aktif')->count(), 
        ];

        try {
            $response = Http::get(config('services.internal_api.base_url').'/api/stats');

            if ($response->successful()) {
                $stats = $response->json();
            }
        } catch (ConnectionException $e) {
            // Server internal API (port 8011) tidak bisa dihubungi - statistik tetap tampil nol.
        }

        return view('dashboard', compact('stats'));
    }
}