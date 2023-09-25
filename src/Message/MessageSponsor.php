<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Message;

use Totaldev\TgSchema\Chat\ChatPhotoInfo;
use Totaldev\TgSchema\TdObject;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Information about the sponsor of a message
 */
class MessageSponsor extends TdObject
{
    public const TYPE_NAME = 'messageSponsor';

    /**
     * Additional optional information about the sponsor to be shown along with the message
     *
     * @var string
     */
    protected string $info;

    /**
     * Photo of the sponsor; may be null if must not be shown
     *
     * @var ChatPhotoInfo|null
     */
    protected ?ChatPhotoInfo $photo;

    /**
     * Type of the sponsor
     *
     * @var MessageSponsorType
     */
    protected MessageSponsorType $type;

    public function __construct(MessageSponsorType $type, ?ChatPhotoInfo $photo, string $info)
    {
        $this->type = $type;
        $this->photo = $photo;
        $this->info = $info;
    }

    public static function fromArray(array $array): MessageSponsor
    {
        return new static(
            TdSchemaRegistry::fromArray($array['type']),
            (isset($array['photo']) ? TdSchemaRegistry::fromArray($array['photo']) : null),
            $array['info'],
        );
    }

    public function getInfo(): string
    {
        return $this->info;
    }

    public function getPhoto(): ?ChatPhotoInfo
    {
        return $this->photo;
    }

    public function getType(): MessageSponsorType
    {
        return $this->type;
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'type' => $this->type->typeSerialize(),
            'photo' => (isset($this->photo) ? $this->photo : null),
            'info' => $this->info,
        ];
    }
}
