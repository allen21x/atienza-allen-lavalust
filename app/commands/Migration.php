<?php

class MigrationCommand
{
    public static $command = 'migration';

    public static $description = 'Run database migrations';

    public static $arguments = [
        '[action]' => 'Action: run, create-migration, rollback, rollback-all, refresh, status',
        '[name]'   => 'Migration class name for create-migration',
    ];

    protected static $route_map = [
        'run'              => 'migrate',
        'create-migration' => 'create-migration',
        'rollback'        => 'rollback',
        'rollback-all'    => 'rollback-all',
        'refresh'          => 'refresh',
        'status'           => 'status',
    ];

    public function handle($action = null, array $flags = [], $name = null)
    {
        $action = $action ?? 'run';

        /*
         * Get the migration name directly from the command line.
         * Example:
         * php lava migration create-migration create_products_table
         */
        if ($action === 'create-migration') {

            global $argv;

            $migration_name = null;

            if (isset($argv[4])) {
                $migration_name = $argv[4];
            }

            if (!$migration_name && $name) {
                $migration_name = $name;
            }

            if (!$migration_name && !empty($flags)) {
                $migration_name = reset($flags);
            }

            if (!$migration_name) {
                echo danger("Migration name is required.");
                echo "Example: php lava migration create-migration create_products_table"
                    . PHP_EOL;
                exit(1);
            }

            $route = 'create-migration/' . $migration_name;

        } else {

            if (!isset(static::$route_map[$action])) {
                echo danger("Unknown migration action: \"{$action}\"");
                echo "Available actions: "
                    . implode(', ', array_keys(static::$route_map))
                    . PHP_EOL;
                exit(1);
            }

            $route = static::$route_map[$action];
        }

        $index = PUBLIC_DIR . 'index.php';

        if (!file_exists($index)) {
            echo danger("index.php not found at: {$index}");
            exit(1);
        }

        $command = sprintf(
            'php %s %s',
            escapeshellarg($index),
            escapeshellarg($route)
        );

        passthru($command);
    }
}