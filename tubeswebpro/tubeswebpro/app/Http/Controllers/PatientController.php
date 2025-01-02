<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Patient;

class PatientController extends Controller
{
    public function index()
    {
        return view('daftar.daftar');
    }
    public function createNew()
    {
        return view('daftar.createNew');
    }
    public function createOld()
    {
        return view('daftar.createOld');
    }

    public function storeNew(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'identity_number' => 'required|unique:patients|numeric',
            'age' => 'nullable|numeric',
            'gender' => 'nullable|in:male,female,other',
            'birth_date' => 'nullable|date',
        ]);
        $queueNumber = rand(100, 9000);
        $tmp = Patient::latest()->first();
        $nomor = $tmp ? $tmp->queue_number + 1:1;

        $patient = Patient::create([
            'name' => $validated['name'],
            'identity_number' => $validated['identity_number'],
            'age' => $validated['age'],
            'gender' => $validated['gender'],
            'birth_date' => $validated['birth_date'],
            'queue_number' => $nomor,
        ]);
        return redirect()->route('patients.selectPoli', ['patient' => $patient->id]);
    }

    public function storeOld(Request $request)
{
    $validated = $request->validate([
        'name' => 'required|string|max:255',
        'identity_number' => 'required|numeric',
        'medical_record_number' => 'required|string|max:255',
    ]);

    $existingPatient = Patient::where('name', $validated['name'])
                              ->where('identity_number', $validated['identity_number'])
                              ->first();

    if ($existingPatient) {
        return redirect()->route('patients.showQueueNumber', ['patient' => $existingPatient->id]);
    }

    $tmp = Patient::latest()->first();
    $latest = $tmp ? $tmp->queue_number + 1 : 1;
 
    $patient = Patient::create([
        'name' => $validated['name'],
        'identity_number' => $validated['identity_number'],
        'medical_record_number' => $validated['medical_record_number'],
        'queue_number' => $latest,
    ]);

    return redirect()->route('patients.showQueueNumber', ['patient' => $patient->id]);
}


    public function selectPoli($patientId)
    {
        $patient = Patient::findOrFail($patientId);

        $polies = ['Poli Umum', 'Poli Gigi', 'Poli Ibu dan Anak']; 
        $doctors = ['Dr. Andi Setiawan', 'Dr. Budi Santoso', 'Dr. Dwi Lestari', 'Dr. Guntur Saputra', 'Dr. Fitriani Rahmawati']; 


        return view('daftar.pilih', compact('patient', 'polies', 'doctors'));
    }

    public function storePoli(Request $request, $patientId)
    {
        $validated = $request->validate([
            'poli' => 'required|string',
            'doctor' => 'required|string',
            'medical_record' => 'required|string',
        ]);

        $patient = Patient::findOrFail($patientId);

        $patient->update([
            'poli' => $validated['poli'],
            'doctor' => $validated['doctor'],
            'medical_record_number' => $validated['medical_record'],
        ]);

        session()->flash('queue_number', $patient->queue_number);

        return redirect()->route('patients.showQueueNumber', ['patient' => $patient->id]);
    }

    public function showQueueNumber($patientId)
    {
        $patient = Patient::findOrFail($patientId);
        return view('daftar.show', compact('patient'));
    }

    
}
