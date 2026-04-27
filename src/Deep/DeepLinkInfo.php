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
    public const string TYPE_NAME = 'deepLinkInfo';

    public function __construct(
        /**
         * True, if the user must be asked to update the application.
         */
        protected bool          $needUpdateApplication,
        /**
         * Text to be shown to the user.
         */
        protected FormattedText $text,
    ) {}

    public static function fromArray(array $array): DeepLinkInfo
    {
        return new static(
            needUpdateApplication: $array['need_update_application'],
            text                 : TdSchemaRegistry::fromArray($array['text']),
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

    public function setNeedUpdateApplication(bool $value): static
    {
        $this->needUpdateApplication = $value;

        return $this;
    }

    public function setText(FormattedText $value): static
    {
        $this->text = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'                   => static::TYPE_NAME,
            'need_update_application' => $this->needUpdateApplication,
            'text'                    => $this->text->jsonSerialize(),
        ];
    }
}
