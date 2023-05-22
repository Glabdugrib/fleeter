<?php

/** @var yii\web\View $this */
/** @var string $content */

use app\assets\AppAsset;
use app\assets\TablerAsset;
use yii\bootstrap5\Breadcrumbs;
use yii\bootstrap5\Html;

AppAsset::register($this);
/*TablerAsset::register($this);*/

$this->registerCsrfMetaTags();
$this->registerMetaTag(['charset' => Yii::$app->charset], 'charset');
$this->registerMetaTag(['name' => 'viewport', 'content' => 'width=device-width, initial-scale=1, shrink-to-fit=no']);
$this->registerMetaTag(['name' => 'description', 'content' => $this->params['meta_description'] ?? '']);
$this->registerMetaTag(['name' => 'keywords', 'content' => $this->params['meta_keywords'] ?? '']);
$this->registerLinkTag(['rel' => 'icon', 'type' => 'image/x-icon', 'href' => Yii::getAlias('@web/favicon.ico')]);
?>

<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>" class="h-100">
<head>
    <title><?= Html::encode($this->title) ?></title>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <?php $this->head() ?>
</head>

<body class="min-h-screen bg-gray-100 text-gray-900 overflow-y-auto dark:text-gray-100 dark:bg-gray-900" cz-shortcut-listen="true" x-data="{ sidebarIsOpen: false }">
<?php $this->beginBody() ?>

<div id="app-layout" class="flex h-full w-full relative overflow-x-clip bg-amber-100">

    <!-- Sidebar -->
    <?= $this->render('//layouts/_sidebar') ?>

    <div id="page" class="w-screen min-h-screen lg:pl-[var(--collapsed-sidebar-width)] grow bg-gray-50" x-bind:class="sidebarIsOpen ? 'lg:pl-[var(--sidebar-width)]' : 'lg:pl-[var(--collapsed-sidebar-width)]'">

    </div>


<!--    <div class="page">-->
<!--        <div id="menu" :class="isOpen && 'open'" @click.outside="isOpen = false">
            <button @click="isOpen = ! isOpen">Click me</button>
        </div>-->

        <!-- Page header -->
        <?php /*= $this->render('//layouts/_header') */?>

        <!-- Page body -->
<!--        <main>
            <?php /*if (!empty($this->params['breadcrumbs'])): */?>
                <?php /*= Breadcrumbs::widget(['links' => $this->params['breadcrumbs']]) */?>
            <?php /*endif */?>
            <?php /*= $content */?>
        </main>-->

        <!-- Footer -->
        <?php /*= $this->render('//layouts/_footer') */?>
<!--    </div>-->
</div>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
