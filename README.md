
# Docker + LAMP + WordPress

Este proyecto presenta una **arquitectura basada en contenedores Docker para el despliegue y administración de WordPress**, orientada a entornos realistas de desarrollo y producción.

La solución está diseñada para ejecutar WordPress bajo **HTTPS (puerto 443)** y un **nombre de dominio personalizado**, evitando configuraciones simplificadas basadas en `localhost` y acercándose a escenarios reales de despliegue.

---

## Objetivo del proyecto

El objetivo principal es demostrar cómo **contenedorización, automatización y buenas prácticas de despliegue** pueden aplicarse a un CMS ampliamente utilizado como WordPress, facilitando:

- Entornos reproducibles
- Separación clara de servicios
- Persistencia de datos
- Mayor control sobre la infraestructura

Este repositorio puede utilizarse como **base para proyectos WordPress profesionales**, pruebas técnicas o entornos de aprendizaje.

---

## Arquitectura general

El proyecto se apoya en un stack clásico **LAMP**, orquestado mediante **Docker Compose**, donde cada componente cumple un rol bien definido:

- **WordPress** como CMS
- **Apache** como servidor web
- **MariaDB** como motor de base de datos
- **Docker** como capa de aislamiento y despliegue

Los datos críticos se almacenan en volúmenes persistentes, garantizando que la información no se pierda al reiniciar o recrear contenedores.

---

## Estructura de Archivos

Aquí un vistazo a lo que encontrarás:

```
├── apache2/            # Configuración del servidor web Apache
├── db-data/            # Datos persistentes de la base de datos MariaDB
├── wp-data/            # Datos persistentes de WordPress
├── scripts/            # Script de copia de seguridad
├── docker-compose.yml  # Definición y orquestación de servicios Docker
├── wp-config.php       # Configuración base de WordPress
├── down.sh             # script de automatización completo (backup, docker down y git pull)
└── backup.sql          # Última versión de la base de datos
```

Esta estructura facilita el mantenimiento, la automatización y la comprensión rápida de la infraestructura del proyecto.

---

## HTTPS y dominio personalizado

A diferencia de configuraciones básicas, este entorno expone WordPress mediante **HTTPS en el puerto 443**, utilizando un **dominio configurado** en lugar de `localhost`.

Este enfoque permite:

- Simular condiciones reales de producción
- Probar certificados SSL
- Evitar problemas comunes al migrar de local a producción
- Trabajar con URLs definitivas desde el inicio del proyecto

---

## Automatización y scripts de apoyo

El proyecto incluye **scripts diseñados para automatizar tareas operativas clave**, reduciendo la intervención manual y facilitando la supervisión técnica.

### Script de backup y versionado

Se incluye un script que automatiza un flujo completo de mantenimiento:

- Realiza una **copia de seguridad completa**
- Apaga los contenedores de forma controlada
- Sube automáticamente los archivos de backup al **repositorio de GitHub**
- Mantiene un historial versionado de las copias de seguridad

---

## Tecnologías utilizadas

- **Docker / Docker Compose**
- **WordPress**
- **Apache**
- **MariaDB**
- **HTTPS / SSL**

---

## Casos de uso

- Entornos de pruebas y staging
- Aprendizaje de Docker aplicado a CMS
- Prototipos rápidos con infraestructura realista

---

## Contribuciones

Las sugerencias, mejoras y adaptaciones son bienvenidas.  
Este proyecto está pensado como una base flexible y extensible.


