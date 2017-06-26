<?php

namespace Eighty8\LaravelSeeder\Migrator;

interface MigratableSeeder
{
    /**
     * Run the database seeder.
     */
    public function run(): void;

    /**
     * Reverses the database seeder.
     */
    public function down(): void;
}