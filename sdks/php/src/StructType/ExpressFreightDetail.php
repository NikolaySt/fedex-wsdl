<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ExpressFreightDetail StructType
 * @subpackage Structs
 */
class ExpressFreightDetail extends AbstractStructBase
{
    /**
     * The PackingListEnclosed
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $PackingListEnclosed;
    /**
     * The ShippersLoadAndCount
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $ShippersLoadAndCount;
    /**
     * The BookingConfirmationNumber
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $BookingConfirmationNumber;
    /**
     * The ReferenceLabelRequested
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $ReferenceLabelRequested;
    /**
     * The BeforeDeliveryContact
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\ExpressFreightDetailContact
     */
    public $BeforeDeliveryContact;
    /**
     * The UndeliverableContact
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\ExpressFreightDetailContact
     */
    public $UndeliverableContact;
    /**
     * Constructor method for ExpressFreightDetail
     * @uses ExpressFreightDetail::setPackingListEnclosed()
     * @uses ExpressFreightDetail::setShippersLoadAndCount()
     * @uses ExpressFreightDetail::setBookingConfirmationNumber()
     * @uses ExpressFreightDetail::setReferenceLabelRequested()
     * @uses ExpressFreightDetail::setBeforeDeliveryContact()
     * @uses ExpressFreightDetail::setUndeliverableContact()
     * @param bool $packingListEnclosed
     * @param int $shippersLoadAndCount
     * @param string $bookingConfirmationNumber
     * @param bool $referenceLabelRequested
     * @param \StructType\ExpressFreightDetailContact $beforeDeliveryContact
     * @param \StructType\ExpressFreightDetailContact $undeliverableContact
     */
    public function __construct($packingListEnclosed = null, $shippersLoadAndCount = null, $bookingConfirmationNumber = null, $referenceLabelRequested = null, \StructType\ExpressFreightDetailContact $beforeDeliveryContact = null, \StructType\ExpressFreightDetailContact $undeliverableContact = null)
    {
        $this
            ->setPackingListEnclosed($packingListEnclosed)
            ->setShippersLoadAndCount($shippersLoadAndCount)
            ->setBookingConfirmationNumber($bookingConfirmationNumber)
            ->setReferenceLabelRequested($referenceLabelRequested)
            ->setBeforeDeliveryContact($beforeDeliveryContact)
            ->setUndeliverableContact($undeliverableContact);
    }
    /**
     * Get PackingListEnclosed value
     * @return bool|null
     */
    public function getPackingListEnclosed()
    {
        return $this->PackingListEnclosed;
    }
    /**
     * Set PackingListEnclosed value
     * @param bool $packingListEnclosed
     * @return \StructType\ExpressFreightDetail
     */
    public function setPackingListEnclosed($packingListEnclosed = null)
    {
        // validation for constraint: boolean
        if (!is_null($packingListEnclosed) && !is_bool($packingListEnclosed)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($packingListEnclosed)), __LINE__);
        }
        $this->PackingListEnclosed = $packingListEnclosed;
        return $this;
    }
    /**
     * Get ShippersLoadAndCount value
     * @return int|null
     */
    public function getShippersLoadAndCount()
    {
        return $this->ShippersLoadAndCount;
    }
    /**
     * Set ShippersLoadAndCount value
     * @param int $shippersLoadAndCount
     * @return \StructType\ExpressFreightDetail
     */
    public function setShippersLoadAndCount($shippersLoadAndCount = null)
    {
        // validation for constraint: int
        if (!is_null($shippersLoadAndCount) && !is_numeric($shippersLoadAndCount)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($shippersLoadAndCount)), __LINE__);
        }
        $this->ShippersLoadAndCount = $shippersLoadAndCount;
        return $this;
    }
    /**
     * Get BookingConfirmationNumber value
     * @return string|null
     */
    public function getBookingConfirmationNumber()
    {
        return $this->BookingConfirmationNumber;
    }
    /**
     * Set BookingConfirmationNumber value
     * @param string $bookingConfirmationNumber
     * @return \StructType\ExpressFreightDetail
     */
    public function setBookingConfirmationNumber($bookingConfirmationNumber = null)
    {
        // validation for constraint: string
        if (!is_null($bookingConfirmationNumber) && !is_string($bookingConfirmationNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($bookingConfirmationNumber)), __LINE__);
        }
        $this->BookingConfirmationNumber = $bookingConfirmationNumber;
        return $this;
    }
    /**
     * Get ReferenceLabelRequested value
     * @return bool|null
     */
    public function getReferenceLabelRequested()
    {
        return $this->ReferenceLabelRequested;
    }
    /**
     * Set ReferenceLabelRequested value
     * @param bool $referenceLabelRequested
     * @return \StructType\ExpressFreightDetail
     */
    public function setReferenceLabelRequested($referenceLabelRequested = null)
    {
        // validation for constraint: boolean
        if (!is_null($referenceLabelRequested) && !is_bool($referenceLabelRequested)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($referenceLabelRequested)), __LINE__);
        }
        $this->ReferenceLabelRequested = $referenceLabelRequested;
        return $this;
    }
    /**
     * Get BeforeDeliveryContact value
     * @return \StructType\ExpressFreightDetailContact|null
     */
    public function getBeforeDeliveryContact()
    {
        return $this->BeforeDeliveryContact;
    }
    /**
     * Set BeforeDeliveryContact value
     * @param \StructType\ExpressFreightDetailContact $beforeDeliveryContact
     * @return \StructType\ExpressFreightDetail
     */
    public function setBeforeDeliveryContact(\StructType\ExpressFreightDetailContact $beforeDeliveryContact = null)
    {
        $this->BeforeDeliveryContact = $beforeDeliveryContact;
        return $this;
    }
    /**
     * Get UndeliverableContact value
     * @return \StructType\ExpressFreightDetailContact|null
     */
    public function getUndeliverableContact()
    {
        return $this->UndeliverableContact;
    }
    /**
     * Set UndeliverableContact value
     * @param \StructType\ExpressFreightDetailContact $undeliverableContact
     * @return \StructType\ExpressFreightDetail
     */
    public function setUndeliverableContact(\StructType\ExpressFreightDetailContact $undeliverableContact = null)
    {
        $this->UndeliverableContact = $undeliverableContact;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\ExpressFreightDetail
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
