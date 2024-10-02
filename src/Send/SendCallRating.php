<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Send;

use Totaldev\TgSchema\Call\CallProblem;
use Totaldev\TgSchema\TdFunction;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Sends a call rating.
 */
class SendCallRating extends TdFunction
{
    public const TYPE_NAME = 'sendCallRating';

    public function __construct(
        /**
         * Call identifier.
         */
        protected int    $callId,
        /**
         * Call rating; 1-5.
         */
        protected int    $rating,
        /**
         * An optional user comment if the rating is less than 5.
         */
        protected string $comment,
        /**
         * List of the exact types of problems with the call, specified by the user.
         *
         * @var CallProblem[]
         */
        protected array  $problems,
    ) {}

    public static function fromArray(array $array): SendCallRating
    {
        return new static(
            $array['call_id'],
            $array['rating'],
            $array['comment'],
            array_map(fn($x) => TdSchemaRegistry::fromArray($x), $array['problems']),
        );
    }

    public function getCallId(): int
    {
        return $this->callId;
    }

    public function getComment(): string
    {
        return $this->comment;
    }

    public function getProblems(): array
    {
        return $this->problems;
    }

    public function getRating(): int
    {
        return $this->rating;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'   => static::TYPE_NAME,
            'call_id' => $this->callId,
            'rating'  => $this->rating,
            'comment' => $this->comment,
            array_map(fn($x) => $x->typeSerialize(), $this->problems),
        ];
    }
}
