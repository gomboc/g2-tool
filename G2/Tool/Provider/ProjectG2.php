<?php

require_once 'Zend/Tool/Framework/Provider/Interface.php';


class G2_Tool_Provider_ProjectG2 extends Zend_Tool_Project_Provider_Project implements Zend_Tool_Framework_Provider_Interface
{
	
	
    public function say()
    {
        echo 'project-g2';
    }

    
    protected function _getDefaultProfile()
    {
        $testAction = '';
        if (Zend_Tool_Project_Provider_Test::isPHPUnitAvailable()) {
            $testAction = '                    	<testApplicationActionMethod forActionName="index" />';
        }
        
        $version = Zend_Version::VERSION;

        $data = <<<EOS
<?xml version="1.0" encoding="UTF-8"?>
<projectProfile type="default" version="$version">
    <projectDirectory>
        <projectProfileFile />
        <applicationDirectory>
            <apisDirectory enabled="false" />
            <configsDirectory>
                <applicationConfigFile type="xml" />
            </configsDirectory>
            <formsDirectory />
            <layoutsDirectory />
            <modelsDirectory />
            <modulesDirectory />
            <bootstrapFile />
        </applicationDirectory>
        <dataDirectory>
            <cacheDirectory />
            <searchIndexesDirectory enabled="false" />
            <localesDirectory />
            <logsDirectory />
            <sessionsDirectory enabled="false" />
            <uploadsDirectory enabled="false" />
        </dataDirectory>
        <docsDirectory>
            <file filesystemName="README.txt" defaultContentCallback="Zend_Tool_Project_Provider_Project::getDefaultReadmeContents"/>
        </docsDirectory>
        <libraryDirectory>
            <zfStandardLibraryDirectory enabled="false" />
        </libraryDirectory>
        <publicDirectory>
            <publicStylesheetsDirectory />
            <publicScriptsDirectory />
            <publicImagesDirectory />
            <publicIndexFile />
            <htaccessFile />
        </publicDirectory>
        <projectProvidersDirectory enabled="false" />
        <temporaryDirectory enabled="false" />
        <testsDirectory>
            <testPHPUnitConfigFile />
            <testPHPUnitBootstrapFile />
            <testApplicationDirectory>
                <testApplicationControllerDirectory>
                    <testApplicationControllerFile filesystemName="IndexControllerTest.php" forControllerName="Index">
$testAction
                    </testApplicationControllerFile>
                </testApplicationControllerDirectory>
      	    </testApplicationDirectory>
            <testLibraryDirectory />
        </testsDirectory>
    </projectDirectory>
</projectProfile>
EOS;
        return $data;
    }
}