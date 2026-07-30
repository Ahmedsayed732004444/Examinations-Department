<?php

namespace Tests\Feature\Architecture;

use PHPUnit\Framework\TestCase;

class NoDirectBuilderDeleteTest extends TestCase
{
    /**
     * Test that User and Coupon models are not deleted via direct Builder::delete() calls across app/ and database/seeders/.
     */
    public function test_no_direct_builder_delete_on_models_with_unique_columns(): void
    {
        $baseDir = dirname(__DIR__, 3);
        $directories = [
            $baseDir . '/app',
            $baseDir . '/database/seeders',
        ];

        $violatingFiles = [];

        // Matches User::where...->delete(), Coupon::whereIn...->delete(), etc., across single or multiple lines
        $patterns = [
            '/(?:User|Coupon)::(?:query|where|orWhere|whereIn|whereNotIn|withTrashed|onlyTrashed)[\s\S]{1,200}?->delete\s*\(/i',
        ];

        foreach ($directories as $dir) {
            if (!is_dir($dir)) {
                continue;
            }

            $files = new \RecursiveIteratorIterator(new \RecursiveDirectoryIterator($dir));

            foreach ($files as $file) {
                if ($file->isFile() && $file->getExtension() === 'php') {
                    $content = file_get_contents($file->getPathname());
                    foreach ($patterns as $pattern) {
                        if (preg_match($pattern, $content)) {
                            $violatingFiles[] = $file->getPathname();
                        }
                    }
                }
            }
        }

        $this->assertEmpty(
            $violatingFiles,
            'Direct Builder delete found on User/Coupon models in: ' . implode(', ', $violatingFiles) . '. Use Model::bulkSoftDelete() or $collection->each->delete() instead.'
        );
    }
}
