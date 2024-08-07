<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/bigquery/reservation/v1/reservation.proto

namespace Google\Cloud\BigQuery\Reservation\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The response for
 * [ReservationService.ListCapacityCommitments][google.cloud.bigquery.reservation.v1.ReservationService.ListCapacityCommitments].
 *
 * Generated from protobuf message <code>google.cloud.bigquery.reservation.v1.ListCapacityCommitmentsResponse</code>
 */
class ListCapacityCommitmentsResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * List of capacity commitments visible to the user.
     *
     * Generated from protobuf field <code>repeated .google.cloud.bigquery.reservation.v1.CapacityCommitment capacity_commitments = 1;</code>
     */
    private $capacity_commitments;
    /**
     * Token to retrieve the next page of results, or empty if there are no
     * more results in the list.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     */
    protected $next_page_token = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<\Google\Cloud\BigQuery\Reservation\V1\CapacityCommitment>|\Google\Protobuf\Internal\RepeatedField $capacity_commitments
     *           List of capacity commitments visible to the user.
     *     @type string $next_page_token
     *           Token to retrieve the next page of results, or empty if there are no
     *           more results in the list.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Bigquery\Reservation\V1\Reservation::initOnce();
        parent::__construct($data);
    }

    /**
     * List of capacity commitments visible to the user.
     *
     * Generated from protobuf field <code>repeated .google.cloud.bigquery.reservation.v1.CapacityCommitment capacity_commitments = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getCapacityCommitments()
    {
        return $this->capacity_commitments;
    }

    /**
     * List of capacity commitments visible to the user.
     *
     * Generated from protobuf field <code>repeated .google.cloud.bigquery.reservation.v1.CapacityCommitment capacity_commitments = 1;</code>
     * @param array<\Google\Cloud\BigQuery\Reservation\V1\CapacityCommitment>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setCapacityCommitments($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\BigQuery\Reservation\V1\CapacityCommitment::class);
        $this->capacity_commitments = $arr;

        return $this;
    }

    /**
     * Token to retrieve the next page of results, or empty if there are no
     * more results in the list.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     * @return string
     */
    public function getNextPageToken()
    {
        return $this->next_page_token;
    }

    /**
     * Token to retrieve the next page of results, or empty if there are no
     * more results in the list.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setNextPageToken($var)
    {
        GPBUtil::checkString($var, True);
        $this->next_page_token = $var;

        return $this;
    }

}

