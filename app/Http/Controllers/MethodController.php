<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Method;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

class MethodController extends Controller
{
        public function index()
    {
        $method = Method::paginate(5);
        return view('method.index', compact('method'));
    }

    public function create()
    {
        return view('method.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'code' => 'required|string|max:255|unique:methods,code',
            'description' => 'required|string|max:255',
        ]);

        $method = new Method();
        $method->code = $validatedData['code'];
        $method->description = $validatedData['description'];
        $method->created_by = Auth::id() ?? 1;
        $method->created_on = Carbon::now();
        $method->is_active = true;
        $method->save();

        return redirect()->route('method.index')
                         ->with('success', 'Method has been successfully added');
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'code' => 'required|string|max:255|unique:methods,code,' . $id,
            'description' => 'nullable|string|max:255',
        ]);

        $method = Method::findOrFail($id);
        $method->code = $validatedData['code'];
        $method->description = $validatedData['description'] ?? null;
        $method->last_updated_by = Auth::id() ?? 1;
        $method->last_updated_on = Carbon::now();
        $method->save();

        return redirect()->route('method.index')
                         ->with('success', 'Method has been successfully updated');
    }

    public function edit($id)
    {
        $method = Method::findOrFail($id);
        return view('method.edit', compact('method'));
    }

    public function destroy($id)
    {
        $method = Method::findOrFail($id);
        $method->delete();

        return redirect()->route('method.index')
                         ->with('success', 'Method has been successfully deleted');
    }
}
