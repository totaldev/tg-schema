<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Input;

/**
 * A regular poll.
 */
class InputPollTypeRegular extends InputPollType
{
    public const string TYPE_NAME = 'inputPollTypeRegular';

    public function __construct(
        /**
         * True, if answer options can be added to the poll after creation; not supported in channel chats and for anonymous polls.
         */
        protected bool $allowAddingOptions
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): InputPollTypeRegular
    {
        return new static(
            allowAddingOptions: $array['allow_adding_options'],
        );
    }

    public function getAllowAddingOptions(): bool
    {
        return $this->allowAddingOptions;
    }

    public function setAllowAddingOptions(bool $value): static
    {
        $this->allowAddingOptions = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'                => static::TYPE_NAME,
            'allow_adding_options' => $this->allowAddingOptions,
        ];
    }
}
