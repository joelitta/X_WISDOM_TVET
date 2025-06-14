<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  App\Models\Marks;
use  App\Models\traineeModel;
use  App\Models\TradeModel;
class Markcontroller extends Controller
{
    public function marks(Request $request){
     $request->validate([
'trainee_id'=>'required',
'trade_id'=>'required',
'formative_assessment'=>'required|integer|min:0|max:100',
'summative_assessment'=>'required|integer|min:0|max:100',
     ]);
     $store=new Marks();
     $store->trainee_id = $request->trainee_id; 
     $store->trade_id = $request->trade_id; 
     $store->formative_assessment = $request->formative_assessment; 
     $store->summative_assessment = $request->summative_assessment; 
       $store->percentage=($request->formative_assessment + $request->summative_assessment)*100/200; 
   if( $store->percentage>=70){
   $store->decision='Competent';
   }
   else{
    $store->decision='Not Yet Competent'; 
   }
   $result=$store->save();
   return redirect('Viewreport');
    }
    public function modify($id){
        $modify=Marks::FindOrFail($id);
          $view = traineeModel::all(); // 
          $select = TradeModel::all();
       return view('Updatereport',compact('modify','view','select')); 
    }
public function updatereport(Request $request ,$id){
       $request->validate([
'trainee_id'=>'required',
'trade_id'=>'required',
'formative_assessment'=>'required|integer|min:0|max:100',
'summative_assessment'=>'required|integer|min:0|max:100',
     ]);
     $store=Marks::FindOrFail($id);
     $store->trainee_id = $request->trainee_id; 
     $store->trade_id = $request->trade_id; 
     $store->formative_assessment = $request->formative_assessment; 
     $store->summative_assessment = $request->summative_assessment; 
       $store->percentage=($request->formative_assessment + $request->summative_assessment)*100/200; 
   if( $store->percentage>=70){
   $store->decision='Competent';
   }
   else{
    $store->decision='Not Yet Competent'; 
   }
   $store->save();
   return redirect('Viewreport');

}
public function delete3($id){
    $destroy=Marks::FindOrFail($id);
    $destroy->delete();
     $select = Marks::with(['trainee', 'trade'])->get();
    return view('Viewreport',compact('select'));
}
}
