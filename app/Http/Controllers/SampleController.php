<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sample;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

class SampleController extends Controller
{
    public function index()
    {
        $sample = Sample::paginate(5);
        return view('sample.index', compact('sample'));
    }

    public function create()
    {
        return view('sample.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'code' => 'required|string|max:255|unique:samples,code',
            'description' => 'required|string|max:255',
        ]);

        $sample = new Sample();
        $sample->code = $validatedData['code'];
        $sample->description = $validatedData['description'];
        $sample->created_by = Auth::id() ?? 1;
        $sample->created_on = Carbon::now();
        $sample->is_active = true;
        $sample->save();

        return redirect()->route('sample.index')
                         ->with('success', 'Sample has been successfully added');
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'code' => 'required|string|max:255|unique:samples,code,' . $id,
            'description' => 'nullable|string|max:255',
        ]);

        $sample = Sample::findOrFail($id);
        $sample->code = $validatedData['code'];
        $sample->description = $validatedData['description'] ?? null;
        $sample->last_updated_by = Auth::id() ?? 1;
        $sample->last_updated_on = Carbon::now();
        $sample->save();

        return redirect()->route('sample.index')
                         ->with('success', 'Sample has been successfully updated');
    }

    public function edit($id)
    {
        $sample = Sample::findOrFail($id);
        return view('sample.edit', compact('sample'));
    }

    public function show($id)
    {
        $sample = Sample::findOrFail($id);
        return view('sample.show', compact('sample'));
    }


    public function destroy($id)
    {
        $sample = Sample::findOrFail($id);
        $sample->delete();

        return redirect()->route('sample.index')
                         ->with('success', 'Sample has been successfully deleted');
    }

}
