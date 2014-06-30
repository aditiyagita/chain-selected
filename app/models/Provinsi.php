<?php 

class Provinsi extends Eloquent {

	protected $primaryKey = 'idprovinsi';
	protected $table = 'provinsi';
	protected $guarded = array();

	public $timestamps = false;

	public static $rules = array();

	public function kabupaten(){
		return $this->hasMany('Kabupaten', 'idprovinsi');
	}

	public function getDataProvinsi($id = null){
		if ($id != null) {
            return self::find($id);
        }else{
            return self::all();
        }
	}

}