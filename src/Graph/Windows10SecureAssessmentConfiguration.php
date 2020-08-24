<?php

/**
 * Generated by phpSPO model generator 2020-05-26T22:10:14+00:00 
 */
namespace Office365\Graph;

use Office365\Runtime\ClientObject;
use Office365\Runtime\ResourcePath;
class Windows10SecureAssessmentConfiguration extends ClientObject
{
    /**
     * @return string
     */
    public function getLaunchUri()
    {
        if (!$this->isPropertyAvailable("LaunchUri")) {
            return null;
        }
        return $this->getProperty("LaunchUri");
    }
    /**
     * @var string
     */
    public function setLaunchUri($value)
    {
        $this->setProperty("LaunchUri", $value, true);
    }
    /**
     * @return string
     */
    public function getConfigurationAccount()
    {
        if (!$this->isPropertyAvailable("ConfigurationAccount")) {
            return null;
        }
        return $this->getProperty("ConfigurationAccount");
    }
    /**
     * @var string
     */
    public function setConfigurationAccount($value)
    {
        $this->setProperty("ConfigurationAccount", $value, true);
    }
    /**
     * @return bool
     */
    public function getAllowPrinting()
    {
        if (!$this->isPropertyAvailable("AllowPrinting")) {
            return null;
        }
        return $this->getProperty("AllowPrinting");
    }
    /**
     * @var bool
     */
    public function setAllowPrinting($value)
    {
        $this->setProperty("AllowPrinting", $value, true);
    }
    /**
     * @return bool
     */
    public function getAllowScreenCapture()
    {
        if (!$this->isPropertyAvailable("AllowScreenCapture")) {
            return null;
        }
        return $this->getProperty("AllowScreenCapture");
    }
    /**
     * @var bool
     */
    public function setAllowScreenCapture($value)
    {
        $this->setProperty("AllowScreenCapture", $value, true);
    }
    /**
     * @return bool
     */
    public function getAllowTextSuggestion()
    {
        if (!$this->isPropertyAvailable("AllowTextSuggestion")) {
            return null;
        }
        return $this->getProperty("AllowTextSuggestion");
    }
    /**
     * @var bool
     */
    public function setAllowTextSuggestion($value)
    {
        $this->setProperty("AllowTextSuggestion", $value, true);
    }
}