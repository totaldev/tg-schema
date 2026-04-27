<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Chat;

/**
 * A supergroup or channel (with unlimited members).
 */
class ChatTypeSupergroup extends ChatType
{
    public const string TYPE_NAME = 'chatTypeSupergroup';

    public function __construct(
        /**
         * True, if the supergroup is a channel.
         */
        protected bool $isChannel,
        /**
         * Supergroup or channel identifier.
         */
        protected int  $supergroupId,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): ChatTypeSupergroup
    {
        return new static(
            isChannel   : $array['is_channel'],
            supergroupId: $array['supergroup_id'],
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

    public function setIsChannel(bool $value): static
    {
        $this->isChannel = $value;

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
            '@type'         => static::TYPE_NAME,
            'is_channel'    => $this->isChannel,
            'supergroup_id' => $this->supergroupId,
        ];
    }
}
