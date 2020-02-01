<?php

namespace Modules\Wisata\Models;

use Illuminate\Database\Eloquent\Model;
use Laravolt\Suitable\AutoFilter;
use Laravolt\Suitable\AutoSort;
use Sofa\Eloquence\Eloquence;

class Wisata extends Model
{
    use AutoSort, AutoFilter;
    use Eloquence;

    protected $table = 'wisata';

    protected $guarded = [];

    protected $searchableColumns = ["title", "content", "status", "slug", "file", "nama_penyedia", "telepon_penyedia", "email_penyedia", "kategori_wisata", "created_by", "updated_by",];


    public function getCreatedAtPresentAttribute()
    {
        return $this->created_at->isoFormat('DD MMMM YYYY');
    }

    public function getUpdatedAtPresentAttribute()
    {
        return $this->updated_at->isoFormat('DD MMMM YYYY');
    }
}
