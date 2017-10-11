<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RecommendedDocumentSpecification StructType
 * Meta informations extracted from the WSDL
 * - documentation: Specifies the details about documents that are recommended to be included with the shipment for ease of shipment processing and transportation.
 * @subpackage Structs
 */
class RecommendedDocumentSpecification extends AbstractStructBase
{
    /**
     * The Types
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    public $Types;
    /**
     * Constructor method for RecommendedDocumentSpecification
     * @uses RecommendedDocumentSpecification::setTypes()
     * @param string[] $types
     */
    public function __construct(array $types = array())
    {
        $this
            ->setTypes($types);
    }
    /**
     * Get Types value
     * @return string[]|null
     */
    public function getTypes()
    {
        return $this->Types;
    }
    /**
     * Set Types value
     * @uses \EnumType\RecommendedDocumentType::valueIsValid()
     * @uses \EnumType\RecommendedDocumentType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string[] $types
     * @return \StructType\RecommendedDocumentSpecification
     */
    public function setTypes(array $types = array())
    {
        $invalidValues = array();
        foreach ($types as $recommendedDocumentSpecificationTypesItem) {
            if (!\EnumType\RecommendedDocumentType::valueIsValid($recommendedDocumentSpecificationTypesItem)) {
                $invalidValues[] = var_export($recommendedDocumentSpecificationTypesItem, true);
            }
        }
        if (!empty($invalidValues)) {
            throw new \InvalidArgumentException(sprintf('Value(s) "%s" is/are invalid, please use one of: %s', implode(', ', $invalidValues), implode(', ', \EnumType\RecommendedDocumentType::getValidValues())), __LINE__);
        }
        $this->Types = $types;
        return $this;
    }
    /**
     * Add item to Types value
     * @uses \EnumType\RecommendedDocumentType::valueIsValid()
     * @uses \EnumType\RecommendedDocumentType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \StructType\RecommendedDocumentSpecification
     */
    public function addToTypes($item)
    {
        // validation for constraint: enumeration
        if (!\EnumType\RecommendedDocumentType::valueIsValid($item)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $item, implode(', ', \EnumType\RecommendedDocumentType::getValidValues())), __LINE__);
        }
        $this->Types[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\RecommendedDocumentSpecification
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
