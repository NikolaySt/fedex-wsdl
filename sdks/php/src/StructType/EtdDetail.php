<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for EtdDetail StructType
 * Meta informations extracted from the WSDL
 * - documentation: Electronic Trade document references used with the ETD special service.
 * @subpackage Structs
 */
class EtdDetail extends AbstractStructBase
{
    /**
     * The Attributes
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    public $Attributes;
    /**
     * The RequestedDocumentCopies
     * Meta informations extracted from the WSDL
     * - documentation: Indicates the types of shipping documents produced for the shipper by FedEx (see ShippingDocumentSpecification) which should be copied back to the shipper in the shipment result data.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    public $RequestedDocumentCopies;
    /**
     * The DocumentReferences
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\UploadDocumentReferenceDetail[]
     */
    public $DocumentReferences;
    /**
     * Constructor method for EtdDetail
     * @uses EtdDetail::setAttributes()
     * @uses EtdDetail::setRequestedDocumentCopies()
     * @uses EtdDetail::setDocumentReferences()
     * @param string[] $attributes
     * @param string[] $requestedDocumentCopies
     * @param \StructType\UploadDocumentReferenceDetail[] $documentReferences
     */
    public function __construct(array $attributes = array(), array $requestedDocumentCopies = array(), array $documentReferences = array())
    {
        $this
            ->setAttributes($attributes)
            ->setRequestedDocumentCopies($requestedDocumentCopies)
            ->setDocumentReferences($documentReferences);
    }
    /**
     * Get Attributes value
     * @return string[]|null
     */
    public function getAttributes()
    {
        return $this->Attributes;
    }
    /**
     * Set Attributes value
     * @uses \EnumType\EtdAttributeType::valueIsValid()
     * @uses \EnumType\EtdAttributeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string[] $attributes
     * @return \StructType\EtdDetail
     */
    public function setAttributes(array $attributes = array())
    {
        $invalidValues = array();
        foreach ($attributes as $etdDetailAttributesItem) {
            if (!\EnumType\EtdAttributeType::valueIsValid($etdDetailAttributesItem)) {
                $invalidValues[] = var_export($etdDetailAttributesItem, true);
            }
        }
        if (!empty($invalidValues)) {
            throw new \InvalidArgumentException(sprintf('Value(s) "%s" is/are invalid, please use one of: %s', implode(', ', $invalidValues), implode(', ', \EnumType\EtdAttributeType::getValidValues())), __LINE__);
        }
        $this->Attributes = $attributes;
        return $this;
    }
    /**
     * Add item to Attributes value
     * @uses \EnumType\EtdAttributeType::valueIsValid()
     * @uses \EnumType\EtdAttributeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \StructType\EtdDetail
     */
    public function addToAttributes($item)
    {
        // validation for constraint: enumeration
        if (!\EnumType\EtdAttributeType::valueIsValid($item)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $item, implode(', ', \EnumType\EtdAttributeType::getValidValues())), __LINE__);
        }
        $this->Attributes[] = $item;
        return $this;
    }
    /**
     * Get RequestedDocumentCopies value
     * @return string[]|null
     */
    public function getRequestedDocumentCopies()
    {
        return $this->RequestedDocumentCopies;
    }
    /**
     * Set RequestedDocumentCopies value
     * @uses \EnumType\RequestedShippingDocumentType::valueIsValid()
     * @uses \EnumType\RequestedShippingDocumentType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string[] $requestedDocumentCopies
     * @return \StructType\EtdDetail
     */
    public function setRequestedDocumentCopies(array $requestedDocumentCopies = array())
    {
        $invalidValues = array();
        foreach ($requestedDocumentCopies as $etdDetailRequestedDocumentCopiesItem) {
            if (!\EnumType\RequestedShippingDocumentType::valueIsValid($etdDetailRequestedDocumentCopiesItem)) {
                $invalidValues[] = var_export($etdDetailRequestedDocumentCopiesItem, true);
            }
        }
        if (!empty($invalidValues)) {
            throw new \InvalidArgumentException(sprintf('Value(s) "%s" is/are invalid, please use one of: %s', implode(', ', $invalidValues), implode(', ', \EnumType\RequestedShippingDocumentType::getValidValues())), __LINE__);
        }
        $this->RequestedDocumentCopies = $requestedDocumentCopies;
        return $this;
    }
    /**
     * Add item to RequestedDocumentCopies value
     * @uses \EnumType\RequestedShippingDocumentType::valueIsValid()
     * @uses \EnumType\RequestedShippingDocumentType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \StructType\EtdDetail
     */
    public function addToRequestedDocumentCopies($item)
    {
        // validation for constraint: enumeration
        if (!\EnumType\RequestedShippingDocumentType::valueIsValid($item)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $item, implode(', ', \EnumType\RequestedShippingDocumentType::getValidValues())), __LINE__);
        }
        $this->RequestedDocumentCopies[] = $item;
        return $this;
    }
    /**
     * Get DocumentReferences value
     * @return \StructType\UploadDocumentReferenceDetail[]|null
     */
    public function getDocumentReferences()
    {
        return $this->DocumentReferences;
    }
    /**
     * Set DocumentReferences value
     * @throws \InvalidArgumentException
     * @param \StructType\UploadDocumentReferenceDetail[] $documentReferences
     * @return \StructType\EtdDetail
     */
    public function setDocumentReferences(array $documentReferences = array())
    {
        foreach ($documentReferences as $etdDetailDocumentReferencesItem) {
            // validation for constraint: itemType
            if (!$etdDetailDocumentReferencesItem instanceof \StructType\UploadDocumentReferenceDetail) {
                throw new \InvalidArgumentException(sprintf('The DocumentReferences property can only contain items of \StructType\UploadDocumentReferenceDetail, "%s" given', is_object($etdDetailDocumentReferencesItem) ? get_class($etdDetailDocumentReferencesItem) : gettype($etdDetailDocumentReferencesItem)), __LINE__);
            }
        }
        $this->DocumentReferences = $documentReferences;
        return $this;
    }
    /**
     * Add item to DocumentReferences value
     * @throws \InvalidArgumentException
     * @param \StructType\UploadDocumentReferenceDetail $item
     * @return \StructType\EtdDetail
     */
    public function addToDocumentReferences(\StructType\UploadDocumentReferenceDetail $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\UploadDocumentReferenceDetail) {
            throw new \InvalidArgumentException(sprintf('The DocumentReferences property can only contain items of \StructType\UploadDocumentReferenceDetail, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->DocumentReferences[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\EtdDetail
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
