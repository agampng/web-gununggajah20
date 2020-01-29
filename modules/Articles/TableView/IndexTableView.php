<?php

namespace Modules\Articles\TableView;

use Laravolt\Suitable\Columns\Numbering;
use Laravolt\Suitable\Columns\RestfulButton;
use Laravolt\Suitable\Columns\Text;
use Laravolt\Suitable\TableView;

class IndexTableView extends TableView
{
    protected function columns()
    {
        return [
            Numbering::make('No'),
            Text::make('title', 'Judul')->sortable(),
            Text::make('status')->sortable(),
            Text::make('penulis')->sortable(),
            Text::make('editor')->sortable(),
            Text::make('created_at', 'Tanggal')->sortable(),
            RestfulButton::make('article'),
        ];
    }
}
