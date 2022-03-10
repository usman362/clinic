<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use App\Patient;
use App\Doctor;
use App\Hospital;
class PatientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $patient =  Patient::all();
        $doctor = Doctor::all();
        $hospital = Hospital::all();
        return view('pages.Patient.index',compact('patient','doctor','hospital'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $doctor = Doctor::all();
        $hospital = Hospital::all();
        return view('pages.Patient.create',compact('doctor','hospital'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $patient = new Patient();
        $patient->title = Crypt::encryptString(request('title'));
        $patient->gender = Crypt::encryptString(request('gender'));
        $patient->birth = Crypt::encryptString(request('birth'));
        $patient->doctor = Crypt::encryptString(request('doctor'));
        $patient->hospital = Crypt::encryptString(request('hospital'));
        $patient->age = Crypt::encryptString(request('age'));
        $patient->laboratory = Crypt::encryptString(request('laboratory'));
        $patient->phone = Crypt::encryptString(request('phone'));
        $patient->address = Crypt::encryptString(request('address'));
        $patient->blood = Crypt::encryptString(request('blood'));
        $PatientImage = time().'.'.request()->image->getClientOriginalExtension();
        request()->image->move(public_path('image/Patient'), $PatientImage);
        $patient->image = $PatientImage;
        $PatientFile = time().'.'.request()->file->getClientOriginalExtension();
        request()->file->move(public_path('file/Patient'), $PatientFile);
        $patient->file = $PatientFile;

        $patientIdCheckingModel =  Patient::orderby('created_at','DESC')->first();
        
        if($patientIdCheckingModel)
        {
            $patient_idOld = $patientIdCheckingModel->id;
            $DatID =  $patient_idOld + 1;
            $patient->patient_id =  "P100".$DatID;
    
        }
        else{
          
            $patient->patient_id =  "P1001";
    
        }
        $patient->save();
        return redirect('/Patient');

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
        $patient = Patient::find($id);
        $doctor = Doctor::all();
        $hospital = Hospital::all();
        return view('pages.Patient.edit',compact('patient','doctor','hospital'));
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
        $patient = Patient::find($id);
        $patient->title = Crypt::encryptString(request('title'));
        $patient->gender = Crypt::encryptString(request('gender'));
        $patient->birth = Crypt::encryptString(request('birth'));
        $patient->doctor = Crypt::encryptString(request('doctor'));
        $patient->hospital = Crypt::encryptString(request('hospital'));
        $patient->age = Crypt::encryptString(request('age'));
        $patient->laboratory = Crypt::encryptString(request('laboratory'));
        $patient->phone = Crypt::encryptString(request('phone'));
        $patient->address = Crypt::encryptString(request('address'));
        $patient->blood = Crypt::encryptString(request('blood'));
        $PatientImage = time().'.'.request()->image->getClientOriginalExtension();
        request()->image->move(public_path('image/Patient'), $PatientImage);
        $patient->image = $PatientImage;
        $PatientFile = time().'.'.request()->file->getClientOriginalExtension();
        request()->file->move(public_path('File/Patient'), $PatientFile);
        $patient->file = $PatientFile;
        $patient->save();
        return redirect('/Patient');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $patient = Patient::find($id);
        $patient->delete();
        return redirect('/Patient');
    }

   
    public function history($id){
        $patient = Patient::find($id);
        return view('pages.Patient.history',compact('patient'));
    }

    public function information($id){
        $patient = Patient::find($id);
        return view('pages.Patient.information',compact('patient'));
    }
}
