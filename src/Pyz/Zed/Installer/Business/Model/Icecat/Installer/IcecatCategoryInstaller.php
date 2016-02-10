<?php

namespace Pyz\Zed\Installer\Business\Model\Icecat\Installer;

use Pyz\Zed\Installer\Business\Model\Icecat\AbstractIcecatInstaller;

class IcecatCategoryInstaller extends AbstractIcecatInstaller
{

    /**
     * @return void
     */
    public function install()
    {
        $xml = $this->getCategoryMapper()->getXml();

        dump($xml);
    }

}
