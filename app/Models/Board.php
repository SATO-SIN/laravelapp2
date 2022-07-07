<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Board extends Model
{
    // use HasFactory;
    protected $guarded = array('id');

    public static $rules = array(
        'person_id' => 'required',
        'title' => 'required',
        'message' => 'required'
    );

    public function getData()
    {
        $outputs = "";
        $outputs .= $this->id;
        $outputs .= ":" . $this->title;
        $outputs .= ":" . $this->person_id;
        $outputs .= ":" . $this->created_at;

        return $this->id . ': ' . $this->title . ':' .
            $this->person_id;
    }
}
