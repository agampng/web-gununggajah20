<?php

namespace Modules\Wisata\TableView;

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
            Text::make('title')->sortable(),
            Text::make('status')->sortable(),
            Text::make('nama_penyedia')->sortable(),
            Text::make('kategori_wisata')->sortable(),
            Text::make('penulis')->sortable(),
            Text::make('editor')->sortable(),
            RestfulButton::make('wisatum'),
        ];
    }
}
