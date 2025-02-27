<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/bigquery/reservation/v1/reservation.proto

namespace Google\Cloud\BigQuery\Reservation\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A reservation is a mechanism used to guarantee slots to users.
 *
 * Generated from protobuf message <code>google.cloud.bigquery.reservation.v1.Reservation</code>
 */
class Reservation extends \Google\Protobuf\Internal\Message
{
    /**
     * The resource name of the reservation, e.g.,
     * `projects/&#42;&#47;locations/&#42;&#47;reservations/team1-prod`.
     * The reservation_id must only contain lower case alphanumeric characters or
     * dashes. It must start with a letter and must not end with a dash. Its
     * maximum length is 64 characters.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     */
    protected $name = '';
    /**
     * Baseline slots available to this reservation. A slot is a unit of
     * computational power in BigQuery, and serves as the unit of parallelism.
     * Queries using this reservation might use more slots during runtime if
     * ignore_idle_slots is set to false, or autoscaling is enabled.
     * The total slot_capacity of the reservation and its siblings
     * may exceed the total slot_count of capacity commitments. In that case, the
     * exceeding slots will be charged with the autoscale SKU. You can increase
     * the number of baseline slots in a reservation every few minutes. If you
     * want to decrease your baseline slots, you are limited to once an hour if
     * you have recently changed your baseline slot capacity and your baseline
     * slots exceed your committed slots. Otherwise, you can decrease your
     * baseline slots every few minutes.
     *
     * Generated from protobuf field <code>int64 slot_capacity = 2;</code>
     */
    protected $slot_capacity = 0;
    /**
     * If false, any query or pipeline job using this reservation will use idle
     * slots from other reservations within the same admin project. If true, a
     * query or pipeline job using this reservation will execute with the slot
     * capacity specified in the slot_capacity field at most.
     *
     * Generated from protobuf field <code>bool ignore_idle_slots = 4;</code>
     */
    protected $ignore_idle_slots = false;
    /**
     * The configuration parameters for the auto scaling feature.
     *
     * Generated from protobuf field <code>.google.cloud.bigquery.reservation.v1.Reservation.Autoscale autoscale = 7;</code>
     */
    protected $autoscale = null;
    /**
     * Job concurrency target which sets a soft upper bound on the number of jobs
     * that can run concurrently in this reservation. This is a soft target due to
     * asynchronous nature of the system and various optimizations for small
     * queries.
     * Default value is 0 which means that concurrency target will be
     * automatically computed by the system.
     * NOTE: this field is exposed as target job concurrency in the Information
     * Schema, DDL and BigQuery CLI.
     *
     * Generated from protobuf field <code>int64 concurrency = 16;</code>
     */
    protected $concurrency = 0;
    /**
     * Output only. Creation time of the reservation.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp creation_time = 8 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $creation_time = null;
    /**
     * Output only. Last update time of the reservation.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp update_time = 9 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $update_time = null;
    /**
     * Applicable only for reservations located within one of the BigQuery
     * multi-regions (US or EU).
     * If set to true, this reservation is placed in the organization's
     * secondary region which is designated for disaster recovery purposes.
     * If false, this reservation is placed in the organization's default region.
     * NOTE: this is a preview feature. Project must be allow-listed in order to
     * set this field.
     *
     * Generated from protobuf field <code>bool multi_region_auxiliary = 14;</code>
     */
    protected $multi_region_auxiliary = false;
    /**
     * Edition of the reservation.
     *
     * Generated from protobuf field <code>.google.cloud.bigquery.reservation.v1.Edition edition = 17;</code>
     */
    protected $edition = 0;
    /**
     * Output only. The current location of the reservation's primary replica.
     * This field is only set for reservations using the managed disaster recovery
     * feature.
     *
     * Generated from protobuf field <code>string primary_location = 18 [(.google.api.field_behavior) = OUTPUT_ONLY, (.google.api.resource_reference) = {</code>
     */
    protected $primary_location = '';
    /**
     * Optional. The current location of the reservation's secondary replica. This
     * field is only set for reservations using the managed disaster recovery
     * feature. Users can set this in create reservation calls
     * to create a failover reservation or in update reservation calls to convert
     * a non-failover reservation to a failover reservation(or vice versa).
     *
     * Generated from protobuf field <code>string secondary_location = 19 [(.google.api.field_behavior) = OPTIONAL, (.google.api.resource_reference) = {</code>
     */
    protected $secondary_location = '';
    /**
     * Output only. The location where the reservation was originally created.
     * This is set only during the failover reservation's creation. All billing
     * charges for the failover reservation will be applied to this location.
     *
     * Generated from protobuf field <code>string original_primary_location = 20 [(.google.api.field_behavior) = OUTPUT_ONLY, (.google.api.resource_reference) = {</code>
     */
    protected $original_primary_location = '';
    /**
     * Output only. The Disaster Recovery(DR) replication status of the
     * reservation. This is only available for the primary replicas of DR/failover
     * reservations and provides information about the both the staleness of the
     * secondary and the last error encountered while trying to replicate changes
     * from the primary to the secondary. If this field is blank, it means that
     * the reservation is either not a DR reservation or the reservation is a DR
     * secondary or that any replication operations on the reservation have
     * succeeded.
     *
     * Generated from protobuf field <code>.google.cloud.bigquery.reservation.v1.Reservation.ReplicationStatus replication_status = 24 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $replication_status = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           The resource name of the reservation, e.g.,
     *           `projects/&#42;&#47;locations/&#42;&#47;reservations/team1-prod`.
     *           The reservation_id must only contain lower case alphanumeric characters or
     *           dashes. It must start with a letter and must not end with a dash. Its
     *           maximum length is 64 characters.
     *     @type int|string $slot_capacity
     *           Baseline slots available to this reservation. A slot is a unit of
     *           computational power in BigQuery, and serves as the unit of parallelism.
     *           Queries using this reservation might use more slots during runtime if
     *           ignore_idle_slots is set to false, or autoscaling is enabled.
     *           The total slot_capacity of the reservation and its siblings
     *           may exceed the total slot_count of capacity commitments. In that case, the
     *           exceeding slots will be charged with the autoscale SKU. You can increase
     *           the number of baseline slots in a reservation every few minutes. If you
     *           want to decrease your baseline slots, you are limited to once an hour if
     *           you have recently changed your baseline slot capacity and your baseline
     *           slots exceed your committed slots. Otherwise, you can decrease your
     *           baseline slots every few minutes.
     *     @type bool $ignore_idle_slots
     *           If false, any query or pipeline job using this reservation will use idle
     *           slots from other reservations within the same admin project. If true, a
     *           query or pipeline job using this reservation will execute with the slot
     *           capacity specified in the slot_capacity field at most.
     *     @type \Google\Cloud\BigQuery\Reservation\V1\Reservation\Autoscale $autoscale
     *           The configuration parameters for the auto scaling feature.
     *     @type int|string $concurrency
     *           Job concurrency target which sets a soft upper bound on the number of jobs
     *           that can run concurrently in this reservation. This is a soft target due to
     *           asynchronous nature of the system and various optimizations for small
     *           queries.
     *           Default value is 0 which means that concurrency target will be
     *           automatically computed by the system.
     *           NOTE: this field is exposed as target job concurrency in the Information
     *           Schema, DDL and BigQuery CLI.
     *     @type \Google\Protobuf\Timestamp $creation_time
     *           Output only. Creation time of the reservation.
     *     @type \Google\Protobuf\Timestamp $update_time
     *           Output only. Last update time of the reservation.
     *     @type bool $multi_region_auxiliary
     *           Applicable only for reservations located within one of the BigQuery
     *           multi-regions (US or EU).
     *           If set to true, this reservation is placed in the organization's
     *           secondary region which is designated for disaster recovery purposes.
     *           If false, this reservation is placed in the organization's default region.
     *           NOTE: this is a preview feature. Project must be allow-listed in order to
     *           set this field.
     *     @type int $edition
     *           Edition of the reservation.
     *     @type string $primary_location
     *           Output only. The current location of the reservation's primary replica.
     *           This field is only set for reservations using the managed disaster recovery
     *           feature.
     *     @type string $secondary_location
     *           Optional. The current location of the reservation's secondary replica. This
     *           field is only set for reservations using the managed disaster recovery
     *           feature. Users can set this in create reservation calls
     *           to create a failover reservation or in update reservation calls to convert
     *           a non-failover reservation to a failover reservation(or vice versa).
     *     @type string $original_primary_location
     *           Output only. The location where the reservation was originally created.
     *           This is set only during the failover reservation's creation. All billing
     *           charges for the failover reservation will be applied to this location.
     *     @type \Google\Cloud\BigQuery\Reservation\V1\Reservation\ReplicationStatus $replication_status
     *           Output only. The Disaster Recovery(DR) replication status of the
     *           reservation. This is only available for the primary replicas of DR/failover
     *           reservations and provides information about the both the staleness of the
     *           secondary and the last error encountered while trying to replicate changes
     *           from the primary to the secondary. If this field is blank, it means that
     *           the reservation is either not a DR reservation or the reservation is a DR
     *           secondary or that any replication operations on the reservation have
     *           succeeded.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Bigquery\Reservation\V1\Reservation::initOnce();
        parent::__construct($data);
    }

    /**
     * The resource name of the reservation, e.g.,
     * `projects/&#42;&#47;locations/&#42;&#47;reservations/team1-prod`.
     * The reservation_id must only contain lower case alphanumeric characters or
     * dashes. It must start with a letter and must not end with a dash. Its
     * maximum length is 64 characters.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * The resource name of the reservation, e.g.,
     * `projects/&#42;&#47;locations/&#42;&#47;reservations/team1-prod`.
     * The reservation_id must only contain lower case alphanumeric characters or
     * dashes. It must start with a letter and must not end with a dash. Its
     * maximum length is 64 characters.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

    /**
     * Baseline slots available to this reservation. A slot is a unit of
     * computational power in BigQuery, and serves as the unit of parallelism.
     * Queries using this reservation might use more slots during runtime if
     * ignore_idle_slots is set to false, or autoscaling is enabled.
     * The total slot_capacity of the reservation and its siblings
     * may exceed the total slot_count of capacity commitments. In that case, the
     * exceeding slots will be charged with the autoscale SKU. You can increase
     * the number of baseline slots in a reservation every few minutes. If you
     * want to decrease your baseline slots, you are limited to once an hour if
     * you have recently changed your baseline slot capacity and your baseline
     * slots exceed your committed slots. Otherwise, you can decrease your
     * baseline slots every few minutes.
     *
     * Generated from protobuf field <code>int64 slot_capacity = 2;</code>
     * @return int|string
     */
    public function getSlotCapacity()
    {
        return $this->slot_capacity;
    }

    /**
     * Baseline slots available to this reservation. A slot is a unit of
     * computational power in BigQuery, and serves as the unit of parallelism.
     * Queries using this reservation might use more slots during runtime if
     * ignore_idle_slots is set to false, or autoscaling is enabled.
     * The total slot_capacity of the reservation and its siblings
     * may exceed the total slot_count of capacity commitments. In that case, the
     * exceeding slots will be charged with the autoscale SKU. You can increase
     * the number of baseline slots in a reservation every few minutes. If you
     * want to decrease your baseline slots, you are limited to once an hour if
     * you have recently changed your baseline slot capacity and your baseline
     * slots exceed your committed slots. Otherwise, you can decrease your
     * baseline slots every few minutes.
     *
     * Generated from protobuf field <code>int64 slot_capacity = 2;</code>
     * @param int|string $var
     * @return $this
     */
    public function setSlotCapacity($var)
    {
        GPBUtil::checkInt64($var);
        $this->slot_capacity = $var;

        return $this;
    }

    /**
     * If false, any query or pipeline job using this reservation will use idle
     * slots from other reservations within the same admin project. If true, a
     * query or pipeline job using this reservation will execute with the slot
     * capacity specified in the slot_capacity field at most.
     *
     * Generated from protobuf field <code>bool ignore_idle_slots = 4;</code>
     * @return bool
     */
    public function getIgnoreIdleSlots()
    {
        return $this->ignore_idle_slots;
    }

    /**
     * If false, any query or pipeline job using this reservation will use idle
     * slots from other reservations within the same admin project. If true, a
     * query or pipeline job using this reservation will execute with the slot
     * capacity specified in the slot_capacity field at most.
     *
     * Generated from protobuf field <code>bool ignore_idle_slots = 4;</code>
     * @param bool $var
     * @return $this
     */
    public function setIgnoreIdleSlots($var)
    {
        GPBUtil::checkBool($var);
        $this->ignore_idle_slots = $var;

        return $this;
    }

    /**
     * The configuration parameters for the auto scaling feature.
     *
     * Generated from protobuf field <code>.google.cloud.bigquery.reservation.v1.Reservation.Autoscale autoscale = 7;</code>
     * @return \Google\Cloud\BigQuery\Reservation\V1\Reservation\Autoscale|null
     */
    public function getAutoscale()
    {
        return $this->autoscale;
    }

    public function hasAutoscale()
    {
        return isset($this->autoscale);
    }

    public function clearAutoscale()
    {
        unset($this->autoscale);
    }

    /**
     * The configuration parameters for the auto scaling feature.
     *
     * Generated from protobuf field <code>.google.cloud.bigquery.reservation.v1.Reservation.Autoscale autoscale = 7;</code>
     * @param \Google\Cloud\BigQuery\Reservation\V1\Reservation\Autoscale $var
     * @return $this
     */
    public function setAutoscale($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\BigQuery\Reservation\V1\Reservation\Autoscale::class);
        $this->autoscale = $var;

        return $this;
    }

    /**
     * Job concurrency target which sets a soft upper bound on the number of jobs
     * that can run concurrently in this reservation. This is a soft target due to
     * asynchronous nature of the system and various optimizations for small
     * queries.
     * Default value is 0 which means that concurrency target will be
     * automatically computed by the system.
     * NOTE: this field is exposed as target job concurrency in the Information
     * Schema, DDL and BigQuery CLI.
     *
     * Generated from protobuf field <code>int64 concurrency = 16;</code>
     * @return int|string
     */
    public function getConcurrency()
    {
        return $this->concurrency;
    }

    /**
     * Job concurrency target which sets a soft upper bound on the number of jobs
     * that can run concurrently in this reservation. This is a soft target due to
     * asynchronous nature of the system and various optimizations for small
     * queries.
     * Default value is 0 which means that concurrency target will be
     * automatically computed by the system.
     * NOTE: this field is exposed as target job concurrency in the Information
     * Schema, DDL and BigQuery CLI.
     *
     * Generated from protobuf field <code>int64 concurrency = 16;</code>
     * @param int|string $var
     * @return $this
     */
    public function setConcurrency($var)
    {
        GPBUtil::checkInt64($var);
        $this->concurrency = $var;

        return $this;
    }

    /**
     * Output only. Creation time of the reservation.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp creation_time = 8 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getCreationTime()
    {
        return $this->creation_time;
    }

    public function hasCreationTime()
    {
        return isset($this->creation_time);
    }

    public function clearCreationTime()
    {
        unset($this->creation_time);
    }

    /**
     * Output only. Creation time of the reservation.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp creation_time = 8 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setCreationTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->creation_time = $var;

        return $this;
    }

    /**
     * Output only. Last update time of the reservation.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp update_time = 9 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getUpdateTime()
    {
        return $this->update_time;
    }

    public function hasUpdateTime()
    {
        return isset($this->update_time);
    }

    public function clearUpdateTime()
    {
        unset($this->update_time);
    }

    /**
     * Output only. Last update time of the reservation.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp update_time = 9 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setUpdateTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->update_time = $var;

        return $this;
    }

    /**
     * Applicable only for reservations located within one of the BigQuery
     * multi-regions (US or EU).
     * If set to true, this reservation is placed in the organization's
     * secondary region which is designated for disaster recovery purposes.
     * If false, this reservation is placed in the organization's default region.
     * NOTE: this is a preview feature. Project must be allow-listed in order to
     * set this field.
     *
     * Generated from protobuf field <code>bool multi_region_auxiliary = 14;</code>
     * @return bool
     */
    public function getMultiRegionAuxiliary()
    {
        return $this->multi_region_auxiliary;
    }

    /**
     * Applicable only for reservations located within one of the BigQuery
     * multi-regions (US or EU).
     * If set to true, this reservation is placed in the organization's
     * secondary region which is designated for disaster recovery purposes.
     * If false, this reservation is placed in the organization's default region.
     * NOTE: this is a preview feature. Project must be allow-listed in order to
     * set this field.
     *
     * Generated from protobuf field <code>bool multi_region_auxiliary = 14;</code>
     * @param bool $var
     * @return $this
     */
    public function setMultiRegionAuxiliary($var)
    {
        GPBUtil::checkBool($var);
        $this->multi_region_auxiliary = $var;

        return $this;
    }

    /**
     * Edition of the reservation.
     *
     * Generated from protobuf field <code>.google.cloud.bigquery.reservation.v1.Edition edition = 17;</code>
     * @return int
     */
    public function getEdition()
    {
        return $this->edition;
    }

    /**
     * Edition of the reservation.
     *
     * Generated from protobuf field <code>.google.cloud.bigquery.reservation.v1.Edition edition = 17;</code>
     * @param int $var
     * @return $this
     */
    public function setEdition($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\BigQuery\Reservation\V1\Edition::class);
        $this->edition = $var;

        return $this;
    }

    /**
     * Output only. The current location of the reservation's primary replica.
     * This field is only set for reservations using the managed disaster recovery
     * feature.
     *
     * Generated from protobuf field <code>string primary_location = 18 [(.google.api.field_behavior) = OUTPUT_ONLY, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getPrimaryLocation()
    {
        return $this->primary_location;
    }

    /**
     * Output only. The current location of the reservation's primary replica.
     * This field is only set for reservations using the managed disaster recovery
     * feature.
     *
     * Generated from protobuf field <code>string primary_location = 18 [(.google.api.field_behavior) = OUTPUT_ONLY, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setPrimaryLocation($var)
    {
        GPBUtil::checkString($var, True);
        $this->primary_location = $var;

        return $this;
    }

    /**
     * Optional. The current location of the reservation's secondary replica. This
     * field is only set for reservations using the managed disaster recovery
     * feature. Users can set this in create reservation calls
     * to create a failover reservation or in update reservation calls to convert
     * a non-failover reservation to a failover reservation(or vice versa).
     *
     * Generated from protobuf field <code>string secondary_location = 19 [(.google.api.field_behavior) = OPTIONAL, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getSecondaryLocation()
    {
        return $this->secondary_location;
    }

    /**
     * Optional. The current location of the reservation's secondary replica. This
     * field is only set for reservations using the managed disaster recovery
     * feature. Users can set this in create reservation calls
     * to create a failover reservation or in update reservation calls to convert
     * a non-failover reservation to a failover reservation(or vice versa).
     *
     * Generated from protobuf field <code>string secondary_location = 19 [(.google.api.field_behavior) = OPTIONAL, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setSecondaryLocation($var)
    {
        GPBUtil::checkString($var, True);
        $this->secondary_location = $var;

        return $this;
    }

    /**
     * Output only. The location where the reservation was originally created.
     * This is set only during the failover reservation's creation. All billing
     * charges for the failover reservation will be applied to this location.
     *
     * Generated from protobuf field <code>string original_primary_location = 20 [(.google.api.field_behavior) = OUTPUT_ONLY, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getOriginalPrimaryLocation()
    {
        return $this->original_primary_location;
    }

    /**
     * Output only. The location where the reservation was originally created.
     * This is set only during the failover reservation's creation. All billing
     * charges for the failover reservation will be applied to this location.
     *
     * Generated from protobuf field <code>string original_primary_location = 20 [(.google.api.field_behavior) = OUTPUT_ONLY, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setOriginalPrimaryLocation($var)
    {
        GPBUtil::checkString($var, True);
        $this->original_primary_location = $var;

        return $this;
    }

    /**
     * Output only. The Disaster Recovery(DR) replication status of the
     * reservation. This is only available for the primary replicas of DR/failover
     * reservations and provides information about the both the staleness of the
     * secondary and the last error encountered while trying to replicate changes
     * from the primary to the secondary. If this field is blank, it means that
     * the reservation is either not a DR reservation or the reservation is a DR
     * secondary or that any replication operations on the reservation have
     * succeeded.
     *
     * Generated from protobuf field <code>.google.cloud.bigquery.reservation.v1.Reservation.ReplicationStatus replication_status = 24 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Cloud\BigQuery\Reservation\V1\Reservation\ReplicationStatus|null
     */
    public function getReplicationStatus()
    {
        return $this->replication_status;
    }

    public function hasReplicationStatus()
    {
        return isset($this->replication_status);
    }

    public function clearReplicationStatus()
    {
        unset($this->replication_status);
    }

    /**
     * Output only. The Disaster Recovery(DR) replication status of the
     * reservation. This is only available for the primary replicas of DR/failover
     * reservations and provides information about the both the staleness of the
     * secondary and the last error encountered while trying to replicate changes
     * from the primary to the secondary. If this field is blank, it means that
     * the reservation is either not a DR reservation or the reservation is a DR
     * secondary or that any replication operations on the reservation have
     * succeeded.
     *
     * Generated from protobuf field <code>.google.cloud.bigquery.reservation.v1.Reservation.ReplicationStatus replication_status = 24 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Cloud\BigQuery\Reservation\V1\Reservation\ReplicationStatus $var
     * @return $this
     */
    public function setReplicationStatus($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\BigQuery\Reservation\V1\Reservation\ReplicationStatus::class);
        $this->replication_status = $var;

        return $this;
    }

}

