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
            Text::make('title')->sortable(),
            Text::make('content')->sortable(),
            Text::make('status')->sortable(),
            Text::make('slug')->sortable(),
            Text::make('created_by')->sortable(),
            Text::make('updated_by')->sortable(),
            RestfulButton::make('article'),
        ];
    }
}
