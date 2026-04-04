<?php
// ============================================================
// config.php — サイト全体の設定
// ============================================================

define('SITE_NAME',    'My Portfolio & Blog');
define('SITE_AUTHOR',  'Your Name');
define('SITE_DESC',    'エンジニアのポートフォリオ兼技術ブログ');

// -------------------------------------------------------
// サイトのベースURL（末尾スラッシュなし）
// ポート80のデフォルトでフォルダ名がURLに含まれる構成に対応。
// 例: http://localhost/portfolio で動かすなら↓のまま。
// 例: http://localhost/ (webroot直下) なら '' に変更。
// -------------------------------------------------------
define('BASE_URL', 'http://localhost:8000');

// SQLiteデータベースファイルのパス（webroot外に置くとより安全）
define('DB_PATH', __DIR__ . '/../data/blog.db');

// セッション設定（セキュリティ強化）
ini_set('session.cookie_httponly', 1);
ini_set('session.use_strict_mode', 1);
session_start();

// タイムゾーン
date_default_timezone_set('Asia/Tokyo');

// エラー表示（本番環境では0に）
ini_set('display_errors', 1);
error_reporting(E_ALL);
