<?php

# === Timezone ===
date_default_timezone_set('Europe/Madrid');

# === MySQL ===
define('DB_HOST', 'localhost');	# Servidor
define('DB_USER', 'root');	# Usuario
define('DB_PASSWORD', 'pass');	# Contraseña
define('DB_NAME', 'blog');	# Base de datos
define('DB_PREFIX', '');	# Prefijo tablas - Dejar en blanco si no se va a usar

# === General ===
define('TITLE', 'GatuLog PHP');	# Titulo
define('S_TITLE', ' :: ');	# Separador titulo
define('DESCRIPTION', 'Blog de prueba.');	# Descripción
define('BASE', 'http://domain.com/');	# URL base - Con barra (/) al final
define('BASE_STATIC', 'http://domain.com/static/');	# URL base de los archivos estáticos - Con barra (/) al final
define('REWRITE', false);	# Rewrite

# === Paginación ===
define('P_LIMIT', 4);	# Entradas por pagina
define('P_RANGE', 2);	# Rango del paginador

# === Rutas ===
$_ROUTES = array(
	'a'=>array('page-%1%.html','a=entries&page={1}'),
	'e'=>array('%1%-{2}.html','a=entry&id={1}&slug={2}'),
	'p'=>array('p-{1}.html','a=page&p={1}'),
	'ar'=>array('archive.html','a=archive'),
	'fe'=>array('feed/entries.xml','a=feed-entries'),
	'fc'=>array('feed/comments.xml','a=feed-comments'),
	'ce'=>array('feed/%1%-{2}.xml','a=feed-post&id={1}&slug={2}&type=e'),
	'cp'=>array('feed/p-{1}.xml','a=feed-post&p={1}&type=p'),
	'te'=>array('%1%-{2}/trackback','a=trackback&id={1}&slug={2}&type=e'),
	'tp'=>array('p-{1}/trackback','a=trackback&p={1}&type=p'),
	'ca'=>array('captcha-{1}.png','a=captcha&cid={1}')
);

?>