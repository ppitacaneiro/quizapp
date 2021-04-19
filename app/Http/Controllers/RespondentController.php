<?php

namespace App\Http\Controllers;

use App\Respondent;
use App\Country;
use Illuminate\Http\Request;

class RespondentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $respondents = Respondent::all();

        return view('respondent.index')->with('respondents',$respondents);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $countries = Country::all();

        return view('respondent.create')->with('countries',$countries);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'inputName' => ['required'],
            'inputEmail' => ['required','email'],
            'inputAge' => ['required','digits_between:0,2']
        ]);
        
        $respondent = new Respondent();
        $respondent->email = $request->inputEmail;
        $respondent->name = $request->inputName;
        $respondent->country = $request->inputCountry;
        $respondent->age = $request->inputAge;
        $respondent->sex = $request->inputSex;
        $respondent->save();

        $respondents = Respondent::all();
        return view('respondent.index')->with('respondents',$respondents);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Respondent  $respondent
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $respondent = Respondent::find($id);

        return view('respondent.show')->with('respondent',$respondent);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Respondent  $respondent
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $respondent = Respondent::find($id);
        
        $countries = Country::all();

        return view('respondent.edit')
                    ->with('respondent',$respondent)
                    ->with('countries',$countries);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Respondent  $respondent
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'inputName' => ['required'],
            'inputEmail' => ['required','email'],
            'inputAge' => ['required','digits_between:0,2']
        ]);

        $respondent = Respondent::find($id);
        $respondent->email = $request->inputEmail;
        $respondent->name = $request->inputName;
        $respondent->country = $request->inputCountry;
        $respondent->age = $request->inputAge;
        $respondent->sex = $request->inputSex;
        $respondent->save();

        $respondents = Respondent::all();
        return view('respondent.index')->with('respondents',$respondents);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Respondent  $respondent
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Respondent::destroy($id);
        
        $respondents = Respondent::all();
        return view('respondent.index')->with('respondents',$respondents);
    }
}
