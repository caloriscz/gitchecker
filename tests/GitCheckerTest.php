<?php declare(strict_types=1);
use PHPUnit\Framework\TestCase;

require './src/GitChecker/GitChecker.php';

final class GitCheckerTest extends TestCase
{
    public function testNotNull(): void
    {
        $gitChecker = new GitChecker();

        self::assertNotNull($gitChecker->getSnapshot());
        self::assertNotNull($gitChecker->getBranch());
        self::assertNotNull($gitChecker->getDate());
    }
}