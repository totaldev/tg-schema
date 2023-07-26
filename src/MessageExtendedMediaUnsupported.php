<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace Totaldev\TgSchema;

/**
 * The media is unsupported
 */
class MessageExtendedMediaUnsupported extends MessageExtendedMedia
{
    public const TYPE_NAME = 'messageExtendedMediaUnsupported';

    /**
     * Media caption
     *
     * @var FormattedText
     */
    protected FormattedText $caption;

    public function __construct(FormattedText $caption)
    {
        parent::__construct();

        $this->caption = $caption;
    }

    public static function fromArray(array $array): MessageExtendedMediaUnsupported
    {
        return new static(
            TdSchemaRegistry::fromArray($array['caption']),
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'caption' => $this->caption->typeSerialize(),
        ];
    }

    public function getCaption(): FormattedText
    {
        return $this->caption;
    }
}
