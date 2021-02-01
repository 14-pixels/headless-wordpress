<?php
/**
 * Password Control.
 *
 * @package lazyblocks
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

/**
 * LazyBlocks_Control_Password class.
 */
class LazyBlocks_Control_Password extends LazyBlocks_Control {
    /**
     * Constructor
     */
    public function __construct() {
        $this->name       = 'password';
        $this->icon       = '<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M7.79 11.345C8.04 11.335 8.23 11.415 8.36 11.585C8.5 11.755 8.57 11.96 8.57 12.2C8.57 12.45 8.5 12.66 8.36 12.83C8.23 13 8.04 13.075 7.79 13.055L6.755 12.98L7.34 13.835C7.43 13.965 7.475 14.095 7.475 14.225C7.475 14.455 7.37 14.655 7.16 14.825C6.95 14.995 6.725 15.08 6.485 15.08C6.355 15.08 6.235 15.05 6.125 14.99C6.015 14.92 5.93 14.82 5.87 14.69L5.42 13.76L4.955 14.69C4.825 14.95 4.62 15.08 4.34 15.08C4.1 15.08 3.875 14.995 3.665 14.825C3.465 14.645 3.365 14.44 3.365 14.21C3.365 14.07 3.405 13.945 3.485 13.835L4.07 12.98L3.035 13.055C2.785 13.065 2.59 12.99 2.45 12.83C2.32 12.66 2.255 12.455 2.255 12.215C2.255 11.975 2.325 11.77 2.465 11.6C2.605 11.42 2.795 11.335 3.035 11.345L4.055 11.42L3.485 10.595C3.395 10.455 3.35 10.32 3.35 10.19C3.35 9.97 3.45 9.775 3.65 9.605C3.86 9.435 4.085 9.35 4.325 9.35C4.615 9.35 4.825 9.48 4.955 9.74L5.42 10.67L5.87 9.74C6 9.47 6.21 9.335 6.5 9.335C6.74 9.335 6.96 9.42 7.16 9.59C7.37 9.76 7.475 9.96 7.475 10.19C7.475 10.32 7.43 10.455 7.34 10.595L6.77 11.42L7.79 11.345ZM14.6102 11.345C14.8602 11.335 15.0502 11.415 15.1802 11.585C15.3202 11.755 15.3902 11.96 15.3902 12.2C15.3902 12.45 15.3202 12.66 15.1802 12.83C15.0502 13 14.8602 13.075 14.6102 13.055L13.5752 12.98L14.1602 13.835C14.2502 13.965 14.2952 14.095 14.2952 14.225C14.2952 14.455 14.1902 14.655 13.9802 14.825C13.7702 14.995 13.5452 15.08 13.3052 15.08C13.1752 15.08 13.0552 15.05 12.9452 14.99C12.8352 14.92 12.7502 14.82 12.6902 14.69L12.2402 13.76L11.7752 14.69C11.6452 14.95 11.4402 15.08 11.1602 15.08C10.9202 15.08 10.6952 14.995 10.4852 14.825C10.2852 14.645 10.1852 14.44 10.1852 14.21C10.1852 14.07 10.2252 13.945 10.3052 13.835L10.8902 12.98L9.85517 13.055C9.60517 13.065 9.41017 12.99 9.27017 12.83C9.14017 12.66 9.07517 12.455 9.07517 12.215C9.07517 11.975 9.14517 11.77 9.28517 11.6C9.42517 11.42 9.61517 11.335 9.85517 11.345L10.8752 11.42L10.3052 10.595C10.2152 10.455 10.1702 10.32 10.1702 10.19C10.1702 9.97 10.2702 9.775 10.4702 9.605C10.6802 9.435 10.9052 9.35 11.1452 9.35C11.4352 9.35 11.6452 9.48 11.7752 9.74L12.2402 10.67L12.6902 9.74C12.8202 9.47 13.0302 9.335 13.3202 9.335C13.5602 9.335 13.7802 9.42 13.9802 9.59C14.1902 9.76 14.2952 9.96 14.2952 10.19C14.2952 10.32 14.2502 10.455 14.1602 10.595L13.5902 11.42L14.6102 11.345ZM21.4303 11.345C21.6803 11.335 21.8703 11.415 22.0003 11.585C22.1403 11.755 22.2103 11.96 22.2103 12.2C22.2103 12.45 22.1403 12.66 22.0003 12.83C21.8703 13 21.6803 13.075 21.4303 13.055L20.3953 12.98L20.9803 13.835C21.0703 13.965 21.1153 14.095 21.1153 14.225C21.1153 14.455 21.0103 14.655 20.8003 14.825C20.5903 14.995 20.3653 15.08 20.1253 15.08C19.9953 15.08 19.8753 15.05 19.7653 14.99C19.6553 14.92 19.5703 14.82 19.5103 14.69L19.0603 13.76L18.5953 14.69C18.4653 14.95 18.2603 15.08 17.9803 15.08C17.7403 15.08 17.5153 14.995 17.3053 14.825C17.1053 14.645 17.0053 14.44 17.0053 14.21C17.0053 14.07 17.0453 13.945 17.1253 13.835L17.7103 12.98L16.6753 13.055C16.4253 13.065 16.2303 12.99 16.0903 12.83C15.9603 12.66 15.8953 12.455 15.8953 12.215C15.8953 11.975 15.9653 11.77 16.1053 11.6C16.2453 11.42 16.4353 11.335 16.6753 11.345L17.6953 11.42L17.1253 10.595C17.0353 10.455 16.9903 10.32 16.9903 10.19C16.9903 9.97 17.0903 9.775 17.2903 9.605C17.5003 9.435 17.7253 9.35 17.9653 9.35C18.2553 9.35 18.4653 9.48 18.5953 9.74L19.0603 10.67L19.5103 9.74C19.6403 9.47 19.8503 9.335 20.1403 9.335C20.3803 9.335 20.6003 9.42 20.8003 9.59C21.0103 9.76 21.1153 9.96 21.1153 10.19C21.1153 10.32 21.0703 10.455 20.9803 10.595L20.4103 11.42L21.4303 11.345Z" fill="currentColor"/></svg>';
        $this->type       = 'string';
        $this->label      = __( 'Password', 'lazy-blocks' );
        $this->attributes = array(
            'placeholder'      => '',
            'characters_limit' => '',
        );

        parent::__construct();
    }

    /**
     * Register assets action.
     */
    public function register_assets() {
        wp_register_script(
            'lazyblocks-control-password',
            lazyblocks()->plugin_url() . 'controls/password/script.min.js',
            array( 'wp-blocks', 'wp-i18n', 'wp-element', 'wp-components' ),
            '2.3.0',
            true
        );
    }

    /**
     * Get script dependencies.
     *
     * @return array script dependencies.
     */
    public function get_script_depends() {
        return array( 'lazyblocks-control-password' );
    }
}

new LazyBlocks_Control_Password();
