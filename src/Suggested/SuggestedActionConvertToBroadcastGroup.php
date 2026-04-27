<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Suggested;

/**
 * Suggests the user to convert specified supergroup to a broadcast group.
 */
class SuggestedActionConvertToBroadcastGroup extends SuggestedAction
{
    public const string TYPE_NAME = 'suggestedActionConvertToBroadcastGroup';

    public function __construct(
        /**
         * Supergroup identifier.
         */
        protected int $supergroupId
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): SuggestedActionConvertToBroadcastGroup
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
