<?php

namespace App\Http\Livewire\Pages\Icon\EHall\Admin\Share\Evaluasi\DataTables;

use App\Models\IconHoisShareMember;
use App\Models\IconHoisShareArticle;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Mediconesystems\LivewireDatatables\BooleanColumn;
use Mediconesystems\LivewireDatatables\Column;
use Mediconesystems\LivewireDatatables\DateColumn;
use Mediconesystems\LivewireDatatables\Http\Livewire\LivewireDatatable;
use ZanySoft\Zip\Zip;

class CustomDatatable extends LivewireDatatable
{
    public $article;
    // public $withDownload = true;
    // public $isDownloadError = false;
    public function builder()
    {
        $this->article = IconHoisShareArticle::find($this->params);
        return IconHoisShareMember::where('article_id', $this->article->id)
            ->join('members', function ($q) {
                $q->on('members.id', '=', 'icon_hois_share_members.member_id');
            })->join('users', function ($q) {
                $q->on('users.userable_id', '=', 'members.id');
                $q->where('users.userable_type', '=', 'App\Models\Member');
            });
    }

    public function columns()
    {
        return [
            Column::checkbox(),
            DateColumn::raw('icon_hois_share_members.created_at')
                ->label('Waktu Unggah')
                ->format('d M Y H:i:s')
                ->defaultSort('desc'),
            Column::name('users.name')->label('Nama')->searchable(),
            Column::name('platform')->label('Platform')->searchable(),
            BooleanColumn::raw('CASE WHEN is_accepted != 0 THEN 1 ELSE 0 END')->label('Sudah Diperiksa')->filterable(),
            BooleanColumn::raw('CASE WHEN is_accepted = 1 THEN 1 ELSE 0 END')->label('Sudah Diterima')->filterable(),
            Column::callback(['id', 'is_accepted'], function ($id, $is_accepted) {
                return view('livewire.pages.icon.e-hall.admin.share.evaluasi.data-tables.actions', ['id' => $id, 'is_accepted' => $is_accepted]);
            })
        ];
    }
}
