<?php

require_once 'Zend/Tool/Framework/Manifest/ProviderManifestable.php';

require_once 'G2/Tool/Provider/ProjectG2.php';


class G2_Tool_Manifest implements Zend_Tool_Framework_Manifest_ProviderManifestable
{
	
    public function getProviders()
    {
        return array(
	    	new G2_Tool_Provider_ProjectG2()
        );
    }
}