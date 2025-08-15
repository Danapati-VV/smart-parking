<?php

namespace App\Http\Controllers;

use App\Models\Faculty;
use Illuminate\Http\Request;

class ParkController extends Controller
{
    public function sign()
    {
        $faculties = Faculty::all();

        return view('sign', compact('faculties'));
    }

    public function postSign(Request $request)
    {
        $request->validate([
            'faculty_id' => 'required|exists:faculties,id',
        ]);

        session(['selected_faculty_id' => $request->faculty_id]);

        return redirect()->route('home');
    }

    public function home()
    {
        $selectedId = session('selected_faculty_id');
        $faculties = Faculty::all();

        // dorong yang terpilih ke urutan pertama
        $faculties = $faculties
            ->sortByDesc(fn($f) => (int)$f->id === (int)$selectedId)
            ->values();

        $selectedFaculty = $faculties->firstWhere('id', $selectedId);

        return view('home', compact('faculties', 'selectedFaculty'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'percent' => 'required|numeric|min:0|max:100'
        ]);

        $faculty = Faculty::findOrFail($id);
        $faculty->percent = $request->percent;
        $faculty->save();

        return response()->json([
            'message' => 'Persentase berhasil diperbarui',
            'faculty' => $faculty
        ]);
    }

    public function add(Request $request){
        $request->validate([
            'name' => 'required|min:1|max:150',
            'percent' => 'required|numeric|min:0|max:100'
        ]);

        Faculty::create([
            'name' => $request->name,
            'percent' => $request->percent
        ]);

        return request()->json([
            'message' => 'Berhasil ditambahkan'
        ]);
    }
}
