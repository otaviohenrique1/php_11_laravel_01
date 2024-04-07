<?php

namespace App\Http\Controllers;

use App\Models\Serie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SeriesController extends Controller
{
    public function index(Request $request)
    {
        // return $request->get('id');
        // return $request->url();
        // return $request->method();
        // return response('', 302, ['location' => 'https://google.com']);
        // return redirect('https://google.com');

        $series = Serie::all();
        // $series = DB::select('SELECT * FROM series;');

        // $series = [
        //     'Punisher',
        //     'Lost',
        //     'Grey\'s Anatomy'
        // ];

        // $html = '<ul>';
        // foreach ($series as $serie) {
        //     $html .= "<li>$serie</li>";
        // }
        // $html .= '</ul>';
        // return $html;
        // return view('listar-series', [
        //     'series' => $series
        // ]);
        // return view('listar-series', compact('series'));
        // return view('listar-series')->with('series', $series);
        return view('series.index')->with('series', $series);
    }

    public function create(Request $request)
    {
        return view('series.create');
    }

    public function store(Request $request) {
        $nomeSerie = $request->input('nome');
        $serie = new Serie();
        $serie->nome = $nomeSerie;
        $serie->save();
        // DB::insert('INSERT INTO series (nome) VALUES (?);', [$nomeSerie]);
        return redirect('/series');
    }
}
