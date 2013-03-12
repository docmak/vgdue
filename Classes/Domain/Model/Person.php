<?php
namespace USCHI\TuVgdue\Domain\Model;

/***************************************************************
 *  Copyright notice
 *
 *  (c) 2013 Dex <david.h.vogt@gmail.com>
 *  Fabian <f.m.stein@gmail.com>, Stein & Scheibe
 *  
 *  All rights reserved
 *
 *  This script is part of the TYPO3 project. The TYPO3 project is
 *  free software; you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation; either version 3 of the License, or
 *  (at your option) any later version.
 *
 *  The GNU General Public License can be found at
 *  http://www.gnu.org/copyleft/gpl.html.
 *
 *  This script is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU General Public License for more details.
 *
 *  This copyright notice MUST APPEAR in all copies of the script!
 ***************************************************************/

/**
 *
 *
 * @package tu_vgdue
 * @license http://www.gnu.org/licenses/gpl.html GNU General Public License, version 3 or later
 *
 */
class Person extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity {

	/**
	 * firstName
	 *
	 * @var \string
	 * @validate NotEmpty
	 */
	protected $firstName;

	/**
	 * lastName
	 *
	 * @var \string
	 * @validate NotEmpty
	 */
	protected $lastName;

	/**
	 * email
	 *
	 * @var \string
	 * @validate NotEmpty
	 */
	protected $email;

	/**
	 * image
	 *
	 * @var \string
	 */
	protected $image;

	/**
	 * telephone
	 *
	 * @var \string
	 */
	protected $telephone;

	/**
	 * mobilePhone
	 *
	 * @var \string
	 */
	protected $mobilePhone;

	/**
	 * address
	 *
	 * @var \string
	 */
	protected $address;

	/**
	 * interpreter
	 *
	 * @var boolean
	 */
	protected $interpreter = FALSE;

	/**
	 * translator
	 *
	 * @var boolean
	 */
	protected $translator = FALSE;

	/**
	 * languages
	 *
	 * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\USCHI\TuVgdue\Domain\Model\Language>
	 */
	protected $languages;

	/**
	 * __construct
	 *
	 * @return Person
	 */
	public function __construct() {
		//Do not remove the next line: It would break the functionality
		$this->initStorageObjects();
	}

	/**
	 * Initializes all ObjectStorage properties.
	 *
	 * @return void
	 */
	protected function initStorageObjects() {
		/**
		 * Do not modify this method!
		 * It will be rewritten on each save in the extension builder
		 * You may modify the constructor of this class instead
		 */
		$this->languages = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
	}

	/**
	 * Returns the firstName
	 *
	 * @return \string $firstName
	 */
	public function getFirstName() {
		return $this->firstName;
	}

	/**
	 * Sets the firstName
	 *
	 * @param \string $firstName
	 * @return void
	 */
	public function setFirstName($firstName) {
		$this->firstName = $firstName;
	}

	/**
	 * Returns the lastName
	 *
	 * @return \string $lastName
	 */
	public function getLastName() {
		return $this->lastName;
	}

	/**
	 * Sets the lastName
	 *
	 * @param \string $lastName
	 * @return void
	 */
	public function setLastName($lastName) {
		$this->lastName = $lastName;
	}

	/**
	 * Returns the email
	 *
	 * @return \string $email
	 */
	public function getEmail() {
		return $this->email;
	}

	/**
	 * Sets the email
	 *
	 * @param \string $email
	 * @return void
	 */
	public function setEmail($email) {
		$this->email = $email;
	}

	/**
	 * Returns the image
	 *
	 * @return \string $image
	 */
	public function getImage() {
		return $this->image;
	}

	/**
	 * Sets the image
	 *
	 * @param \string $image
	 * @return void
	 */
	public function setImage($image) {
		$this->image = $image;
	}

	/**
	 * Returns the telephone
	 *
	 * @return \string $telephone
	 */
	public function getTelephone() {
		return $this->telephone;
	}

	/**
	 * Sets the telephone
	 *
	 * @param \string $telephone
	 * @return void
	 */
	public function setTelephone($telephone) {
		$this->telephone = $telephone;
	}

	/**
	 * Returns the mobilePhone
	 *
	 * @return \string $mobilePhone
	 */
	public function getMobilePhone() {
		return $this->mobilePhone;
	}

	/**
	 * Sets the mobilePhone
	 *
	 * @param \string $mobilePhone
	 * @return void
	 */
	public function setMobilePhone($mobilePhone) {
		$this->mobilePhone = $mobilePhone;
	}

	/**
	 * Returns the address
	 *
	 * @return \string $address
	 */
	public function getAddress() {
		return $this->address;
	}

	/**
	 * Sets the address
	 *
	 * @param \string $address
	 * @return void
	 */
	public function setAddress($address) {
		$this->address = $address;
	}

	/**
	 * Returns the interpreter
	 *
	 * @return boolean $interpreter
	 */
	public function getInterpreter() {
		return $this->interpreter;
	}

	/**
	 * Sets the interpreter
	 *
	 * @param boolean $interpreter
	 * @return void
	 */
	public function setInterpreter($interpreter) {
		$this->interpreter = $interpreter;
	}

	/**
	 * Returns the boolean state of interpreter
	 *
	 * @return boolean
	 */
	public function isInterpreter() {
		return $this->getInterpreter();
	}

	/**
	 * Returns the translator
	 *
	 * @return boolean $translator
	 */
	public function getTranslator() {
		return $this->translator;
	}

	/**
	 * Sets the translator
	 *
	 * @param boolean $translator
	 * @return void
	 */
	public function setTranslator($translator) {
		$this->translator = $translator;
	}

	/**
	 * Returns the boolean state of translator
	 *
	 * @return boolean
	 */
	public function isTranslator() {
		return $this->getTranslator();
	}

	/**
	 * Adds a Language
	 *
	 * @param \USCHI\TuVgdue\Domain\Model\Language $language
	 * @return void
	 */
	public function addLanguage(\USCHI\TuVgdue\Domain\Model\Language $language) {
		$this->languages->attach($language);
	}

	/**
	 * Removes a Language
	 *
	 * @param \USCHI\TuVgdue\Domain\Model\Language $languageToRemove The Language to be removed
	 * @return void
	 */
	public function removeLanguage(\USCHI\TuVgdue\Domain\Model\Language $languageToRemove) {
		$this->languages->detach($languageToRemove);
	}

	/**
	 * Returns the languages
	 *
	 * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\USCHI\TuVgdue\Domain\Model\Language> $languages
	 */
	public function getLanguages() {
		return $this->languages;
	}

	/**
	 * Sets the languages
	 *
	 * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\USCHI\TuVgdue\Domain\Model\Language> $languages
	 * @return void
	 */
	public function setLanguages(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $languages) {
		$this->languages = $languages;
	}

}
?>