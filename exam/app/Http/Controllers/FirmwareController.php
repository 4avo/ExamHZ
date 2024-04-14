<?php

namespace App\Http\Controllers;

use App\Models\Firmware;
use Illuminate\Http\Request;

class FirmwareController extends Controller
{   
    /** shows all the firmwares in the database*/ 
    public function index()
    {
        return view('firmwares.index', [
            'firmwares' => Firmware::all()
        ]);
    }

    /** returns the crete firmware view*/ 
    public function create()
    {
        return view('firmwares.create');
    }

    /** return the show firmware view*/ 
    public function show(Firmware $firmware)
    {   
        if ($firmware->lines_of_code <= 500) {
            $firmware->classification = 'Small';
        }
        else {
            $firmware->classification = 'Huge';
        }

        return view('firmwares.show', [
            'firmware' => $firmware,
        ]);
    }
    
    /** stores the data and validates if it meets the requirements*/ 
    public function store(Request $request){
        $validated = $request->validate([
            'name' => 'required',
            'version' => 'required',
            'lines_of_code' => 'required'
        ]);

        $firmware = Firmware::create($validated);

        return redirect()->route('firmwares.index');
    }

    /** return edit firmware page*/ 
    public function edit(Firmware $firmware){
        return view('firmwares.edit', [
            'firmware' => $firmware
        ]);
    }

    /** updates the database with the given data*/ 
    public function update(Request $request, Firmware $firmware){
        $validated = $request->validate([
            'name' => 'required',
            'version' => 'required',
            'lines_of_code' => 'required'
        ]);

        $firmware->update($validated);

        return redirect()->route('firmwares.show', $firmware);
    
    }

    /** deletes the requested firmware*/ 
    public function destroy(Firmware $firmware){
        $firmware->delete();

        return redirect()->route('firmwares.index');
    }
}
