<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Message;

use Totaldev\TgSchema\Birthdate\Birthdate;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * A birthdate was suggested to be set.
 */
class MessageSuggestBirthdate extends MessageContent
{
    public const TYPE_NAME = 'messageSuggestBirthdate';

    public function __construct(
        /**
         * The suggested birthdate. Use the method setBirthdate to apply the birthdate.
         */
        protected Birthdate $birthdate
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): MessageSuggestBirthdate
    {
        return new static(
            TdSchemaRegistry::fromArray($array['birthdate']),
        );
    }

    public function getBirthdate(): Birthdate
    {
        return $this->birthdate;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'     => static::TYPE_NAME,
            'birthdate' => $this->birthdate->typeSerialize(),
        ];
    }
}
