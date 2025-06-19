<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Page;

use Totaldev\TgSchema\Audio\Audio;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * An audio file.
 */
class PageBlockAudio extends PageBlock
{
    public const TYPE_NAME = 'pageBlockAudio';

    public function __construct(
        /**
         * Audio file; may be null.
         */
        protected ?Audio           $audio,
        /**
         * Audio file caption.
         */
        protected PageBlockCaption $caption
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): PageBlockAudio
    {
        return new static(
            isset($array['audio']) ? TdSchemaRegistry::fromArray($array['audio']) : null,
            TdSchemaRegistry::fromArray($array['caption']),
        );
    }

    public function getAudio(): ?Audio
    {
        return $this->audio;
    }

    public function getCaption(): PageBlockCaption
    {
        return $this->caption;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'   => static::TYPE_NAME,
            'audio'   => (isset($this->audio) ? $this->audio : null),
            'caption' => $this->caption->typeSerialize(),
        ];
    }
}
