<?php 
/**
	Admin Page Framework v3.8.12 by Michael Uno 
	Generated by PHP Class Files Script Generator <https://github.com/michaeluno/PHP-Class-Files-Script-Generator>
	<http://en.michaeluno.jp/collapsing.category-list>
	Copyright (c) 2013-2016, Michael Uno; Licensed under MIT <http://opensource.org/licenses/MIT> */
class collapsingCategoryList_AdminPageFramework_Factory_View__SettingNotice extends collapsingCategoryList_AdminPageFramework_FrameworkUtility {
    public $oFactory;
    public function __construct($oFactory, $sActionHookName = 'admin_notices') {
        $this->oFactory = $oFactory;
        add_action($sActionHookName, array($this, '_replyToPrintSettingNotice'));
    }
    public function _replyToPrintSettingNotice() {
        if (!$this->_shouldProceed()) {
            return;
        }
        $this->oFactory->oForm->printSubmitNotices();
    }
    private function _shouldProceed() {
        if (!$this->oFactory->_isInThePage()) {
            return false;
        }
        if ($this->hasBeenCalled(__METHOD__)) {
            return false;
        }
        return isset($this->oFactory->oForm);
    }
}