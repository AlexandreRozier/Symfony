<?php

namespace Test\BlogBundle\Antispam;

class TestAntispam extends \Twig_Extension
{
  protected $mailer;
  protected $locale;
  protected $nbForSpam;

  public function __construct(\Swift_Mailer $mailer, $locale, $nbForSpam)
  {
    $this->mailer=$mailer;
    $this->locale=$locale;
    $this->nbForSpam=(int)$nbForSpam;
  }
  /**
  * Vérifie si le texte est un spam ou non.
  * @param  string  $text [description]
  * @return boolean       [description]
  */
  public function isSpam($text)
  {
    return ($this->countLinks($text)+$this->countMails($text)
    ) >= $this->nbForSpam;
  }

  /**
  * Compte le nombre de liens dans le texte
  * @param  [type] $text [description]
  * @return [type]       [description]
  */
  private function countLinks($text)
  {
    preg_match_all(
    '#(http|https|ftp)://([A-Z0-9][A-Z0-9_-]*(?:.[A-Z0-9][A-Z0-9_-]*)+):?(d+)?/?#i',
    $text,
    $matches);
    return count($matches[0]);
  }

  private function countMails($text){
    preg_match_all(
    '#[a-z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}#i',
    $text,
    $matches
  );
  return count($matches[0]);
}

    public function getFunctions()
    {
        return array(
            'checkIfSpam' => new \Twig_Function_Method($this, 'isSpam'),

        );
    }
    /**
     * Returns the name of the extension.
     *
     * @return string The extension name
     */
    public function getName()
    {
        return('TestAntispam');
    }
}
