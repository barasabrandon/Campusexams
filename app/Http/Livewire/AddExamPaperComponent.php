<?php

namespace App\Http\Livewire;
use App\Models\Pastpaper;
use Carbon\Carbon;
use Livewire\WithFileUploads;

use Livewire\Component;

class AddExamPaperComponent extends Component
{
    use WithFileUploads;
    public $course_name;
    public $school;
    public $course_code;
    public $semester;
    public $year;
    public $image;
    public $pdf;
    
    public function mount()
    {
        $this->image = 'not_available';
    }

    public function addExampaper()
    {
        $exampaper = new Pastpaper();
        $exampaper->course_name = $this->course_name;
        $exampaper->school = $this->school;
        $exampaper->course_code = $this->course_code;
        $exampaper->semester = $this->semester;
        $exampaper->year = $this->year;
        $exampaper->image = $this->image;
        //files
        $pdfName = Carbon::now()->timestamp.'.'.$this->pdf->extension();
        $this->pdf->storeAs('assets' , $pdfName);
        $exampaper->pdf = $pdfName;

        $exampaper->save();
        session()->flash('message', 'Exam paper has been Added Succesifuly!');
       
    }

    public function render()
    {
        return view('livewire.add-exam-paper-component')->layout('layouts.base');
    }
}
