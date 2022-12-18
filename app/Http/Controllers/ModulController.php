<?php

namespace App\Http\Controllers;

use App\Models\Modul;
use Illuminate\Http\Request;

class ModulController extends Controller
{
    public function create(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'semester' => 'required',
            'lokasi' => 'required'
        ],[
            'name.required' => 'Module name cannot be empty',
            'semester.required' => 'Semester cannot be empty',
            'lokasi.required' => 'Location cannot be empty'
        ]);

        $modulData = [
            'name' => $request->name,
            'semester' => $request->semester,
            'lokasi' => $request->lokasi
        ];

        Modul::create($modulData);
    }

    public function delete(Request $request)
    {
        Modul::find($request->modulId)->delete();
    }

    public function modify(Request $request)
    {
        $updatedModul = Modul::find($request->modulId);

        $request->validate([
            'name' => 'required',
            'semester' => 'required',
            'lokasi' => 'required'
        ],[
            'name.required' => 'Module name cannot be empty',
            'semester.required' => 'Semester cannot be empty',
            'lokasi.required' => 'Location cannot be empty'
        ]);

        $updatedModul->update([
            'name' => $request->name,
            'semester' => $request->semester,
            'lokasi' => $request->lokasi
        ]);
    }
    
    public function retrieve_owned(Request $request)
    {
        $userType = $request->userType;
        $userId = $request->userId;
        if($userType == 'mahasiswa') {
            $modul = Modul::mahasiswa()->where('mahasiswa.id', $request->userId)->pluck('modul.id', 'modul.nama', 'modul.semester', 'modul.lokasi');
        } else {
            $modul = Modul::dosen()->where('dosen.id', $request->userId)->pluck('modul.id', 'modul.nama', 'modul.semester', 'modul.lokasi');
        }
        return $modul
    }
}
