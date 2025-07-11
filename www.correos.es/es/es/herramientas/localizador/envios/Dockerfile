# Usa una imagen oficial de PHP con servidor web incorporado
FROM php:8.1-cli

# Establece el directorio de trabajo dentro del contenedor
WORKDIR /app

# Copia todo el contenido de tu carpeta Backend al contenedor
COPY . .

# Expone el puerto 8080 (puedes usar otro si quieres)
EXPOSE 8080

# Comando para iniciar el servidor PHP integrado en el puerto 8080
CMD ["php", "-S", "0.0.0.0:8080"]
