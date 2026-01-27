#!/bin/bash

# 1. Ejecutar el backup usando la ruta relativa a la carpeta scripts
echo "Iniciando backup antes del cierre..."
./scripts/auto_backup.sh

# 2. Apagar Docker
echo "Bajando contenedores..."
docker compose down

# 3. Subir a GitHub (Git recordará tu token gracias al 'credential store')
echo "Sincronizando con GitHub..."
git add .
git commit -m "Backup y cambios realizados"
git push origin main

echo "Todo listo. ¡Buen trabajo hoy!"
