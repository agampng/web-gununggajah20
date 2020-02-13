<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Modules\Pesan\Models\Pesan;

class Reply extends Model
{
    use Notifiable;


    protected $fillable = ['reply'];
    protected $table = 'replies';

    public function createdBy()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function sentBy()
    {
        return $this->belongsTo(Pesan::class, 'pesan_id', 'id');
    }

    public function getCreatedAtPresentAttribute()
    {
        return $this->created_at->isoFormat('DD MMMM YYYY, H:m:s');
    }
}
