<?php

namespace App\Http\Controllers;
use App\Models\Vineuser;
use App\Models\Vinemaster;
use Illuminate\Http\Request;
use DB;

class Vine_usercontroller extends Controller
{
    public function index()
    {
        // return view('Vine_master');
    
    
        $Vine_master = Vinemaster::all();
        $Vine_user =Vineuser::all();
            
            return view('Vine_user.index',compact(['Vine_user']));
    
    }
    
    
    
    public function create()
        { 
            $Vine_user = Vineuser::all();
            // $Vine_master = Vinemaster::all();
            // $department = Department::all();
            $Vine_master = DB::table('Vine_master')->get();
            return view('Vine_user.create',compact(('Vine_master')));
        }
     
        public function store(Request $request)
        {
            $data = $request->all();
            Vineuser::create($data);
            // $Vine_master = Vinemaster::all();
             DB::table('Vine_user')->insert([
                

                   'User_name' => $data['User_name'],
                     'Vine_name' => $data['Vine_name'],
                 'User_mobileno' => $data['User_mobileno'],
                 'Registerdate' => $data['Registerdate'],
                 'Useddate' => $data['Useddate'],
                 'Qrcode' => $data['Qrcode']
               
                
    
    
    
            ]);
            
            
            return redirect('Vine_user')->with('flash_message', 'Vine_user Addedd!');  
            
            
        }
        
        public function show($id)
        {
            $Vine_user =Vineuser ::find($id);
            return view('Vine_user.show')->with('Vine_user', $Vine_user);
        }
        
        public function edit($id)
        {
             $Vine_user = Vineuser::find($id);
            // $department = Department::all();
            return view('Vine_user.edit',compact(('Vine_user')))->with('Vine_userr', $Vine_user);
        }
      
        
        public function update(Request $request, $id)
        {
            // $department = Department::all();
            $Vine_user = Vineuser::find($id);
            // $item = Item::find($id);
            $input = $request->all();
            $Vine_user->update($input);
    
           
            
    
    
    
    
            // $student->dept_id = $request->dept_id;
        // $item->column_with_dropdown = $request->column_with_dropdown;
        // $student->save();
    
        // return redirect()->route('student.index');
    
    
    
            return redirect('Vine_user')->with('flash_message', 'Vineuser Updated!');  
        }
      
        public function destroy($id)
        {
            Vineuser::destroy($id);
            return redirect('Vine_user')->with('flash_message', 'Vineuser deleted!');  
        }
    
    
    
}
