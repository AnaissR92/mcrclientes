<?php
class WP_MCR_Admin_Page {
    public function __construct() {
        add_action('admin_menu', [$this, 'crear_menu_admin']);
    }

    public function crear_menu_admin() {
        add_menu_page(
            'Clientes API',
            'Clientes API',
            'manage_options',
            'wp-mcr-clientes',
            [$this, 'render_admin_page'],
            'dashicons-admin-users',
            25
        );
    }

    public function render_admin_page() {
        echo '<div class="wrap"><h1>Clientes API</h1>';
        $api_client = new WP_MCR_API_Client();
        $data = $api_client->obtener_datos();

        if (!$data) {
            echo '<p>No se encontraron datos.</p>';
            return;
        }

        echo '<table class="widefat"><thead><tr><th>Nombre</th><th>Email</th></tr></thead><tbody>';
        foreach ($data as $item) {
            echo '<tr><td>' . esc_html($item['nombre']) . '</td><td>' . esc_html($item['email']) . '</td></tr>';
        }
        echo '</tbody></table></div>';
    }
}
