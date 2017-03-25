<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class representativeModel extends baseModel
{
    //
	protected $table="tblRepresentative";
	protected $primaryKey="intReprCode";
	public $incrementing=true;
}
