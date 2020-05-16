<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Orders;
use App\Models\Images;
use SoftDeletes;


class OrdersController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){

        $contents = [
            'orders' => Orders::all(),
        ];

        $pagecontent = view('Orders.index',$contents );

        // masterpage
        $pagemain = array(
            'title' => 'Masukan Order Iklan',
            'menu' => 'orders',
            'submenu' => '',
            'pagecontent' => $pagecontent
        );
        
        return view('masterpage', $pagemain);

    }

    public function create_page()
    {
        $contents = [
            'orders' => Orders::all(),
        ];

        $pagecontent = view('Orders.create',$contents);
  
      //masterpage
      $pagemain = array(
          'title' => 'Masukan iklan order',
          'menu' => 'orders',
          'submenu' => '',
          'pagecontent' => $pagecontent,
      );
  
      return view('masterpage', $pagemain);
    }

    public function save_page(Request $request){
        // return $request->all();
        $active = FALSE;
        if($request->has('active')) {
            $active = TRUE;
        }

        $saveOrders = New Orders;
        $saveOrders->name = $request->name;
        $saveOrders->harga = $request->harga;
        $saveOrders->alamat = $request->alamat;
        $saveOrders->description = $request->description;
        $saveOrders->active = $active;
        $saveOrders->save();
        return redirect('orders')->with('status_success','Created New Orders');

        // return $saveOrders;

    }

    public function update_page(Orders $orders){
        $contents = [
            'orders' => Orders::find($orders->idorders),
        ];

        $pagecontent = view('Orders.update',$contents);
  
      //masterpage
      $pagemain = array(
          'title' => 'Update iklan order',
          'menu' => 'orders',
          'submenu' => '',
          'pagecontent' => $pagecontent,
      );
  
      return view('masterpage', $pagemain);

    }
}
