#!/bin/bash

# Obtenemos la ruta de la carpeta donde vive este script (o sea, /scripts)
SCRIPT_DIR="$(cd "$(dirname "${BASH_SOURCE[0]}")" && pwd)"

# El backup va una carpeta arriba (la raíz del proyecto)
OUTPUT_FILE="$SCRIPT_DIR/../backup.sql"

# Configuración DB
CONTAINER_NAME="wp_db"
DB_USER="root"
DB_PASS="rootpass"
DB_NAME="wordpress"

echo "-------------------------------------------"
echo "Fecha: $(date)"
echo "Contenedor: $CONTAINER_NAME"

# Ejecutar el backup
docker exec $CONTAINER_NAME mariadb-dump -u$DB_USER -p$DB_PASS $DB_NAME > "$OUTPUT_FILE"

#verificamos que el comando anterior tuvo exito
if [ $? -eq 0 ]; then
    echo "Backup guardado en la raíz: $OUTPUT_FILE"
else
    echo "ERROR: No se pudo realizar el backup."
    exit 1
fi
