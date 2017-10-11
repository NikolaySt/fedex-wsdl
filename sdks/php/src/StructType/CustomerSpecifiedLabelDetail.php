<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CustomerSpecifiedLabelDetail StructType
 * Meta informations extracted from the WSDL
 * - documentation: Allows customer-specified control of label content.
 * @subpackage Structs
 */
class CustomerSpecifiedLabelDetail extends AbstractStructBase
{
    /**
     * The DocTabContent
     * Meta informations extracted from the WSDL
     * - documentation: If omitted, no doc tab will be produced (i.e. default is former NONE type).
     * - minOccurs: 0
     * @var \StructType\DocTabContent
     */
    public $DocTabContent;
    /**
     * The CustomContentPosition
     * Meta informations extracted from the WSDL
     * - documentation: Controls the position of the customer specified content relative to the FedEx portion.
     * - minOccurs: 0
     * @var string
     */
    public $CustomContentPosition;
    /**
     * The CustomContent
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\CustomLabelDetail
     */
    public $CustomContent;
    /**
     * The ConfigurableReferenceEntries
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\ConfigurableLabelReferenceEntry[]
     */
    public $ConfigurableReferenceEntries;
    /**
     * The MaskedData
     * Meta informations extracted from the WSDL
     * - documentation: Controls which data/sections will be suppressed.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    public $MaskedData;
    /**
     * The SecondaryBarcode
     * Meta informations extracted from the WSDL
     * - documentation: For customers producing their own Ground labels, this field specifies which secondary barcode will be printed on the label; so that the primary barcode produced by FedEx has the correct SCNC.
     * - minOccurs: 0
     * @var string
     */
    public $SecondaryBarcode;
    /**
     * The TermsAndConditionsLocalization
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\Localization
     */
    public $TermsAndConditionsLocalization;
    /**
     * The RegulatoryLabels
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\RegulatoryLabelContentDetail[]
     */
    public $RegulatoryLabels;
    /**
     * The AdditionalLabels
     * Meta informations extracted from the WSDL
     * - documentation: Controls the number of additional copies of supplemental labels.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\AdditionalLabelsDetail[]
     */
    public $AdditionalLabels;
    /**
     * The AirWaybillSuppressionCount
     * Meta informations extracted from the WSDL
     * - documentation: This value reduces the default quantity of destination/consignee air waybill labels. A value of zero indicates no change to default. A minimum of one copy will always be produced.
     * - minOccurs: 0
     * @var int
     */
    public $AirWaybillSuppressionCount;
    /**
     * Constructor method for CustomerSpecifiedLabelDetail
     * @uses CustomerSpecifiedLabelDetail::setDocTabContent()
     * @uses CustomerSpecifiedLabelDetail::setCustomContentPosition()
     * @uses CustomerSpecifiedLabelDetail::setCustomContent()
     * @uses CustomerSpecifiedLabelDetail::setConfigurableReferenceEntries()
     * @uses CustomerSpecifiedLabelDetail::setMaskedData()
     * @uses CustomerSpecifiedLabelDetail::setSecondaryBarcode()
     * @uses CustomerSpecifiedLabelDetail::setTermsAndConditionsLocalization()
     * @uses CustomerSpecifiedLabelDetail::setRegulatoryLabels()
     * @uses CustomerSpecifiedLabelDetail::setAdditionalLabels()
     * @uses CustomerSpecifiedLabelDetail::setAirWaybillSuppressionCount()
     * @param \StructType\DocTabContent $docTabContent
     * @param string $customContentPosition
     * @param \StructType\CustomLabelDetail $customContent
     * @param \StructType\ConfigurableLabelReferenceEntry[] $configurableReferenceEntries
     * @param string[] $maskedData
     * @param string $secondaryBarcode
     * @param \StructType\Localization $termsAndConditionsLocalization
     * @param \StructType\RegulatoryLabelContentDetail[] $regulatoryLabels
     * @param \StructType\AdditionalLabelsDetail[] $additionalLabels
     * @param int $airWaybillSuppressionCount
     */
    public function __construct(\StructType\DocTabContent $docTabContent = null, $customContentPosition = null, \StructType\CustomLabelDetail $customContent = null, array $configurableReferenceEntries = array(), array $maskedData = array(), $secondaryBarcode = null, \StructType\Localization $termsAndConditionsLocalization = null, array $regulatoryLabels = array(), array $additionalLabels = array(), $airWaybillSuppressionCount = null)
    {
        $this
            ->setDocTabContent($docTabContent)
            ->setCustomContentPosition($customContentPosition)
            ->setCustomContent($customContent)
            ->setConfigurableReferenceEntries($configurableReferenceEntries)
            ->setMaskedData($maskedData)
            ->setSecondaryBarcode($secondaryBarcode)
            ->setTermsAndConditionsLocalization($termsAndConditionsLocalization)
            ->setRegulatoryLabels($regulatoryLabels)
            ->setAdditionalLabels($additionalLabels)
            ->setAirWaybillSuppressionCount($airWaybillSuppressionCount);
    }
    /**
     * Get DocTabContent value
     * @return \StructType\DocTabContent|null
     */
    public function getDocTabContent()
    {
        return $this->DocTabContent;
    }
    /**
     * Set DocTabContent value
     * @param \StructType\DocTabContent $docTabContent
     * @return \StructType\CustomerSpecifiedLabelDetail
     */
    public function setDocTabContent(\StructType\DocTabContent $docTabContent = null)
    {
        $this->DocTabContent = $docTabContent;
        return $this;
    }
    /**
     * Get CustomContentPosition value
     * @return string|null
     */
    public function getCustomContentPosition()
    {
        return $this->CustomContentPosition;
    }
    /**
     * Set CustomContentPosition value
     * @uses \EnumType\RelativeVerticalPositionType::valueIsValid()
     * @uses \EnumType\RelativeVerticalPositionType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $customContentPosition
     * @return \StructType\CustomerSpecifiedLabelDetail
     */
    public function setCustomContentPosition($customContentPosition = null)
    {
        // validation for constraint: enumeration
        if (!\EnumType\RelativeVerticalPositionType::valueIsValid($customContentPosition)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $customContentPosition, implode(', ', \EnumType\RelativeVerticalPositionType::getValidValues())), __LINE__);
        }
        $this->CustomContentPosition = $customContentPosition;
        return $this;
    }
    /**
     * Get CustomContent value
     * @return \StructType\CustomLabelDetail|null
     */
    public function getCustomContent()
    {
        return $this->CustomContent;
    }
    /**
     * Set CustomContent value
     * @param \StructType\CustomLabelDetail $customContent
     * @return \StructType\CustomerSpecifiedLabelDetail
     */
    public function setCustomContent(\StructType\CustomLabelDetail $customContent = null)
    {
        $this->CustomContent = $customContent;
        return $this;
    }
    /**
     * Get ConfigurableReferenceEntries value
     * @return \StructType\ConfigurableLabelReferenceEntry[]|null
     */
    public function getConfigurableReferenceEntries()
    {
        return $this->ConfigurableReferenceEntries;
    }
    /**
     * Set ConfigurableReferenceEntries value
     * @throws \InvalidArgumentException
     * @param \StructType\ConfigurableLabelReferenceEntry[] $configurableReferenceEntries
     * @return \StructType\CustomerSpecifiedLabelDetail
     */
    public function setConfigurableReferenceEntries(array $configurableReferenceEntries = array())
    {
        foreach ($configurableReferenceEntries as $customerSpecifiedLabelDetailConfigurableReferenceEntriesItem) {
            // validation for constraint: itemType
            if (!$customerSpecifiedLabelDetailConfigurableReferenceEntriesItem instanceof \StructType\ConfigurableLabelReferenceEntry) {
                throw new \InvalidArgumentException(sprintf('The ConfigurableReferenceEntries property can only contain items of \StructType\ConfigurableLabelReferenceEntry, "%s" given', is_object($customerSpecifiedLabelDetailConfigurableReferenceEntriesItem) ? get_class($customerSpecifiedLabelDetailConfigurableReferenceEntriesItem) : gettype($customerSpecifiedLabelDetailConfigurableReferenceEntriesItem)), __LINE__);
            }
        }
        $this->ConfigurableReferenceEntries = $configurableReferenceEntries;
        return $this;
    }
    /**
     * Add item to ConfigurableReferenceEntries value
     * @throws \InvalidArgumentException
     * @param \StructType\ConfigurableLabelReferenceEntry $item
     * @return \StructType\CustomerSpecifiedLabelDetail
     */
    public function addToConfigurableReferenceEntries(\StructType\ConfigurableLabelReferenceEntry $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\ConfigurableLabelReferenceEntry) {
            throw new \InvalidArgumentException(sprintf('The ConfigurableReferenceEntries property can only contain items of \StructType\ConfigurableLabelReferenceEntry, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->ConfigurableReferenceEntries[] = $item;
        return $this;
    }
    /**
     * Get MaskedData value
     * @return string[]|null
     */
    public function getMaskedData()
    {
        return $this->MaskedData;
    }
    /**
     * Set MaskedData value
     * @uses \EnumType\LabelMaskableDataType::valueIsValid()
     * @uses \EnumType\LabelMaskableDataType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string[] $maskedData
     * @return \StructType\CustomerSpecifiedLabelDetail
     */
    public function setMaskedData(array $maskedData = array())
    {
        $invalidValues = array();
        foreach ($maskedData as $customerSpecifiedLabelDetailMaskedDataItem) {
            if (!\EnumType\LabelMaskableDataType::valueIsValid($customerSpecifiedLabelDetailMaskedDataItem)) {
                $invalidValues[] = var_export($customerSpecifiedLabelDetailMaskedDataItem, true);
            }
        }
        if (!empty($invalidValues)) {
            throw new \InvalidArgumentException(sprintf('Value(s) "%s" is/are invalid, please use one of: %s', implode(', ', $invalidValues), implode(', ', \EnumType\LabelMaskableDataType::getValidValues())), __LINE__);
        }
        $this->MaskedData = $maskedData;
        return $this;
    }
    /**
     * Add item to MaskedData value
     * @uses \EnumType\LabelMaskableDataType::valueIsValid()
     * @uses \EnumType\LabelMaskableDataType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \StructType\CustomerSpecifiedLabelDetail
     */
    public function addToMaskedData($item)
    {
        // validation for constraint: enumeration
        if (!\EnumType\LabelMaskableDataType::valueIsValid($item)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $item, implode(', ', \EnumType\LabelMaskableDataType::getValidValues())), __LINE__);
        }
        $this->MaskedData[] = $item;
        return $this;
    }
    /**
     * Get SecondaryBarcode value
     * @return string|null
     */
    public function getSecondaryBarcode()
    {
        return $this->SecondaryBarcode;
    }
    /**
     * Set SecondaryBarcode value
     * @uses \EnumType\SecondaryBarcodeType::valueIsValid()
     * @uses \EnumType\SecondaryBarcodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $secondaryBarcode
     * @return \StructType\CustomerSpecifiedLabelDetail
     */
    public function setSecondaryBarcode($secondaryBarcode = null)
    {
        // validation for constraint: enumeration
        if (!\EnumType\SecondaryBarcodeType::valueIsValid($secondaryBarcode)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $secondaryBarcode, implode(', ', \EnumType\SecondaryBarcodeType::getValidValues())), __LINE__);
        }
        $this->SecondaryBarcode = $secondaryBarcode;
        return $this;
    }
    /**
     * Get TermsAndConditionsLocalization value
     * @return \StructType\Localization|null
     */
    public function getTermsAndConditionsLocalization()
    {
        return $this->TermsAndConditionsLocalization;
    }
    /**
     * Set TermsAndConditionsLocalization value
     * @param \StructType\Localization $termsAndConditionsLocalization
     * @return \StructType\CustomerSpecifiedLabelDetail
     */
    public function setTermsAndConditionsLocalization(\StructType\Localization $termsAndConditionsLocalization = null)
    {
        $this->TermsAndConditionsLocalization = $termsAndConditionsLocalization;
        return $this;
    }
    /**
     * Get RegulatoryLabels value
     * @return \StructType\RegulatoryLabelContentDetail[]|null
     */
    public function getRegulatoryLabels()
    {
        return $this->RegulatoryLabels;
    }
    /**
     * Set RegulatoryLabels value
     * @throws \InvalidArgumentException
     * @param \StructType\RegulatoryLabelContentDetail[] $regulatoryLabels
     * @return \StructType\CustomerSpecifiedLabelDetail
     */
    public function setRegulatoryLabels(array $regulatoryLabels = array())
    {
        foreach ($regulatoryLabels as $customerSpecifiedLabelDetailRegulatoryLabelsItem) {
            // validation for constraint: itemType
            if (!$customerSpecifiedLabelDetailRegulatoryLabelsItem instanceof \StructType\RegulatoryLabelContentDetail) {
                throw new \InvalidArgumentException(sprintf('The RegulatoryLabels property can only contain items of \StructType\RegulatoryLabelContentDetail, "%s" given', is_object($customerSpecifiedLabelDetailRegulatoryLabelsItem) ? get_class($customerSpecifiedLabelDetailRegulatoryLabelsItem) : gettype($customerSpecifiedLabelDetailRegulatoryLabelsItem)), __LINE__);
            }
        }
        $this->RegulatoryLabels = $regulatoryLabels;
        return $this;
    }
    /**
     * Add item to RegulatoryLabels value
     * @throws \InvalidArgumentException
     * @param \StructType\RegulatoryLabelContentDetail $item
     * @return \StructType\CustomerSpecifiedLabelDetail
     */
    public function addToRegulatoryLabels(\StructType\RegulatoryLabelContentDetail $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\RegulatoryLabelContentDetail) {
            throw new \InvalidArgumentException(sprintf('The RegulatoryLabels property can only contain items of \StructType\RegulatoryLabelContentDetail, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->RegulatoryLabels[] = $item;
        return $this;
    }
    /**
     * Get AdditionalLabels value
     * @return \StructType\AdditionalLabelsDetail[]|null
     */
    public function getAdditionalLabels()
    {
        return $this->AdditionalLabels;
    }
    /**
     * Set AdditionalLabels value
     * @throws \InvalidArgumentException
     * @param \StructType\AdditionalLabelsDetail[] $additionalLabels
     * @return \StructType\CustomerSpecifiedLabelDetail
     */
    public function setAdditionalLabels(array $additionalLabels = array())
    {
        foreach ($additionalLabels as $customerSpecifiedLabelDetailAdditionalLabelsItem) {
            // validation for constraint: itemType
            if (!$customerSpecifiedLabelDetailAdditionalLabelsItem instanceof \StructType\AdditionalLabelsDetail) {
                throw new \InvalidArgumentException(sprintf('The AdditionalLabels property can only contain items of \StructType\AdditionalLabelsDetail, "%s" given', is_object($customerSpecifiedLabelDetailAdditionalLabelsItem) ? get_class($customerSpecifiedLabelDetailAdditionalLabelsItem) : gettype($customerSpecifiedLabelDetailAdditionalLabelsItem)), __LINE__);
            }
        }
        $this->AdditionalLabels = $additionalLabels;
        return $this;
    }
    /**
     * Add item to AdditionalLabels value
     * @throws \InvalidArgumentException
     * @param \StructType\AdditionalLabelsDetail $item
     * @return \StructType\CustomerSpecifiedLabelDetail
     */
    public function addToAdditionalLabels(\StructType\AdditionalLabelsDetail $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\AdditionalLabelsDetail) {
            throw new \InvalidArgumentException(sprintf('The AdditionalLabels property can only contain items of \StructType\AdditionalLabelsDetail, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->AdditionalLabels[] = $item;
        return $this;
    }
    /**
     * Get AirWaybillSuppressionCount value
     * @return int|null
     */
    public function getAirWaybillSuppressionCount()
    {
        return $this->AirWaybillSuppressionCount;
    }
    /**
     * Set AirWaybillSuppressionCount value
     * @param int $airWaybillSuppressionCount
     * @return \StructType\CustomerSpecifiedLabelDetail
     */
    public function setAirWaybillSuppressionCount($airWaybillSuppressionCount = null)
    {
        // validation for constraint: int
        if (!is_null($airWaybillSuppressionCount) && !is_numeric($airWaybillSuppressionCount)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($airWaybillSuppressionCount)), __LINE__);
        }
        $this->AirWaybillSuppressionCount = $airWaybillSuppressionCount;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\CustomerSpecifiedLabelDetail
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
