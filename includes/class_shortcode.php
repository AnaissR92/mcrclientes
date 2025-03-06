<?php
class WP_MCR_Shortcode {
    public function __construct() {
        add_shortcode('mostrar_datos', [$this, 'render_shortcode']);
    }

    public function render_shortcode() {
        $api_client = new WP_MCR_API_Client();
        $data = $api_client->obtener_datos();

        if (!$data) {
            return '<p>No se encontraron datos.</p>';
        }

        $output = '<ul>';
        foreach ($data as $item) {
            $output .= '<li>' . esc_html($item['nombre']) . ' - ' . esc_html($item['email']) . '</li>';
        }
        $output .= '</ul>';

        return $output;
    }
}
