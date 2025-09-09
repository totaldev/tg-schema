<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Update;

/**
 * The list of supported dice emojis has changed.
 */
class UpdateDiceEmojis extends Update
{
    public const TYPE_NAME = 'updateDiceEmojis';

    public function __construct(
        /**
         * The new list of supported dice emojis.
         *
         * @var string[]
         */
        protected array $emojis
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): UpdateDiceEmojis
    {
        return new static(
            $array['emojis'],
        );
    }

    public function getEmojis(): array
    {
        return $this->emojis;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'  => static::TYPE_NAME,
            'emojis' => $this->emojis,
        ];
    }
}
