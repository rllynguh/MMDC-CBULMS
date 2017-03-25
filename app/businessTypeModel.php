<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class businessTypeModel extends BaseModel
{
    //
    protected $table="tblbusinesstype";
    protected $primaryKey="intBusiTypeCode";
    public $incrementing=true;
}
