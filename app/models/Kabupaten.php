<?php

/**
* 
*/
class Kabupaten extends Eloquent
{
	
	protected $primaryKey = 'idkabupaten';
	protected $table = 'kabupaten';
	protected $guarded = array();

	public $timestamps = false;

	public static $rules = array();

	public function provinsi(){
		return $this->belongsTo('Provinsi', 'idprovinsi');
	}

	public function getDataKabupaten($id = null){
		if ($id != null) {
            return self::where('idprovinsi', '=', $id)->get();
        }else{
            return self::all();
        }
	}


}