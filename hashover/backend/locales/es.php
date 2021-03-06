<?php

// Copyright (C) 2015-2018 Jacob Barkdull
// This file is part of HashOver.
//
// I, Jacob Barkdull, hereby release this work into the public domain.
// This applies worldwide. If this is not legally possible, I grant any
// entity the right to use this work for any purpose, without any
// conditions, unless such conditions are required by law.


// Spanish text for forms, buttons, links, and tooltips
$locale = array (
	'comment-form'		=> 'Escribe un comentario aquí...',
	'reply-form'		=> 'Escribe tu respuesta aquí...',
	'comment-formatting'	=> 'Formateo',
	'accepted-format'	=> '%s aceptado',
	'accepted-html'		=> '&lt;b&gt;, &lt;strong&gt;, &lt;u&gt;, &lt;i&gt;, &lt;em&gt;, &lt;s&gt;, &lt;big&gt;, &lt;small&gt;, &lt;sup&gt;, &lt;sub&gt;, &lt;pre&gt;, &lt;ul&gt;, &lt;ol&gt;, &lt;li&gt;, &lt;blockquote&gt;, &lt;code&gt; escapa HTML, las URLs se convierten automágicamente en enlaces, y [img]URL aquí[/img] mostrará una imagen externa.',
	'accepted-markdown'	=> '**Negrita**, _subrayado_, *cursiva*, ~~tachado~~, `resaltado`, ```código``` escapa HTML. Puedes usar HTML y Markdown juntos en tu comentario.',
	'post-button'		=> 'Publicar comentario',
	'login'			=> 'Iniciar sesión',
	'login-tip'		=> 'Iniciar sesión (opcional)',
	'logout'		=> 'Cerrar sesión',
	'be-first-name'		=> 'Sin comentarios aún.',
	'pending-name'		=> 'Pendiente...',
	'deleted-name'		=> 'Eliminado...',
	'error-name'		=> 'Error...',
	'be-first-note'		=> '¡Sé el primero en comentar!',
	'pending-note'		=> 'Este comentario está a la espera de ser aprobado.',
	'deleted-note'		=> 'Este comentario ha sido eliminado.',
	'error-note'		=> 'Algo salió mal. No se pudo recuperar este comentario.',
	'options'		=> 'Opciones',
	'cancel'		=> 'Cancelar',
	'reply-to-comment'	=> 'Responder al comentario',
	'edit-your-comment'	=> 'Editar tu comentario',
	'optional'		=> 'Opcional',
	'required'		=> 'Obligatorio',
	'name'			=> 'Nombre',
	'name-tip'		=> 'Nombre (%s)',
	'password'		=> 'Contraseña',
	'password-tip'		=> 'Contraseña (%s, te permite editar o eliminar tu comentario)',
	'confirm-password'	=> 'Confirmar contraseña',
	'email'			=> 'Correo electrónico',
	'email-tip'		=> 'Dirección de correo electrónico (para notificaciones, %s)',
	'website'		=> 'Sitio web',
	'website-tip'		=> 'Sitio web (%s)',
	'logged-in'		=> '¡Iniciaste sesión correctamente!',
	'logged-out'		=> '¡Cerraste sesión correctamente!',
	'comment-needed'	=> 'No hiciste ningún comentario válido. Vuelve a intentarlo.',
	'reply-needed'		=> 'No hiciste ninguna respuesta válida. Vuelve a intentarlo.',
	'field-needed'		=> 'El campo «%s» es obligatorio.',
	'post-fail'		=> '¡Error! No tienes permisos suficientes.',
	'comment-deleted'	=> '¡Comentario eliminado!',
	'post-reply'		=> 'Responder',
	'delete'		=> 'Borrar',
	'permanently-delete'	=> 'Borrar permanentemente',
	'subscribe'		=> 'Notificarme si hay respuestas',
	'subscribe-tip'		=> 'Suscribirse a las notificaciones por correo electrónico',
	'edit-comment'		=> 'Editar comentario',
	'status'		=> 'Estado',
	'status-approved'	=> 'Aprobado',
	'status-pending'	=> 'Esperando ser aprobado',
	'status-deleted'	=> 'Marcado como eliminado',
	'save-edit'		=> 'Guardar cambios',
	'no-email-warning'	=> 'No se te notificarán las respuestas a tu comentario si no escribes una dirección de correo electrónico.',
	'invalid-email'		=> 'La dirección de correo electrónico que has introducido no es válida.',
	'delete-comment'	=> '¿Seguro que quieres eliminar este comentario?',
	'post-comment-on'	=> array ('Publicar un comentario', 'Publicar un comentario en "%s"'),
	'popular-comments'	=> array ('Comentario más popular', 'Comentarios más populares'),
	'showing-comments'	=> array ('Mostrando un comentario', 'Mostrando %d comentarios'),
	'count-link'		=> array ('Un comentario', '%d comentarios'),
	'count-replies'		=> array ('Una respuesta', '%d respuestas'),
	'sort'			=> 'Ordenar',
	'sort-ascending'	=> 'En orden',
	'sort-descending'	=> 'En orden inverso',
	'sort-by-date'		=> 'El más reciente primero',
	'sort-by-likes'		=> 'Por «me gustas»',
	'sort-by-replies'	=> 'Por respuestas',
	'sort-by-discussion'	=> 'Por discusión',
	'sort-by-popularity'	=> 'Por popularidad',
	'sort-by-name'		=> 'Por autor del comentario',
	'sort-threads'		=> 'Hilos',
	'thread'		=> 'En respuesta a %s',
	'thread-tip'		=> 'Ir al inicio del hilo',
	'comments'		=> 'Comentarios',
	'replies'		=> 'Respuestas',
	'edit'			=> 'Editar',
	'reply'			=> 'Responder',
	'like'			=> array ('Me gusta', 'Me gusta'),
	'liked'			=> 'Me gusta',
	'unlike'		=> 'Ya no me gusta',
	'like-comment'		=> 'Marcar con «me gusta» este comentario',
	'liked-comment'		=> 'Quitar «me gusta»',
	'dislike'		=> array ('No me gusta', 'No me gusta'),
	'disliked'		=> 'No me gusta',
	'dislike-comment'	=> 'Marcar con «no me gusta» este comentario',
	'disliked-comment'	=> 'Quitar «no me gusta» de este comentario',
	'commenter-tip'		=> 'No se te notificará por correo electrónico',
	'subscribed-tip'	=> 'Se te notificará por correo electrónico',
	'unsubscribed-tip'	=> 'No estás suscrito a las notificaciones por correo electrónico',
	'show-other-comments'	=> array ('Mostrar un comentario más', 'Mostrar %d comentarios más'),
	'show-number-comments'	=> array ('Mostrar un comentario', 'Mostrar %d comentarios'),
	'date-time'		=> '%s \a \l\a\s %s',
	'date-years'		=> array ('Hace un año', 'Hace %d años'),
	'date-months'		=> array ('Hace un mes', 'Hace %d meses'),
	'date-days'		=> array ('Hace un día', 'Hace %d días'),
	'date-today'		=> 'Hoy a las %s',
	'date-day-names'	=> array ('domingo', 'lunes', 'martes', 'miércoles', 'jueves', 'viernes', 'sábado'),
	'date-month-names'	=> array ('enero', 'febrero', 'marzo', 'abril', 'aayo', 'junio', 'julio', 'agosto', 'septiembre', 'octubre', 'noviembre', 'diciembre'),
	'untitled'		=> 'Sin título',
	'external-image-tip'	=> 'Clic para mostrar la imagen externa',
	'loading'		=> 'Cargando...',
	'click-to-close'	=> 'Clic para cerrar',
	'hashover-comments'	=> 'Comentarios de HashOver',
	'rss-feed'		=> 'Fuente RSS',
	'source-code'		=> 'Código fuente'
);
