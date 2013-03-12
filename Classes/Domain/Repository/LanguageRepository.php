<?php
namespace USCHI\TuVgdue\Domain\Repository;

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
class LanguageRepository extends \TYPO3\CMS\Extbase\Persistence\Repository {

    protected $defaultOrderings = array(
        'name' => \TYPO3\CMS\Extbase\Persistence\QueryInterface::ORDER_ASCENDING
    );



    /**
     * @return array
     */
    public function findAllAndSort(){
        $records = $this->findAll();
        $sortedRecords = $this->sortRecords($records);
        return $sortedRecords;
    }



    /**
     * @param $records
     * @return array
     */
    private function sortRecords($records){
        $sortedRecords = array();
        $count = count($records);
        switch ($count%3){
            case 2:
                $modulo = $count;
                break;
            case 1:
                $modulo = $count+1;
                break;
            default:
                $modulo = $count-1;
                break;
        }
        $i = 0;
        foreach($records as $record){
            $sortedRecords[$i] = $record;
            var_dump($sortedRecords);
            $i = ($i+3)%($modulo);
            echo('<br/><br/>');
            var_dump($i);
            echo('<br/><br/>');
        }
        var_dump($sortedRecords);
        $numberOfSpaces = (ceil(count($records)/3))*3;
        $sortedRecords = $this->fillEmptySpaces($sortedRecords, $numberOfSpaces);
        ksort($sortedRecords);
        return $sortedRecords;
    }


    
    /**
     * @param array $sortedRecords
     * @param int $numberOfSpaces
     * @return array
     */
    private function fillEmptySpaces($sortedRecords, $numberOfSpaces){
        for($j=0;$j<$numberOfSpaces;$j++){
            if(!array_key_exists($j,$sortedRecords)){
                $sortedRecords[$j]='0';
            }
        }
        return $sortedRecords;
    }

}
?>