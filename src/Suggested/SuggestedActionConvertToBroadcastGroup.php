<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Suggested;

use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Suggests the user to convert specified supergroup to a broadcast group
 */
class SuggestedActionConvertToBroadcastGroup extends SuggestedAction
{
    public const TYPE_NAME = 'suggestedActionConvertToBroadcastGroup';

    /**
     * Supergroup identifier
     *
     * @var int
     */
    protected int $supergroupId;

    public function __construct(int $supergroupId)
    {
        parent::__construct();

        $this->supergroupId = $supergroupId;
    }

    public static function fromArray(array $array): SuggestedActionConvertToBroadcastGroup
    {
        return new static(
            $array['supergroup_id'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'supergroup_id' => $this->supergroupId,
        ];
    }

    public function getSupergroupId(): int
    {
        return $this->supergroupId;
    }
}
