<?php
namespace Psalm\Type\Atomic;

class TNever extends \Psalm\Type\Atomic
{
    public function __toString(): string
    {
        return 'never-return';
    }

    public function getKey(bool $include_extra = true): string
    {
        return 'never-return';
    }

    /**
     * @param  array<string> $aliased_classes
     */
    public function toPhpString(
        ?string $namespace,
        array $aliased_classes,
        ?string $this_class,
        int $php_major_version,
        int $php_minor_version
    ): ?string {
        return null;
    }

    public function canBeFullyExpressedInPhp(int $php_major_version, int $php_minor_version): bool
    {
        return false;
    }
}
