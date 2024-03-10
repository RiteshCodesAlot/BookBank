<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Category;
use App\Models\Center;
use App\Models\Donate;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class AccountController extends Controller
{
    //It will show registration page to the user
    public function registration()
    {
        return view('front.registration');
    }

    //It will save user in DB after registration
    public function registrationProcess(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'name' => 'required',
            'email' => 'required|email|unique:users,email',
            'contact_no' => 'required|numeric',
            'password' => 'required|min:5|same:c_password',
            'c_password' => 'required',
        ]);

        if ($validator->passes()) 
        {
            $user = new User();
            $user->name = $request->name;
            $user->email = $request->email;
            $user->contact_no = $request->contact_no;
            $user->password = Hash::make($request->password);
            $user->save();

            session()->flash('success', 'You have registered successfully');

            return response()->json([
                'status' => true,
                'errors' => []
            ]);
        } else {
            return response()->json([
                'status' => false,
                'errors' => $validator->errors()
            ]);
        }
    }

    //To show book donation form to the user
    public function donate()
    {
        $user = Auth::user();

        //Using Category model to fetch categories from the DB & show on home screen
        $categories = Category::where('status',1)->orderBy('category_name','ASC')->take(8)->get();

        //Using Center model to fetch centers from the DB & show on home screen
        $centers = Center::where('status',1)->orderBy('center_name','ASC')->take(8)->get();

        return view('front.donation',[
            'categories' => $categories,
            'centers' => $centers,
            'user' => $user
        ]);
    }

    //
    public function saveBookDonation(Request $request)
    {
        $rules = [
            'donated_book_name' => 'required|max:50',
            'donor_name' => 'required|min:5|max:50',
            'donated_author' => 'required|min:5|max:50',
            'donated_category' => 'required',
            'donated_center' => 'required',
            'donated_date' => 'required|date',
        ];

        $validator = Validator::make($request->all(),$rules);

        if ($validator->passes()) {

            //Create a model to Donate Books
            $donate = new Donate();
            $donate->book_name = $request->donated_book_name;           
            $donate->donor_name = $request->donor_name;           
            $donate->donated_author = $request->donated_author;           
            $donate->book_name = $request->donated_book_name; 
            $donate->category_id = $request->donated_category;
            $donate->center_id = $request->donated_center;
            $donate->donation_date = $request->donated_date;
            $donate->save();

            session()->flash('success', 'Book Donated Successfully.');

            return response()->json([
                'status' => true,
                'errors' => []
            ]);

        } else {
            return response()->json([
                'status' => false,
                'errors' => $validator->errors()
            ]);
        }
    }

    //To show login page to user
    public function login()
    {
        return view('front.login');
    }

    //For the Authentication
    public function authenticate(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if ($validator->passes()) {
            if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
                return redirect()->route('account.centers');
            } else {
                return redirect()->route('account.login')->with('error', 'Either Email/Password is incorrect');
            }
        } else {
            return redirect()->route('account.login')
                ->withErrors($validator)
                ->withInput($request->only('email'));
        }
    }

    public function centers()
    {

        //To get the id of user which is logged in
        // $id = Auth::user('user_id')->id;

        // //To get the info of the user which is logged in
        // // $user = User::where('id',$id)->first();
        // // OR
        // $user = User::find($id);

        // Passing user info in profile.blade so we can use it there
        return view('front.centers');
    }
}