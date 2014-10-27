<?php

	class CreateBasicTables extends CakeMigration {

		/**
		 * Migration description
		 *
		 * @var string
		 */
		public $description = 'create_basic_tables';

		/**
		 * Actions to be performed
		 *
		 * @var array $migration
		 */
		public $migration = [
			'up' => [
				'create_table' => [
					'rooms' => [
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
							],
						],
						'tableParameters' => [
							'charset' => 'utf8',
							'collate' => 'utf8_general_ci',
							'engine' => 'InnoDB'
						],
					],
					'users' => [
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
							],
						],
						'tableParameters' => [
							'charset' => 'utf8',
							'collate' => 'utf8_general_ci',
							'engine' => 'InnoDB'
						],
					],
					'voices' => [
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
							],
						],
						'tableParameters' => [
							'charset' => 'utf8',
							'collate' => 'utf8_general_ci',
							'engine' => 'InnoDB'
						],
					],
				],
			],
			'down' => [
				'drop_table' => [
					'rooms',
					'users',
					'voices'
				],
			],
		];

		/**
		 * Before migration callback
		 *
		 * @param string $direction Direction of migration process (up or down)
		 * @return bool Should process continue
		 */
		public function before($direction) {
			return true;
		}

		/**
		 * After migration callback
		 *
		 * @param string $direction Direction of migration process (up or down)
		 * @return bool Should process continue
		 */
		public function after($direction) {
			return true;
		}
	}
