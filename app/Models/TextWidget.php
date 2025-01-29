<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TextWidget extends Model
{
    use HasFactory;

    protected $fillable = [
        'key',
        'image',
        'title',
        'content',
        'active',
    ];

    public function getTitle(string $key): string
    {
        $widget = TextWidget::query()
            ->where('key', '=', $key)
            ->where('active', '=',  1)
            ->first();
        if ($widget) {
            return $widget->title;
        }
    }
    public function getContent(string $key): string
    {
        $widget = TextWidget::query()
            ->where('key', '=', $key)
            ->where('active', '=',  1)
            ->first();
        if ($widget) {
            return $widget->content;
        }
        return '';
    }
}
