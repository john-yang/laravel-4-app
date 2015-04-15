<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInstanceTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		// drop if exists
		Schema::dropIfExists('instances');

		Schema::create('instances',function($table) {

			$table->engine = 'InnoDB';
			$table->integer('id');
			$table->string('name',100);
			$table->string('kernel',100);
			$table->string('instance_profile',500);
			$table->string('root_device_type',100);
			$table->string('private_dns_name',100);
			$table->string('_state',100);
			$table->string('group_name',100);
			$table->string('public_dns_name',100);
			$table->string('state_reason',1024);
			$table->string('monitored',100);
			$table->string('item',100);
			$table->string('subnet_id',100);
			$table->string('block_device_mapping',2048);
			$table->string('platform',100);
			$table->string('events_set',100);
			$table->string('ebs_optimized',100);
			$table->string('client_token',100);
			$table->string('_in_monitoring_element',100);
			$table->string('virtualization_type',100);
			$table->string('architecture',100);
			$table->string('ramdisk',100);
			$table->string('_previous_state',100);
			$table->string('tags',100);
			$table->string('key_name',100);
			$table->string('interfaces',100);
			$table->string('source_dest_check',100);
			$table->string('image_id',100);
			$table->string('reason',100);
			$table->string('groups',2048);
			$table->string('spot_instance_request_id',100);
			$table->string('monitoring',100);
			$table->string('requester_id',100);
			$table->string('ip_address',100);
			$table->string('monitoring_state',100);
			$table->string('_placement',100);
			$table->string('ami_launch_index',100);
			$table->string('dns_name',100);
			$table->string('region',100);
			$table->string('launch_time',100);
			$table->string('persistent',100);
			$table->string('instance_type',100);
			$table->string('connection',100);
			$table->string('root_device_name',100);
			$table->string('hypervisor',100);
			$table->string('private_ip_address',100);
			$table->string('vpc_id',100);
			$table->string('product_codes',100);
			$table->integer('reliam_aws_account');
			$table->timestamp('reliam_modified');
			$table->timestamp('reliam_created');
			$table->string('reliam_status',25);
			$table->string('sys_distribution',20);
			$table->string('sys_distribution_release',20);
			$table->string('sys_distribution_version',20);
			$table->string('sys_kernel',45);
			$table->string('sys_machine',20);
			$table->timestamp('updated_at');
			$table->timestamp('created_at');
		});


	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		//
	}

}
