<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Share;

use Totaldev\TgSchema\Keyboard\KeyboardButtonSource;
use Totaldev\TgSchema\TdFunction;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Shares users after pressing a keyboardButtonTypeRequestUsers button with the bot.
 */
class ShareUsersWithBot extends TdFunction
{
    public const string TYPE_NAME = 'shareUsersWithBot';

    public function __construct(
        /**
         * Identifier of the button.
         */
        protected int                  $buttonId,
        /**
         * Pass true to check that the users can be shared by the button instead of actually sharing them.
         */
        protected bool                 $onlyCheck,
        /**
         * Identifiers of the shared users.
         *
         * @var int[]
         */
        protected array                $sharedUserIds,
        /**
         * Source of the button.
         */
        protected KeyboardButtonSource $source,
    ) {}

    public static function fromArray(array $array): ShareUsersWithBot
    {
        return new static(
            buttonId     : $array['button_id'],
            onlyCheck    : $array['only_check'],
            sharedUserIds: $array['shared_user_ids'],
            source       : TdSchemaRegistry::fromArray($array['source']),
        );
    }

    public function getButtonId(): int
    {
        return $this->buttonId;
    }

    public function getOnlyCheck(): bool
    {
        return $this->onlyCheck;
    }

    public function getSharedUserIds(): array
    {
        return $this->sharedUserIds;
    }

    public function getSource(): KeyboardButtonSource
    {
        return $this->source;
    }

    public function setButtonId(int $value): static
    {
        $this->buttonId = $value;

        return $this;
    }

    public function setOnlyCheck(bool $value): static
    {
        $this->onlyCheck = $value;

        return $this;
    }

    public function setSharedUserIds(array $value): static
    {
        $this->sharedUserIds = $value;

        return $this;
    }

    public function setSource(KeyboardButtonSource $value): static
    {
        $this->source = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'           => static::TYPE_NAME,
            'button_id'       => $this->buttonId,
            'only_check'      => $this->onlyCheck,
            'shared_user_ids' => $this->sharedUserIds,
            'source'          => $this->source->jsonSerialize(),
        ];
    }
}
