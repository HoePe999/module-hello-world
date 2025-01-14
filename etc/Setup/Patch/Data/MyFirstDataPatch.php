<?php
declare(strict_types=1);

namespace Overall\HelloWorld;

use Magento\Framework\Setup\Patch\DataPatchInterface;

class MyFirstDataPatch implements DataPatchInterface
{
    /**
     * @inheritDoc
     */
    public static function getDependencies(): array
    {
        return [];
    }

    /**
     * @inheritDoc
     */
    public function getAliases(): array
    {
        return [];
    }

    /**
     * @inheritDoc
     */
    public function apply(): MyFirstDataPatch
    {
        return $this;
    }
}
