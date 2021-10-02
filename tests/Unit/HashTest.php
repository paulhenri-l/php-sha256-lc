<?php

namespace PaulhenriL\PhpSha256Lc\Tests\Unit;

use PaulhenriL\PhpSha256Lc\Tests\TestCase;

class HashTest extends TestCase
{
    public function test_hashes_are_correct()
    {
        $this->assertEquals(
            hash('sha256', mb_strtolower('Hello World')),
            sha256_lc('Hello World')
        );
    }

    public function test_it_is_case_insensitive()
    {
        $this->assertEquals(
            sha256_lc('HELLO WORLD'),
            sha256_lc('hello world')
        );
    }
}
