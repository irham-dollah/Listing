<?php

namespace App\Http\Controllers;

use App\Charts\UserChart;
use Illuminate\Http\Request;
use App\Sale;
use App\Item;
use Carbon\Carbon;

class UserChartController extends Controller
{
    private $dailyCapital=0.00;
    private $dailySale=0.00;
    private $dailyProfit=0.00;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $borderColors = [
            "rgba(255, 99, 132, 1.0)",
            "rgba(22,160,133, 1.0)",
            "rgba(255, 205, 86, 1.0)",
            "rgba(51,105,232, 1.0)",
            "rgba(244,67,54, 1.0)",
            "rgba(34,198,246, 1.0)",
            "rgba(153, 102, 255, 1.0)",
            "rgba(255, 159, 64, 1.0)",
            "rgba(233,30,99, 1.0)",
            "rgba(205,220,57, 1.0)"
        ];
        $fillColors = [
            "rgba(255, 99, 132, 0.2)",
            "rgba(22,160,133, 0.2)",
            "rgba(255, 205, 86, 0.2)",
            "rgba(51,105,232, 0.2)",
            "rgba(244,67,54, 0.2)",
            "rgba(34,198,246, 0.2)",
            "rgba(153, 102, 255, 0.2)",
            "rgba(255, 159, 64, 0.2)",
            "rgba(233,30,99, 0.2)",
            "rgba(205,220,57, 0.2)"

        ];
        $usersChart = new UserChart;
        $usersChart->minimalist(true);
        $usersChart->labels(['Capital', 'Sale', 'Profit'])
                   ->height(300)
                   ->displayLegend('Capital', 'Sale', 'Profit');

        $sales=Sale::whereDate('created_at', Carbon::today())->get();
        foreach ($sales as $sale) {
            // (double)$this->dailySale += (double)$sale->price;
            (double)$this->dailySale += number_format((double)$sale->price, 2, '.', '');
            $item=Item::find($sale->item_id);
            // (double)$this->dailyCapital += (double)($item->buying_price * $sale->quantity);
            (double)$this->dailyCapital += number_format((double)($item->buying_price * $sale->quantity), 2, '.', '');
        }
        // (double)$this->dailyProfit = (double)$this->dailySale - (double)$this->dailyCapital;
        (double)$this->dailyProfit = number_format((double)$this->dailySale - (double)$this->dailyCapital, 2, '.', '');
        $items=Item::all();
        $date=Carbon::today();
        $usersChart
            ->dataset('Sales by Day', 'doughnut', [$this->dailyCapital, $this->dailySale, $this->dailyProfit])
            ->color($borderColors)
            ->backgroundcolor($fillColors);
        return view('Dashboard', compact('usersChart','items','date'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
