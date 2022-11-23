<?php

namespace App\Models;

use App\Notifications\NewPostAdded;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Cache;
use Spatie\Image\Manipulations;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class Post extends Model implements HasMedia
{
    use HasFactory;
    use InteractsWithMedia;
    use Notifiable;

    protected $guarded = [];

    /* Models Relations */

    public function author()
    {
        return $this->belongsTo(User::class);
    }

    public function tags()
    {
        return $this->belongsToMany(Tag::class)->as('tags');
    }

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    /* Media Conversion */
    public function registerMediaConversions(Media $media = null): void
    {
        $this
            ->addMediaConversion('thumbnail')
            ->fit(Manipulations::FIT_CROP, 500, 500)
            ->nonQueued();
    }

    /*  Model Events  */

    protected static function booted()
    {
        static::creating(function ($post) {
        });

        // notification for new posts
        static::created(function ($post) {
            $maillists = Maillist::all();
            foreach ($maillists as $maillist) {
                $maillist->notify(new NewPostAdded($post));
            }

        });

        static::saved(function ($post) {
            Cache::forget('welcome.posts');
        });
    }

}
