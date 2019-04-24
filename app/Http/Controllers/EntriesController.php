<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Entries;
use App\User;

class EntriesController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

//        $meta_data = array (
//            'title' => 'Page Title',
//            'description' => 'Page Description',
//        );
//        $entries = Entries::orderBy('id', 'desc')->get();

        $user_id = auth()->user()->id;
        $user = User::find($user_id);
        return view('entries.index')->with('entries', $user->entries);

//        $entries = Entries::orderBy('id', 'desc')->paginate(10);
//        return view('entries.index')->with('entries', $entries );
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('entries.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function store(Request $request)
    {
        $this->validate($request, [
                'firstName' => 'required',
                'lastName' => 'required',
                'companyName' => 'required',
                'projectTitle' => 'required',
                'siteURL' => 'required',
        ]);

        // Create Entry

        $entry = new Entries;
        $entry->firstName = $request->input('firstName');
        $entry->lastName = $request->input('lastName');
        $entry->companyName = $request->input('companyName');
        $entry->projectTitle = $request->input('projectTitle');
        $entry->siteURL = $request->input('siteURL');
        $entry->user_id = auth()-> user() ->id;
        $entry->save();

        return redirect('/entries')->with('success', 'Enry Submited');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $entry = Entries::find($id);
        // Check for correct User
        if(auth()->user()->id !==$entry->user_id) {
            return redirect('/entries')->with('error', 'Unauthorized Page' );
        }

        return view('entries.show')->with('entry', $entry );
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $entry = Entries::find($id);
        // Check for correct User
            if(auth()->user()->id !==$entry->user_id) {
                return redirect('/entries')->with('error', 'Unauthorized Page' );
            }
        return view('entries.edit')->with('entry', $entry );
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
        $this->validate($request, [
            'firstName' => 'required',
            'lastName' => 'required',
            'companyName' => 'required',
            'projectTitle' => 'required',
            'siteURL' => 'required',
        ]);

        // Update Entry

        $entry = Entries::find($id);
        $entry->firstName = $request->input('firstName');
        $entry->lastName = $request->input('lastName');
        $entry->companyName = $request->input('companyName');
        $entry->projectTitle = $request->input('projectTitle');
        $entry->siteURL = $request->input('siteURL');
        $entry->save();

        return redirect('/entries')->with('success', 'Entry Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $entry = Entries::find($id);

        // Check for correct USer
        if(auth()->user()->id !==$entry->user_id) {
            return redirect('/entries')->with('error', 'Unauthorized Page' );
        }

        $entry -> delete();
        return redirect('/entries')->with('success', 'Entry Deleted');
    }
}
