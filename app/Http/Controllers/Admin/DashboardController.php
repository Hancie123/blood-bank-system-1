<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\BloodDonor;
use App\Models\ContactUs;
use App\Models\RequestBlood;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function index()
    {
        $bloodDonorCount = BloodDonor::count();


        $days = collect(range(0, 6))->map(function ($i) {
            $date = Carbon::now()->subDays(6 - $i)->toDateString(); // '2025-07-03' etc.
            return [
                'label' => Carbon::parse($date)->format('D'), // 'Thu', 'Fri', ...
                'date' => $date
            ];
        });

        $donorsPerDay = BloodDonor::select(
            DB::raw('DATE(created_at) as date'),
            DB::raw('COUNT(*) as total')
        )
            ->where('created_at', '>=', Carbon::now()->subDays(6)->startOfDay())
            ->groupBy('date')
            ->pluck('total', 'date');

        $chartData = $days->map(function ($day) use ($donorsPerDay) {
            return [
                'x' => $day['label'],
                'y' => $donorsPerDay[$day['date']] ?? 0
            ];
        });

        $requestBloodCount = RequestBlood::count();

        $requestsPerDay = RequestBlood::select(
            DB::raw('DATE(created_at) as date'),
            DB::raw('COUNT(*) as total')
        )
            ->where('created_at', '>=', Carbon::now()->subDays(6)->startOfDay())
            ->groupBy('date')
            ->pluck('total', 'date');

        $requestChartData = $days->map(function ($day) use ($requestsPerDay) {
            return $requestsPerDay[$day['date']] ?? 0;
        });

        $countUsCount = ContactUs::count();

        $contactsPerDay = ContactUs::select(
            DB::raw('DATE(created_at) as date'),
            DB::raw('COUNT(*) as total')
        )
            ->whereDate('created_at', '>=', Carbon::now()->subDays(6)->startOfDay())
            ->groupBy('date')
            ->pluck('total', 'date'); // ['2025-07-03' => 3, ...]

        // Build chart data using $days (x = label, y = count)
        $contactChartData = $days->map(function ($day) use ($contactsPerDay) {
            return [
                'x' => $day['label'],
                'y' => $contactsPerDay[$day['date']] ?? 0,
                'fillColor' => '#06AED4'
            ];
        });



        $monthlyCounts = DB::table('blood_donors')
            ->selectRaw('MONTH(created_at) as month, COUNT(*) as count')
            ->groupBy('month')
            ->orderBy('month')
            ->get();

        // Prepare chart data
        $months = [];
        $counts = [];

        foreach ($monthlyCounts as $data) {
            $months[] = Carbon::create()->month($data->month)->format('M'); // Jan, Feb, etc.
            $counts[] = $data->count;
        }

        $monthlyDonorChartData = [
            'categories' => $months,
            'series' => $counts
        ];


         $monthlyRequestCounts = DB::table('request_bloods')
            ->selectRaw('MONTH(created_at) as month, COUNT(*) as count')
            ->groupBy('month')
            ->orderBy('month')
            ->get();

        // Prepare chart data
        $months2 = [];
        $counts2 = [];

        foreach ($monthlyRequestCounts as $data) {
            $months2[] = Carbon::create()->month($data->month)->format('M'); // Jan, Feb, etc.
            $counts2[] = $data->count;
        }

        $monthlyRequestChartData = [
            'categories' => $months2,
            'series' => $counts2
        ];


        return view('admin.dashboard.dashboard', compact(
            'bloodDonorCount',
            'chartData',
            'requestBloodCount',
            'requestChartData',
            'countUsCount',
            'contactChartData',
            'monthlyDonorChartData',
            'monthlyRequestChartData'
        ));
    }
}