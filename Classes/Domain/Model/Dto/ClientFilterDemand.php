<?php

namespace T3Monitor\T3monitoring\Domain\Model\Dto;

/*
 * This file is part of the TYPO3 CMS project.
 *
 * It is free software; you can redistribute it and/or modify it under
 * the terms of the GNU General Public License, either version 2
 * of the License, or any later version.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 * The TYPO3 project - inspiring people to share!
 */

use TYPO3\CMS\Extbase\DomainObject\AbstractEntity;

class ClientFilterDemand extends AbstractEntity
{

    /** @var int */
    protected $version;

    /** @var int */
    protected $sla;

    /** @var string */
    protected $searchWord;

    /** @var bool */
    protected $withErrorMessage;

    /** @var bool */
    protected $withInsecureExtensions;

    /** @var bool */
    protected $withInsecureCore;

    /** @var bool */
    protected $withOutdatedCore;

    /** @var bool */
    protected $withOutdatedExtensions;

    /**
     * @return int
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * @param int $version
     * @return $this
     */
    public function setVersion($version)
    {
        $this->version = $version;
        return $this;
    }

    /**
     * @return int
     */
    public function getSla()
    {
        return $this->sla;
    }

    /**
     * @param int $sla
     * @return $this
     */
    public function setSla($sla)
    {
        $this->sla = $sla;
        return $this;
    }

    /**
     * @return string
     */
    public function getSearchWord()
    {
        return $this->searchWord;
    }

    /**
     * @param string $searchWord
     * @return $this
     */
    public function setSearchWord($searchWord)
    {
        $this->searchWord = $searchWord;
        return $this;
    }

    /**
     * @return boolean
     */
    public function isWithErrorMessage()
    {
        return $this->withErrorMessage;
    }

    /**
     * @param boolean $withErrorMessage
     * @return $this
     */
    public function setWithErrorMessage($withErrorMessage)
    {
        $this->withErrorMessage = $withErrorMessage;
        return $this;
    }

    /**
     * @return boolean
     */
    public function isWithInsecureExtensions()
    {
        return $this->withInsecureExtensions;
    }

    /**
     * @param boolean $withInsecureExtensions
     * @return $this
     */
    public function setWithInsecureExtensions($withInsecureExtensions)
    {
        $this->withInsecureExtensions = $withInsecureExtensions;
        return $this;
    }

    /**
     * @return boolean
     */
    public function isWithInsecureCore()
    {
        return $this->withInsecureCore;
    }

    /**
     * @param boolean $withInsecureCore
     * @return $this
     */
    public function setWithInsecureCore($withInsecureCore)
    {
        $this->withInsecureCore = $withInsecureCore;
        return $this;
    }

    /**
     * @return boolean
     */
    public function isWithOutdatedCore()
    {
        return $this->withOutdatedCore;
    }

    /**
     * @param boolean $withOutdatedCore
     * @return $this
     */
    public function setWithOutdatedCore($withOutdatedCore)
    {
        $this->withOutdatedCore = $withOutdatedCore;
        return $this;
    }

    /**
     * @return boolean
     */
    public function isWithOutdatedExtensions()
    {
        return $this->withOutdatedExtensions;
    }

    /**
     * @param boolean $withOutdatedExtensions
     * @return $this
     */
    public function setWithOutdatedExtensions($withOutdatedExtensions)
    {
        $this->withOutdatedExtensions = $withOutdatedExtensions;
        return $this;
    }

}