<?php

namespace App\Models;

use App\Http\Controllers\MuseumController;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Museum extends Model
{
    use HasFactory;

        public static function generateSlug($str){

        $slug = Str::slug($str, '-');
        $original_slug = $slug;
        $slug_exixts = Museum::where('slug', $slug)->first();
        $c = 1;
        while($slug_exixts){
            $slug = $original_slug . '-' . $c;
            $slug_exixts = Museum::where('slug', $slug)->first();
            $c++;
        }

        return $slug;
    }
}
