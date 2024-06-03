<?php 
 
namespace App\Http\Controllers;

use Illuminate\View\View;
use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
use App\Mail\Contact;
 
class ContactController extends Controller
{
    public function create(): View
    {
        return view('contact');
    }
 
    
    public function store(Request $request)
    {

        \App\Models\Contact::create([
            'email' => $request->email,
            'message' => $request->message,
        ]);

        return "C'est bien enregistré !";
    }
}