<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ShippingDocumentFormat StructType
 * Meta informations extracted from the WSDL
 * - documentation: Specifies characteristics of a shipping document to be produced.
 * @subpackage Structs
 */
class ShippingDocumentFormat extends AbstractStructBase
{
    /**
     * The Dispositions
     * Meta informations extracted from the WSDL
     * - documentation: Specifies how to create, organize, and return the document.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\ShippingDocumentDispositionDetail[]
     */
    public $Dispositions;
    /**
     * The TopOfPageOffset
     * Meta informations extracted from the WSDL
     * - documentation: Specifies how far down the page to move the beginning of the image; allows for printing on letterhead and other pre-printed stock.
     * - minOccurs: 0
     * @var \StructType\LinearMeasure
     */
    public $TopOfPageOffset;
    /**
     * The ImageType
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $ImageType;
    /**
     * The StockType
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $StockType;
    /**
     * The ProvideInstructions
     * Meta informations extracted from the WSDL
     * - documentation: For those shipping document types which have both a "form" and "instructions" component (e.g. NAFTA Certificate of Origin and General Agency Agreement), this field indicates whether to provide the instructions.
     * - minOccurs: 0
     * @var bool
     */
    public $ProvideInstructions;
    /**
     * The OptionsRequested
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\DocumentFormatOptionsRequested
     */
    public $OptionsRequested;
    /**
     * The Localization
     * Meta informations extracted from the WSDL
     * - documentation: Governs the language to be used for this individual document, independently from other content returned for the same shipment.
     * - minOccurs: 0
     * @var \StructType\Localization
     */
    public $Localization;
    /**
     * Constructor method for ShippingDocumentFormat
     * @uses ShippingDocumentFormat::setDispositions()
     * @uses ShippingDocumentFormat::setTopOfPageOffset()
     * @uses ShippingDocumentFormat::setImageType()
     * @uses ShippingDocumentFormat::setStockType()
     * @uses ShippingDocumentFormat::setProvideInstructions()
     * @uses ShippingDocumentFormat::setOptionsRequested()
     * @uses ShippingDocumentFormat::setLocalization()
     * @param \StructType\ShippingDocumentDispositionDetail[] $dispositions
     * @param \StructType\LinearMeasure $topOfPageOffset
     * @param string $imageType
     * @param string $stockType
     * @param bool $provideInstructions
     * @param \StructType\DocumentFormatOptionsRequested $optionsRequested
     * @param \StructType\Localization $localization
     */
    public function __construct(array $dispositions = array(), \StructType\LinearMeasure $topOfPageOffset = null, $imageType = null, $stockType = null, $provideInstructions = null, \StructType\DocumentFormatOptionsRequested $optionsRequested = null, \StructType\Localization $localization = null)
    {
        $this
            ->setDispositions($dispositions)
            ->setTopOfPageOffset($topOfPageOffset)
            ->setImageType($imageType)
            ->setStockType($stockType)
            ->setProvideInstructions($provideInstructions)
            ->setOptionsRequested($optionsRequested)
            ->setLocalization($localization);
    }
    /**
     * Get Dispositions value
     * @return \StructType\ShippingDocumentDispositionDetail[]|null
     */
    public function getDispositions()
    {
        return $this->Dispositions;
    }
    /**
     * Set Dispositions value
     * @throws \InvalidArgumentException
     * @param \StructType\ShippingDocumentDispositionDetail[] $dispositions
     * @return \StructType\ShippingDocumentFormat
     */
    public function setDispositions(array $dispositions = array())
    {
        foreach ($dispositions as $shippingDocumentFormatDispositionsItem) {
            // validation for constraint: itemType
            if (!$shippingDocumentFormatDispositionsItem instanceof \StructType\ShippingDocumentDispositionDetail) {
                throw new \InvalidArgumentException(sprintf('The Dispositions property can only contain items of \StructType\ShippingDocumentDispositionDetail, "%s" given', is_object($shippingDocumentFormatDispositionsItem) ? get_class($shippingDocumentFormatDispositionsItem) : gettype($shippingDocumentFormatDispositionsItem)), __LINE__);
            }
        }
        $this->Dispositions = $dispositions;
        return $this;
    }
    /**
     * Add item to Dispositions value
     * @throws \InvalidArgumentException
     * @param \StructType\ShippingDocumentDispositionDetail $item
     * @return \StructType\ShippingDocumentFormat
     */
    public function addToDispositions(\StructType\ShippingDocumentDispositionDetail $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\ShippingDocumentDispositionDetail) {
            throw new \InvalidArgumentException(sprintf('The Dispositions property can only contain items of \StructType\ShippingDocumentDispositionDetail, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Dispositions[] = $item;
        return $this;
    }
    /**
     * Get TopOfPageOffset value
     * @return \StructType\LinearMeasure|null
     */
    public function getTopOfPageOffset()
    {
        return $this->TopOfPageOffset;
    }
    /**
     * Set TopOfPageOffset value
     * @param \StructType\LinearMeasure $topOfPageOffset
     * @return \StructType\ShippingDocumentFormat
     */
    public function setTopOfPageOffset(\StructType\LinearMeasure $topOfPageOffset = null)
    {
        $this->TopOfPageOffset = $topOfPageOffset;
        return $this;
    }
    /**
     * Get ImageType value
     * @return string|null
     */
    public function getImageType()
    {
        return $this->ImageType;
    }
    /**
     * Set ImageType value
     * @uses \EnumType\ShippingDocumentImageType::valueIsValid()
     * @uses \EnumType\ShippingDocumentImageType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $imageType
     * @return \StructType\ShippingDocumentFormat
     */
    public function setImageType($imageType = null)
    {
        // validation for constraint: enumeration
        if (!\EnumType\ShippingDocumentImageType::valueIsValid($imageType)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $imageType, implode(', ', \EnumType\ShippingDocumentImageType::getValidValues())), __LINE__);
        }
        $this->ImageType = $imageType;
        return $this;
    }
    /**
     * Get StockType value
     * @return string|null
     */
    public function getStockType()
    {
        return $this->StockType;
    }
    /**
     * Set StockType value
     * @uses \EnumType\ShippingDocumentStockType::valueIsValid()
     * @uses \EnumType\ShippingDocumentStockType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $stockType
     * @return \StructType\ShippingDocumentFormat
     */
    public function setStockType($stockType = null)
    {
        // validation for constraint: enumeration
        if (!\EnumType\ShippingDocumentStockType::valueIsValid($stockType)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $stockType, implode(', ', \EnumType\ShippingDocumentStockType::getValidValues())), __LINE__);
        }
        $this->StockType = $stockType;
        return $this;
    }
    /**
     * Get ProvideInstructions value
     * @return bool|null
     */
    public function getProvideInstructions()
    {
        return $this->ProvideInstructions;
    }
    /**
     * Set ProvideInstructions value
     * @param bool $provideInstructions
     * @return \StructType\ShippingDocumentFormat
     */
    public function setProvideInstructions($provideInstructions = null)
    {
        // validation for constraint: boolean
        if (!is_null($provideInstructions) && !is_bool($provideInstructions)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($provideInstructions)), __LINE__);
        }
        $this->ProvideInstructions = $provideInstructions;
        return $this;
    }
    /**
     * Get OptionsRequested value
     * @return \StructType\DocumentFormatOptionsRequested|null
     */
    public function getOptionsRequested()
    {
        return $this->OptionsRequested;
    }
    /**
     * Set OptionsRequested value
     * @param \StructType\DocumentFormatOptionsRequested $optionsRequested
     * @return \StructType\ShippingDocumentFormat
     */
    public function setOptionsRequested(\StructType\DocumentFormatOptionsRequested $optionsRequested = null)
    {
        $this->OptionsRequested = $optionsRequested;
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
     * @return \StructType\ShippingDocumentFormat
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
     * @return \StructType\ShippingDocumentFormat
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
