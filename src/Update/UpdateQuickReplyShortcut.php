<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Update;

use Totaldev\TgSchema\Quick\QuickReplyShortcut;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Basic information about a quick reply shortcut has changed. This update is guaranteed to come before the quick shortcut name is returned to the application.
 */
class UpdateQuickReplyShortcut extends Update
{
    public const string TYPE_NAME = 'updateQuickReplyShortcut';

    public function __construct(
        /**
         * New data about the shortcut.
         */
        protected QuickReplyShortcut $shortcut
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): UpdateQuickReplyShortcut
    {
        return new static(
            shortcut: TdSchemaRegistry::fromArray($array['shortcut']),
        );
    }

    public function getShortcut(): QuickReplyShortcut
    {
        return $this->shortcut;
    }

    public function setShortcut(QuickReplyShortcut $value): static
    {
        $this->shortcut = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'    => static::TYPE_NAME,
            'shortcut' => $this->shortcut->jsonSerialize(),
        ];
    }
}
