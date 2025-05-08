<?php

namespace Modules\Calendar\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Calendar\Entity\Calendar;

class CalendarController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        return view('calendar::index');
    }

    function data(Request $req)
    {
        $model = Calendar::select();
        return datatables($model)->toJson();
    }

    function row(Request $req)
    {
        return response(Calendar::find($req->id));
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function save(Request $req)
    {
        $req->validate([
            'date_calendar' => 'required|date_format:Y-m-d',
            'event_name' => 'required',
            'actual' => 'required',
            'forecast' => 'required',
            'previous' => 'required'
        ]);

        $model = Calendar::where('id',$req->id)->firstOrNew();

        $model->date_calendar = $req->date_calendar;
        $model->time_calendar = $req->time_calendar;
        $model->event_name = $req->event_name;
        $model->actual = $req->actual;
        $model->forecast = $req->forecast;
        $model->previous = $req->previous;

        if($model->save()) {
            return response(['error' => false]);
        }
    }

    
    public function destroy($id)
    {
        //
    }
}
