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
    public const string TYPE_NAME = 'chatActionBarJoinRequest';

    public function __construct(
        /**
         * True, if the join request was sent to a channel chat.
         */
        protected bool   $isChannel,
        /**
         * Point in time (Unix timestamp) when the join request was sent.
         */
        protected int    $requestDate,
        /**
         * Title of the chat to which the join request was sent.
         */
        protected string $title,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): ChatActionBarJoinRequest
    {
        return new static(
            isChannel  : $array['is_channel'],
            requestDate: $array['request_date'],
            title      : $array['title'],
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

    public function setIsChannel(bool $value): static
    {
        $this->isChannel = $value;

        return $this;
    }

    public function setRequestDate(int $value): static
    {
        $this->requestDate = $value;

        return $this;
    }

    public function setTitle(string $value): static
    {
        $this->title = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'        => static::TYPE_NAME,
            'is_channel'   => $this->isChannel,
            'request_date' => $this->requestDate,
            'title'        => $this->title,
        ];
    }
}
