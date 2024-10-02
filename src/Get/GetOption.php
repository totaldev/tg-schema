<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Get;

use Totaldev\TgSchema\TdFunction;

/**
 * Returns the value of an option by its name. (Check the list of available options on https://core.telegram.org/tdlib/options.) Can be called before
 * authorization. Can be called synchronously for options "version" and "commit_hash".
 */
class GetOption extends TdFunction
{
    public const TYPE_NAME = 'getOption';

    public function __construct(
        /**
         * The name of the option.
         */
        protected string $name
    ) {}

    public static function fromArray(array $array): GetOption
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
