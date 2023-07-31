<?php

declare(strict_types=1);
/**
 * This file is part of Hyperf.
 *
 * @link     https://www.hyperf.io
 * @document https://doc.hyperf.io
 * @contact  group@hyperf.io
 * @license  https://github.com/hyperf-cloud/hyperf/blob/master/LICENSE
 */

namespace Cases;

use PHPUnit\Framework\TestCase;
use riven\common\Wcj;

/**
 * @internal
 * @coversNothing
 */
class ExampleTest extends TestCase
{
    public function testExample()
    {
        $url = 'https://www.qq.com';
        $wcj = new Wcj();
        $request = $wcj->get($url)->getResponseBody();
        var_dump($request);
        $this->assertTrue(true);
    }
}
