<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Me;

/**
 * A URL linking to a public supergroup or channel.
 */
class TMeUrlTypeSupergroup extends TMeUrlType
{
    public const string TYPE_NAME = 'tMeUrlTypeSupergroup';

    public function __construct(
        /**
         * Identifier of the supergroup or channel.
         */
        protected int $supergroupId
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): TMeUrlTypeSupergroup
    {
        return new static(
            supergroupId: $array['supergroup_id'],
        );
    }

    public function getSupergroupId(): int
    {
        return $this->supergroupId;
    }

    public function setSupergroupId(int $value): static
    {
        $this->supergroupId = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'         => static::TYPE_NAME,
            'supergroup_id' => $this->supergroupId,
        ];
    }
}
