<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\aspirantData;
class dataQueries extends Controller
{
    function addData(Request $req){
           $saveData = new aspirantData;
           $saveData->name = $req->name;
           $saveData->email = $req->email;
           $saveData->phone = $req->phone;
           $saveData->rollNo = $req->roll;
           $saveData->subject = $req->subject;
           $saveData->image = $req->file('image')->store('adminImages');
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
       return view('updateForm',['value'=>$data]);
   }
}
