<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\aspirantData;
use App\Models\aspirantsLogin;
class dataQueries extends Controller
{
    function addData(Request $req){
           $saveData = new aspirantData;
           $saveData->name = $req->name;
           $saveData->email = $req->email;
           $saveData->phone = $req->phone;
           $saveData->rollNo = $req->roll;
           $saveData->subject = $req->subject;
           $saveData->image = $req->file('image')->store('/adminImages');
           $saveData->save();

           $data = $req->email;
           $req->session()->flash('successMsg',$data);
           return  redirect ('addData');

    }
   
    function listData(){
      $data = aspirantData::all();
      return view('dataList',['studentList'=>$data]);
    }
   
   function deleteData($id){
         $data = aspirantData::find($id);
         $data->delete();
         return redirect('index');
   }
   function showData($id){
       $data = aspirantData::find($id);
         // // $data =   aspirantData::where('id','=','$id');
         //  return $data;
       return view('updateForm',['value'=>$data]);
   }

   function updateData(Request $req){
          $data=aspirantData::find($req->id);
                     // $saveData = new aspirantData;
   
           $data->name = $req->name;
           $data->email = $req->email;
           $data->phone = $req->phone;
           $data->rollNo = $req->roll;
           $data->subject = $req->subject;
           $data->image = $req->file('image')->store('/adminImages');
           $data->save();

           $flashData=$req->email;
           $req->session()->flash('updateSuccess',$flashData);
            return redirect('index');
   }


   // Here the code for the aspirants login authentication will come.
   
}
