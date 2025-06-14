<?php

namespace App\Models;
use App\Models\traineeModel;
use App\Models\TradeModel;
use Illuminate\Database\Eloquent\Model;

class Marks extends Model
{
   protected $table='marks';
   // app/Models/Mark.php

public function trainee() {
    return $this->belongsTo(traineeModel::class); // 'trainee' is the method name here
}

public function trade() {
    return $this->belongsTo(TradeModel::class); // 'trade' is the method name here
}

}

