<?php
// ============================================================
// index.php — ポートフォリオ メインページ（スケルトン）
// ※ このページは後でNext.js風に作り込む予定。
//    現時点では「プレースホルダー」として最小限の構造のみ。
// ============================================================

require_once __DIR__ . '/includes/config.php';
require_once __DIR__ . '/includes/articles.php';

$page_title = 'Portfolio';
$page_desc  = SITE_DESC;
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= e($page_title) ?> | <?= e(SITE_NAME) ?></title>
    <meta name="description" content="<?= e($page_desc) ?>">
    <link rel="stylesheet" href="/assets/css/main.css">
    <style>
        /* ---- ここのスタイルは後で大幅に変更する ---- */
        .hero {
            min-height: calc(100vh - 56px);
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            padding: 0 24px;
            background: linear-gradient(135deg, #f0f7ff 0%, #ffffff 60%);
        }
        .hero-inner h1 {
            font-size: clamp(2rem, 6vw, 3.5rem);
            font-weight: 800;
            letter-spacing: -0.04em;
            line-height: 1.15;
            color: var(--color-text);
            margin-bottom: 16px;
        }
        .hero-inner h1 span { color: var(--color-primary); }
        .hero-inner p {
            font-size: 1.1rem;
            color: var(--color-text-sub);
            margin-bottom: 32px;
        }
        .hero-actions { display: flex; gap: 12px; justify-content: center; flex-wrap: wrap; }
        .placeholder-section {
            max-width: var(--max-width);
            margin: 0 auto;
            padding: 80px 24px;
            text-align: center;
            border-top: 1px dashed var(--color-border);
            color: var(--color-text-sub);
        }
        .placeholder-section h2 { font-size: 1rem; font-weight: 600; opacity: .5; }
        .placeholder-section p  { font-size: 0.85rem; opacity: .4; margin-top: 8px; }
    </style>
</head>
<body>

<!-- =============================================
     グローバルナビ
     ============================================= -->
<header class="site-header">
    <nav class="nav-inner">
        <a href="/" class="site-logo"><?= e(SITE_NAME) ?></a>
        <ul class="nav-links">
            <li><a href="/">Portfolio</a></li>
            <li><a href="/blog.php">Blog</a></li>
        </ul>
    </nav>
</header>

<!-- =============================================
     ヒーローセクション（プレースホルダー）
     ============================================= -->
<section class="hero">
    <div class="hero-inner">
        <h1>Hi, I'm <span><?= e(SITE_AUTHOR) ?></span>.</h1>
        <p>[ ここに自己紹介・キャッチコピーを入れる ]</p>
        <div class="hero-actions">
            <a href="/blog.php" class="btn btn-primary">Blog を読む</a>
            <a href="#about"    class="btn btn-secondary">About Me</a>
        </div>
    </div>
</section>

<!-- =============================================
     About（プレースホルダー）
     ============================================= -->
<section id="about" class="placeholder-section">
    <h2>[ ABOUT SECTION ]</h2>
    <p>経歴・スキル・自己紹介などをここに追加する</p>
</section>

<!-- =============================================
     Works（プレースホルダー）
     ============================================= -->
<section id="works" class="placeholder-section">
    <h2>[ WORKS / PROJECTS SECTION ]</h2>
    <p>制作物・プロジェクト一覧をここに追加する</p>
</section>

<!-- =============================================
     Contact（プレースホルダー）
     ============================================= -->
<section id="contact" class="placeholder-section">
    <h2>[ CONTACT SECTION ]</h2>
    <p>連絡先・SNSリンクなどをここに追加する</p>
</section>

<footer class="site-footer">
    <div class="footer-inner">
        <p>&copy; <?= date('Y') ?> <?= e(SITE_AUTHOR) ?>. All rights reserved.</p>
    </div>
</footer>

</body>
</html>
