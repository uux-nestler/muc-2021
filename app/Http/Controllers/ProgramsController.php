<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Programs;

class ProgramsController extends Controller {

    public function index() {
        $programs = Programs::orderBy('title')->get();
        return view(
                'programs.list', [
            'programs' => $programs,
                ]
        );
    }

    public function add() {
        return view('programs.add');
    }

    public function store() {
        $program = new Programs();
        $program->title = request('title');
        $program->ort = request('ort');
        $program->date = request('date');
        $program->zeit = request('zeit');
        $program->content = request('content');
        $program->save();

        return redirect('/programs')->with('mssg', 'New Program Item created! :)');
    }

    public function edit($id) {
        $program = Programs::findOrFail($id);
        return view('programs.edit', ['program' => $program]);
    }

    public function show($id) {
        $program = Programs::findOrFail($id);
        return view('programs.show', ['program' => $program]);
    }

    public function update($id) {
        $program = Programs::find($id);
        $program->title = request('title');
        $program->ort = request('ort');
        $program->date = request('date');
        $program->zeit = request('zeit');
        $program->content = request('content');
        $program->save();
        return view('programs.show', ['program' => $program]);
    }

    public function destroy($id) {

        $program = Programs::findOrFail($id);

        $program->delete();

        return redirect('/programs')->with('mssg', 'Program Item deleted ! :)');
    }

}
