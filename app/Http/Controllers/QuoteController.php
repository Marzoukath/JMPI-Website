<?php

namespace App\Http\Controllers;
use App\Models\Quote;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Carbon\Carbon;

class QuoteController extends Controller
{
    //
    public function getDailyQuote()
     {
        $quote = Cache::remember('daily_quote', now()->endOfDay(), function () {
            return Quote::inRandomOrder()->first();
        });
        $currentDate = Carbon::now()->locale('fr')->isoFormat('dddd D MMMM YYYY');

        return view('jmpi-website.index', compact('quote', 'currentDate'));
    }
}