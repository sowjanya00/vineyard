<?php

namespace App\Http\Controllers;
use App\Models\Vineoffer;
use App\Models\Vinemaster;

use Illuminate\Http\Request;
use DB;

class Vine_offercontroller extends Controller
{
    public function index()
{
    // return view('Vine_master');


    $Vine_master =Vinemaster::all();
    $Vine_offer =Vineoffer::all();
        
        return view('Vine_offer.index',compact(['Vine_offer']));

}



public function create()
    { 
        $Vine_offer = Vineoffer::all();
        // $department = Department::all();
        $Vine_master = DB::table('Vine_master')->get();
        return view('Vine_offer.create',compact(('Vine_master')));
    }
 
    public function store(Request $request)
    {
        $data = $request->all();
        Vineoffer::create($data);
         DB::table('Vine_offer')->insert([
            
                 'Vine_name' => $data['Vine_name'],
             'Offer_mobileno' => $data['Offer_mobileno'],
             'Offer_details' => $data['Offer_details'],
             'Valid_upto' => $data['Valid_upto']
             
            



        ]);
        
        
        return redirect('Vine_offer')->with('flash_message', 'Vine_offer Addedd!');  
        
        
    }
    
    public function show($id)
    {
        $Vine_offer =Vineoffer ::find($id);
        return view('Vine_offer.show')->with('Vine_offer', $Vine_offer);
    }
    
    public function edit($id)
    {
         $Vine_offer = Vineoffer::find($id);
        // $department = Department::all();
        return view('Vine_offer.edit',compact(('Vine_offer')))->with('Vine_offer', $Vine_offer);
    }
  
    
    public function update(Request $request, $id)
    {
        // $department = Department::all();
        $Vine_offer = Vineoffer::find($id);
        // $item = Item::find($id);
        $input = $request->all();
        $Vine_offer->update($input);

       
        




        // $student->dept_id = $request->dept_id;
    // $item->column_with_dropdown = $request->column_with_dropdown;
    // $student->save();

    // return redirect()->route('student.index');



        return redirect('Vine_offer')->with('flash_message', 'Vineoffer Updated!');  
    }
  
    public function destroy($id)
    {
        Vineoffer::destroy($id);
        return redirect('Vine_offer')->with('flash_message', 'Vineoffer deleted!');  
    }



}
