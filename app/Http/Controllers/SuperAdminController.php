<?php

namespace App\Http\Controllers;

use App\Mail\DemoMail;
use App\Models\Inquiry;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

class SuperAdminController extends Controller
{
    //
    public function admin_dashboard()
    {
        $now = Carbon::now('Africa/Lagos');
        $currentHour = $now->hour;

        if ($currentHour < 12) {
            $greeting = "Good Morning";
        } elseif ($currentHour < 18) {
            $greeting = "Good Afternoon";
        } else {
            $greeting = "Good Evening";
        }
        return view('admin.index', compact('greeting'));
    }


    public function users()
    {
        $users = User::where('role_as', "2")->get();
        return view('admin.users',  compact('users'));
    }


    public function create_sub_admin(Request $request)

    {
        $request->validate([
            'name' => 'required',
            'string',
            'max:255',
            'email' => 'required|email|unique:users,email|max:225,string',
            'password' => 'required',
            'string',
            'min:8',
            'confirmed',
        ]);

        $bnbsend = new User();
        $bnbsend->name = $request->name;
        $bnbsend->email = $request->email;
        $bnbsend->role_as = 2;
        $bnbsend->active = 1;
        $bnbsend->password =  Hash::make($request->password);
        $bnbsend->save();


        $mailData = [
            'title' => 'LOGIN DETAILS',
            'name' => $bnbsend->name,
            'email' => $bnbsend->email,
            'role_as' => 'Sub Admin',
            'active' => 1,
            'password' => $request->password,
        ];

        // $email = $mailData[]


        Mail::to($mailData['email'])->send(new DemoMail($mailData));
        return redirect()->back()->with('message', 'DONE');
    }



    public function delete_sub_admin($id)
    {
        $data = User::find($id);
        $data->delete();
        return redirect()->back()->with('success', 'User deleted successfully');
    }


    public function ban_sub_admin($id)
    {
        $data = User::find($id);
        $data->active = 0;
        $data->save();
        return redirect()->back()->with('message', 'This user has been banned');
    }


    public function unban_sub_admin($id)
    {
        $data = User::find($id);
        $data->active = 1;
        $data->save();
        return redirect()->back()->with('message', 'This user has been unbanned');
    }


    // profile
    public function profile_setting()
    {
        return view('admin.profile');
    }

    public function profile_update(Request $request)
    {
        // Validate the request
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email,' . Auth::id(),
        ]);

        // Update the authenticated user's profile
        $user = Auth::user();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->save();

        // Redirect back with a success message
        return redirect()->back()->with('success', 'Profile updated successfully.');
    }



    public function password_update(Request $request)
    {
        // Validate the request
        $request->validate([
            'old_password' => 'required|string',
            'new_password' => 'required|string|min:8',
            'new_password_confirmation' => 'required|string|min:8|same:new_password',
        ]);

        $user = Auth::user();

        // Check if the old password matches
        if (!Hash::check($request->old_password, $user->password)) {
            return redirect()->back()->with('error', 'The old password is incorrect.');
        }

        // Check if new password matches confirm password
        if ($request->new_password !== $request->new_password_confirmation) {
            return redirect()->back()->with('error', 'The confirm password does not match.');
        }

        // Update the user's password
        $user->password = Hash::make($request->new_password);
        $user->save();

        // Redirect back with a success message
        return redirect()->route('profile_setting')->with('success', 'Password updated successfully.');
    }





    // inquiry
    public function inquiry()
    {
        $inquiries = Inquiry::orderBy('created_at', 'desc')->Paginate(10);
        return view('admin.inquiry', compact('inquiries'));
    }

    public function delete_inq($id)
    {
        $data = Inquiry::find($id);
        $data->delete();
        return redirect()->back()->with('success', 'Inquiry deleted');
    }

    // view inq
    public function view_inq($id)
    {
        $inquiry = Inquiry::findOrFail($id);
        $inquiry->update(['is_read' => true]);

        return view('admin.read_inquiry');
    }


    public function add_news()
    {
        return view('admin.add_news');
    }
}
