<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Send;

use Totaldev\TgSchema\Call\CallProblem;
use Totaldev\TgSchema\Input\InputCall;
use Totaldev\TgSchema\TdFunction;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Sends a call rating.
 */
class SendCallRating extends TdFunction
{
    public const string TYPE_NAME = 'sendCallRating';

    public function __construct(
        /**
         * Call identifier.
         */
        protected InputCall $callId,
        /**
         * An optional user comment if the rating is less than 5.
         */
        protected string    $comment,
        /**
         * List of the exact types of problems with the call, specified by the user.
         *
         * @var CallProblem[]
         */
        protected array     $problems,
        /**
         * Call rating; 1-5.
         */
        protected int       $rating,
    ) {}

    public static function fromArray(array $array): SendCallRating
    {
        return new static(
            callId  : TdSchemaRegistry::fromArray($array['call_id']),
            comment : $array['comment'],
            problems: array_map(static fn($x) => TdSchemaRegistry::fromArray($x), $array['problems']),
            rating  : $array['rating'],
        );
    }

    public function getCallId(): InputCall
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

    public function setCallId(InputCall $value): static
    {
        $this->callId = $value;

        return $this;
    }

    public function setComment(string $value): static
    {
        $this->comment = $value;

        return $this;
    }

    public function setProblems(array $value): static
    {
        $this->problems = $value;

        return $this;
    }

    public function setRating(int $value): static
    {
        $this->rating = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'    => static::TYPE_NAME,
            'call_id'  => $this->callId->jsonSerialize(),
            'comment'  => $this->comment,
            'problems' => array_map(static fn($x) => $x->jsonSerialize(), $this->problems),
            'rating'   => $this->rating,
        ];
    }
}
