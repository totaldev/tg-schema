<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Update;

use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * The list of supported dice emojis has changed
 */
class UpdateDiceEmojis extends Update
{
    public const TYPE_NAME = 'updateDiceEmojis';

    /**
     * The new list of supported dice emojis
     *
     * @var string[]
     */
    protected array $emojis;

    public function __construct(array $emojis)
    {
        parent::__construct();

        $this->emojis = $emojis;
    }

    public static function fromArray(array $array): UpdateDiceEmojis
    {
        return new static(
            $array['emojis'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'emojis' => $this->emojis,
        ];
    }

    public function getEmojis(): array
    {
        return $this->emojis;
    }
}
