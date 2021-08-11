<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User;
use App\Models\Pastpaper;
use Carbon\Carbon;
use Illuminate\Support\Str;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Auth;

class UploadExamPaper extends Component
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
        $this->image = "not_available";
    }

    public function uploadExamPaper()
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
        $exampaper->user_id = Auth::user()->id;
        $exampaper->save();
        session()->flash('message', 'Exam paper has been Uploaded Succesifuly!');
       
        
    }
    public function render()
    {
        return view('livewire.upload-exam-paper')->layout('layouts.base');
    }
}
