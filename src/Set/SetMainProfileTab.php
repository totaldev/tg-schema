<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Set;

use Totaldev\TgSchema\Profile\ProfileTab;
use Totaldev\TgSchema\TdFunction;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Changes the main profile tab of the current user.
 */
class SetMainProfileTab extends TdFunction
{
    public const string TYPE_NAME = 'setMainProfileTab';

    public function __construct(
        /**
         * The new value of the main profile tab.
         */
        protected ProfileTab $mainProfileTab
    ) {}

    public static function fromArray(array $array): SetMainProfileTab
    {
        return new static(
            TdSchemaRegistry::fromArray($array['main_profile_tab']),
        );
    }

    public function getMainProfileTab(): ProfileTab
    {
        return $this->mainProfileTab;
    }

    public function setMainProfileTab(ProfileTab $value): static
    {
        $this->mainProfileTab = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'            => static::TYPE_NAME,
            'main_profile_tab' => $this->mainProfileTab->typeSerialize(),
        ];
    }
}
