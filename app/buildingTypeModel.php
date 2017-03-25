<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class buildingTypeModel extends baseModel
{
    //
    protected $table='tblBuildingType';
    protected $primaryKey='intBuilTypeCode';
    public $incrementing=true;
}
