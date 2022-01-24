<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
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
   function auth(REQUEST $req){
         $email = $req->email;
         $password = $req->password;

         $checkMail = DB::table('aspirants_login')->where('Email',$email)->count();
         // return $checkPass;
         if($checkMail!=1){
                  $req->session()->flash('errorMail',$email);
                  return redirect('login');
         }else{
           $checkPass = DB::table('aspirants_login')->where('Email',$email)->get();
             foreach($checkPass as $value){
                  if($password!=$value->Password){
                          $req->session()->flash('errorPass',$password);
                          return redirect('login');
                  }else{
                          return redirect('index');
                  }

             }
                  
         }

   
     //  json_decode($check);
     //return view('test',['data'=>$check]);
        

   }
   
}
