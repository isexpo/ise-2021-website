<?php

namespace App\Http\Livewire\Pages\Icon\EHall\Admin\Quest\DataTables;

use App\Models\IconHoisQuestQuiz;
use App\Models\IconHoisQuestLevel;
use Livewire\Component;
use Mediconesystems\LivewireDatatables\Column;
use Mediconesystems\LivewireDatatables\DateColumn;
use Mediconesystems\LivewireDatatables\Http\Livewire\LivewireDatatable;
use Mediconesystems\LivewireDatatables\NumberColumn;

class CustomDatatable extends LivewireDatatable
{
//    public $model = IconHoisQuestQuiz::class;
     public function builder()
     {

             return IconHoisQuestQuiz::where('quest_level_id',$this->params)
                 //->leftJoin('icon_hois_quest_levels as level', 'level.member_id', 'icon_hois_quest_quizzes.id');
                 //return IconHoisQuestMember::query()
                 ;

     }

    public function columns()
    {
        return [
            Column::name('question')->label('Question'),
            Column::name('type')->label('Tipe'),
            // Column::name('opt_a')->label('Opsi A'),
            // Column::name('opt_b')->label('Opsi B'),
            // Column::name('opt_c')->label('Opsi C'),
            // Column::name('opt_d')->label('Opsi D'),
            Column::name('answer')->label('Answer'),
            Column::name('explanation')->label('Explanations'),
            //Column::name('name')->label('Level name'),
            Column::callback(['id'], function ($id) {
                return view('livewire.pages.icon.e-hall.admin.quest.data-tables.actions', ['id' => $id]);
            })
        ];
    }
}
