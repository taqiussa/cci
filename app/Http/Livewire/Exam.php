<?php

namespace App\Http\Livewire;

use App\Models\Answer;
use Livewire\Component;
use App\Models\Question;
use WireUi\Traits\Actions;

class Exam extends Component
{
    use Actions;

    public $status;
    public $priority;
    public $count;


    public $question;
    public $answer;

    public $mySelected;
    public $answers = [];
    public $questions = [];

    public function render()
    {
        $this->getQuestion();
        $this->getQuestions();
        $this->getAnswer();

        return view('livewire.exam');
    }


    public function mount()
    {
        $this->priority = 1;
        if (auth()->user()->sudah_test) {
            $this->status = 'akhir';
        } else {
            $this->status = 'petunjuk';
        }

        $this->count = Question::count();
        $this->answers = Answer::whereUserId(auth()->user()->id)
            ->get();
        $this->mySelected = null;
        $this->getQuestion();
        $this->getQuestions();
        $this->getAnswer();
    }

    public function changeStatus($status)
    {
        $this->status = $status;
    }

    //akademik
    public function setPriority($number)
    {
        $this->priority = $number;
    }

    public function choiceOption($index)
    {
        $this->mySelected = $index;
        if ($index == $this->question->correct) {
            $this->question->answers()->updateOrCreate(
                [
                    'user_id' => auth()->user()->id,
                    'priority' => $this->priority
                ],
                [
                    'answer' => $this->mySelected,
                    'is_correct' => 1
                ]
            );
        } else {
            $this->question->answers()->updateOrCreate(
                [
                    'user_id' => auth()->user()->id,
                    'priority' => $this->priority
                ],
                [
                    'answer' => $this->mySelected,
                    'is_correct' => 0
                ]
            );
        }
    }

    public function next()
    {
        if ($this->priority < $this->count) {
            $this->priority++;
        }
        $this->mySelected = null;
    }

    public function prev()
    {
        if ($this->priority > 1) {
            $this->priority--;
        }
        $this->mySelected = null;
    }

    public function simpan()
    {
        $hitung = Answer::whereUserId(auth()->user()->id)
            ->count();
        if ($hitung < 30) {

            $this->dialog()->error(

                $title = 'Ada Soal Belum Terjawab !!',

                $description = 'Periksa Jawaban Anda, Ada Soal Belum terjawab dari 30 Soal'

            );
        } else {

            auth()->user()->update([
                'sudah_test'  => 1
            ]);

            $this->status = 'akhir';
        }
    }

    private function getQuestion()
    {
        $this->question =  Question::wherePriority($this->priority)->first();
    }
    private function getQuestions()
    {
        $this->questions =  Question::get();
    }
    private function getAnswer()
    {
        $this->answer = Answer::whereUserId(auth()->user()->id)
            ->wherePriority($this->priority)
            ->first();
    }
}
