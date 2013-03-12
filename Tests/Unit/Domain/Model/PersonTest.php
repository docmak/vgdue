<?php

namespace USCHI\TuVgdue\Tests;
/***************************************************************
 *  Copyright notice
 *
 *  (c) 2013 Dex <david.h.vogt@gmail.com>
 *  			Fabian <f.m.stein@gmail.com>, Stein & Scheibe
 *  			
 *  All rights reserved
 *
 *  This script is part of the TYPO3 project. The TYPO3 project is
 *  free software; you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation; either version 2 of the License, or
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
 * Test case for class \USCHI\TuVgdue\Domain\Model\Person.
 *
 * @version $Id$
 * @copyright Copyright belongs to the respective authors
 * @license http://www.gnu.org/licenses/gpl.html GNU General Public License, version 3 or later
 *
 * @package TYPO3
 * @subpackage VGDUE
 *
 * @author Dex <david.h.vogt@gmail.com>
 * @author Fabian <f.m.stein@gmail.com>
 */
class PersonTest extends \TYPO3\CMS\Extbase\Tests\Unit\BaseTestCase {
	/**
	 * @var \USCHI\TuVgdue\Domain\Model\Person
	 */
	protected $fixture;

	public function setUp() {
		$this->fixture = new \USCHI\TuVgdue\Domain\Model\Person();
	}

	public function tearDown() {
		unset($this->fixture);
	}

	/**
	 * @test
	 */
	public function getFirstNameReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setFirstNameForStringSetsFirstName() { 
		$this->fixture->setFirstName('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getFirstName()
		);
	}
	
	/**
	 * @test
	 */
	public function getLastNameReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setLastNameForStringSetsLastName() { 
		$this->fixture->setLastName('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getLastName()
		);
	}
	
	/**
	 * @test
	 */
	public function getEmailReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setEmailForStringSetsEmail() { 
		$this->fixture->setEmail('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getEmail()
		);
	}
	
	/**
	 * @test
	 */
	public function getImageReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setImageForStringSetsImage() { 
		$this->fixture->setImage('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getImage()
		);
	}
	
	/**
	 * @test
	 */
	public function getTelephoneReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setTelephoneForStringSetsTelephone() { 
		$this->fixture->setTelephone('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getTelephone()
		);
	}
	
	/**
	 * @test
	 */
	public function getMobilePhoneReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setMobilePhoneForStringSetsMobilePhone() { 
		$this->fixture->setMobilePhone('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getMobilePhone()
		);
	}
	
	/**
	 * @test
	 */
	public function getAddressReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setAddressForStringSetsAddress() { 
		$this->fixture->setAddress('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getAddress()
		);
	}
	
	/**
	 * @test
	 */
	public function getInterpreterReturnsInitialValueForOolean() { }

	/**
	 * @test
	 */
	public function setInterpreterForOoleanSetsInterpreter() { }
	
	/**
	 * @test
	 */
	public function getTranslatorReturnsInitialValueForOolean() { }

	/**
	 * @test
	 */
	public function setTranslatorForOoleanSetsTranslator() { }
	
	/**
	 * @test
	 */
	public function getLanguagesReturnsInitialValueForLanguage() { 
		$newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\Generic\ObjectStorage();
		$this->assertEquals(
			$newObjectStorage,
			$this->fixture->getLanguages()
		);
	}

	/**
	 * @test
	 */
	public function setLanguagesForObjectStorageContainingLanguageSetsLanguages() { 
		$language = new \USCHI\TuVgdue\Domain\Model\Language();
		$objectStorageHoldingExactlyOneLanguages = new \TYPO3\CMS\Extbase\Persistence\Generic\ObjectStorage();
		$objectStorageHoldingExactlyOneLanguages->attach($language);
		$this->fixture->setLanguages($objectStorageHoldingExactlyOneLanguages);

		$this->assertSame(
			$objectStorageHoldingExactlyOneLanguages,
			$this->fixture->getLanguages()
		);
	}
	
	/**
	 * @test
	 */
	public function addLanguageToObjectStorageHoldingLanguages() {
		$language = new \USCHI\TuVgdue\Domain\Model\Language();
		$objectStorageHoldingExactlyOneLanguage = new \TYPO3\CMS\Extbase\Persistence\Generic\ObjectStorage();
		$objectStorageHoldingExactlyOneLanguage->attach($language);
		$this->fixture->addLanguage($language);

		$this->assertEquals(
			$objectStorageHoldingExactlyOneLanguage,
			$this->fixture->getLanguages()
		);
	}

	/**
	 * @test
	 */
	public function removeLanguageFromObjectStorageHoldingLanguages() {
		$language = new \USCHI\TuVgdue\Domain\Model\Language();
		$localObjectStorage = new \TYPO3\CMS\Extbase\Persistence\Generic\ObjectStorage();
		$localObjectStorage->attach($language);
		$localObjectStorage->detach($language);
		$this->fixture->addLanguage($language);
		$this->fixture->removeLanguage($language);

		$this->assertEquals(
			$localObjectStorage,
			$this->fixture->getLanguages()
		);
	}
	
}
?>