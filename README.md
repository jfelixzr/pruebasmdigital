# Cinemax
# Tema Personalizado de WordPress para Películas

Tema personalizado en WordPress utilizando una api de peliculas, las bibliotecas de Javascript y CSS, como Swiper, Slicknav, Plugin Contact Form, así como también algunas imágenes para hacerlo más visual.

## Requisitos

- Un servidor de WordPress o WordPress instalado localmente en una PC.
- Editor de código de preferencia
- Descargar los archivos necesarios:
    - Download [Swiper](https://swiperjs.com/get-started/)
    - Download [Slicknav](http://slicknav.com/download/)
    - Plugin Contact Form (descargable desde WordPress.org)
    - API  [API](https://www.themoviedb.org/)

## Crear una carpeta para el tema

1. Cree un directorio en la carpeta wp-content/themes con el nombre de su nuevo tema. Por ejemplo, `movies-theme`.

2. Dentro de ese directorio, cree un archivo `style.css`. Este archivo contendrá la información básica de su tema y es necesario para que WordPress lo pueda reconocer:

```css
/*
Theme Name: Movies Theme
Author: [Tu nombre]
Description: Tema personalizado para películas
Version: 1.0
Text Domain: movies-theme
*/
```

3. Cree un archivo `index.php`. Este archivo funcionará como el archivo principal de tu tema y contendrá todo el contenido que deseas que aparezca en la página de inicio.

## Agregando Javascript y CSS

1. Descargue los archivos de Swiper y Slicknav y luego cargue los archivos CSS y JS en su tema. Esto se puede hacer colocando los archivos descargados en el directorio de tu tema y agregando el siguiente código en el archivo `functions.php`:

```php
function agregar_scripts_estilos() {
	wp_enqueue_style( 'swiper-style', get_template_directory_uri() . '/swiper/swiper-bundle.min.css', array(), '1.0' );
	wp_enqueue_style( 'slicknav-style', get_template_directory_uri() . '/slicknav/slicknav.min.css', array(), '1.0' );
	wp_enqueue_style( 'style', get_stylesheet_uri(), array(), '1.1' );

	wp_enqueue_script( 'swiper-scripts', get_template_directory_uri() . '/swiper/swiper-bundle.min.js', array(), '1.0', true );
	wp_enqueue_script( 'slicknav-scripts', get_template_directory_uri() . '/slicknav/jquery.slicknav.min.js', array(), '1.0', true );
	wp_enqueue_script( 'contact-form-scripts', get_template_directory_uri() . '/contact-form/scripts.js', array(), '1.0', true );
	wp_enqueue_script( 'scripts', get_template_directory_uri() . '/scripts.js', array(), '1.0', true );
}
add_action( 'wp_enqueue_scripts', 'agregar_scripts_estilos' );
```

2. Cree un archivo JavaScript en el directorio de su tema con el nombre `scripts.js`. Este archivo será donde se escriban todas las funciones personalizadas que se utilizarán en su tema.

## Creando plantillas para el tema

Se pueden crear plantillas personalizadas utilizando diferentes archivos para diferentes páginas en WordPress. Por ejemplo, si desea tener una plantilla personalizada para su página de inicio, cree un archivo llamado `front-page.php` y agregue el siguiente código para comenzar a trabajar:

```php
<?php
/*
Template Name: Página de inicio personalizada
*/
get_header();
// Aquí va el contenido de la página principal
get_footer();
?>
```

## Agregar contenido a su tema

1. Cree una carpeta llamada `images` en el directorio de su tema y agregue todas las imágenes que desea utilizar en su tema.

## Prueba tu Tema Personalizado

Finalmente, para visualizar cómo se ve el sitio después de crear tu tema, acceda a tu sitio de WordPress y seleccione tu nuevo tema personalizado. Si todo sale bien, verás tu tema en acción y podrás comenzar a personalizarlo aún más.


