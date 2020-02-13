<?php

namespace Modules\Master\TableView;

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
            Text::make('page', 'Halaman')->sortable(),
            Text::make('created_at_present', 'Tanggal Dibuat')->sortable(),
            RestfulButton::make('master')->only(['edit', 'delete']),
        ];
    }
}
