<?php

namespace App\Http\Controllers;
use App\Models\CityModel;
use App\Models\DistrictModel;
use Exception;
use DB;

use Illuminate\Http\Request;

class LocationController extends Controller
{

    public function addressCity(){
        $getCity=  DB::table('CITY')
        ->select('CITY')
        ->get();

        // $getDis=  DB::table('DISTRICT')
        // ->select('DISTRICT')
        // ->get();

        return view ('address',['city'=>$getCity]);
    }

    public function addressDist(){

        $getDis=  DB::table('DISTRICT')
        ->select('DISTRICT')
        ->get();

        return view ('address',['district'=>$getDis]);
    }

    public function insert(Request $request){
        try{
            $city=new CityModel();
            $city->city=$request->input('city');

            $dis=new DistrictModel();
            $dis->district=$request->input('district');

            if($city->save() && $dis->save()) {

                return redirect('/address')->with('status', "Inserted Successfully");
               }
            
            }
            catch(Exception $e){
                return redirect('/address')->with('failed',"operation failed");
        }
    }

    public function destroyCity($city){
        $destroyFind= DB::table('CITY')
         ->select('CITY')
         ->where('CITY','=',$city)
         ->first();
         if (!optional($destroyFind)->city==null){
            try{
             $destroy= DB::table('CITY')
             ->where('city','=',$city)
             ->delete();
             return redirect('/address')->with('delet', "Deleted Successfully");

            }catch(\Illuminate\Database\QueryException $e){
                dd($e->getCode());

        
            }
        }    
 
    }

    public function destroyDistrict($district){
        $destroyFind= DB::table('DISTRICT')
         ->select('DISTRICT')
         ->where('DISTRICT','=',$district)
         ->first();
         if (!optional($destroyFind)->district==null){
            try{
             $destroy= DB::table('DISTRICT')
             ->where('district','=',$district)
             ->delete();
             return redirect('/address')->with('delet', "Deleted Successfully");

            }catch(\Illuminate\Database\QueryException $e){
                dd($e->getCode());

        
            }
        }    
 
    }
}

