<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Chat;

/**
 * The chat is a private chat with an administrator of a chat to which the user sent join request.
 */
class ChatActionBarJoinRequest extends ChatActionBar
{
    public const TYPE_NAME = 'chatActionBarJoinRequest';

    public function __construct(
        /**
         * Title of the chat to which the join request was sent.
         */
        protected string $title,
        /**
         * True, if the join request was sent to a channel chat.
         */
        protected bool   $isChannel,
        /**
         * Point in time (Unix timestamp) when the join request was sent.
         */
        protected int    $requestDate,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): ChatActionBarJoinRequest
    {
        return new static(
            $array['title'],
            $array['is_channel'],
            $array['request_date'],
        );
    }

    public function getIsChannel(): bool
    {
        return $this->isChannel;
    }

    public function getRequestDate(): int
    {
        return $this->requestDate;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'        => static::TYPE_NAME,
            'title'        => $this->title,
            'is_channel'   => $this->isChannel,
            'request_date' => $this->requestDate,
        ];
    }
}
