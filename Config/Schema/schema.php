<?php

	class AppSchema extends CakeSchema {

		public function before($event = []) {
			return true;
		}

		public function after($event = []) {
		}

		public $rooms = [
			'id' => [
				'type' => 'integer',
				'null' => false,
				'default' => null,
				'unsigned' => true,
				'key' => 'primary'
			],
			'user_id' => [
				'type' => 'integer',
				'null' => false,
				'default' => null,
				'unsigned' => true
			],
			'name' => [
				'type' => 'string',
				'null' => false,
				'collate' => 'utf8_general_ci',
				'charset' => 'utf8'
			],
			'description' => [
				'type' => 'text',
				'null' => true,
				'default' => null,
				'collate' => 'utf8_general_ci',
				'charset' => 'utf8'
			],
			'created' => [
				'type' => 'datetime',
				'null' => false,
				'default' => null
			],
			'modified' => [
				'type' => 'datetime',
				'null' => false,
				'default' => null
			],
			'indexes' => [
				'PRIMARY' => [
					'column' => 'id',
					'unique' => 1
				]
			],
			'tableParameters' => [
				'charset' => 'utf8',
				'collate' => 'utf8_general_ci',
				'engine' => 'InnoDB'
			]
		];

		public $schema_migrations = [
			'id' => [
				'type' => 'integer',
				'null' => false,
				'default' => null,
				'unsigned' => false,
				'key' => 'primary'
			],
			'class' => [
				'type' => 'string',
				'null' => false,
				'default' => null,
				'collate' => 'utf8_general_ci',
				'charset' => 'utf8'
			],
			'type' => [
				'type' => 'string',
				'null' => false,
				'default' => null,
				'length' => 50,
				'collate' => 'utf8_general_ci',
				'charset' => 'utf8'
			],
			'created' => [
				'type' => 'datetime',
				'null' => false,
				'default' => null
			],
			'indexes' => [
				'PRIMARY' => [
					'column' => 'id',
					'unique' => 1
				]
			],
			'tableParameters' => [
				'charset' => 'utf8',
				'collate' => 'utf8_general_ci',
				'engine' => 'InnoDB'
			]
		];

		public $users = [
			'id' => [
				'type' => 'integer',
				'null' => false,
				'default' => null,
				'unsigned' => true,
				'key' => 'primary'
			],
			'img_url' => [
				'type' => 'string',
				'null' => true,
				'default' => null,
				'collate' => 'utf8_general_ci',
				'charset' => 'utf8'
			],
			'nickname' => [
				'type' => 'string',
				'null' => false,
				'collate' => 'utf8_general_ci',
				'charset' => 'utf8'
			],
			'password' => [
				'type' => 'string',
				'null' => false,
				'default' => null,
				'length' => 500,
				'collate' => 'utf8_general_ci',
				'charset' => 'utf8'
			],
			'description' => [
				'type' => 'text',
				'null' => true,
				'default' => null,
				'collate' => 'utf8_general_ci',
				'charset' => 'utf8'
			],
			'mail_address' => [
				'type' => 'string',
				'null' => true,
				'default' => null,
				'collate' => 'utf8_general_ci',
				'charset' => 'utf8'
			],
			'mail_notification' => [
				'type' => 'boolean',
				'null' => false,
				'default' => '0'
			],
			'created' => [
				'type' => 'datetime',
				'null' => false,
				'default' => null
			],
			'modified' => [
				'type' => 'datetime',
				'null' => false,
				'default' => null
			],
			'indexes' => [
				'PRIMARY' => [
					'column' => 'id',
					'unique' => 1
				]
			],
			'tableParameters' => [
				'charset' => 'utf8',
				'collate' => 'utf8_general_ci',
				'engine' => 'InnoDB'
			]
		];

		public $voices = [
			'id' => [
				'type' => 'integer',
				'null' => false,
				'default' => null,
				'length' => 100,
				'unsigned' => true,
				'key' => 'primary'
			],
			'user_id' => [
				'type' => 'integer',
				'null' => false,
				'default' => null,
				'unsigned' => false
			],
			'room_id' => [
				'type' => 'integer',
				'null' => false,
				'default' => '0',
				'unsigned' => false
			],
			'body' => [
				'type' => 'text',
				'null' => false,
				'default' => null,
				'collate' => 'utf8_general_ci',
				'charset' => 'utf8'
			],
			'created' => [
				'type' => 'datetime',
				'null' => false,
				'default' => null
			],
			'modified' => [
				'type' => 'datetime',
				'null' => false,
				'default' => null
			],
			'indexes' => [
				'PRIMARY' => [
					'column' => 'id',
					'unique' => 1
				]
			],
			'tableParameters' => [
				'charset' => 'utf8',
				'collate' => 'utf8_general_ci',
				'engine' => 'InnoDB'
			]
		];

	}
