<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\mailformat;
use Illuminate\Support\Facades\Mail;
use App\Order;
use Illuminate\Support\Facades\DB;

class AirConditionerController extends Controller
{
    public function sendmail(Request $request){

      //  Mail::to('coldmanklima@gmail.com')->send(new mailformat($request->sendername,$request->sendermail,$request->sendernumber,$request->sendertext));
      $request->validate([
          'sendername' => 'required|min:5',
          'sendernumber'  => 'required|min:5',
          'sendermail' => 'required|min:5',
          'sendertext' => 'required|min:5'
      ]);
        $order =new Order([
            'name' => $request->sendername,
            'number' => $request->sendernumber,
            'mail' => $request->sendermail,
            'text' => $request->sendertext,
        ]);
        $order->save();
        return redirect()->back()->with('success','Siker');
    }
    public function getadmin(){
        return view('admin.admin');
    }
    public function login(Request $request){
        $request->validate([
            'mail' => 'email|required|min:3',
            'password' => 'required|min:3'
        ]);
        if ($request->mail == "coldmanklima@gmail.com" && $request->password == "nonor1975") {
                return redirect()->back()->with("siker",true)->with("orders",Order::all());
        }
        return redirect()->back()->with("siker",false)->with("sikertelen","Helytelen jelszó vagy e-mail");
    }
    public function deleteorder($id){
         DB::table('orders')->where('id',$id)->delete();
        return redirect()->back()->with("siker",false);
    }
    public function back(){
        return redirect()->back()->with("siker",false);
    }

}
