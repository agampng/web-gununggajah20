<?php

namespace Modules\Pesan\TableView;

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
            Text::make('name', 'Nama')->sortable(),
            Text::make('email')->sortable(),
            Text::make('pesan')->sortable(),
            Text::make('created_at_present', 'Tanggal Dibuat')->sortable(),
            RestfulButton::make('pesan')->only(['view', 'delete']),
        ];
    }
}
