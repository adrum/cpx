<?php

namespace Cpx;

use Cpx\Package;

class PackageMetadata
{
    public function __construct(
        public Package $package,
        public ?string $lastUpdatedAt = null,
        public ?string $lastRunAt = null,
    ) {}
}
