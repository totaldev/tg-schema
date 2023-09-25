<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Message;

use Totaldev\TgSchema\Formatted\FormattedText;
use Totaldev\TgSchema\TdSchemaRegistry;

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
