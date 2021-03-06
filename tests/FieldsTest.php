<?php

namespace Orchid\CMS\Tests;

use Illuminate\View\View;

class FieldsTest extends TestCase
{
    /**
     * Verify permissions.
     */
    public function test_is_field()
    {
        $config = config('cms.fields');

        foreach ($config as $key => $value) {
            $field = new $value();

            $view = $field->create(collect());
            $this->assertInstanceOf(View::class, $view);
        }
    }
}
