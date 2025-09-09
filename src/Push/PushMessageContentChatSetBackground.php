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
    public const TYPE_NAME = 'pushMessageContentChatSetBackground';

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
            $array['is_same'],
        );
    }

    public function getIsSame(): bool
    {
        return $this->isSame;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'   => static::TYPE_NAME,
            'is_same' => $this->isSame,
        ];
    }
}
