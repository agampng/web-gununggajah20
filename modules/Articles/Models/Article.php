<?php

namespace Modules\Articles\Models;

use Illuminate\Database\Eloquent\Model;
use Laravolt\Suitable\AutoFilter;
use Laravolt\Suitable\AutoSort;
use Sofa\Eloquence\Eloquence;

class Article extends Model
{
    use AutoSort, AutoFilter;
    use Eloquence;

    protected $table = 'articles';

    protected $guarded = [];

    protected $searchableColumns = ["title", "content", "status", "slug", "created_by", "updated_by"];


    public function createdBy()
    {
        return $this->belongsTo(User::class, 'created_by');
    }

    public function updatedBy()
    {
        return $this->belongsTo(User::class, 'updated_by');
    }
}
