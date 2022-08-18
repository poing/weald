<?php

namespace Weald\Test\Control;

use Weald\Test\Control\Models\BaseLineAlpha;

class EloquentTest extends UnitAbstract
{
    /** @test */
    public function record_seed_test()
    {
        $this->assertEquals(BaseLineAlpha::count(), 50);
    }

    /** @test */
    public function record_insert_test()
    {
        BaseLineAlpha::factory()->count(50)->create();
        $this->assertEquals(BaseLineAlpha::count(), 100);
        echo '|';
    }
}
