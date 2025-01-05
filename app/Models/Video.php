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

protected $fillable=['name','length','url','thumbnail','slug','description'];
    public function relatedVideos(int $count=4)
    {
        return  Video::all()->random($count);
    }

   public function getRouteKeyName()
   {
         return 'slug';
   }

}

