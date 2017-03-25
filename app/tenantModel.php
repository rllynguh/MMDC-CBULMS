<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tenantModel extends baseModel
{
    //
	protected $table="tblTenant";
	protected $primaryKey="intTenaCode";
	public $incrementing=true;
}
