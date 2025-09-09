<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Reply;

/**
 * Instructs application to remove the keyboard once this message has been received. This kind of keyboard can't be received in an incoming message; instead,
 * updateChatReplyMarkup with message_id == 0 will be sent.
 */
class ReplyMarkupRemoveKeyboard extends ReplyMarkup
{
    public const TYPE_NAME = 'replyMarkupRemoveKeyboard';

    public function __construct(
        /**
         * True, if the keyboard is removed only for the mentioned users or the target user of a reply.
         */
        protected bool $isPersonal
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): ReplyMarkupRemoveKeyboard
    {
        return new static(
            $array['is_personal'],
        );
    }

    public function getIsPersonal(): bool
    {
        return $this->isPersonal;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'       => static::TYPE_NAME,
            'is_personal' => $this->isPersonal,
        ];
    }
}
