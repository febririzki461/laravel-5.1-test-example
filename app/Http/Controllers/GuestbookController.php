<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Guestbook;

class GuestbookController extends Controller
{
    public function getPage()
    {
        $data = Guestbook::latest()->get();

        return view('guestbook')->withGuestbooks($data);
    }

    public function postPage(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required',
        ], [
            'name.required' => 'Nama harus diisi',
            'email.required' => 'Email harus diisi',
            'email.email' => 'Email yang dimasukkan tidak benar',
            'message.required' => 'Pesan harus diisi',
        ]);

        Guestbook::create($request->all());

        return redirect()->back()->withMessage('Thank you!');
    }
}
