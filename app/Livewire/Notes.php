<?php

namespace App\Livewire;

use App\Models\Note;
use Livewire\Component;

class Notes extends Component
{
    public $note = "";
    public $feedback = "";

    public function store()
    {
        Note::create([
            "content" => $this->note
        ]);
        $this->feedback = "Nota guardada";
    }

    public function destroy($id)
    {
        Note::destroy($id);
        $this->feedback = "Nota borrada";
    }

    public function update($id)
    {
        $noteToUpdate = Note::find($id);
        $noteToUpdate->content = $this->note;
        $noteToUpdate->save();
        $this->feedback = "Nota actualizada";

    }

    public function render()
    {
        $notes = Note::all();
        return view('livewire.notes', compact('notes'));
    }
}
