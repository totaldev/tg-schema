<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Update;

use Totaldev\TgSchema\Notification\NotificationGroup;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Contains active notifications that were shown on previous application launches. This update is sent only if the message database is used. In that case it
 * comes once before any updateNotification and updateNotificationGroup update.
 */
class UpdateActiveNotifications extends Update
{
    public const TYPE_NAME = 'updateActiveNotifications';

    public function __construct(
        /**
         * Lists of active notification groups.
         *
         * @var NotificationGroup[]
         */
        protected array $groups
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): UpdateActiveNotifications
    {
        return new static(
            array_map(static fn($x) => TdSchemaRegistry::fromArray($x), $array['groups']),
        );
    }

    public function getGroups(): array
    {
        return $this->groups;
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            array_map(static fn($x) => $x->typeSerialize(), $this->groups),
        ];
    }
}
