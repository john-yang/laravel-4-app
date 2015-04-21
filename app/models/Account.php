<?php


class Account extends Eloquent {

	// protected $table = Instances;

	public $timestamps = true;

	protected $fillable = array('id',
								'name',
								'organization_id',
								'access_key',
								'secret_key',
								'organization',
								'updated_at',
								'created_at'
								);

}
