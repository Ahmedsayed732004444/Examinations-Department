<?php

namespace Tests\Feature\Architecture;

use PHPUnit\Framework\TestCase;

class NoDirectBuilderDeleteTest extends TestCase
{
    /**
     * Test that User and Coupon models are not deleted via direct Builder::delete() calls.
     */
    public function test_no_direct_builder_delete_on_models_with_unique_columns(): void
    {
        $appPath = dirname(__DIR__, 3) . '/app';
        $files = new \RecursiveIteratorIterator(new \RecursiveDirectoryIterator($appPath));
        $violatingFiles = [];

        $patterns = [
            '/User::where\([^)]*\)->delete\(\)/i',
            '/Coupon::where\([^)]*\)->delete\(\)/i',
        ];

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

        $this->assertEmpty(
            $violatingFiles,
            'Direct Builder delete found on User/Coupon models in: ' . implode(', ', $violatingFiles) . '. Use Model::bulkSoftDelete() or $collection->each->delete() instead.'
        );
    }
}
