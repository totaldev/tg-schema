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
         * Supergroup or channel identifier.
         */
        protected int  $supergroupId,
        /**
         * True, if the supergroup is a channel.
         */
        protected bool $isChannel,
    ) {
        parent::__construct();
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
            'supergroup_id' => $this->supergroupId,
            'is_channel'    => $this->isChannel,
        ];
    }
}
