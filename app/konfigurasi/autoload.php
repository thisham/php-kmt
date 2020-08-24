<?php

/**
 * Bagian ini untuk memuat secara otomatis pustaka dalam sistem, antara lain:
 * 	1. Session [sistem: session], untuk memuat sesi;
 *	2. Database [sistem: database], untuk memuat database.
 */

$pustaka 	= array('session', 'database');

/**
 * Bagian ini untuk memuat secara otomatis helper.
 *  1. URL [sistem: url], untuk memuat fungsi basis_url() [important to load!!];
 *  2. Email [sistem: email], untuk memuat fungsi-fungsi email.
 */

$helper		= array('url');

/**
 * Bagian ini untuk memuat secara otomatis kelas inti kustom (dapat ditambahkan oleh programmer).
 */

$inti		= array();