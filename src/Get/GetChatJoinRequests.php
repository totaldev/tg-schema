<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Get;

use Totaldev\TgSchema\Chat\ChatJoinRequest;
use Totaldev\TgSchema\TdFunction;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Returns pending join requests in a chat.
 */
class GetChatJoinRequests extends TdFunction
{
    public const string TYPE_NAME = 'getChatJoinRequests';

    public function __construct(
        /**
         * Chat identifier.
         */
        protected int              $chatId,
        /**
         * Invite link for which to return join requests. If empty, all join requests will be returned. Requires administrator privileges and can_invite_users right in the chat for own links and owner privileges for other links.
         */
        protected string           $inviteLink,
        /**
         * The maximum number of requests to join the chat to return.
         */
        protected int              $limit,
        /**
         * A query to search for in the first names, last names and usernames of the users to return.
         */
        protected string           $query,
        /**
         * A chat join request from which to return next requests; pass null to get results from the beginning.
         */
        protected ?ChatJoinRequest $offsetRequest = null,
    ) {}

    public static function fromArray(array $array): GetChatJoinRequests
    {
        return new static(
            chatId       : $array['chat_id'],
            inviteLink   : $array['invite_link'],
            limit        : $array['limit'],
            offsetRequest: (isset($array['offset_request']) ? TdSchemaRegistry::fromArray($array['offset_request']) : null),
            query        : $array['query'],
        );
    }

    public function getChatId(): int
    {
        return $this->chatId;
    }

    public function getInviteLink(): string
    {
        return $this->inviteLink;
    }

    public function getLimit(): int
    {
        return $this->limit;
    }

    public function getOffsetRequest(): ?ChatJoinRequest
    {
        return $this->offsetRequest;
    }

    public function getQuery(): string
    {
        return $this->query;
    }

    public function setChatId(int $value): static
    {
        $this->chatId = $value;

        return $this;
    }

    public function setInviteLink(string $value): static
    {
        $this->inviteLink = $value;

        return $this;
    }

    public function setLimit(int $value): static
    {
        $this->limit = $value;

        return $this;
    }

    public function setOffsetRequest(?ChatJoinRequest $value): static
    {
        $this->offsetRequest = $value;

        return $this;
    }

    public function setQuery(string $value): static
    {
        $this->query = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'          => static::TYPE_NAME,
            'chat_id'        => $this->chatId,
            'invite_link'    => $this->inviteLink,
            'limit'          => $this->limit,
            'offset_request' => (null !== $this->offsetRequest ? $this->offsetRequest->jsonSerialize() : null),
            'query'          => $this->query,
        ];
    }
}
