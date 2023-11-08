<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Car;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    private $v;
    public function __construct()
    {
        $this->v = [];
    }

    public function index(Request $request)
    {
        $contact = Contact::with('car')->select('id', 'name', 'phone', 'email', 'content', 'car_id')->orderBy('id','desc')
            ->paginate(10);

        // $car = Car::find($contact->car_id);
        // dd($contact);

        return view('admin.contact.index', compact('contact'));
    }
}
