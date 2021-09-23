## Metodo De Instalación Normal
1. Entrar a src 
```
cd src
```
2. Instalar las librerias
```
npm install
```
3. Correr y cargar las librerias
```
npm run dev
```
4. Crear Migración 
```
php artisan migrate
```
5. Correr el servidor
```
php artisan serve
```
6. Cambiar las variables de entorno para tu base de datos el
```
.env
```
<br>

## Instalación Con  Dockers
Falta crear la carpeta mysql si se quiere tener en el contenedor aparte

**Crear Contenedor**
```
docker-compose up -d
```
1. Entrar a src 
```
cd src
```
2. Instalar las librerias
```
npm install
```
3. Correr y cargar las librerias
```
npm run dev
```
4. Correr el servidor
```
php artisan serve
```

**Eliminar Contenedor**
```
docker-compose down
```
