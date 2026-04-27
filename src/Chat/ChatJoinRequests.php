<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Chat;

use Totaldev\TgSchema\TdObject;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Contains a list of requests to join a chat.
 */
class ChatJoinRequests extends TdObject
{
    public const string TYPE_NAME = 'chatJoinRequests';

    public function __construct(
        /**
         * List of the requests.
         *
         * @var ChatJoinRequest[]
         */
        protected array $requests,
        /**
         * Approximate total number of requests found.
         */
        protected int   $totalCount,
    ) {}

    public static function fromArray(array $array): ChatJoinRequests
    {
        return new static(
            requests  : array_map(static fn($x) => TdSchemaRegistry::fromArray($x), $array['requests']),
            totalCount: $array['total_count'],
        );
    }

    public function getRequests(): array
    {
        return $this->requests;
    }

    public function getTotalCount(): int
    {
        return $this->totalCount;
    }

    public function setRequests(array $value): static
    {
        $this->requests = $value;

        return $this;
    }

    public function setTotalCount(int $value): static
    {
        $this->totalCount = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'       => static::TYPE_NAME,
            'requests'    => array_map(static fn($x) => $x->jsonSerialize(), $this->requests),
            'total_count' => $this->totalCount,
        ];
    }
}
