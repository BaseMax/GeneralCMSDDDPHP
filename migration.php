<?php

require_once __DIR__ . "/vendor/autoload.php";

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

$migrationClasses = [
    CMS\Database\Migrations\SliderPositionMigration::class,
    CMS\Database\Migrations\TagMigration::class,
    CMS\Database\Migrations\ContactUsMigration::class,
    CMS\Database\Migrations\FaqMigration::class,
    CMS\Database\Migrations\MenuPositionMigration::class,
    CMS\Database\Migrations\CategoryMigration::class,
    CMS\Database\Migrations\SliderSlideMigration::class,
    CMS\Database\Migrations\MenuItemMigration::class,
    CMS\Database\Migrations\UserMigration::class,
    CMS\Database\Migrations\RulesMigration::class,
    CMS\Database\Migrations\PostMigration::class,
    CMS\Database\Migrations\PostTagMigration::class,
    CMS\Database\Migrations\PostCategoryMigration::class
];

foreach ($migrationClasses as $class) {
    $item = new $class;

    $item->create();

    echo "{$item->getTableName()} table created ..." . PHP_EOL;
}
