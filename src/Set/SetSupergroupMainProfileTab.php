<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Set;

use Totaldev\TgSchema\Profile\ProfileTab;
use Totaldev\TgSchema\TdFunction;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Changes the main profile tab of the channel; requires can_change_info administrator right.
 */
class SetSupergroupMainProfileTab extends TdFunction
{
    public const string TYPE_NAME = 'setSupergroupMainProfileTab';

    public function __construct(
        /**
         * The new value of the main profile tab.
         */
        protected ProfileTab $mainProfileTab,
        /**
         * Identifier of the channel.
         */
        protected int        $supergroupId,
    ) {}

    public static function fromArray(array $array): SetSupergroupMainProfileTab
    {
        return new static(
            mainProfileTab: TdSchemaRegistry::fromArray($array['main_profile_tab']),
            supergroupId  : $array['supergroup_id'],
        );
    }

    public function getMainProfileTab(): ProfileTab
    {
        return $this->mainProfileTab;
    }

    public function getSupergroupId(): int
    {
        return $this->supergroupId;
    }

    public function setMainProfileTab(ProfileTab $value): static
    {
        $this->mainProfileTab = $value;

        return $this;
    }

    public function setSupergroupId(int $value): static
    {
        $this->supergroupId = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'            => static::TYPE_NAME,
            'main_profile_tab' => $this->mainProfileTab->jsonSerialize(),
            'supergroup_id'    => $this->supergroupId,
        ];
    }
}
