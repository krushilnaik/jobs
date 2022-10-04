<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Listing extends Model
{
  use HasFactory;

  protected $fillable = [
    "title",
    "company",
    "location",
    "website",
    "email",
    "description",
    "tags",
  ];

  public function scopeTags($query, $tag)
  {
    if (!is_null($tag)) {
      return $query->where("tag", "like", "%" . $tag . "%");
    }

    return $query;
  }

  public function scopeTitle($query, $title)
  {
    if (!is_null($title)) {
      return $query->where("title", "like", "%" . $title . "%");
    }

    return $query;
  }

  // public function scopeFilter($query, array $filters)
  // {
  //   if ($filters['tag'] ?? false) {
  //     $query->where('tags', 'like', '%' . request('tag') . '%');
  //   }

  //   if ($filters['search'] ?? false) {
  //     $query->where('title', 'like', '%' . request('search') . '%');
  //   }
  // }
}
