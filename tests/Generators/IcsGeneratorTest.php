<?php

namespace Spatie\CalendarLinks\Tests\Generators;

use Spatie\CalendarLinks\Generator;
use Spatie\CalendarLinks\Generators\Ics;
use Spatie\CalendarLinks\Tests\TestCase;

class IcsGeneratorTest extends TestCase
{
    use GeneratorTestContract;

    protected function generator(): Generator
    {
        return new Ics();
    }

    protected function linkMethodName(): string
    {
        return 'ics';
    }

    /** @test */
    public function it_can_generate_an_ics_link_with_custom_uid()
    {
        $this->assertMatchesSnapshot(
            $this->createShortEventLink()->ics(['UID' => 'random-uid'])
        );
    }

    /** @test */
    public function it_can_generate_an_ics_timezoned_link()
    {
        $this->assertMatchesSnapshot(
            $this->createTimezonedLink()->ics()
        );
    }

    /** @test */
    public function it_can_generate_an_ics_timezoned_all_day_link()
    {
        $this->assertMatchesSnapshot(
            $this->createTimezonedAllDayLink()->ics()
        );
    }
}
