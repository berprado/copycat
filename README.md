# 🚀 MySQL Realtime Fetching

[![PHP](https://img.shields.io/badge/PHP-777BB4?style=for-the-badge&logo=php&logoColor=white)](https://php.net/)
[![MySQL](https://img.shields.io/badge/MySQL-4479A1?style=for-the-badge&logo=mysql&logoColor=white)](https://mysql.com/)
[![JavaScript](https://img.shields.io/badge/JavaScript-F7DF1E?style=for-the-badge&logo=javascript&logoColor=black)](https://developer.mozilla.org/en-US/docs/Web/JavaScript)
[![HTML5](https://img.shields.io/badge/HTML5-E34F26?style=for-the-badge&logo=html5&logoColor=white)](https://developer.mozilla.org/en-US/docs/Web/HTML)
[![CSS3](https://img.shields.io/badge/CSS3-1572B6?style=for-the-badge&logo=css3&logoColor=white)](https://developer.mozilla.org/en-US/docs/Web/CSS)

![License](https://img.shields.io/badge/License-MIT-green.svg)
![Version](https://img.shields.io/badge/Version-1.0.0-blue.svg)
![Status](https://img.shields.io/badge/Status-Active-success.svg)

> 📡 **Sistema de actualización en tiempo real** que muestra datos de MySQL sin recargar la página usando **Server-Sent Events (SSE)**

## ✨ Características

- 🔄 **Actualización en tiempo real** sin recargar la página
- ⚡ **Server-Sent Events (SSE)** para comunicación eficiente
- 🎯 **Detección inteligente de cambios** - solo actualiza cuando hay datos nuevos
- 💻 **Interfaz limpia y responsiva** con CSS puro
- 🛡️ **Conexión persistente** con manejo básico de errores
- 📊 **Visualización en tabla** de datos dinámicos

## 🏗️ Arquitectura

```
┌─────────────────┐    SSE    ┌─────────────────┐    Query    ┌─────────────────┐
│                 │◄─────────►│                 │◄───────────►│                 │
│   index.html    │           │    fetch.php    │             │   MySQL DB      │
│  (Frontend)     │           │   (Backend)     │             │  (yt_test)      │
│                 │           │                 │             │                 │
└─────────────────┘           └─────────────────┘             └─────────────────┘
```

## 🚀 Instalación Rápida

### Prerrequisitos

- 🐘 **PHP 7.4+** con extensión PDO
- 🗄️ **MySQL 5.7+** o MariaDB
- 🌐 **Servidor web** (Apache, Nginx, o PHP built-in server)

### Pasos de Instalación

1. **Clonar el repositorio**
   ```bash
   git clone <repository-url>
   cd mysql-realtime-fetching
   ```

2. **Configurar la base de datos**
   ```bash
   mysql -u root -p < yt_test.sql
   ```

3. **Configurar conexión** (editar `db_connection.php`)
   ```php
   $host = 'localhost';
   $dbname = 'yt_test';
   $username = 'tu_usuario';
   $password = 'tu_contraseña';
   ```

4. **Iniciar servidor**
   ```bash
   php -S localhost:8000
   ```

5. **Abrir en navegador**
   ```
   http://localhost:8000
   ```

## 📁 Estructura del Proyecto

```
mysql-realtime-fetching/
├── 📄 index.html          # Interfaz principal del usuario
├── 🔧 fetch.php           # Servidor SSE para datos en tiempo real
├── 🔌 db_connection.php   # Configuración de conexión a BD
├── 🗄️ yt_test.sql        # Script de creación de base de datos
├── 📚 docs/               # Documentación del proyecto
│   └── 📋 PLAN_REFACTORING.md
└── 📖 README.md           # Este archivo
```

## 🎮 Uso

1. **Abre la aplicación** en tu navegador
2. **Observa la tabla** que se actualiza automáticamente
3. **Modifica datos** directamente en la base de datos:
   ```sql
   INSERT INTO data (name, message) VALUES ('Juan', 'Nuevo mensaje');
   UPDATE data SET message = 'Mensaje actualizado' WHERE id = 1;
   ```
4. **Los cambios aparecerán** instantáneamente en la interfaz

## 🛠️ Tecnologías Utilizadas

| Tecnología | Propósito | Versión |
|------------|-----------|---------|
| ![PHP](https://img.shields.io/badge/-PHP-777BB4?style=flat&logo=php&logoColor=white) | Backend y SSE | 7.4+ |
| ![MySQL](https://img.shields.io/badge/-MySQL-4479A1?style=flat&logo=mysql&logoColor=white) | Base de datos | 5.7+ |
| ![JavaScript](https://img.shields.io/badge/-JavaScript-F7DF1E?style=flat&logo=javascript&logoColor=black) | Frontend dinámico | ES6+ |
| ![HTML5](https://img.shields.io/badge/-HTML5-E34F26?style=flat&logo=html5&logoColor=white) | Estructura | 5 |
| ![CSS3](https://img.shields.io/badge/-CSS3-1572B6?style=flat&logo=css3&logoColor=white) | Estilos | 3 |

## ⚡ Características Técnicas

### Server-Sent Events (SSE)
- **Conexión persistente** entre cliente y servidor
- **Unidireccional** (servidor → cliente)
- **Detección de cambios** mediante hash MD5
- **Intervalo de consulta** configurable

### Base de Datos
- **Tabla `data`** con campos: `id`, `name`, `message`
- **Consultas optimizadas** con límite de registros
- **Conexión PDO** para mayor seguridad

## 🔍 Monitoreo

La aplicación incluye:
- 🟢 **Estado de conexión** visible en tiempo real
- 📊 **Logs de consola** para debugging
- ⚠️ **Manejo básico de errores** de conexión

## 📈 Mejoras Planificadas

Ver [📋 Plan de Refactoring](docs/PLAN_REFACTORING.md) para detalles completos:

- ✅ **Fase 1**: Optimización del código actual
- 🔄 **Fase 2**: Migración a WebSockets
- 🚀 **Fase 3**: Cache con Redis y escalabilidad

## ⚠️ Limitaciones Conocidas

- 🔴 **Alto consumo de recursos** del servidor
- 🔴 **Limitaciones de escalabilidad** con muchos usuarios
- 🔴 **Reconexión manual** tras pérdida de conexión
- 🔴 **Sin autenticación** ni autorización

## 🤝 Contribuir

1. **Fork** el proyecto
2. **Crea una rama** para tu feature (`git checkout -b feature/AmazingFeature`)
3. **Commit** tus cambios (`git commit -m 'Add some AmazingFeature'`)
4. **Push** a la rama (`git push origin feature/AmazingFeature`)
5. **Abre un Pull Request**

## 📝 Licencia

Este proyecto está bajo la Licencia MIT - ver el archivo [LICENSE](LICENSE) para detalles.

## 🆘 Soporte

¿Tienes problemas? ¡Estamos aquí para ayudar!

- 📧 **Email**: [tu-email@ejemplo.com](mailto:tu-email@ejemplo.com)
- 🐛 **Issues**: [GitHub Issues](https://github.com/tu-usuario/mysql-realtime-fetching/issues)
- 📖 **Documentación**: [docs/](docs/)

## 🎯 Demo

![Demo](https://via.placeholder.com/800x400/1e1e2e/cdd6f4?text=MySQL+Realtime+Fetching+Demo)

---

<div align="center">

**⭐ ¡Dale una estrella si te gustó el proyecto! ⭐**

Hecho con ❤️ por [Tu Nombre](https://github.com/tu-usuario)

</div>
