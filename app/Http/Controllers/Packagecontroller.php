<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Packagemodel;
use App\Models\CustomerModel;
use App\Models\UserModel;
        use Illuminate\Support\Facades\Auth;

class Packagecontroller extends Controller
{
    function customer(){
        $cus = CustomerModel::orderby('id')->get();

        if (Auth::check() && Auth::user()->role === 'admin') {
          return view('pages.customer',compact('cus'));
         }
         return redirect('/booking');

        }
    
    function package(){
    $pack = Packagemodel::orderby('id')->get();
    if (Auth::check() && Auth::user()->role === 'admin') {

        return view('pages.package', compact('pack'));
    }
    return redirect('/booking');

}
    function booking(){
        $pack = Packagemodel::orderby('id')->get();
        return view('sites.booking', compact('pack'));

        }


function addpackage(Request $request){
$pack = new Packagemodel;
$pack->name=$request['name'];
$pack->photo=$request['photo'];
$pack->price=$request['price'];
$pack->desc=$request['desc'];
$pack->save();
return redirect('/package');
    }

function delete($id){
    $pack = Packagemodel::find($id);
    if(! is_null($pack)){
        $pack->delete();
        return redirect('package');
    }
}
function update($id , Request $request){
    $pack = Packagemodel::find($id);
    if(! is_null($pack)){
        $pack->name=$request['name'];
$pack->photo=$request['photo'];
$pack->price=$request['price'];
$pack->desc=$request['desc'];
$pack->save();

         return redirect('package');
    }
}

function updates($id) {
    $pack = Packagemodel::find($id);
 
    if (!is_null($pack)) {
        return view('pages.update',compact('pack', 'id'));
    }
}

public function pack(){
    $pack = Packagemodel::orderby('id')->get();
    return view('packages', compact('pack'));
}

public function add_customer(Request $request)
{
    $cus = new CustomerModel;
    $cus->destination = $request['destination'];
    $cus->total = $request['total'];
    $cus->phone = $request['phone'];
    $cus->date = $request['date'];
    $cus->name = $request['name'];

    $cus->save();

    // Set a success message in the session
    return redirect('booking')->with('success', ' Booking added successfully!');
}
function updatetotal(Request $request, $id){
   $data = CustomerModel::find($id); 

   $data->total = $request['total'];
   $data->save();
   return redirect('/customer')->with('success', ' Successfully updated Updated');
}
}