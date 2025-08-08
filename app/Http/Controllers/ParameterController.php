<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Parameter;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

class ParameterController extends Controller
{
    public function index()
    {
        $parameter = Parameter::paginate(5);
        return view('parameter.index', compact('parameter'));
    }

    public function create()
    {
        return view('parameter.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'code' => 'required|string|max:255|unique:parameters,code',
            'description' => 'required|string|max:255',
        ]);

        $parameter = new Parameter();
        $parameter->code = $validatedData['code'];
        $parameter->description = $validatedData['description'];
        $parameter->created_by = Auth::id() ?? 1;
        $parameter->created_on = Carbon::now();
        $parameter->is_active = true;
        $parameter->save();

        return redirect()->route('parameter.index')
                         ->with('success', 'Parameter has been successfully added');
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'code' => 'required|string|max:255|unique:parameters,code,' . $id,
            'description' => 'nullable|string|max:255',
        ]);

        $parameter = Parameter::findOrFail($id);
        $parameter->code = $validatedData['code'];
        $parameter->description = $validatedData['description'] ?? null;
        $parameter->last_updated_by = Auth::id() ?? 1;
        $parameter->last_updated_on = Carbon::now();
        $parameter->save();

        return redirect()->route('parameter.index')
                         ->with('success', 'Parameter has been successfully updated');
    }

    public function edit($id)
    {
        $parameter = Parameter::findOrFail($id);
        return view('parameter.edit', compact('parameter'));
    }

    public function destroy($id)
    {
        $parameter = Parameter::findOrFail($id);
        $parameter->delete();

        return redirect()->route('parameter.index')
                         ->with('success', 'Parameter has been successfully deleted');
    }

}

