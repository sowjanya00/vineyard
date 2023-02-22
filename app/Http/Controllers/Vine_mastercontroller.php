<?php

namespace App\Http\Controllers;
use App\Models\Vinemaster;

use Illuminate\Http\Request;
use DB;

class Vine_mastercontroller extends Controller
{
    public function index()
{
    // return view('Vine_master');



    $Vine_master =Vinemaster::all();
        
        return view('Vine_master.index',compact(['Vine_master']));

}



public function create()
    { 
        $Vine_master = Vinemaster::all();
        // $department = Department::all();
        $Vine_master = DB::table('Vine_master')->get();
        return view('Vine_master.create',compact(('Vine_master')));
    }
 
    public function store(Request $request)
    {
        $data = $request->all();
        Vinemaster::create($data);
         DB::table('Vine_master')->insert([
            
                 'Vine_name' => $data['Vine_name'],
             'Googleparameters' => $data['Googleparameters'],
             'Url' => $data['Url'],
             'Targetedcustomers' => $data['Targetedcustomers'],
             'Usedcustomers' => $data['Usedcustomers'],
             'Contactperson' => $data['Contactperson'],
            'Mobileno' => $data['Mobileno'],
            'Emailid' => $data['Emailid'],
            'Username' => $data['Username'],
            'Password' => $data['Password']
            



        ]);
        
        
        return redirect('Vine_master')->with('flash_message', 'Vine_master Addedd!');  
        
        
    }
    
    public function show($id)
    {
        $Vine_master =Vinemaster ::find($id);
        return view('Vine_master.show')->with('Vine_master', $Vine_master);
    }
    
    public function edit($id)
    {
         $Vine_master = Vinemaster::find($id);
        // $department = Department::all();
        return view('Vine_master.edit',compact(('Vine_master')))->with('Vine_master', $Vine_master);
    }
  
    
    public function update(Request $request, $id)
    {
        // $department = Department::all();
        $Vine_master = Vinemaster::find($id);
        // $item = Item::find($id);
        $input = $request->all();
        $Vine_master->update($input);

       
        




        // $student->dept_id = $request->dept_id;
    // $item->column_with_dropdown = $request->column_with_dropdown;
    // $student->save();

    // return redirect()->route('student.index');



        return redirect('Vine_master')->with('flash_message', 'Vinemaster Updated!');  
    }
  
    public function destroy($id)
    {
        Vinemaster::destroy($id);
        return redirect('Vine_master')->with('flash_message', 'Vinemaster deleted!');  
    }




}
