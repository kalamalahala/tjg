<?php

	namespace tjg;

	use WP_User;

	class TjgUser extends WP_User {
		private string $agent_number;
		private string $agent_phone;
		private string $agent_position;
		private string $supervising_agent;

		public function __construct( int $user_id = 0 ) {
			if ( $user_id > 0 ) {
				parent::__construct( $user_id );
			} else {
				parent::__construct( get_current_user_id() );
			}
		}

		/**
		 * @return string
		 */
		public function get_agent_number(): string {
			return $this->agent_number;
		}

		/**
		 * @param string $agent_number
		 */
		public function set_agent_number( string $agent_number ): void {
			$this->agent_number = $agent_number;
		}

		/**
		 * @return string
		 */
		public function get_agent_phone(): string {
			return $this->agent_phone;
		}

		// TJG Related Meta Tags

		/**
		 * @param string $agent_phone
		 */
		public function set_agent_phone( string $agent_phone ): void {
			$this->agent_phone = $agent_phone;
		}

		/**
		 * @return string
		 */
		public function get_agent_position(): string {
			return $this->agent_position;
		}

		/**
		 * @param string $agent_position
		 */
		public function set_agent_position( string $agent_position ): void {
			$this->agent_position = $agent_position;
		}

		/**
		 * @return string
		 */
		public function get_supervising_agent(): string {
			return $this->supervising_agent;
		}

		/**
		 * @param string $supervising_agent
		 */
		public function set_supervising_agent( string $supervising_agent ): void {
			$this->supervising_agent = $supervising_agent;
		}

		public function get_agent_info(): array {
			return [
				'agent_number'      => $this->get_agent_number(),
				'agent_phone'       => $this->get_agent_phone(),
				'agent_position'    => $this->get_agent_position(),
				'supervising_agent' => $this->get_supervising_agent(),
			];
		}


	}