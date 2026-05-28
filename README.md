# 7moStudio - WordPress Docker

Sitio web de la agencia digital 7moStudio desarrollado en WordPress, containerizado con Docker para un entorno de desarrollo portable y reproducible.

## Stack tecnológico

- WordPress (última versión)
- MySQL 5.7
- PHP 8.x
- Apache con mod_rewrite
- phpMyAdmin para gestión de base de datos
- Docker + Docker Compose

## Tema

Proactive Theme by CaseThemes (parent + child theme)

## Requisitos previos

Para levantar este proyecto en cualquier máquina necesitas:

- [Docker Desktop](https://www.docker.com/products/docker-desktop/) instalado y en ejecución
- [Git](https://git-scm.com/) instalado
- Mínimo 4 GB de RAM disponibles
- Puerto 8000 y 8080 libres en tu máquina

## Instalación

### 1. Clonar el repositorio

```bash
git clone https://github.com/Slaternight/7mostudio.git
cd 7mostudio
```

### 2. Levantar los contenedores

```bash
docker-compose up -d
```

Este comando descargará las imágenes necesarias (WordPress, MySQL, phpMyAdmin) y levantará los servicios. Puede tardar varios minutos la primera vez.

### 3. Importar la base de datos

Una vez los contenedores estén corriendo, importa el dump SQL en la base de datos:

**Opción A: Vía phpMyAdmin (más fácil)**

1. Abre tu navegador en: `http://localhost:8080`
2. Inicia sesión con:
   - Usuario: `wp_user`
   - Contraseña: `wp_password`
3. Selecciona la base de datos `wordpress`
4. Ve a la pestaña `Importar`
5. Selecciona el archivo `db-backup.sql`
6. Haz clic en `Continuar`

**Opción B: Vía línea de comandos**

```bash
docker exec -i wp_site_db mysql -u wp_user -pwp_password wordpress < db-backup.sql
```

### 4. Acceder al sitio

- **Sitio web:** http://localhost:8000
- **WP Admin:** http://localhost:8000/wp-admin
- **phpMyAdmin:** http://localhost:8080

## Credenciales por defecto

### Base de datos
- **Host:** `db:3306`
- **Database:** `wordpress`
- **Usuario:** `wp_user`
- **Password:** `wp_password`
- **Root password:** `root_password`

### phpMyAdmin
- **Usuario:** `wp_user`
- **Password:** `wp_password`

### WordPress Admin
Las credenciales de WP Admin son las que tenías en el sitio original (consultar con el administrador del proyecto).

## Estructura del proyecto

```
7mostudio/
├── wp-content/          # Tema, plugins y uploads (versionado)
│   ├── themes/          # proactive + proactive-child
│   ├── plugins/         # Plugins instalados
│   └── uploads/         # Imágenes y archivos subidos
├── docker-compose.yml   # Configuración de servicios Docker
├── uploads.ini          # Límites PHP personalizados
├── db-backup.sql        # Backup de la base de datos
├── .gitignore           # Archivos excluidos de Git
└── README.md            # Este archivo
```

## Comandos útiles

### Gestión de contenedores

```bash
# Levantar contenedores en segundo plano
docker-compose up -d

# Detener contenedores
docker-compose down

# Detener y eliminar volúmenes (CUIDADO: borra datos)
docker-compose down -v

# Ver logs en tiempo real
docker-compose logs -f

# Ver estado de los contenedores
docker ps
```

### Acceder a los contenedores

```bash
# Entrar al contenedor de WordPress
docker exec -it wp_site bash

# Entrar al contenedor de MySQL
docker exec -it wp_site_db bash
```

### Backup de la base de datos

Cada vez que hagas cambios importantes (productos, páginas, configuraciones), regenera el backup:

```bash
docker exec wp_site_db mysqldump -u wp_user -pwp_password wordpress > db-backup.sql
```

Luego haz commit del cambio:

```bash
git add db-backup.sql
git commit -m "Update: descripción del cambio"
git push
```

### Restaurar la base de datos

```bash
docker exec -i wp_site_db mysql -u wp_user -pwp_password wordpress < db-backup.sql
```

## Configuración PHP

Los límites PHP están definidos en `uploads.ini`:

- `memory_limit`: 512M
- `upload_max_filesize`: 128M
- `post_max_size`: 128M
- `max_execution_time`: 600
- `max_input_vars`: 10000

Si necesitas modificarlos, edita el archivo y reinicia el contenedor:

```bash
docker-compose restart wordpress
```

## Workflow de desarrollo

1. Hacer `git pull` antes de empezar a trabajar
2. Levantar contenedores: `docker-compose up -d`
3. Realizar cambios en el tema, plugins o contenido
4. Si modificaste la base de datos, regenerar `db-backup.sql`
5. Hacer commit y push de los cambios
6. Detener contenedores al terminar: `docker-compose down`

## Solución de problemas

### Error: "Puerto 8000 ya está en uso"
Otro servicio está usando el puerto 8000. Cierra el servicio o cambia el puerto en `docker-compose.yml`.

### Error: "Cannot connect to the Docker daemon"
Docker Desktop no está iniciado. Ábrelo y espera a que esté corriendo.

### El sitio carga pero sin estilos
Falta importar la base de datos o las URLs no están actualizadas. Revisa que `db-backup.sql` se haya importado correctamente.

### Error 404 en páginas internas
mod_rewrite no está activo. Verifica que en `docker-compose.yml` esté el comando: `a2enmod rewrite`.

### Cambios en wp-content no se reflejan
Verifica que el volumen esté correctamente montado en `docker-compose.yml`. Reinicia los contenedores con `docker-compose restart`.

## Migración a producción

Para llevar este sitio a un VPS de producción, consultar la guía completa de migración LocalWP/Docker → VPS.

## Autor

Slayder Reyes Cuellar - 7moStudio

## Licencia

Proyecto privado. Todos los derechos reservados.
