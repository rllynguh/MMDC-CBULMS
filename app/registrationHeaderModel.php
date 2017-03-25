<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class registrationHeaderModel extends baseModel
{
    //
	protected $table="tblRegistrationHeader";
	protected $primaryKey="intRegiCode";
	public $incrementing=true;
}
