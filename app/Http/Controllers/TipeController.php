<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tipe;
use SoftDeletes;

class TipeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $contents = [
            'tipe' => Tipe::all(),
        ];

        $pagecontent = view('tipe.index',$contents );

        // masterpage
        $pagemain = array(
            'title' => 'Tipe Bangunan',
            'menu' => 'master',
            'submenu' => 'tipe',
            'pagecontent' => $pagecontent
        );
        
        return view('masterpage', $pagemain);
    }

    public function create_page()
    {
        $pagecontent = view('tipe.create');
  
      //masterpage
      $pagemain = array(
          'title' => 'Tipe Bangunan',
          'menu' => 'tipe',
          'submenu' => 'tipe',
          'pagecontent' => $pagecontent,
      );
  
      return view('masterpage', $pagemain);
    }

    public function save_page(Request $request)
    {
        //active
        $active = FALSE;
        if($request->has('active')) {
            $active = TRUE;
        }

        $saveTipe = new Tipe;
        $saveTipe->name = $request->name;
        $saveTipe->active = $active;
        $saveTipe->save();
        // return $saveTipe;
        return redirect('tipe')->with('status_success','Created Tipe bangunan');
    }

    public function update_page(Tipe $tipe){

        $contents = [
            'tipe' => Tipe::find($tipe->idtipe),
        ];

        $pagecontent = view('tipe.update',$contents);
  
      //masterpage
      $pagemain = array(
          'title' => 'Tipe Bangunan',
          'menu' => 'tipe',
          'submenu' => 'tipe',
          'pagecontent' => $pagecontent,
      );
  
      return view('masterpage', $pagemain);
    }

    public function update_save(Request $request,Tipe $tipe){

        // return $request->all();
        //active
        $active = FALSE;
        if($request->has('active')) {
            $active = TRUE;
        }

        $saveTipe = Tipe::find($tipe->idtipe);
        $saveTipe->name = $request->name;
        $saveTipe->active = $active;
        $saveTipe->save();
        // return $saveTipe;
        return redirect('tipe')->with('status_success','Created Tipe bangunan');

    }

}
