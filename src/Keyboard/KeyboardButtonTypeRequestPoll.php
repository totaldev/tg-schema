<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Keyboard;

use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * A button that allows the user to create and send a poll when pressed; available only in private chats
 */
class KeyboardButtonTypeRequestPoll extends KeyboardButtonType
{
    public const TYPE_NAME = 'keyboardButtonTypeRequestPoll';

    /**
     * If true, only polls in quiz mode must be allowed to create
     *
     * @var bool
     */
    protected bool $forceQuiz;

    /**
     * If true, only regular polls must be allowed to create
     *
     * @var bool
     */
    protected bool $forceRegular;

    public function __construct(bool $forceRegular, bool $forceQuiz)
    {
        parent::__construct();

        $this->forceRegular = $forceRegular;
        $this->forceQuiz = $forceQuiz;
    }

    public static function fromArray(array $array): KeyboardButtonTypeRequestPoll
    {
        return new static(
            $array['force_regular'],
            $array['force_quiz'],
        );
    }

    public function getForceQuiz(): bool
    {
        return $this->forceQuiz;
    }

    public function getForceRegular(): bool
    {
        return $this->forceRegular;
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'force_regular' => $this->forceRegular,
            'force_quiz' => $this->forceQuiz,
        ];
    }
}
