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
 * A detailed statistics about a channel chat.
 */
class ChatStatisticsChannel extends ChatStatistics
{
    public const string TYPE_NAME = 'chatStatisticsChannel';

    public function __construct(
        /**
         * A percentage of users with enabled notifications for the chat; 0-100.
         */
        protected float            $enabledNotificationsPercentage,
        /**
         * A graph containing number of views of associated with the chat instant views.
         */
        protected StatisticalGraph $instantViewInteractionGraph,
        /**
         * A graph containing number of new member joins per source.
         */
        protected StatisticalGraph $joinBySourceGraph,
        /**
         * A graph containing number of members joined and left the chat.
         */
        protected StatisticalGraph $joinGraph,
        /**
         * A graph containing number of users viewed chat messages per language.
         */
        protected StatisticalGraph $languageGraph,
        /**
         * Mean number of times reactions were added to the recently sent messages.
         */
        protected StatisticalValue $meanMessageReactionCount,
        /**
         * Mean number of times the recently sent messages were shared.
         */
        protected StatisticalValue $meanMessageShareCount,
        /**
         * Mean number of times the recently sent messages were viewed.
         */
        protected StatisticalValue $meanMessageViewCount,
        /**
         * Mean number of times reactions were added to the recently posted stories.
         */
        protected StatisticalValue $meanStoryReactionCount,
        /**
         * Mean number of times the recently posted stories were shared.
         */
        protected StatisticalValue $meanStoryShareCount,
        /**
         * Mean number of times the recently posted stories were viewed.
         */
        protected StatisticalValue $meanStoryViewCount,
        /**
         * Number of members in the chat.
         */
        protected StatisticalValue $memberCount,
        /**
         * A graph containing number of members in the chat.
         */
        protected StatisticalGraph $memberCountGraph,
        /**
         * A graph containing number of chat message views and shares.
         */
        protected StatisticalGraph $messageInteractionGraph,
        /**
         * A graph containing number of reactions on messages.
         */
        protected StatisticalGraph $messageReactionGraph,
        /**
         * A graph containing number of members muted and unmuted the chat.
         */
        protected StatisticalGraph $muteGraph,
        /**
         * A period to which the statistics applies.
         */
        protected DateRange        $period,
        /**
         * Detailed statistics about number of views and shares of recently sent messages and posted stories.
         *
         * @var ChatStatisticsInteractionInfo[]
         */
        protected array            $recentInteractions,
        /**
         * A graph containing number of story views and shares.
         */
        protected StatisticalGraph $storyInteractionGraph,
        /**
         * A graph containing number of reactions on stories.
         */
        protected StatisticalGraph $storyReactionGraph,
        /**
         * A graph containing number of message views in a given hour in the last two weeks.
         */
        protected StatisticalGraph $viewCountByHourGraph,
        /**
         * A graph containing number of message views per source.
         */
        protected StatisticalGraph $viewCountBySourceGraph,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): ChatStatisticsChannel
    {
        return new static(
            enabledNotificationsPercentage: $array['enabled_notifications_percentage'],
            instantViewInteractionGraph   : TdSchemaRegistry::fromArray($array['instant_view_interaction_graph']),
            joinBySourceGraph             : TdSchemaRegistry::fromArray($array['join_by_source_graph']),
            joinGraph                     : TdSchemaRegistry::fromArray($array['join_graph']),
            languageGraph                 : TdSchemaRegistry::fromArray($array['language_graph']),
            meanMessageReactionCount      : TdSchemaRegistry::fromArray($array['mean_message_reaction_count']),
            meanMessageShareCount         : TdSchemaRegistry::fromArray($array['mean_message_share_count']),
            meanMessageViewCount          : TdSchemaRegistry::fromArray($array['mean_message_view_count']),
            meanStoryReactionCount        : TdSchemaRegistry::fromArray($array['mean_story_reaction_count']),
            meanStoryShareCount           : TdSchemaRegistry::fromArray($array['mean_story_share_count']),
            meanStoryViewCount            : TdSchemaRegistry::fromArray($array['mean_story_view_count']),
            memberCount                   : TdSchemaRegistry::fromArray($array['member_count']),
            memberCountGraph              : TdSchemaRegistry::fromArray($array['member_count_graph']),
            messageInteractionGraph       : TdSchemaRegistry::fromArray($array['message_interaction_graph']),
            messageReactionGraph          : TdSchemaRegistry::fromArray($array['message_reaction_graph']),
            muteGraph                     : TdSchemaRegistry::fromArray($array['mute_graph']),
            period                        : TdSchemaRegistry::fromArray($array['period']),
            recentInteractions            : array_map(static fn($x) => TdSchemaRegistry::fromArray($x), $array['recent_interactions']),
            storyInteractionGraph         : TdSchemaRegistry::fromArray($array['story_interaction_graph']),
            storyReactionGraph            : TdSchemaRegistry::fromArray($array['story_reaction_graph']),
            viewCountByHourGraph          : TdSchemaRegistry::fromArray($array['view_count_by_hour_graph']),
            viewCountBySourceGraph        : TdSchemaRegistry::fromArray($array['view_count_by_source_graph']),
        );
    }

    public function getEnabledNotificationsPercentage(): float
    {
        return $this->enabledNotificationsPercentage;
    }

    public function getInstantViewInteractionGraph(): StatisticalGraph
    {
        return $this->instantViewInteractionGraph;
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

    public function getMeanMessageReactionCount(): StatisticalValue
    {
        return $this->meanMessageReactionCount;
    }

    public function getMeanMessageShareCount(): StatisticalValue
    {
        return $this->meanMessageShareCount;
    }

    public function getMeanMessageViewCount(): StatisticalValue
    {
        return $this->meanMessageViewCount;
    }

    public function getMeanStoryReactionCount(): StatisticalValue
    {
        return $this->meanStoryReactionCount;
    }

    public function getMeanStoryShareCount(): StatisticalValue
    {
        return $this->meanStoryShareCount;
    }

    public function getMeanStoryViewCount(): StatisticalValue
    {
        return $this->meanStoryViewCount;
    }

    public function getMemberCount(): StatisticalValue
    {
        return $this->memberCount;
    }

    public function getMemberCountGraph(): StatisticalGraph
    {
        return $this->memberCountGraph;
    }

    public function getMessageInteractionGraph(): StatisticalGraph
    {
        return $this->messageInteractionGraph;
    }

    public function getMessageReactionGraph(): StatisticalGraph
    {
        return $this->messageReactionGraph;
    }

    public function getMuteGraph(): StatisticalGraph
    {
        return $this->muteGraph;
    }

    public function getPeriod(): DateRange
    {
        return $this->period;
    }

    public function getRecentInteractions(): array
    {
        return $this->recentInteractions;
    }

    public function getStoryInteractionGraph(): StatisticalGraph
    {
        return $this->storyInteractionGraph;
    }

    public function getStoryReactionGraph(): StatisticalGraph
    {
        return $this->storyReactionGraph;
    }

    public function getViewCountByHourGraph(): StatisticalGraph
    {
        return $this->viewCountByHourGraph;
    }

    public function getViewCountBySourceGraph(): StatisticalGraph
    {
        return $this->viewCountBySourceGraph;
    }

    public function setEnabledNotificationsPercentage(float $value): static
    {
        $this->enabledNotificationsPercentage = $value;

        return $this;
    }

    public function setInstantViewInteractionGraph(StatisticalGraph $value): static
    {
        $this->instantViewInteractionGraph = $value;

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

    public function setMeanMessageReactionCount(StatisticalValue $value): static
    {
        $this->meanMessageReactionCount = $value;

        return $this;
    }

    public function setMeanMessageShareCount(StatisticalValue $value): static
    {
        $this->meanMessageShareCount = $value;

        return $this;
    }

    public function setMeanMessageViewCount(StatisticalValue $value): static
    {
        $this->meanMessageViewCount = $value;

        return $this;
    }

    public function setMeanStoryReactionCount(StatisticalValue $value): static
    {
        $this->meanStoryReactionCount = $value;

        return $this;
    }

    public function setMeanStoryShareCount(StatisticalValue $value): static
    {
        $this->meanStoryShareCount = $value;

        return $this;
    }

    public function setMeanStoryViewCount(StatisticalValue $value): static
    {
        $this->meanStoryViewCount = $value;

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

    public function setMessageInteractionGraph(StatisticalGraph $value): static
    {
        $this->messageInteractionGraph = $value;

        return $this;
    }

    public function setMessageReactionGraph(StatisticalGraph $value): static
    {
        $this->messageReactionGraph = $value;

        return $this;
    }

    public function setMuteGraph(StatisticalGraph $value): static
    {
        $this->muteGraph = $value;

        return $this;
    }

    public function setPeriod(DateRange $value): static
    {
        $this->period = $value;

        return $this;
    }

    public function setRecentInteractions(array $value): static
    {
        $this->recentInteractions = $value;

        return $this;
    }

    public function setStoryInteractionGraph(StatisticalGraph $value): static
    {
        $this->storyInteractionGraph = $value;

        return $this;
    }

    public function setStoryReactionGraph(StatisticalGraph $value): static
    {
        $this->storyReactionGraph = $value;

        return $this;
    }

    public function setViewCountByHourGraph(StatisticalGraph $value): static
    {
        $this->viewCountByHourGraph = $value;

        return $this;
    }

    public function setViewCountBySourceGraph(StatisticalGraph $value): static
    {
        $this->viewCountBySourceGraph = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'                            => static::TYPE_NAME,
            'enabled_notifications_percentage' => $this->enabledNotificationsPercentage,
            'instant_view_interaction_graph'   => $this->instantViewInteractionGraph->jsonSerialize(),
            'join_by_source_graph'             => $this->joinBySourceGraph->jsonSerialize(),
            'join_graph'                       => $this->joinGraph->jsonSerialize(),
            'language_graph'                   => $this->languageGraph->jsonSerialize(),
            'mean_message_reaction_count'      => $this->meanMessageReactionCount->jsonSerialize(),
            'mean_message_share_count'         => $this->meanMessageShareCount->jsonSerialize(),
            'mean_message_view_count'          => $this->meanMessageViewCount->jsonSerialize(),
            'mean_story_reaction_count'        => $this->meanStoryReactionCount->jsonSerialize(),
            'mean_story_share_count'           => $this->meanStoryShareCount->jsonSerialize(),
            'mean_story_view_count'            => $this->meanStoryViewCount->jsonSerialize(),
            'member_count'                     => $this->memberCount->jsonSerialize(),
            'member_count_graph'               => $this->memberCountGraph->jsonSerialize(),
            'message_interaction_graph'        => $this->messageInteractionGraph->jsonSerialize(),
            'message_reaction_graph'           => $this->messageReactionGraph->jsonSerialize(),
            'mute_graph'                       => $this->muteGraph->jsonSerialize(),
            'period'                           => $this->period->jsonSerialize(),
            'recent_interactions'              => array_map(static fn($x) => $x->jsonSerialize(), $this->recentInteractions),
            'story_interaction_graph'          => $this->storyInteractionGraph->jsonSerialize(),
            'story_reaction_graph'             => $this->storyReactionGraph->jsonSerialize(),
            'view_count_by_hour_graph'         => $this->viewCountByHourGraph->jsonSerialize(),
            'view_count_by_source_graph'       => $this->viewCountBySourceGraph->jsonSerialize(),
        ];
    }
}
