<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Barber;
use App\facilities;
use App\User;
use App\entries;
use Auth;

class barbercontroller extends Controller
{



// barber area start

  public function view_barbers(){
      $barbers = Barber::all();
      return view('barbers', compact('barbers'));
      }

  public function add_barber(Request $request){
    $data = $request->validate([
      'name'=>'required|max:255',
      'phonenumber'=>'required|max:255',
      'email'=>'required|max:255',
    ]);
    $barbers = new Barber($data);
    $barbers->save();
    return redirect('/table');
  }

  public function ulist_barbers(){
      $barbers = Barber::all();
      return view('ulist', compact('barbers'));
      }


  public function update(Request $request,$id){
    Barber::where('id',$id)->update([
      'name'=>$request->name,
      'phonenumber'=>$request->phonenumber,
      'email'=>$request->email
       ]);
       return redirect('table');
  }

  public function delete($id){
      Barber::where('id',$id)->delete();
      return redirect('table');
      }

// barber area end





// service area start

  public function add_service(Request $request){
      $data = $request->validate([
      'name'=>'required|max:255',
      'price'=>'required|max:255',
        ]);
      $services = new facilities($data);
      $services->save();
      return redirect('/table');
      }

      public function slist_services(){
          $services = facilities::all();
          return view('uslist', compact('services'));
          }

      public function update_service(Request $request,$id){
        facilities::where('id',$id)->update([
          'name'=>$request->name,
          'price'=>$request->price
           ]);
           return redirect('table');
      }

      public function delete_service($id){
        facilities::where('id',$id)->delete();
          return redirect('table');
          }


// service area end










    // entry area start

    public function add_entry_service($id){
      $barbers =Barber::where('id',$id)->get();
      $services = facilities::all();
      return view('add_entry_service',compact('barbers','services'));
    }





    public function add_entry_entry($id1,$id2){
      $barbers = Barber::where('id',$id1)->get()->first();
      $services = facilities::where('id',$id2)->get()->first();
      $entry = new entries;
      $entry->barber=$barbers->name;
      $entry->barber_id=$barbers->id;
      $entry->service=$services->name;
      $entry->service_id=$services->id;
      $entry->price=$services->price;
      $entry->save();
      return redirect('table');
    }




    public function show_entries($id){
        $entries = entries::where('barber_id',$id)->get();
        $total = 0;
        foreach ($entries as $entry){
        $total = $total +$entry->price;
        }



        return view('s_entry', compact('entries','total'));
        }




    public function delete_entry($id){
        entries::where('id',$id)->delete();
        return redirect('table');
        }

// entry area end

}
