<?php
class AboutUsController extends FrontController
{
    public $php_self = 'about-us';

    public function initContent()
    {
        parent::initContent();

        $this->setTemplate(_PS_THEME_DIR_.'about-us.tpl');

        // $this->setTemplate('about-us.tpl');
    }
}
