<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Check;

use Totaldev\TgSchema\TdFunction;

/**
 * Checks validness of a name for a quick reply shortcut. Can be called synchronously.
 */
class CheckQuickReplyShortcutName extends TdFunction
{
    public const TYPE_NAME = 'checkQuickReplyShortcutName';

    public function __construct(
        /**
         * The name of the shortcut; 1-32 characters.
         */
        protected string $name
    ) {}

    public static function fromArray(array $array): CheckQuickReplyShortcutName
    {
        return new static(
            $array['name'],
        );
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'name'  => $this->name,
        ];
    }
}
