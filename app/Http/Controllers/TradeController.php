<?php

namespace App\Http\Controllers;
use App\Models\TradeModel;
use Illuminate\Http\Request;

class TradeController extends Controller
{
    public function trade(Request $request){
        $request->validate([
            'name'=>'required',
            'level'=>'required',
            'module_name'=>'required'
        ]);
        $trade=new TradeModel();
        $trade->Trade_name=$request->name;
        $trade->Trade_level=$request->level;
        $trade->Module_name=$request->module_name;
        $result=$trade->save();
        if($result){
return redirect('Viewtrade')->with('success','Trade added Succesfull ');
       }else{
        return redirect('Trade')->with ('fail','Failed to add trade');
       }
    
     
    }
    public function edit($id){
        $edit=TradeModel::FindOrFail($id);
        return view('updatetrade',compact('edit'));
    }
    public function updatetrade(Request $request ,$id){
      $change=TradeModel::FindOrFail($id); 
       $change->Trade_name=$request->name;
        $change->Trade_level=$request->level; 
        $change->Module_name=$request->module_name; 
        $change->save();
        return redirect('Viewtrade');
    }
    public function delete($id){
        $delete=TradeModel::FindOrFail($id);
        $delete->delete();
        return redirect('Viewtrade');
    }
}
