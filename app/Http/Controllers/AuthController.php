<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\User;
use App\Models\Service;
use App\Models\UserService;
use Illuminate\Http\Request;
use App\Models\AcademicAdvisor;
use App\Models\AdvisingRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function registerView()
    {
        return view('user.register');
    }
    public function register(Request $request)
    {
        // Validate the incoming request data
        $validatedData = $request->validate([
            'fName' => ['required', 'string', 'max:15'],
            'lName' => ['required', 'string', 'max:15'],
            'phone' => ['required', 'string', 'size:8', 'unique:users,phone'],
            'email' => ['required', 'email', 'unique:users,email'],
            'username' => ['required', 'string', 'unique:users,username'],
            'password' => ['required', 'string', 'min:8'],
            'genderID' => ['required', 'in:male,female'], // Validate gender
        ]);

        // Save the user to the database
        User::create([
            'fName' => $validatedData['fName'],
            'lName' => $validatedData['lName'],
            'phone' => $validatedData['phone'],
            'email' => $validatedData['email'],
            'username' => $validatedData['username'],
            'password' => Hash::make($validatedData['password']), // Hash the password
            'role' => 'student',
            'genderID' => $validatedData['genderID'] === 'male' ? 1 : 2, // Assuming male is ID 1, female is ID 2
        ]);

        // Redirect after successful registration
        return redirect('/login')->with('success', 'Registration successful! Please log in.');
    }
    public function loginView()
    {
        return view('user.login');
    }
    public function login(Request $request)
    {
        // Validate the request data
        $fields = $request->validate([
            'username' => ['required', 'string'],
            'password' => ['required', 'min:8'],
        ]);

        // Attempt to authenticate the user
        if (Auth::attempt(['username' => $fields['username'], 'password' => $fields['password']]) && Auth::user()->role === 'student') {
            // Logic for successful login and role check
            return redirect('/');
        } else {
            return redirect('/dashboard');
        }
    }
    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }
    public function about()
    {
        return view('about');
    }
    public function services()
    {
        return view('services');
    }
    public function contactView()
    {
        return view('contact');
    }
    public function academicAdvising()
    {
        return view('ourServices.academicAdvising');
    }
    public function tutoringServices()
    {
        return view('ourServices.tutoringServices');
    }
    public function careerServices()
    {
        return view('ourServices.careerServices');
    }
}
