<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Receivable extends Model
{

   protected $fillable = [
     'project_id','amount'
 ];
    public function project(){
      return $this->belongsTo(Prpject::class);
   }

   public function getMoneyAttribute(){

     return '# '.number_format($this->amount,2);
  }
 
}
