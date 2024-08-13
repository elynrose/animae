<?php

namespace App\Models;

use DateTimeInterface;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class Character extends Model implements HasMedia
{
    use SoftDeletes, InteractsWithMedia, HasFactory;

    public $table = 'characters';

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'name',
        'scene_id',
        'gender_id',
        'age_group_id',
        'body_type_id',
        'hair_color_id',
        'hair_lenght_id',
        'hair_style_id',
        'eye_color_id',
        'eye_shape_id',
        'skin_tone_id',
        'facial_expression_id',
        'emotion_id',
        'dress_style_id',
        'background',
        'caption',
        'user_id',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }

    public function registerMediaConversions(Media $media = null): void
    {
        $this->addMediaConversion('thumb')->fit('crop', 50, 50);
        $this->addMediaConversion('preview')->fit('crop', 120, 120);
    }

    public function scene()
    {
        return $this->belongsTo(Background::class, 'scene_id');
    }

    public function gender()
    {
        return $this->belongsTo(Gender::class, 'gender_id');
    }

    public function age_group()
    {
        return $this->belongsTo(AgeGroup::class, 'age_group_id');
    }

    public function body_type()
    {
        return $this->belongsTo(BodyType::class, 'body_type_id');
    }

    public function hair_color()
    {
        return $this->belongsTo(HairColor::class, 'hair_color_id');
    }

    public function hair_lenght()
    {
        return $this->belongsTo(HairLength::class, 'hair_lenght_id');
    }

    public function hair_style()
    {
        return $this->belongsTo(HairStyle::class, 'hair_style_id');
    }

    public function eye_color()
    {
        return $this->belongsTo(EyeColor::class, 'eye_color_id');
    }

    public function eye_shape()
    {
        return $this->belongsTo(EyeShape::class, 'eye_shape_id');
    }

    public function skin_tone()
    {
        return $this->belongsTo(SkinTone::class, 'skin_tone_id');
    }

    public function facial_expression()
    {
        return $this->belongsTo(FacialExpression::class, 'facial_expression_id');
    }

    public function emotion()
    {
        return $this->belongsTo(Emotion::class, 'emotion_id');
    }

    public function dress_style()
    {
        return $this->belongsTo(DressStyle::class, 'dress_style_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
