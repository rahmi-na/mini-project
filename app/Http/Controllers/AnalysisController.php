<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use App\Models\Analysis;
use App\Models\Parameter;
use App\Models\Method;
use App\Models\Sample;

class AnalysisController extends Controller
{
    public function index()
    {
        $analysis = Analysis::with(['parameter', 'method', 'sample'])->paginate(5);
        return view('analysis.index', compact('analysis'));
    }

    public function create()
    {
        $parameter = Parameter::all();
        $method = Method::all();
        $sample = Sample::all();
        return view('analysis.create', compact('parameter', 'method', 'sample'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'code' => 'required|string|max:255|unique:analyses,code',
            'description' => 'required|string|max:255',
            'parameter_id' => 'required|exists:parameters,id',
            'method_id' => 'nullable|exists:methods,id',
            'sample_id' => 'nullable|exists:samples,id',
            'lead_time' => 'required|integer',
        ]);

        $validated['created_by'] = Auth::id();
        $validated['created_on'] = now();

        // $analysis = new Analysis();
        // $analysis->code = $validatedData['code'];
        // $analysis->description = $validatedData['description'];
        // $analysis->created_by = Auth::id() ?? 1;
        // $analysis->created_on = Carbon::now();
        // $analysis->is_active = true;
        // $analysis->save();

        Analysis::create($validated);

        return redirect()->route('analysis.index')
                         ->with('success', 'Analysis has been successfully added');
    }

    public function update(Request $request, $id)
    {
        // $validatedData = $request->validate([
        //     'code' => 'required|string|max:255|unique:analyses,code,' . $id,
        //     'description' => 'nullable|string|max:255',
        // ]);

        $validated = $request->validate([
            'code' => 'required|string|max:255|unique:analyses,code',
            'description' => 'required|string|max:255',
            'parameter_id' => 'required|exists:parameters,id',
            'method_id' => 'nullable|exists:methods,id',
            'sample_id' => 'nullable|exists:samples,id',
            'lead_time' => 'required|integer',
        ]);


        // $analysis = Analysis::findOrFail($id);
        // $analysis->code = $validatedData['code'];
        // $analysis->description = $validatedData['description'] ?? null;
        // $analysis->last_updated_by = Auth::id() ?? 1;
        // $analysis->last_updated_on = Carbon::now();
        // $analysis->save();

        $validated['last_updated_by'] = Auth::id();
        $validated['last_updated_on'] = now();

        $analysis = Analysis::findOrFail($id);
        $analysis->update($validated);

        return redirect()->route('analysis.index')
                         ->with('success', 'Analysis has been successfully updated');
    }

    public function edit($id)
    {
        $analysis = Analysis::findOrFail($id);
        $parameters = Parameter::all();
        $methods = Method::all();
        $sampleTypes = Sample::all();
        return view('analysis.edit', compact('analysis', 'parameter', 'method', 'sample'));
    }

    public function destroy($id)
    {
        $analysis = Analysis::findOrFail($id);
        $analysis->delete();

        return redirect()->route('analysis.index')
                         ->with('success', 'Analysis has been successfully deleted');
    }

}
