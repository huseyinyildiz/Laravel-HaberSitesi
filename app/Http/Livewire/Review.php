<?php

namespace App\Http\Livewire;

use App\Models\News;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Review extends Component
{
    public $record, $subject,$review,$news_id,$rate;

    public function mount($id)
    {
        $this->record = News::findOrFail($id);
        $this->news_id = $this->record->id;
    }



    public function render()
    {
        return view('livewire.review');
    }

    private function resetInput()
    {
        $this->subject=null;
        $this->review=null;
        $this->rate=null;
        $this->news_id=null;
        $this->IP=null;

    }

    public function store()
    {

        $this->validate([
            'subject'=>'required|min:5',
            'review'=>'required|min:10',
            'rate'=>'required'
        ]);

        \App\Models\Review::create([
            'news_id'=>$this->news_id,
            'user_id'=>Auth::id(),
            'IP'=>$_SERVER['REMOTE_ADDR'],
            'rate'=>$this->rate,
            'subject'=>$this->subject,
            'review'=>$this->review

        ]);

        session()->flash('message', 'Revire Send Successfuly');
        $this->resetInput();

    }

}
