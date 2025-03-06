# Plugin WooCommerce - Integración con MCR para Gestión de Productos y Pedidos

Este plugin extiende WooCommerce para integrar tu tienda con MCR (Modelo de Clientes y Productos), permitiendo consultar la disponibilidad de productos y enviar pedidos automáticamente a MCR.

## Descripción

Este plugin está diseñado para mejorar la funcionalidad de WooCommerce mediante la integración con el sistema MCR. Permite enviar peticiones a MCR para verificar si un producto está disponible y realizar el envío de pedidos directamente a MCR.

## Características

- **Verificación de Disponibilidad de Productos**: Realiza peticiones a MCR para comprobar la disponibilidad de los productos en tiempo real.
- **Envío de Pedidos a MCR**: Permite enviar pedidos directamente a MCR para su procesamiento.
- **Automatización de Procesos**: El plugin automatiza la verificación de stock y el envío de pedidos, facilitando la gestión de tu tienda WooCommerce.
- **Configuración Personalizable**: Puedes configurar las credenciales y parámetros necesarios para la conexión con MCR desde el panel de administración de WooCommerce.

## Requisitos

- WordPress 5.0 o superior.
- WooCommerce 4.0 o superior.
- PHP 7.0 o superior.
- Conexión a MCR (requiere una API o credenciales de acceso a MCR).

## Instalación

1. Descarga el archivo ZIP del plugin.
2. Entra al panel de administración de WordPress.
3. Ve a **Plugins** > **Añadir nuevo** > **Subir plugin**.
4. Selecciona el archivo ZIP descargado y haz clic en **Instalar ahora**.
5. Después de la instalación, haz clic en **Activar**.

## Uso

### Verificación de Disponibilidad

1. El plugin realiza peticiones a MCR cada vez que un cliente consulta un producto en tu tienda WooCommerce.
2. El sistema verificará automáticamente la disponibilidad de los productos en MCR.
3. Si un producto no está disponible, se notificará al cliente en la página del producto o durante el proceso de pago.

### Envío de Pedidos a MCR

1. Cuando un cliente realiza una compra, el pedido se envía automáticamente a MCR para su procesamiento.
2. El plugin envía los detalles del pedido, incluyendo los productos, cantidades y datos de cliente, a MCR.
3. Recibirás confirmaciones de los pedidos procesados correctamente o cualquier error relacionado con MCR.

### Configuración

1. Ve a **WooCommerce** > **Configuración** > **MCR Integración** para acceder a la página de configuración del plugin.
2. Introduce las credenciales de API o los parámetros necesarios para conectar con el sistema MCR (como URL de API, claves de acceso, etc.).
3. Configura las opciones de notificación para saber cuando un producto no esté disponible o cuando un pedido se haya enviado correctamente.

## Contribuciones

Si deseas contribuir al desarrollo de este plugin, sigue estos pasos:

1. Fork este repositorio.
2. Crea una nueva rama para tu feature (`git checkout -b nueva-caracteristica`).
3. Realiza tus cambios y haz commit (`git commit -am 'Añadir nueva característica'`).
4. Haz push a la rama (`git push origin nueva-caracteristica`).
5. Abre un Pull Request.

## Licencia

Este plugin está licenciado bajo la **Licencia GPLv3**.

## Soporte

Si tienes algún problema o pregunta sobre el plugin, no dudes en contactar con nosotros a través del foro de soporte o el correo electrónico de contacto: [soporte@mcrplugin.com](mailto:soporte@mcrplugin.com).

---

¡Gracias por usar el Plugin WooCommerce - Integración con MCR para Gestión de Productos y Pedidos!
