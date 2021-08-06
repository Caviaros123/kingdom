<?php

namespace App\Http\Controllers;

use App\Mail\NewsletterMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Models\Newsletter;
use Illuminate\Support\Facades\DB;

class NotifyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $exist = Newsletter::where('email', $request->email)->first();
        if ($exist === null) {
            if ($request) {
                $newsletter = Newsletter::create([
                    'name' => $request->name,
                    'email' => strtolower($request->email),
                ]);

                Mail::to($request->email)->send(new NewsletterMail($newsletter));
            }

        }else {
            return 'Vous êtes déja abonnés sur notre site';
        }
        return 'Félicitations '.strtoupper($request->name).', vous êtes abonnés vous recevrez une notification lorsque notre site sera disponible';
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}