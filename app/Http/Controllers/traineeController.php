<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\traineeModel;
use App\Http\Controllers\TraineeController;



class traineeController extends Controller
{
    public function Trainee(Request $request){
        $request->validate([
        'fname'=>'required',
        'lname'=>'required',

    ]);
     

    $trainee=new traineeModel();
            $trainee->Traineefname=$request->fname;
            $trainee->Traineelname=$request->lname;
            $result=$trainee->save();
            if($result){
    return redirect('Viewtrainees')->with('success','Trainee added Succesfull ');
           }else{
            return redirect('Trainees')->with ('fail','Failed to add trainees');
           }
        
    }
    public function update2($id){
        $update2=TraineeModel::FindOrFail($id);
        return view('Updatetraines',compact('update2'));
    }
    public function updatetrainee(Request $request ,$id){
      $modify=TraineeModel::FindOrFail($id); 
       $modify->Traineefname=$request->fname;
        $modify->Traineelname=$request->lname; 
        $modify->save();
        return redirect('Viewtrainees');
    }
    public function delete2($id){
        $delete=traineeModel::FindOrFail($id);
        $delete->delete();
        return redirect('Viewtrainees');
    }
    

}
