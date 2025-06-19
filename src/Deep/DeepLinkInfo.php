<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Deep;

use Totaldev\TgSchema\Formatted\FormattedText;
use Totaldev\TgSchema\TdObject;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Contains information about a tg: deep link.
 */
class DeepLinkInfo extends TdObject
{
    public const TYPE_NAME = 'deepLinkInfo';

    public function __construct(
        /**
         * Text to be shown to the user.
         */
        protected FormattedText $text,
        /**
         * True, if the user must be asked to update the application.
         */
        protected bool          $needUpdateApplication
    ) {}

    public static function fromArray(array $array): DeepLinkInfo
    {
        return new static(
            TdSchemaRegistry::fromArray($array['text']),
            $array['need_update_application'],
        );
    }

    public function getNeedUpdateApplication(): bool
    {
        return $this->needUpdateApplication;
    }

    public function getText(): FormattedText
    {
        return $this->text;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'                   => static::TYPE_NAME,
            'text'                    => $this->text->typeSerialize(),
            'need_update_application' => $this->needUpdateApplication,
        ];
    }
}
