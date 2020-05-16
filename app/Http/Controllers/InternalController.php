<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Internal;
use SoftDeletes;

class InternalController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $contents = [
            'internal' => Internal::all(),
        ];

        $pagecontent = view('internal.index',$contents );

        // masterpage
        $pagemain = array(
            'title' => 'Fasilitas Internal',
            'menu' => 'master',
            'submenu' => 'internal',
            'pagecontent' => $pagecontent
        );
        
        return view('masterpage', $pagemain);
    }
    
    public function create_page()
    {
        $pagecontent = view('internal.create');
  
      //masterpage
      $pagemain = array(
          'title' => 'Fasilitas Internal',
          'menu' => 'internal',
          'submenu' => 'internal',
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

        $saveInternal = new Internal;
        $saveInternal->name = $request->name;
        $saveInternal->active = $active;
        $saveInternal->save();
        return redirect('internal')->with('status_success','Created Fasilitas Internal');
    }

    public function update_page(Internal $internal){

        $contents = [
            'internal' => Internal::find($internal->idinternal),
        ];

        $pagecontent = view('internal.update',$contents);
  
      //masterpage
      $pagemain = array(
          'title' => 'Fasilitas Internal',
          'menu' => 'internal',
          'submenu' => 'internal',
          'pagecontent' => $pagecontent,
      );
  
      return view('masterpage', $pagemain);
    }

    public function update_save(Request $request, Internal $internal)
    {

        // return $request->all();
        //active
        $active = FALSE;
        if($request->has('active')) {
            $active = TRUE;
        }

        $saveInternal = Internal::find($internal->idinternal);
        $saveInternal->name = $request->name;
        $saveInternal->active = $active;
        $saveInternal->save();
        return redirect('internal')->with('status_success','Updated Fasilitas Internal');
    }
}
