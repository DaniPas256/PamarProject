<?php

class ContentModel
{
    private $available_languages = [
        'pl' => [],
        'en' => [],
    ];
    private $language = 'pl';

    public function __construct($dir = './')
    {
        session_start();
        if (isset($_GET['lang'])) {
            $this->setLanguage($_GET['lang']);
        }

        $this->checkLanguage();
        require_once $dir . 'locale/' . $this->language . '.php';
        $this->available_languages[$this->language] = $language_content;
        unset($language_content);
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

    public function getTranslate($section)
    {
        return $this->available_languages[$this->language][$section];
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
