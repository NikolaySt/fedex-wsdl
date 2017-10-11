<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RateReply StructType
 * Meta informations extracted from the WSDL
 * - documentation: The response to a RateRequest. The Notifications indicate whether the request was successful or not.
 * - type: ns:RateReply
 * @subpackage Structs
 */
class RateReply extends AbstractStructBase
{
    /**
     * The HighestSeverity
     * Meta informations extracted from the WSDL
     * - documentation: This indicates the highest level of severity of all the notifications returned in this reply.
     * - minOccurs: 1
     * @var string
     */
    public $HighestSeverity;
    /**
     * The Notifications
     * Meta informations extracted from the WSDL
     * - documentation: The descriptive data regarding the results of the submitted transaction.
     * - maxOccurs: unbounded
     * - minOccurs: 1
     * @var \StructType\Notification[]
     */
    public $Notifications;
    /**
     * The Version
     * Meta informations extracted from the WSDL
     * - documentation: The version of this reply.
     * - minOccurs: 1
     * @var \StructType\VersionId
     */
    public $Version;
    /**
     * The TransactionDetail
     * Meta informations extracted from the WSDL
     * - documentation: Contains the CustomerTransactionId that was sent in the request.
     * - minOccurs: 0
     * @var \StructType\TransactionDetail
     */
    public $TransactionDetail;
    /**
     * The RateReplyDetails
     * Meta informations extracted from the WSDL
     * - documentation: Each element contains all rate data for a single service. If service was specified in the request, there will be a single entry in this array; if service was omitted in the request, there will be a separate entry in this array for
     * each service being compared.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\RateReplyDetail[]
     */
    public $RateReplyDetails;
    /**
     * Constructor method for RateReply
     * @uses RateReply::setHighestSeverity()
     * @uses RateReply::setNotifications()
     * @uses RateReply::setVersion()
     * @uses RateReply::setTransactionDetail()
     * @uses RateReply::setRateReplyDetails()
     * @param string $highestSeverity
     * @param \StructType\Notification[] $notifications
     * @param \StructType\VersionId $version
     * @param \StructType\TransactionDetail $transactionDetail
     * @param \StructType\RateReplyDetail[] $rateReplyDetails
     */
    public function __construct($highestSeverity = null, array $notifications = array(), \StructType\VersionId $version = null, \StructType\TransactionDetail $transactionDetail = null, array $rateReplyDetails = array())
    {
        $this
            ->setHighestSeverity($highestSeverity)
            ->setNotifications($notifications)
            ->setVersion($version)
            ->setTransactionDetail($transactionDetail)
            ->setRateReplyDetails($rateReplyDetails);
    }
    /**
     * Get HighestSeverity value
     * @return string
     */
    public function getHighestSeverity()
    {
        return $this->HighestSeverity;
    }
    /**
     * Set HighestSeverity value
     * @uses \EnumType\NotificationSeverityType::valueIsValid()
     * @uses \EnumType\NotificationSeverityType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $highestSeverity
     * @return \StructType\RateReply
     */
    public function setHighestSeverity($highestSeverity = null)
    {
        // validation for constraint: enumeration
        if (!\EnumType\NotificationSeverityType::valueIsValid($highestSeverity)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $highestSeverity, implode(', ', \EnumType\NotificationSeverityType::getValidValues())), __LINE__);
        }
        $this->HighestSeverity = $highestSeverity;
        return $this;
    }
    /**
     * Get Notifications value
     * @return \StructType\Notification[]
     */
    public function getNotifications()
    {
        return $this->Notifications;
    }
    /**
     * Set Notifications value
     * @throws \InvalidArgumentException
     * @param \StructType\Notification[] $notifications
     * @return \StructType\RateReply
     */
    public function setNotifications(array $notifications = array())
    {
        foreach ($notifications as $rateReplyNotificationsItem) {
            // validation for constraint: itemType
            if (!$rateReplyNotificationsItem instanceof \StructType\Notification) {
                throw new \InvalidArgumentException(sprintf('The Notifications property can only contain items of \StructType\Notification, "%s" given', is_object($rateReplyNotificationsItem) ? get_class($rateReplyNotificationsItem) : gettype($rateReplyNotificationsItem)), __LINE__);
            }
        }
        $this->Notifications = $notifications;
        return $this;
    }
    /**
     * Add item to Notifications value
     * @throws \InvalidArgumentException
     * @param \StructType\Notification $item
     * @return \StructType\RateReply
     */
    public function addToNotifications(\StructType\Notification $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\Notification) {
            throw new \InvalidArgumentException(sprintf('The Notifications property can only contain items of \StructType\Notification, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Notifications[] = $item;
        return $this;
    }
    /**
     * Get Version value
     * @return \StructType\VersionId
     */
    public function getVersion()
    {
        return $this->Version;
    }
    /**
     * Set Version value
     * @param \StructType\VersionId $version
     * @return \StructType\RateReply
     */
    public function setVersion(\StructType\VersionId $version = null)
    {
        $this->Version = $version;
        return $this;
    }
    /**
     * Get TransactionDetail value
     * @return \StructType\TransactionDetail|null
     */
    public function getTransactionDetail()
    {
        return $this->TransactionDetail;
    }
    /**
     * Set TransactionDetail value
     * @param \StructType\TransactionDetail $transactionDetail
     * @return \StructType\RateReply
     */
    public function setTransactionDetail(\StructType\TransactionDetail $transactionDetail = null)
    {
        $this->TransactionDetail = $transactionDetail;
        return $this;
    }
    /**
     * Get RateReplyDetails value
     * @return \StructType\RateReplyDetail[]|null
     */
    public function getRateReplyDetails()
    {
        return $this->RateReplyDetails;
    }
    /**
     * Set RateReplyDetails value
     * @throws \InvalidArgumentException
     * @param \StructType\RateReplyDetail[] $rateReplyDetails
     * @return \StructType\RateReply
     */
    public function setRateReplyDetails(array $rateReplyDetails = array())
    {
        foreach ($rateReplyDetails as $rateReplyRateReplyDetailsItem) {
            // validation for constraint: itemType
            if (!$rateReplyRateReplyDetailsItem instanceof \StructType\RateReplyDetail) {
                throw new \InvalidArgumentException(sprintf('The RateReplyDetails property can only contain items of \StructType\RateReplyDetail, "%s" given', is_object($rateReplyRateReplyDetailsItem) ? get_class($rateReplyRateReplyDetailsItem) : gettype($rateReplyRateReplyDetailsItem)), __LINE__);
            }
        }
        $this->RateReplyDetails = $rateReplyDetails;
        return $this;
    }
    /**
     * Add item to RateReplyDetails value
     * @throws \InvalidArgumentException
     * @param \StructType\RateReplyDetail $item
     * @return \StructType\RateReply
     */
    public function addToRateReplyDetails(\StructType\RateReplyDetail $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\RateReplyDetail) {
            throw new \InvalidArgumentException(sprintf('The RateReplyDetails property can only contain items of \StructType\RateReplyDetail, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->RateReplyDetails[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\RateReply
     */
    public static function __set_state(array $array)
    {
        return parent::__set_state($array);
    }
    /**
     * Method returning the class name
     * @return string __CLASS__
     */
    public function __toString()
    {
        return __CLASS__;
    }
}
