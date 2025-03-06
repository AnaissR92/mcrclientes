<?php
class WP_MCR_API_Client {
    private $api_url = 'https://tu-api.com/endpoint'; // URL del Web Service

    public function __construct() {
        add_action('init', [$this, 'test_connection']);
    }

    public function test_connection() {
        $response = wp_remote_get($this->api_url);

        if (is_wp_error($response)) {
            error_log('Error en la conexión con el API: ' . $response->get_error_message());
        } else {
            error_log('Conexión exitosa con el API.');
        }
    }

    public function obtener_datos() {
        $response = wp_remote_get($this->api_url);

        if (is_wp_error($response)) {
            return 'Error en la conexión';
        }

        return json_decode(wp_remote_retrieve_body($response), true);
    }
}
