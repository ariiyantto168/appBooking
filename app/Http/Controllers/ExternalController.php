<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\External;
use SoftDeletes;


class ExternalController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $contents = [
            'external' => External::all(),
        ];

        $pagecontent = view('external.index',$contents );

        // masterpage
        $pagemain = array(
            'title' => 'Fasilitas External',
            'menu' => 'master',
            'submenu' => 'external',
            'pagecontent' => $pagecontent
        );
        
        return view('masterpage', $pagemain);
    }

    public function create_page()
    {
        $pagecontent = view('external.create');
  
      //masterpage
      $pagemain = array(
          'title' => 'Fasilitas External',
          'menu' => 'external',
          'submenu' => 'external',
          'pagecontent' => $pagecontent,
      );
  
      return view('masterpage', $pagemain);
    }

    public function save_page(Request $request)
    {

        // return $request->all();
        //active
        $active = FALSE;
        if($request->has('active')) {
            $active = TRUE;
        }

        $saveExternal = new External;
        $saveExternal->name = $request->name;
        $saveExternal->active = $active;
        $saveExternal->save();
        return redirect('external')->with('status_success','Created Fasilitas External');
    }

    public function update_page(External $external){

        $contents = [
            'external' => External::find($external->idexternal),
        ];

        $pagecontent = view('external.update',$contents);
  
      //masterpage
      $pagemain = array(
          'title' => 'Fasilitas External',
          'menu' => 'external',
          'submenu' => 'external',
          'pagecontent' => $pagecontent,
      );
  
      return view('masterpage', $pagemain);
    }

    public function update_save(Request $request, External $external)
    {

        // return $request->all();
        //active
        $active = FALSE;
        if($request->has('active')) {
            $active = TRUE;
        }

        $saveExternal = External::find($external->idexternal);
        $saveExternal->name = $request->name;
        $saveExternal->active = $active;
        $saveExternal->save();
        return redirect('external')->with('status_success','Updated Fasilitas External');
    }


}
