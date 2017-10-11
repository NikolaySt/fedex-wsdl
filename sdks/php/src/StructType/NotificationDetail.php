<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for NotificationDetail StructType
 * @subpackage Structs
 */
class NotificationDetail extends AbstractStructBase
{
    /**
     * The NotificationType
     * Meta informations extracted from the WSDL
     * - documentation: Indicates the type of notification that will be sent.
     * - minOccurs: 0
     * @var string
     */
    public $NotificationType;
    /**
     * The EmailDetail
     * Meta informations extracted from the WSDL
     * - documentation: Specifies the email notification details.
     * - minOccurs: 0
     * @var \StructType\EMailDetail
     */
    public $EmailDetail;
    /**
     * The Localization
     * Meta informations extracted from the WSDL
     * - documentation: Specifies the localization for this notification.
     * - minOccurs: 0
     * @var \StructType\Localization
     */
    public $Localization;
    /**
     * Constructor method for NotificationDetail
     * @uses NotificationDetail::setNotificationType()
     * @uses NotificationDetail::setEmailDetail()
     * @uses NotificationDetail::setLocalization()
     * @param string $notificationType
     * @param \StructType\EMailDetail $emailDetail
     * @param \StructType\Localization $localization
     */
    public function __construct($notificationType = null, \StructType\EMailDetail $emailDetail = null, \StructType\Localization $localization = null)
    {
        $this
            ->setNotificationType($notificationType)
            ->setEmailDetail($emailDetail)
            ->setLocalization($localization);
    }
    /**
     * Get NotificationType value
     * @return string|null
     */
    public function getNotificationType()
    {
        return $this->NotificationType;
    }
    /**
     * Set NotificationType value
     * @uses \EnumType\NotificationType::valueIsValid()
     * @uses \EnumType\NotificationType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $notificationType
     * @return \StructType\NotificationDetail
     */
    public function setNotificationType($notificationType = null)
    {
        // validation for constraint: enumeration
        if (!\EnumType\NotificationType::valueIsValid($notificationType)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $notificationType, implode(', ', \EnumType\NotificationType::getValidValues())), __LINE__);
        }
        $this->NotificationType = $notificationType;
        return $this;
    }
    /**
     * Get EmailDetail value
     * @return \StructType\EMailDetail|null
     */
    public function getEmailDetail()
    {
        return $this->EmailDetail;
    }
    /**
     * Set EmailDetail value
     * @param \StructType\EMailDetail $emailDetail
     * @return \StructType\NotificationDetail
     */
    public function setEmailDetail(\StructType\EMailDetail $emailDetail = null)
    {
        $this->EmailDetail = $emailDetail;
        return $this;
    }
    /**
     * Get Localization value
     * @return \StructType\Localization|null
     */
    public function getLocalization()
    {
        return $this->Localization;
    }
    /**
     * Set Localization value
     * @param \StructType\Localization $localization
     * @return \StructType\NotificationDetail
     */
    public function setLocalization(\StructType\Localization $localization = null)
    {
        $this->Localization = $localization;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\NotificationDetail
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
