<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\TextVariable;
use Illuminate\Http\Request;

class TextVariableAdminController extends Controller
{
    public function index()
    {
        $textVariables = TextVariable::all();
        return view('admin.text_variables.index', compact('textVariables'));
    }

    public function create()
    {
        return view('admin.text_variables.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'key' => 'required|unique:text_variables,key',
            'text_en' => 'required',
            'text_es' => 'required',
            'text_ru' => 'required',
        ]);

        TextVariable::create($request->all());

        return redirect()->route('admin.text_variables.index')->with('success', 'Text variable created successfully.');
    }

    public function edit(TextVariable $textVariable)
    {
        return view('admin.text_variables.edit', compact('textVariable'));
    }

    public function update(Request $request, TextVariable $textVariable)
    {
        $request->validate([
            'text_en' => 'required',
            'text_es' => 'required',
            'text_ru' => 'required',
        ]);

        $textVariable->update($request->all());

        return redirect()->route('admin.text_variables.index')->with('success', 'Text variable updated successfully.');
    }

    public function destroy(TextVariable $textVariable)
    {
        $textVariable->delete();

        return redirect()->route('admin.text_variables.index')->with('success', 'Text variable deleted successfully.');
    }
}
