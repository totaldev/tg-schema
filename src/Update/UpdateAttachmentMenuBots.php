<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Update;

use Totaldev\TgSchema\Attachment\AttachmentMenuBot;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * The list of bots added to attachment or side menu has changed
 */
class UpdateAttachmentMenuBots extends Update
{
    public const TYPE_NAME = 'updateAttachmentMenuBots';

    /**
     * The new list of bots. The bots must not be shown on scheduled messages screen
     *
     * @var AttachmentMenuBot[]
     */
    protected array $bots;

    public function __construct(array $bots)
    {
        parent::__construct();

        $this->bots = $bots;
    }

    public static function fromArray(array $array): UpdateAttachmentMenuBots
    {
        return new static(
            array_map(fn($x) => TdSchemaRegistry::fromArray($x), $array['bots']),
        );
    }

    public function getBots(): array
    {
        return $this->bots;
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            array_map(fn($x) => $x->typeSerialize(), $this->bots),
        ];
    }
}
