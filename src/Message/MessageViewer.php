<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Message;

use Totaldev\TgSchema\TdObject;

/**
 * Represents a viewer of a message.
 */
class MessageViewer extends TdObject
{
    public const TYPE_NAME = 'messageViewer';

    public function __construct(
        /**
         * User identifier of the viewer.
         */
        protected int $userId,
        /**
         * Approximate point in time (Unix timestamp) when the message was viewed.
         */
        protected int $viewDate
    ) {}

    public static function fromArray(array $array): MessageViewer
    {
        return new static(
            $array['user_id'],
            $array['view_date'],
        );
    }

    public function getUserId(): int
    {
        return $this->userId;
    }

    public function getViewDate(): int
    {
        return $this->viewDate;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'     => static::TYPE_NAME,
            'user_id'   => $this->userId,
            'view_date' => $this->viewDate,
        ];
    }
}
