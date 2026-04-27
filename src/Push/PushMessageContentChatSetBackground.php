<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Push;

/**
 * A chat background was edited.
 */
class PushMessageContentChatSetBackground extends PushMessageContent
{
    public const string TYPE_NAME = 'pushMessageContentChatSetBackground';

    public function __construct(
        /**
         * True, if the set background is the same as the background of the current user.
         */
        protected bool $isSame
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): PushMessageContentChatSetBackground
    {
        return new static(
            isSame: $array['is_same'],
        );
    }

    public function getIsSame(): bool
    {
        return $this->isSame;
    }

    public function setIsSame(bool $value): static
    {
        $this->isSame = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'   => static::TYPE_NAME,
            'is_same' => $this->isSame,
        ];
    }
}
