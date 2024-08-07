<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Traits\UploadedFile;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\URL;


class CvsController extends Controller
{
    use UploadedFile;

    public function index()
    {
        $user=User::find(1);
        return view('mycv.cv',compact('user'));
    }


    public function create()
    {
        return view('mycv.create');
     }

    public function store(Request $request)
    {
//        dd($request);
        $user= User::create([
            'name' => $request->name,
            'email' => $request->email,
            'address'=>$request->address,
            'phone' => $request->phone,
            'job' => $request->job,
        ]);
        if ($request->picture && $request->picture->isValid()){
            $file_name=time().'.'.$request->file('picture')->getClientOriginalName();
            $path= $request->file('picture')->storeAs('images',$file_name,'public');
            $profile_picture="/storage/".$path;
            $user->picture=$profile_picture;
        }
        if ($request->cv && $request->cv->isValid()){
            $file_name=time().'.'.$request->file('cv')->getClientOriginalName();
            $path= $request->file('cv')->storeAs('files',$file_name,'public');
            $certificate="/storage/".$path;
            $user->cv=$certificate;
        }

            return redirect()->route('cv.index');
    }


    public function show()
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Cvs  $cvs
     * @return \Illuminate\Http\Response
     */
    public function edit(Cvs $cvs)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Cvs  $cvs
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cvs $cvs)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Cvs  $cvs
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cvs $cvs)
    {
        //
    }
}
