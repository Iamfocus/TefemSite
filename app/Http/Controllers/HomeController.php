<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Validator as Val;
use App\Members;
use App\Events\MemberJoined;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('index');
    }

    public function registerIndex()
    {
        return view('register');
    }

    public function getEvents()
    {
        return view('events');
    }

    public function showMembers()
    {
        return view('forminfo');
    }

    public function register(Request $request)
    {
        $msgBag = $this->registerValidator($request->all());
        if( $msgBag !==true )
        {
            $response = ['status'=>false, 'error'=>$msgBag];
            return response()->json($response);
        }
        $userData = $request->all();
        array_walk($userData, function(&$value, $key){
            $value = Val::sanitize($value);
        });
        try{
            $member = Members::create($userData);
        }catch(Exception $e){
            return response()->json(['status'=>false, 'error'=>'There was an error registering you.']);
        }
        event(new MemberJoined($member));
        return response()->json(['status'=>true]);

    }

    public function getMembers(Request $request)
    {
        $members = Members::all();
        if ($members->isEmpty()){
            return response()->json([]);
        }
        return response()->json($members->toArray());
    }

    private function registerValidator($data)
    {
        
        $val = Validator::make($data,
            [
                'first_name'=>'required|string',
                'last_name'=>'required|string',
                'email'=>'required|email|unique:members',
                'address'=>'required|string',
                'phone_number'=>'required|unique:members',
                'marital_status'=>'required|string', 
                'date_of_birth' => 'required|string', 
                'health_challenge'=> 'required|string', 
                'courses' =>'required|string',
                'next_of_kin_first_name'=>'required|string', 
                'next_of_kin_last_name' => 'required|string',
                'next_of_kin_address' => 'required|string',
                'next_of_kin_phone'=>'required|string'
            ]
        );
        if ($val->fails()){
            $msg = $val->messages()->all();
            return $msg;
        }
        return true;
    }
}
