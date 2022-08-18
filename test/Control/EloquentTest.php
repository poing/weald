<?php

namespace Weald\Test\Control;

use Weald\Test\Control\Models\BaseLineAlpha;

class EloquentTest extends UnitAbstract
{
    /** @test */
    public function record_count_test()
    {
        BaseLineAlpha::factory()->count(50)->create();
        $this->assertEquals(BaseLineAlpha::count(), 50);
        echo '|';
    }
}
