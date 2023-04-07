<?php

namespace Mlk\Panel\Http\Controllers;

use App\Http\Controllers\Controller;

//use Mlk\Panel\Models\Panel;
//use Mlk\Panel\Repositories\PanelRepo;
//use Mlk\Share\Http\Controllers\Controller;

class PanelController extends Controller
{
    public function index()
    {
//        $this->authorize('index', Panel::class);
//        return view('Panel::index', compact('panelRepo'));
        return view('Panel::index',['panelRepo'=>'']);
    }
}
