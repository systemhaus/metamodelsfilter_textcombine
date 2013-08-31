<?php

/**
 * The MetaModels extension allows the creation of multiple collections of custom items,
 * each with its own unique set of selectable attributes, with attribute extendability.
 * The Front-End modules allow you to build powerful listing and filtering of the
 * data in each collection.
 *
 * PHP version 5
 * @package    MetaModels
 * @subpackage FilterTextCombine
 * @author     Christopher Bölter <c.boelter@cogizz.de>
 * @copyright  Cogizz - web solutions
 * @license    LGPL.
 * @filesource
 */

/**
 * filter types
 */
$GLOBALS['TL_LANG']['tl_metamodel_filtersetting']['typenames']['textcombine']     = 'Kombinierter-Textfilter';


/**
 * fields
 */
$GLOBALS['TL_LANG']['tl_metamodel_filtersetting']['textsearch']   = array('Suchart', 'Teiltext-Findung bei Textsuche.');
$GLOBALS['TL_LANG']['tl_metamodel_filtersetting']['textcombine_attributes'] = array('Suchfelder', 'Durchsuchbare Attribute.');
$GLOBALS['TL_LANG']['tl_metamodel_filtersetting']['textcombine_operator'] = array('Verknüpfung der Suchfelder', 'Art der Verknüpfung für die Suchfelder.');

/**
 * references
 */
$GLOBALS['TL_LANG']['tl_metamodel_filtersetting']['references']['exact']      = 'exakte Suche';
$GLOBALS['TL_LANG']['tl_metamodel_filtersetting']['references']['beginswith'] = 'beginnt mit Suchtext';
$GLOBALS['TL_LANG']['tl_metamodel_filtersetting']['references']['endswith']   = 'endet mit Suchtext';
$GLOBALS['TL_LANG']['tl_metamodel_filtersetting']['references']['OR']   = 'oder';
$GLOBALS['TL_LANG']['tl_metamodel_filtersetting']['references']['AND']   = 'und';