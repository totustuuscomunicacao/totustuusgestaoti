<?php

namespace Source\Support;

use Source\Core\Session;
use Stichoza\GoogleTranslate\GoogleTranslate;

/**
 * TOTUSTUUS | Class Language
 *
 * @author Jefferson A. G. Silva <contato@totustuus.com.br>
 * @package Source\Support
 */
class Language
{

    /** @var string */
    private $language;

    /**
     * @return string
     */
    public function __toString()
    {
        return $this->render();
    }

    /**
     * @return string
     */
    public function getLanguage(): ?string
    {
        return $this->language;
    }

    /**
    * @param string $text
    * @return Language
    */
    public function translator(string $text): Language
    {
        $session = new Session();

        $lang = new GoogleTranslate( "{$session->SessionLanguage}");

        if($session->SessionLanguage == "pt-BR" || $session->SessionLanguage == "pt-br"):
            $this->language = $text;
        else:
            $this->language = $this->filter($lang->translate($text));
        endif;
    return $this;
    }

    /**
     * @return string
     */
    public function render(): string
    {
        return $this->getLanguage();
    }

    /**
     * @param string $text
     * @return string
     */
    private function filter(string $text): string
    {
        return filter_var($text, FILTER_SANITIZE_STRIPPED);
    }

}