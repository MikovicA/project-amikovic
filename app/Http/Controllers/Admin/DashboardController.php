<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Models\Narudzbina;

class DashboardController extends Controller
{
    public function index()
    {
        $podaci = Narudzbina::select(DB::raw("DATE(created_at) as datum"), DB::raw("COUNT(*) as broj"))
            ->groupBy('datum')
            ->orderBy('datum')
            ->get();

        $chartData = [['Datum', 'Broj narudžbina']];
        foreach ($podaci as $podatak) {
            $chartData[] = [$podatak->datum, $podatak->broj];
        }

        return view('admin.dashboard', compact('chartData'));
    }
}
