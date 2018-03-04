<?php
declare(strict_types=1);

namespace Genkgo\TestMail\Unit\Dkim;

use Genkgo\Mail\Dkim\CanonicalizeHeaderSimple;
use Genkgo\Mail\Header\HeaderLine;
use Genkgo\TestMail\AbstractTestCase;

final class CanonicalizeHeaderSimpleTest extends AbstractTestCase
{
    /**
     * @test
     */
    public function it_canonicalizes_example_from_rfc()
    {
        $canonicalization = new CanonicalizeHeaderSimple();

        $this->assertEquals(
            'A: X ',
            $canonicalization->canonicalize(HeaderLine::fromString('A: X ')->getHeader())
        );
    }

    /**
     * @test
     */
    public function it_is_called_simple()
    {
        $canonicalization = new CanonicalizeHeaderSimple();

        $this->assertEquals('simple', $canonicalization->name());
    }
}
