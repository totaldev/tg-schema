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
    public const TYPE_NAME = 'chatJoinRequests';

    public function __construct(
        /**
         * Approximate total number of requests found.
         */
        protected int   $totalCount,
        /**
         * List of the requests.
         *
         * @var ChatJoinRequest[]
         */
        protected array $requests
    ) {}

    public static function fromArray(array $array): ChatJoinRequests
    {
        return new static(
            $array['total_count'],
            array_map(static fn($x) => TdSchemaRegistry::fromArray($x), $array['requests']),
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

    public function typeSerialize(): array
    {
        return [
            '@type'       => static::TYPE_NAME,
            'total_count' => $this->totalCount,
            'requests'    => array_map(static fn($x) => $x->typeSerialize(), $this->requests),
        ];
    }
}
