<?php

namespace App\Models;

use Hekmatinasser\Verta\Verta;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Video extends Model
{

    protected $guarded=[];
public function getLengthForHumanAttribute()
{
     return gmdate('i:s',$this->value);
}

public function getCreatedAtAttribute($value)
{
    return (new Verta($value))->formatDifference();
}

protected $fillable=['name','length','url','thumbnail','slug','description','category_id'];
    public function relatedVideos(int $count=5)
    {
        return  $this->category->getRandomVideos($count);
    }

   public function getRouteKeyName()
   {
         return 'slug';
   }


   public function category()
   {
        return $this->belongsTo(Category::class,'category_id');
   }


   public function getCategoryNameAttribute()
   {
     return $this->category?->name;
   }




}

