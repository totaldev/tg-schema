<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Notification;

use Totaldev\TgSchema\TdObject;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Contains information about a notification.
 */
class Notification extends TdObject
{
    public const string TYPE_NAME = 'notification';

    public function __construct(
        /**
         * Unique persistent identifier of this notification.
         */
        protected int              $id,
        /**
         * Notification date.
         */
        protected int              $date,
        /**
         * True, if the notification was explicitly sent without sound.
         */
        protected bool             $isSilent,
        /**
         * Notification type.
         */
        protected NotificationType $type,
    ) {}

    public static function fromArray(array $array): Notification
    {
        return new static(
            $array['id'],
            $array['date'],
            $array['is_silent'],
            TdSchemaRegistry::fromArray($array['type']),
        );
    }

    public function getDate(): int
    {
        return $this->date;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getIsSilent(): bool
    {
        return $this->isSilent;
    }

    public function getType(): NotificationType
    {
        return $this->type;
    }

    public function setDate(int $value): static
    {
        $this->date = $value;

        return $this;
    }

    public function setId(int $value): static
    {
        $this->id = $value;

        return $this;
    }

    public function setIsSilent(bool $value): static
    {
        $this->isSilent = $value;

        return $this;
    }

    public function setType(NotificationType $value): static
    {
        $this->type = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'     => static::TYPE_NAME,
            'id'        => $this->id,
            'date'      => $this->date,
            'is_silent' => $this->isSilent,
            'type'      => $this->type->typeSerialize(),
        ];
    }
}
