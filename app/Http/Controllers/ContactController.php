<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {        
        $contacts=Contact::all();
        return view('listcontact',compact('contacts'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $imageName = time().'.'.$request->photo->getClientOriginalExtension();
        $request->photo->move(public_path('images'), $imageName);   

        Contact::create([
            'firstname' => $request->get('firstname'),
            'lastname' => $request->get('lastname'),    
            'address' => $request->get('address'),   
            'phone_number' => $request->get('phone_number'),   
            'date_of_birth' => $request->get('date_of_birth'),
            'photo' => $imageName,            
        ]);
        return redirect('/')->with('success', 'Contact has been successfully added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        return view('contact');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $contact = Contact::find($id);
        return view('editcontact',compact('contact','id'));
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
        if($request->hasFile('photo')){
            $imageName = time().'.'.$request->photo->getClientOriginalExtension();
            $request->photo->move(public_path('images'), $imageName);  
            Contact::where('_id' ,$id)->update([
                'photo' => $imageName,   
            ]);
        } 

        Contact::where('_id' ,$id)->update([
            'firstname' => $request->get('firstname'),
            'lastname' => $request->get('lastname'),    
            'address' => $request->get('address'),   
            'phone_number' => $request->get('phone_number'),   
            'date_of_birth' => $request->get('date_of_birth'),
        ]);
        return redirect('/data')->with('success', 'Car has been successfully update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $car = Contact::find($id);
        $car->delete();
        return redirect('/data')->with('success','Car has been  deleted');
    }
}
