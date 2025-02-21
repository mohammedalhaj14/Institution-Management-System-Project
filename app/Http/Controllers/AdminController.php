<?php

namespace App\Http\Controllers;

use services;
use App\Models\User;
use App\Models\Message;
use App\Models\Service;
use App\Models\UserService;
use Illuminate\Http\Request;
use App\Models\CareerRequest;
use App\Models\AcademicAdvisor;
use App\Models\AdvisingRequest;
use App\Models\TutoringRequest;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class AdminController extends Controller
{
    public function dashboard()
    {
        return view('admin.dashboard');
    }
    public function students()
    {
        $users = User::where('role', 'student')->get();
        // return $users;
        return view('admin.students', ['users' => $users]);
    }
    public function destroyUser($userID)
    {
        // Find the user by ID
        $user = User::find($userID);
        // Delete the user
        $user->delete();
        // Redirect with a success message
        return redirect()->route('admin.students')->with('success', 'User deleted successfully.');
    }

    public function advisors()
    {
        $advisors = AcademicAdvisor::all();
        return view('admin.advisors.index', ['advisors' => $advisors]);
    }
public function create()
{
    return view('admin.advisors.create');
}

public function createAdvisorStore(Request $request)
{
    $validatedData = $request->validate([
        'advisorName' => 'required|string|max:255',
        'serviceID' => 'required|integer',
        'advisorMajor' => 'required|string|max:255',
    ]);

    AcademicAdvisor::create($validatedData);

    return redirect()->route('admin.advisors.index')->with('success', 'Advisor created successfully!');
}

    public function destroyAdvisor($academicAdvisorID)
    {
        // Find the advisor by ID
        $advisor = AcademicAdvisor::find($academicAdvisorID);
        // Delete the advisor
        $advisor->delete();
        // Redirect with a success message
        return redirect()->route('admin.advisors.index')->with('success', 'Advisor deleted successfully.');
    }
    public function contact()
    {
        $messages = Message::all();
        return view('admin.messages', ['messages' => $messages]);
    }
    public function storeMessage(Request $request)
    {
        // Validation rules
        $fields = $request->validate([
            'name' => ['required', 'string', 'max:100'],
            'email' => ['required', 'email', 'max:255'],
            'message' => ['required', 'string', 'min:10'],
        ]);

        // Store the validated data in the database (optional)
        Message::create($fields);

        // Redirect back with a success message
        return view('contact')->with('success', 'Message sent successfully!');
    }
    public function home()
    {
        return view('admin.requests.home');
    }
    public function store(Request $request)
    {
        // Validate the form input
        $validatedData = $request->validate([
            'fullName' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'advisor' => 'required|string|max:255',
            'message' => 'required|string|max:500',
        ]);

        // Save the data to the database with userID
        AdvisingRequest::create([
            'fullName' => $validatedData['fullName'],
            'email' => $validatedData['email'],
            'advisor' => $validatedData['advisor'],
            'message' => $validatedData['message'],
        ]);

        // Redirect with success message
        return redirect()->back()->with('success', 'Your tutoring request has been submitted successfully!');
    }
    public function advising()
    {
        $advisors = AdvisingRequest::all();

        return view('admin.requests.advising', ['advisors' => $advisors]);
    }

    public function tutoringRequest(Request $request)
    {
        // Validate the form data
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'subject' => 'required|string|max:255',
            'message' => 'nullable|string|max:500',
        ]);

        // Save the request
        TutoringRequest::create([
            'name' => $validatedData['name'],
            'email' => $validatedData['email'],
            'subject' => $validatedData['subject'],
            'message' => $validatedData['message'],
        ]);

        // Redirect with success message
        return redirect()->back()->with('success', 'Your tutoring request has been submitted successfully!');
    }
    public function tutoring()
    {
        $tutors = TutoringRequest::all();
        return view('admin.requests.tutoring', ['tutors' => $tutors]);
    }
    public function careerRequest(Request $request)
    {
        // Validate the form input
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'service' => 'required|string|max:255',
            'message' => 'nullable|string|max:500',
        ]);

        // Save the data to the database
        CareerRequest::create([
            'name' => $validatedData['name'],
            'email' => $validatedData['email'],
            'service' => $validatedData['service'],
            'message' => $validatedData['message'],
        ]);

        // Redirect back with a success message
        return redirect()->back()->with('success', 'Your career service request has been submitted successfully!');
    }
    public function career()
    {
        $careers = CareerRequest::all();
        return view('admin.requests.career', ['careers' => $careers]);
    }
}
