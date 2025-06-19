<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Delete;

use Totaldev\TgSchema\TdFunction;

/**
 * Deletes messages on behalf of a business account; for bots only.
 */
class DeleteBusinessMessages extends TdFunction
{
    public const TYPE_NAME = 'deleteBusinessMessages';

    public function __construct(
        /**
         * Unique identifier of business connection through which the messages were received.
         */
        protected string $businessConnectionId,
        /**
         * Identifier of the messages.
         *
         * @var int[]
         */
        protected array  $messageIds
    ) {}

    public static function fromArray(array $array): DeleteBusinessMessages
    {
        return new static(
            $array['business_connection_id'],
            $array['message_ids'],
        );
    }

    public function getBusinessConnectionId(): string
    {
        return $this->businessConnectionId;
    }

    public function getMessageIds(): array
    {
        return $this->messageIds;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'                  => static::TYPE_NAME,
            'business_connection_id' => $this->businessConnectionId,
            'message_ids'            => $this->messageIds,
        ];
    }
}
