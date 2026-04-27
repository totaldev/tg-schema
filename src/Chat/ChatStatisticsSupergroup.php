<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Chat;

use Totaldev\TgSchema\Date\DateRange;
use Totaldev\TgSchema\Statistical\StatisticalGraph;
use Totaldev\TgSchema\Statistical\StatisticalValue;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * A detailed statistics about a supergroup chat.
 */
class ChatStatisticsSupergroup extends ChatStatistics
{
    public const string TYPE_NAME = 'chatStatisticsSupergroup';

    public function __construct(
        /**
         * A graph containing number of different actions in the chat.
         */
        protected StatisticalGraph $actionGraph,
        /**
         * A graph containing distribution of message views per hour.
         */
        protected StatisticalGraph $dayGraph,
        /**
         * A graph containing number of new member joins per source.
         */
        protected StatisticalGraph $joinBySourceGraph,
        /**
         * A graph containing number of members joined and left the chat.
         */
        protected StatisticalGraph $joinGraph,
        /**
         * A graph containing distribution of active users per language.
         */
        protected StatisticalGraph $languageGraph,
        /**
         * Number of members in the chat.
         */
        protected StatisticalValue $memberCount,
        /**
         * A graph containing number of members in the chat.
         */
        protected StatisticalGraph $memberCountGraph,
        /**
         * A graph containing distribution of sent messages by content type.
         */
        protected StatisticalGraph $messageContentGraph,
        /**
         * Number of messages sent to the chat.
         */
        protected StatisticalValue $messageCount,
        /**
         * A period to which the statistics applies.
         */
        protected DateRange        $period,
        /**
         * Number of users who sent messages to the chat.
         */
        protected StatisticalValue $senderCount,
        /**
         * List of most active administrators in the last week.
         *
         * @var ChatStatisticsAdministratorActionsInfo[]
         */
        protected array            $topAdministrators,
        /**
         * List of most active inviters of new members in the last week.
         *
         * @var ChatStatisticsInviterInfo[]
         */
        protected array            $topInviters,
        /**
         * List of users sent most messages in the last week.
         *
         * @var ChatStatisticsMessageSenderInfo[]
         */
        protected array            $topSenders,
        /**
         * Number of users who viewed messages in the chat.
         */
        protected StatisticalValue $viewerCount,
        /**
         * A graph containing distribution of message views per day of week.
         */
        protected StatisticalGraph $weekGraph,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): ChatStatisticsSupergroup
    {
        return new static(
            actionGraph        : TdSchemaRegistry::fromArray($array['action_graph']),
            dayGraph           : TdSchemaRegistry::fromArray($array['day_graph']),
            joinBySourceGraph  : TdSchemaRegistry::fromArray($array['join_by_source_graph']),
            joinGraph          : TdSchemaRegistry::fromArray($array['join_graph']),
            languageGraph      : TdSchemaRegistry::fromArray($array['language_graph']),
            memberCount        : TdSchemaRegistry::fromArray($array['member_count']),
            memberCountGraph   : TdSchemaRegistry::fromArray($array['member_count_graph']),
            messageContentGraph: TdSchemaRegistry::fromArray($array['message_content_graph']),
            messageCount       : TdSchemaRegistry::fromArray($array['message_count']),
            period             : TdSchemaRegistry::fromArray($array['period']),
            senderCount        : TdSchemaRegistry::fromArray($array['sender_count']),
            topAdministrators  : array_map(static fn($x) => TdSchemaRegistry::fromArray($x), $array['top_administrators']),
            topInviters        : array_map(static fn($x) => TdSchemaRegistry::fromArray($x), $array['top_inviters']),
            topSenders         : array_map(static fn($x) => TdSchemaRegistry::fromArray($x), $array['top_senders']),
            viewerCount        : TdSchemaRegistry::fromArray($array['viewer_count']),
            weekGraph          : TdSchemaRegistry::fromArray($array['week_graph']),
        );
    }

    public function getActionGraph(): StatisticalGraph
    {
        return $this->actionGraph;
    }

    public function getDayGraph(): StatisticalGraph
    {
        return $this->dayGraph;
    }

    public function getJoinBySourceGraph(): StatisticalGraph
    {
        return $this->joinBySourceGraph;
    }

    public function getJoinGraph(): StatisticalGraph
    {
        return $this->joinGraph;
    }

    public function getLanguageGraph(): StatisticalGraph
    {
        return $this->languageGraph;
    }

    public function getMemberCount(): StatisticalValue
    {
        return $this->memberCount;
    }

    public function getMemberCountGraph(): StatisticalGraph
    {
        return $this->memberCountGraph;
    }

    public function getMessageContentGraph(): StatisticalGraph
    {
        return $this->messageContentGraph;
    }

    public function getMessageCount(): StatisticalValue
    {
        return $this->messageCount;
    }

    public function getPeriod(): DateRange
    {
        return $this->period;
    }

    public function getSenderCount(): StatisticalValue
    {
        return $this->senderCount;
    }

    public function getTopAdministrators(): array
    {
        return $this->topAdministrators;
    }

    public function getTopInviters(): array
    {
        return $this->topInviters;
    }

    public function getTopSenders(): array
    {
        return $this->topSenders;
    }

    public function getViewerCount(): StatisticalValue
    {
        return $this->viewerCount;
    }

    public function getWeekGraph(): StatisticalGraph
    {
        return $this->weekGraph;
    }

    public function setActionGraph(StatisticalGraph $value): static
    {
        $this->actionGraph = $value;

        return $this;
    }

    public function setDayGraph(StatisticalGraph $value): static
    {
        $this->dayGraph = $value;

        return $this;
    }

    public function setJoinBySourceGraph(StatisticalGraph $value): static
    {
        $this->joinBySourceGraph = $value;

        return $this;
    }

    public function setJoinGraph(StatisticalGraph $value): static
    {
        $this->joinGraph = $value;

        return $this;
    }

    public function setLanguageGraph(StatisticalGraph $value): static
    {
        $this->languageGraph = $value;

        return $this;
    }

    public function setMemberCount(StatisticalValue $value): static
    {
        $this->memberCount = $value;

        return $this;
    }

    public function setMemberCountGraph(StatisticalGraph $value): static
    {
        $this->memberCountGraph = $value;

        return $this;
    }

    public function setMessageContentGraph(StatisticalGraph $value): static
    {
        $this->messageContentGraph = $value;

        return $this;
    }

    public function setMessageCount(StatisticalValue $value): static
    {
        $this->messageCount = $value;

        return $this;
    }

    public function setPeriod(DateRange $value): static
    {
        $this->period = $value;

        return $this;
    }

    public function setSenderCount(StatisticalValue $value): static
    {
        $this->senderCount = $value;

        return $this;
    }

    public function setTopAdministrators(array $value): static
    {
        $this->topAdministrators = $value;

        return $this;
    }

    public function setTopInviters(array $value): static
    {
        $this->topInviters = $value;

        return $this;
    }

    public function setTopSenders(array $value): static
    {
        $this->topSenders = $value;

        return $this;
    }

    public function setViewerCount(StatisticalValue $value): static
    {
        $this->viewerCount = $value;

        return $this;
    }

    public function setWeekGraph(StatisticalGraph $value): static
    {
        $this->weekGraph = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'                 => static::TYPE_NAME,
            'action_graph'          => $this->actionGraph->jsonSerialize(),
            'day_graph'             => $this->dayGraph->jsonSerialize(),
            'join_by_source_graph'  => $this->joinBySourceGraph->jsonSerialize(),
            'join_graph'            => $this->joinGraph->jsonSerialize(),
            'language_graph'        => $this->languageGraph->jsonSerialize(),
            'member_count'          => $this->memberCount->jsonSerialize(),
            'member_count_graph'    => $this->memberCountGraph->jsonSerialize(),
            'message_content_graph' => $this->messageContentGraph->jsonSerialize(),
            'message_count'         => $this->messageCount->jsonSerialize(),
            'period'                => $this->period->jsonSerialize(),
            'sender_count'          => $this->senderCount->jsonSerialize(),
            'top_administrators'    => array_map(static fn($x) => $x->jsonSerialize(), $this->topAdministrators),
            'top_inviters'          => array_map(static fn($x) => $x->jsonSerialize(), $this->topInviters),
            'top_senders'           => array_map(static fn($x) => $x->jsonSerialize(), $this->topSenders),
            'viewer_count'          => $this->viewerCount->jsonSerialize(),
            'week_graph'            => $this->weekGraph->jsonSerialize(),
        ];
    }
}
