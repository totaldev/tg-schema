<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Chat;

use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * A supergroup or channel (with unlimited members)
 */
class ChatTypeSupergroup extends ChatType
{
    public const TYPE_NAME = 'chatTypeSupergroup';

    /**
     * True, if the supergroup is a channel
     *
     * @var bool
     */
    protected bool $isChannel;

    /**
     * Supergroup or channel identifier
     *
     * @var int
     */
    protected int $supergroupId;

    public function __construct(int $supergroupId, bool $isChannel)
    {
        parent::__construct();

        $this->supergroupId = $supergroupId;
        $this->isChannel = $isChannel;
    }

    public static function fromArray(array $array): ChatTypeSupergroup
    {
        return new static(
            $array['supergroup_id'],
            $array['is_channel'],
        );
    }

    public function getIsChannel(): bool
    {
        return $this->isChannel;
    }

    public function getSupergroupId(): int
    {
        return $this->supergroupId;
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'supergroup_id' => $this->supergroupId,
            'is_channel' => $this->isChannel,
        ];
    }
}
