<?php
/**
 *  @package ContactRegistrationWithComposer
 */

 class ContactRegDectivate{
    static function deactivate(){
        flush_rewrite_rules();
    }
 }