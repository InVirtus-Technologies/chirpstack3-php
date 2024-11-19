<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: fuota/fuota.proto

namespace Fuota;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>fuota.Deployment</code>
 */
class Deployment extends \Google\Protobuf\Internal\Message
{
    /**
     * Application ID.
     *
     * Generated from protobuf field <code>int64 application_id = 1;</code>
     */
    protected $application_id = 0;
    /**
     * Devices to include in this deployment.
     *
     * Generated from protobuf field <code>repeated .fuota.DeploymentDevice devices = 2;</code>
     */
    private $devices;
    /**
     * Multicast-group type.
     *
     * Generated from protobuf field <code>.fuota.MulticastGroupType multicast_group_type = 3;</code>
     */
    protected $multicast_group_type = 0;
    /**
     * Multicast data-rate.
     *
     * Generated from protobuf field <code>uint32 multicast_dr = 4;</code>
     */
    protected $multicast_dr = 0;
    /**
     * Multicast ping-slot period (Class-B only).
     *
     * Generated from protobuf field <code>uint32 multicast_ping_slot_period = 5;</code>
     */
    protected $multicast_ping_slot_period = 0;
    /**
     * Multicast frequency (Hz).
     *
     * Generated from protobuf field <code>uint32 multicast_frequency = 6;</code>
     */
    protected $multicast_frequency = 0;
    /**
     * Multicast group ID.
     *
     * Generated from protobuf field <code>uint32 multicast_group_id = 7;</code>
     */
    protected $multicast_group_id = 0;
    /**
     * Multicast timeout.
     * This defines the timeout of the multicast-session.
     * Please refer to the Remote Multicast Setup specification as this field
     * has a different meaning for Class-B and Class-C groups.
     *
     * Generated from protobuf field <code>uint32 multicast_timeout = 8;</code>
     */
    protected $multicast_timeout = 0;
    /**
     * Unicast timeout.
     * Set this to the value in which you at least expect an uplink frame from
     * the device. The FUOTA server will wait for the given time before
     * attempting a retry or continuing with the next step.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration unicast_timeout = 9;</code>
     */
    protected $unicast_timeout = null;
    /**
     * Unicast attempt count.
     * The number of attempts before considering an unicast command
     * to be failed.
     *
     * Generated from protobuf field <code>uint32 unicast_attempt_count = 10;</code>
     */
    protected $unicast_attempt_count = 0;
    /**
     * FragmentationFragmentSize.
     * This defines the size of each payload fragment. Please refer to the
     * Regional Parameters specification for the maximum payload sizes
     * per data-rate and region.
     *
     * Generated from protobuf field <code>uint32 fragmentation_fragment_size = 11;</code>
     */
    protected $fragmentation_fragment_size = 0;
    /**
     * Payload.
     *
     * Generated from protobuf field <code>bytes payload = 12;</code>
     */
    protected $payload = '';
    /**
     * Fragmentation redundancy.
     * The number represents the additional redundant frames to send.
     *
     * Generated from protobuf field <code>uint32 fragmentation_redundancy = 13;</code>
     */
    protected $fragmentation_redundancy = 0;
    /**
     * Fragmentation session index.
     *
     * Generated from protobuf field <code>uint32 fragmentation_session_index = 14;</code>
     */
    protected $fragmentation_session_index = 0;
    /**
     * Fragmentation matrix.
     *
     * Generated from protobuf field <code>uint32 fragmentation_matrix = 15;</code>
     */
    protected $fragmentation_matrix = 0;
    /**
     * Block ack delay.
     *
     * Generated from protobuf field <code>uint32 fragmentation_block_ack_delay = 16;</code>
     */
    protected $fragmentation_block_ack_delay = 0;
    /**
     * Descriptor (4 bytes).
     *
     * Generated from protobuf field <code>bytes fragmentation_descriptor = 17;</code>
     */
    protected $fragmentation_descriptor = '';
    /**
     * Request fragmentation session status.
     *
     * Generated from protobuf field <code>.fuota.RequestFragmentationSessionStatus request_fragmentation_session_status = 18;</code>
     */
    protected $request_fragmentation_session_status = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int|string $application_id
     *           Application ID.
     *     @type array<\Fuota\DeploymentDevice>|\Google\Protobuf\Internal\RepeatedField $devices
     *           Devices to include in this deployment.
     *     @type int $multicast_group_type
     *           Multicast-group type.
     *     @type int $multicast_dr
     *           Multicast data-rate.
     *     @type int $multicast_ping_slot_period
     *           Multicast ping-slot period (Class-B only).
     *     @type int $multicast_frequency
     *           Multicast frequency (Hz).
     *     @type int $multicast_group_id
     *           Multicast group ID.
     *     @type int $multicast_timeout
     *           Multicast timeout.
     *           This defines the timeout of the multicast-session.
     *           Please refer to the Remote Multicast Setup specification as this field
     *           has a different meaning for Class-B and Class-C groups.
     *     @type \Google\Protobuf\Duration $unicast_timeout
     *           Unicast timeout.
     *           Set this to the value in which you at least expect an uplink frame from
     *           the device. The FUOTA server will wait for the given time before
     *           attempting a retry or continuing with the next step.
     *     @type int $unicast_attempt_count
     *           Unicast attempt count.
     *           The number of attempts before considering an unicast command
     *           to be failed.
     *     @type int $fragmentation_fragment_size
     *           FragmentationFragmentSize.
     *           This defines the size of each payload fragment. Please refer to the
     *           Regional Parameters specification for the maximum payload sizes
     *           per data-rate and region.
     *     @type string $payload
     *           Payload.
     *     @type int $fragmentation_redundancy
     *           Fragmentation redundancy.
     *           The number represents the additional redundant frames to send.
     *     @type int $fragmentation_session_index
     *           Fragmentation session index.
     *     @type int $fragmentation_matrix
     *           Fragmentation matrix.
     *     @type int $fragmentation_block_ack_delay
     *           Block ack delay.
     *     @type string $fragmentation_descriptor
     *           Descriptor (4 bytes).
     *     @type int $request_fragmentation_session_status
     *           Request fragmentation session status.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Fuota\Fuota::initOnce();
        parent::__construct($data);
    }

    /**
     * Application ID.
     *
     * Generated from protobuf field <code>int64 application_id = 1;</code>
     * @return int|string
     */
    public function getApplicationId()
    {
        return $this->application_id;
    }

    /**
     * Application ID.
     *
     * Generated from protobuf field <code>int64 application_id = 1;</code>
     * @param int|string $var
     * @return $this
     */
    public function setApplicationId($var)
    {
        GPBUtil::checkInt64($var);
        $this->application_id = $var;

        return $this;
    }

    /**
     * Devices to include in this deployment.
     *
     * Generated from protobuf field <code>repeated .fuota.DeploymentDevice devices = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getDevices()
    {
        return $this->devices;
    }

    /**
     * Devices to include in this deployment.
     *
     * Generated from protobuf field <code>repeated .fuota.DeploymentDevice devices = 2;</code>
     * @param array<\Fuota\DeploymentDevice>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setDevices($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Fuota\DeploymentDevice::class);
        $this->devices = $arr;

        return $this;
    }

    /**
     * Multicast-group type.
     *
     * Generated from protobuf field <code>.fuota.MulticastGroupType multicast_group_type = 3;</code>
     * @return int
     */
    public function getMulticastGroupType()
    {
        return $this->multicast_group_type;
    }

    /**
     * Multicast-group type.
     *
     * Generated from protobuf field <code>.fuota.MulticastGroupType multicast_group_type = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setMulticastGroupType($var)
    {
        GPBUtil::checkEnum($var, \Fuota\MulticastGroupType::class);
        $this->multicast_group_type = $var;

        return $this;
    }

    /**
     * Multicast data-rate.
     *
     * Generated from protobuf field <code>uint32 multicast_dr = 4;</code>
     * @return int
     */
    public function getMulticastDr()
    {
        return $this->multicast_dr;
    }

    /**
     * Multicast data-rate.
     *
     * Generated from protobuf field <code>uint32 multicast_dr = 4;</code>
     * @param int $var
     * @return $this
     */
    public function setMulticastDr($var)
    {
        GPBUtil::checkUint32($var);
        $this->multicast_dr = $var;

        return $this;
    }

    /**
     * Multicast ping-slot period (Class-B only).
     *
     * Generated from protobuf field <code>uint32 multicast_ping_slot_period = 5;</code>
     * @return int
     */
    public function getMulticastPingSlotPeriod()
    {
        return $this->multicast_ping_slot_period;
    }

    /**
     * Multicast ping-slot period (Class-B only).
     *
     * Generated from protobuf field <code>uint32 multicast_ping_slot_period = 5;</code>
     * @param int $var
     * @return $this
     */
    public function setMulticastPingSlotPeriod($var)
    {
        GPBUtil::checkUint32($var);
        $this->multicast_ping_slot_period = $var;

        return $this;
    }

    /**
     * Multicast frequency (Hz).
     *
     * Generated from protobuf field <code>uint32 multicast_frequency = 6;</code>
     * @return int
     */
    public function getMulticastFrequency()
    {
        return $this->multicast_frequency;
    }

    /**
     * Multicast frequency (Hz).
     *
     * Generated from protobuf field <code>uint32 multicast_frequency = 6;</code>
     * @param int $var
     * @return $this
     */
    public function setMulticastFrequency($var)
    {
        GPBUtil::checkUint32($var);
        $this->multicast_frequency = $var;

        return $this;
    }

    /**
     * Multicast group ID.
     *
     * Generated from protobuf field <code>uint32 multicast_group_id = 7;</code>
     * @return int
     */
    public function getMulticastGroupId()
    {
        return $this->multicast_group_id;
    }

    /**
     * Multicast group ID.
     *
     * Generated from protobuf field <code>uint32 multicast_group_id = 7;</code>
     * @param int $var
     * @return $this
     */
    public function setMulticastGroupId($var)
    {
        GPBUtil::checkUint32($var);
        $this->multicast_group_id = $var;

        return $this;
    }

    /**
     * Multicast timeout.
     * This defines the timeout of the multicast-session.
     * Please refer to the Remote Multicast Setup specification as this field
     * has a different meaning for Class-B and Class-C groups.
     *
     * Generated from protobuf field <code>uint32 multicast_timeout = 8;</code>
     * @return int
     */
    public function getMulticastTimeout()
    {
        return $this->multicast_timeout;
    }

    /**
     * Multicast timeout.
     * This defines the timeout of the multicast-session.
     * Please refer to the Remote Multicast Setup specification as this field
     * has a different meaning for Class-B and Class-C groups.
     *
     * Generated from protobuf field <code>uint32 multicast_timeout = 8;</code>
     * @param int $var
     * @return $this
     */
    public function setMulticastTimeout($var)
    {
        GPBUtil::checkUint32($var);
        $this->multicast_timeout = $var;

        return $this;
    }

    /**
     * Unicast timeout.
     * Set this to the value in which you at least expect an uplink frame from
     * the device. The FUOTA server will wait for the given time before
     * attempting a retry or continuing with the next step.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration unicast_timeout = 9;</code>
     * @return \Google\Protobuf\Duration|null
     */
    public function getUnicastTimeout()
    {
        return $this->unicast_timeout;
    }

    public function hasUnicastTimeout()
    {
        return isset($this->unicast_timeout);
    }

    public function clearUnicastTimeout()
    {
        unset($this->unicast_timeout);
    }

    /**
     * Unicast timeout.
     * Set this to the value in which you at least expect an uplink frame from
     * the device. The FUOTA server will wait for the given time before
     * attempting a retry or continuing with the next step.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration unicast_timeout = 9;</code>
     * @param \Google\Protobuf\Duration $var
     * @return $this
     */
    public function setUnicastTimeout($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Duration::class);
        $this->unicast_timeout = $var;

        return $this;
    }

    /**
     * Unicast attempt count.
     * The number of attempts before considering an unicast command
     * to be failed.
     *
     * Generated from protobuf field <code>uint32 unicast_attempt_count = 10;</code>
     * @return int
     */
    public function getUnicastAttemptCount()
    {
        return $this->unicast_attempt_count;
    }

    /**
     * Unicast attempt count.
     * The number of attempts before considering an unicast command
     * to be failed.
     *
     * Generated from protobuf field <code>uint32 unicast_attempt_count = 10;</code>
     * @param int $var
     * @return $this
     */
    public function setUnicastAttemptCount($var)
    {
        GPBUtil::checkUint32($var);
        $this->unicast_attempt_count = $var;

        return $this;
    }

    /**
     * FragmentationFragmentSize.
     * This defines the size of each payload fragment. Please refer to the
     * Regional Parameters specification for the maximum payload sizes
     * per data-rate and region.
     *
     * Generated from protobuf field <code>uint32 fragmentation_fragment_size = 11;</code>
     * @return int
     */
    public function getFragmentationFragmentSize()
    {
        return $this->fragmentation_fragment_size;
    }

    /**
     * FragmentationFragmentSize.
     * This defines the size of each payload fragment. Please refer to the
     * Regional Parameters specification for the maximum payload sizes
     * per data-rate and region.
     *
     * Generated from protobuf field <code>uint32 fragmentation_fragment_size = 11;</code>
     * @param int $var
     * @return $this
     */
    public function setFragmentationFragmentSize($var)
    {
        GPBUtil::checkUint32($var);
        $this->fragmentation_fragment_size = $var;

        return $this;
    }

    /**
     * Payload.
     *
     * Generated from protobuf field <code>bytes payload = 12;</code>
     * @return string
     */
    public function getPayload()
    {
        return $this->payload;
    }

    /**
     * Payload.
     *
     * Generated from protobuf field <code>bytes payload = 12;</code>
     * @param string $var
     * @return $this
     */
    public function setPayload($var)
    {
        GPBUtil::checkString($var, False);
        $this->payload = $var;

        return $this;
    }

    /**
     * Fragmentation redundancy.
     * The number represents the additional redundant frames to send.
     *
     * Generated from protobuf field <code>uint32 fragmentation_redundancy = 13;</code>
     * @return int
     */
    public function getFragmentationRedundancy()
    {
        return $this->fragmentation_redundancy;
    }

    /**
     * Fragmentation redundancy.
     * The number represents the additional redundant frames to send.
     *
     * Generated from protobuf field <code>uint32 fragmentation_redundancy = 13;</code>
     * @param int $var
     * @return $this
     */
    public function setFragmentationRedundancy($var)
    {
        GPBUtil::checkUint32($var);
        $this->fragmentation_redundancy = $var;

        return $this;
    }

    /**
     * Fragmentation session index.
     *
     * Generated from protobuf field <code>uint32 fragmentation_session_index = 14;</code>
     * @return int
     */
    public function getFragmentationSessionIndex()
    {
        return $this->fragmentation_session_index;
    }

    /**
     * Fragmentation session index.
     *
     * Generated from protobuf field <code>uint32 fragmentation_session_index = 14;</code>
     * @param int $var
     * @return $this
     */
    public function setFragmentationSessionIndex($var)
    {
        GPBUtil::checkUint32($var);
        $this->fragmentation_session_index = $var;

        return $this;
    }

    /**
     * Fragmentation matrix.
     *
     * Generated from protobuf field <code>uint32 fragmentation_matrix = 15;</code>
     * @return int
     */
    public function getFragmentationMatrix()
    {
        return $this->fragmentation_matrix;
    }

    /**
     * Fragmentation matrix.
     *
     * Generated from protobuf field <code>uint32 fragmentation_matrix = 15;</code>
     * @param int $var
     * @return $this
     */
    public function setFragmentationMatrix($var)
    {
        GPBUtil::checkUint32($var);
        $this->fragmentation_matrix = $var;

        return $this;
    }

    /**
     * Block ack delay.
     *
     * Generated from protobuf field <code>uint32 fragmentation_block_ack_delay = 16;</code>
     * @return int
     */
    public function getFragmentationBlockAckDelay()
    {
        return $this->fragmentation_block_ack_delay;
    }

    /**
     * Block ack delay.
     *
     * Generated from protobuf field <code>uint32 fragmentation_block_ack_delay = 16;</code>
     * @param int $var
     * @return $this
     */
    public function setFragmentationBlockAckDelay($var)
    {
        GPBUtil::checkUint32($var);
        $this->fragmentation_block_ack_delay = $var;

        return $this;
    }

    /**
     * Descriptor (4 bytes).
     *
     * Generated from protobuf field <code>bytes fragmentation_descriptor = 17;</code>
     * @return string
     */
    public function getFragmentationDescriptor()
    {
        return $this->fragmentation_descriptor;
    }

    /**
     * Descriptor (4 bytes).
     *
     * Generated from protobuf field <code>bytes fragmentation_descriptor = 17;</code>
     * @param string $var
     * @return $this
     */
    public function setFragmentationDescriptor($var)
    {
        GPBUtil::checkString($var, False);
        $this->fragmentation_descriptor = $var;

        return $this;
    }

    /**
     * Request fragmentation session status.
     *
     * Generated from protobuf field <code>.fuota.RequestFragmentationSessionStatus request_fragmentation_session_status = 18;</code>
     * @return int
     */
    public function getRequestFragmentationSessionStatus()
    {
        return $this->request_fragmentation_session_status;
    }

    /**
     * Request fragmentation session status.
     *
     * Generated from protobuf field <code>.fuota.RequestFragmentationSessionStatus request_fragmentation_session_status = 18;</code>
     * @param int $var
     * @return $this
     */
    public function setRequestFragmentationSessionStatus($var)
    {
        GPBUtil::checkEnum($var, \Fuota\RequestFragmentationSessionStatus::class);
        $this->request_fragmentation_session_status = $var;

        return $this;
    }

}

