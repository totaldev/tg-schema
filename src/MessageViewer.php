<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace Totaldev\TgSchema;

/**
 * Represents a viewer of a message
 */
class MessageViewer extends TdObject
{
    public const TYPE_NAME = 'messageViewer';

    /**
     * User identifier of the viewer
     *
     * @var int
     */
    protected int $userId;

    /**
     * Approximate point in time (Unix timestamp) when the message was viewed
     *
     * @var int
     */
    protected int $viewDate;

    public function __construct(int $userId, int $viewDate)
    {
        $this->userId = $userId;
        $this->viewDate = $viewDate;
    }

    public static function fromArray(array $array): MessageViewer
    {
        return new static(
            $array['user_id'],
            $array['view_date'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'user_id' => $this->userId,
            'view_date' => $this->viewDate,
        ];
    }

    public function getUserId(): int
    {
        return $this->userId;
    }

    public function getViewDate(): int
    {
        return $this->viewDate;
    }
}
