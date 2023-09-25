<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Input;

use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * A Telegram Passport element to be saved containing the user's passport
 */
class InputPassportElementPassport extends InputPassportElement
{
    public const TYPE_NAME = 'inputPassportElementPassport';

    /**
     * The passport to be saved
     *
     * @var InputIdentityDocument
     */
    protected InputIdentityDocument $passport;

    public function __construct(InputIdentityDocument $passport)
    {
        parent::__construct();

        $this->passport = $passport;
    }

    public static function fromArray(array $array): InputPassportElementPassport
    {
        return new static(
            TdSchemaRegistry::fromArray($array['passport']),
        );
    }

    public function getPassport(): InputIdentityDocument
    {
        return $this->passport;
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'passport' => $this->passport->typeSerialize(),
        ];
    }
}
