<?php
/**
 * 	OpenSource-SocialNetwork
 *
 * @package   (Informatikon.com).ossn
 * @author    OSSN Core Team <info@opensource-socialnetwork.com>
 * @copyright 2014 iNFORMATIKON TECHNOLOGIES
 * @license   General Public Licence http://opensource-socialnetwork.com/licence 
 * @link      http://www.opensource-socialnetwork.com/licence
 */
$add = new OssnPhotos;
if($add->AddPhoto(input('album'), 'ossnphoto' ,input('privacy'))){
  redirect(REF);					
} else { 
  redirect(REF);					 
}