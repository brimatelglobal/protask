<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Project extends Model
{
    //
    protected $fillable = [
      'title','description','type','client','due_date','cost','user_id',
  ];
  // protected $guilded = ['id'];
  public function user(){
     return $this->belongsTo(User::class);
 }
 public function getMoneyAttribute(){

   return '# '.number_format($this->cost,2);
}

public function receivable(){
   return $this->hasMany(Receivable::class);
}
}
