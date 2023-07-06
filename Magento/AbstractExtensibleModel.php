<?php
namespace Magento;

class AbstractExtensibleModel extends AbstractModel implements CustomAttributeDataInterface
{
    const EXTENSION_ATTRIBUTES_KEY = 'extension_attributes';

    protected function _setExtensionAttributes(\Magento\Framework\Api\ExtensionAttributesInterface $extensionAttributes)
    {
        $this->_data[self::EXTENSION_ATTRIBUTES_KEY] = $extensionAttributes;
        return $this;
    }

    protected function _getExtensionAttributes()
    {
        if (!$this->getData(self::EXTENSION_ATTRIBUTES_KEY)) {
            $this->populateExtensionAttributes([]);
        }
        return $this->getData(self::EXTENSION_ATTRIBUTES_KEY);
    }
}