<?php
global $__API;
global $__PAGE_NAME__;

class ContentModel
{
    private $available_languages = [
        'pl' => [],
        'en' => [],
    ];
    private $language_ids = [
        'pl' => 1,
        'en' => 2
    ];
    private $language = 'pl';

    function getDataForPage( $page_name = null ){
        global $__API;
        global $__PAGE_NAME__;

        if( $page_name == null ){
            $page_name = $__PAGE_NAME__;
        }
        
        return json_decode( file_get_contents( $__API . 'get_page_content/' . $page_name . '/' . $this->language_ids[ $this->language ] ), true );
    }

    public function __construct()
    {
        session_start();
        if (isset($_GET['lang'])) {
            $this->setLanguage($_GET['lang']);
        }

        $this->checkLanguage();
        $this->available_languages[$this->language] = $this->getDataForPage();
    }

    public function checkLanguage()
    {
        if (isset($_SESSION['language']) && isset($this->available_languages[$_SESSION['language']])) {
            $this->language = $_SESSION['language'];
        } else {
            $this->language = 'pl';
        }
    }

    public function setLanguage($lang)
    {
        if (isset($this->available_languages[$lang])) {
            $_SESSION['language'] = $lang;
        }
    }

    public function getTranslate($section, $global = false)
    {
        return $this->available_languages[$this->language]['dict'][$section];
    }

    public function getLanguage()
    {
        return $this->language;
    }

    public function getKeywords()
    {
        return '
            <meta name="description" content="' . $this->getTranslate('seo_description') . '">
            <meta name="keywords" content="' . $this->getTranslate('seo_keywords') . '">
        ';
    }

    public function getOthersLanguages()
    {
        $langs = array_keys($this->available_languages);
        return array_filter($langs, function ($lang) {
            return $lang != $this->language;
        });
    }
}
