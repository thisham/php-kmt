<?php

/**
 * Bagian ini untuk memuat secara otomatis pustaka dalam sistem, antara lain:
 * 	1. Session [sistem: session], untuk memuat sesi;
 *	2. Database [sistem: database], untuk memuat database.
 */

$pustaka 	= array('session', 'database');

/**
 * Bagian ini untuk memuat secara otomatis helper.
 */

$helper		= array('url');

/**
 * Bagian ini untuk memuat secara otomatis kelas inti kustom (dapat ditambahkan oleh programmer).
 */

$inti		= array();