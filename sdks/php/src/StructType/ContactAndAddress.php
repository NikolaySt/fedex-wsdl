<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ContactAndAddress StructType
 * @subpackage Structs
 */
class ContactAndAddress extends AbstractStructBase
{
    /**
     * The Contact
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\Contact
     */
    public $Contact;
    /**
     * The Address
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\Address
     */
    public $Address;
    /**
     * Constructor method for ContactAndAddress
     * @uses ContactAndAddress::setContact()
     * @uses ContactAndAddress::setAddress()
     * @param \StructType\Contact $contact
     * @param \StructType\Address $address
     */
    public function __construct(\StructType\Contact $contact = null, \StructType\Address $address = null)
    {
        $this
            ->setContact($contact)
            ->setAddress($address);
    }
    /**
     * Get Contact value
     * @return \StructType\Contact|null
     */
    public function getContact()
    {
        return $this->Contact;
    }
    /**
     * Set Contact value
     * @param \StructType\Contact $contact
     * @return \StructType\ContactAndAddress
     */
    public function setContact(\StructType\Contact $contact = null)
    {
        $this->Contact = $contact;
        return $this;
    }
    /**
     * Get Address value
     * @return \StructType\Address|null
     */
    public function getAddress()
    {
        return $this->Address;
    }
    /**
     * Set Address value
     * @param \StructType\Address $address
     * @return \StructType\ContactAndAddress
     */
    public function setAddress(\StructType\Address $address = null)
    {
        $this->Address = $address;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\ContactAndAddress
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
