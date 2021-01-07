<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Programs;

class ProgramApi extends Controller
{
    public function all()
    {
        return Programs::all();
    }

    public function show($id)
    {
        return Programs::find($id);
    }

    public function store(Request $request)
    {
        return Programs::create($request->all());
    }

    public function update(Request $request, $id)
    {
        $program = Programs::findOrFail($id);
        $program->update($request->all());

        return $program;
    }

    public function delete(Request $request, $id)
    {
        $program = Programs::findOrFail($id);
        $program->delete();

        return 204;
    }
}
