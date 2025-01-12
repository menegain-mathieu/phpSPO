<?php

/**
 * Generated  2023-01-13T18:22:53+02:00 16.0.23207.12005
 */
namespace Office365\SharePoint;

use Office365\Runtime\ClientObject;
use Office365\Runtime\Actions\DeleteEntityQuery;
use Office365\Runtime\ResourcePath;
use Office365\Runtime\Actions\UpdateEntityQuery;
class HomeSitesDetails extends BaseEntity
{
    /**
     * @return array
     */
    public function getAudiences()
    {
        return $this->getProperty("Audiences");
    }
    /**
     * @var array
     */
    public function setAudiences($value)
    {
        return $this->setProperty("Audiences", $value, true);
    }
    /**
     * @return array
     */
    public function getMatchingAudiences()
    {
        return $this->getProperty("MatchingAudiences");
    }
    /**
     * @var array
     */
    public function setMatchingAudiences($value)
    {
        return $this->setProperty("MatchingAudiences", $value, true);
    }
    /**
     * @return string
     */
    public function getSiteId()
    {
        return $this->getProperty("SiteId");
    }
    /**
     * @var string
     */
    public function setSiteId($value)
    {
        return $this->setProperty("SiteId", $value, true);
    }
    /**
     * @return string
     */
    public function getTitle()
    {
        return $this->getProperty("Title");
    }
    /**
     * @var string
     */
    public function setTitle($value)
    {
        return $this->setProperty("Title", $value, true);
    }
    /**
     * @return string
     */
    public function getUrl()
    {
        return $this->getProperty("Url");
    }
    /**
     * @var string
     */
    public function setUrl($value)
    {
        return $this->setProperty("Url", $value, true);
    }
    /**
     * @return string
     */
    public function getWebId()
    {
        return $this->getProperty("WebId");
    }
    /**
     * @var string
     */
    public function setWebId($value)
    {
        return $this->setProperty("WebId", $value, true);
    }
    /**
     * @var array
     */
    public $Audiences;
    /**
     * @var array
     */
    public $MatchingAudiences;
    /**
     * @var string
     */
    public $SiteId;
    /**
     * @var string
     */
    public $Title;
    /**
     * @var string
     */
    public $Url;
    /**
     * @var string
     */
    public $WebId;
    /**
     * @var bool
     */
    public $VivaConnectionsDefaultStart;
}