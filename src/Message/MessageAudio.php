<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Message;

use Totaldev\TgSchema\Audio\Audio;
use Totaldev\TgSchema\Formatted\FormattedText;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * An audio message.
 */
class MessageAudio extends MessageContent
{
    public const TYPE_NAME = 'messageAudio';

    public function __construct(
        /**
         * The audio description.
         */
        protected Audio         $audio,
        /**
         * Audio caption.
         */
        protected FormattedText $caption,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): MessageAudio
    {
        return new static(
            TdSchemaRegistry::fromArray($array['audio']),
            TdSchemaRegistry::fromArray($array['caption']),
        );
    }

    public function getAudio(): Audio
    {
        return $this->audio;
    }

    public function getCaption(): FormattedText
    {
        return $this->caption;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'   => static::TYPE_NAME,
            'audio'   => $this->audio->typeSerialize(),
            'caption' => $this->caption->typeSerialize(),
        ];
    }
}
