<?php


class Organization extends Eloquent {

	// protected $table = Instances;

	public $timestamps = true;

	protected $fillable = array('id',
								'name',
								'description',
								'updated_at',
								'created_at'
								);

}
