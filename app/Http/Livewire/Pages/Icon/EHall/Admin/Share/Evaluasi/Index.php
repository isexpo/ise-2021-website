<?php

namespace App\Http\Livewire\Pages\Icon\EHall\Admin\Share\Evaluasi;

use App\Models\IconHoisShareArticle;
use Livewire\Component;

class Index extends Component
{
    public $article_id;
    public $caption;
    public $start;
    public $end;

    public function mount($id)
    {
        $this->article_id = $id;
        $article = IconHoisShareArticle::find($id);
        if (!$article) {
            return abort(404);
        }
        $this->caption = $article->caption;
        $this->start = $article->start;
        $this->end = $article->end;
    }

    public function render()
    {
        return view('livewire.pages.icon.e-hall.admin.share.evaluasi.index');
    }
}
