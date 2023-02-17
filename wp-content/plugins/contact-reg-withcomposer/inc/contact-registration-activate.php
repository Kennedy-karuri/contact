<?php
/**
 *  @package ContactRegistrationWithComposer
 */

 class ContactRegActivate{
    static function activate(){
        flush_rewrite_rules();
    }
 }