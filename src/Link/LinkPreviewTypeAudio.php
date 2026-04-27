<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Link;

use Totaldev\TgSchema\Audio\Audio;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * The link is a link to an audio.
 */
class LinkPreviewTypeAudio extends LinkPreviewType
{
    public const string TYPE_NAME = 'linkPreviewTypeAudio';

    public function __construct(
        /**
         * The audio description.
         */
        protected Audio $audio
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): LinkPreviewTypeAudio
    {
        return new static(
            audio: TdSchemaRegistry::fromArray($array['audio']),
        );
    }

    public function getAudio(): Audio
    {
        return $this->audio;
    }

    public function setAudio(Audio $value): static
    {
        $this->audio = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'audio' => $this->audio->jsonSerialize(),
        ];
    }
}
