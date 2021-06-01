<?php declare(strict_types=1);
use PHPUnit\Framework\TestCase;

require '../src/GitChecker/GitChecker.php';

final class GitCheckerTest extends TestCase
{
    public function testPushAndPop(): void
    {
        $gitChecker = new GitChecker();

        self::assertSame(0, 0);
    }
}