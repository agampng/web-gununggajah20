<?php

namespace Modules\Articles\Models;

use App\User;
use Illuminate\Database\Eloquent\Model;
use Laravolt\Suitable\AutoFilter;
use Laravolt\Suitable\AutoSort;
use Sofa\Eloquence\Eloquence;
use Spatie\MediaLibrary\HasMedia\HasMedia;
use Spatie\MediaLibrary\HasMedia\HasMediaTrait;

class Article extends Model implements HasMedia
{
    use AutoSort, AutoFilter;
    use Eloquence;
    use HasMediaTrait;

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

    public function getCreatedAtPresentAttribute()
    {
        return $this->created_at->isoFormat('DD MMMM YYYY');
    }

    public function getUpdatedAtPresentAttribute()
    {
        return $this->updated_at->isoFormat('DD MMMM YYYY');
    }
}
