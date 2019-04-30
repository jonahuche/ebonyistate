<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Role;
use App\Rules\PhoneNumber;
use Illuminate\Support\Facades\Auth;

use Validator;

class AuthController extends Controller
{
    //function to retrive users
    public function index()
    {
    	$users = usersmodel::all();
    	return view('home.index')->with('users', $users);
    }

    //function to create user

    public function signUp(Request $request)
    {

    	$role_user = Role::where('name','User')->first();

    	$this->validate($request, [
    		'firstname' => 'required|min:3|max:15',
    		'lastname' => 'required|min:3|max:15',
    		'password' => 'min:6|required_with:password_confirmation|same:password_confirmation',
			'password_confirmation' => 'min:6',
    		'email' => 'required|email',
    		'residential_address'=>'required',
           'date_of_birth' => 'date_format:Y-m-d|before:today',
    		'phone_no' => ['required', new PhoneNumber],
    		'marital_status' => 'required|min:3',
    		'gender' => 'required',
    		'village' => 'required',
    		'autonomous_comm' => 'required',
    		'category' => 'required',
    		'photo' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
    		'state_of_origin' => 'required',
    		'lga' => 'required',
    	]);
		$user = new User();
    		
	    	$user->firstname = $request['firstname'];
	    	$user->middlename = $request['middlename'];
	    	$user->lastname = $request['lastname'];
	    	$user->email = $request['email'];
	    	$user->password = bcrypt($request['password']);
	    	
	    	$user->date_of_birth = $request['date_of_birth'];
	    	$user->marital_status = $request['marital_status'];
	    	$user->gender = $request['gender'];
	    	$user->residential_address = $request['residential_address'];
	    	$user->phone_no = $request['phone_no'];
	    	$user->photo = $request['firstname']. $request['lastname'];
	    	$user->village = $request['village'];
	    	$user->autonomous_comm = $request['autonomous_comm'];
	    	$user->category = $request['category'];
	    	$user->state_of_origin = $request['state_of_origin'];
	    	$user->lga = $request['lga'];

	    	if($user->save()){
	    		$user->roles()->attach($role_user);
	    		$image = $request->file('photo');

		    	$new_name = $user->photo.'.'.$image->getClientOriginalExtension();
		    	$image->move(public_path('uploads'), $new_name);
		    	return response()->json($user);
	    	}
    	
    	
    }

    public function login(){
    	return view('auth.login');
    }

    public function signupview(){
    	return view('auth.signup');
    }

    public function signIn(Request $request)
    {
    	if (Auth::attempt(['email' => $request['email'], 'password' => $request['password']])) {
            // Authentication passed...
            if(Auth::user()->suspended){
                return redirect()->back();
            }
            return redirect()->intended('main');
        }
    	// if (Auth::attempt(['email' => $request['email'],'password' => $request['password']]))
    	// {
    	// 	return redirect()->route('main');
    	// }
    	// return redirect()->back();
    }

    public function updatedata(Request $request)
    {
    	$user = usersmodel::find($request->id);
    	$user->firstname = $request['firstname'];
    	$user->middlename = $request['middlename'];
    	$user->lastname = $request['lastname'];
    	$user->email = $request['email'];
    	$user->password = bcrypt($request['password']);
    	$user->date_of_birth = $request['date_of_birth'];
    	$user->marital_status = $request['marital_status'];
    	$user->gender = $request['gender'];
    	$user->residential_address = $request['residential_address'];
    	$user->phone_no = $request['phone_no'];
    	$user->photo = $request['photo'];
    	$user->village = $request['village'];
    	$user->autonomous_comm = $request['autonomous_comm'];
    	$user->category = $request['category'];
    	$user->state_of_origin = $request['state_of_origin'];
    	$user->lga = $request['lga'];
    	$user->save();
    	return response()->json($user);
    }
}
