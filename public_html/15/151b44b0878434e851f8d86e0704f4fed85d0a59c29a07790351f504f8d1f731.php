<?php

/* index.html */
class __TwigTemplate_5d0728d567eae66a0cc64a498f8824dfd6911d1fc90ce13a4e202b5446a652ce extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\" dir=\"ltr\">
  <head>
    <meta charset=\"utf-8\">
    <link rel=\"stylesheet\" href=\"static/css/master.css\">
    <link rel=\"stylesheet\" href=\"master.css\">
    <link rel=\"stylesheet\" href=\"https://use.fontawesome.com/releases/v5.6.3/css/all.css\" integrity=\"sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/\" crossorigin=\"anonymous\">
    <title>Webbsite of Oscar</title>
  </head>
  <body>
    <div class=\"wrapper\">
      <div class=\"header-container\">
          <h1>Hello There... <strong>COMRADE!</strong></h1>

      </div>

      <!-- WARNING: DO NOT TOUCH THE FIRST TWO DIVS HERE! -->
      <div class=\"main-container background-test\">
        <div class=\"background-test-2\"></div>
        <!-- WARNING: REALLY I MEAN IT! -->

        <div class=\"one\">
          <p class=\"\"style=\"color: white;\">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        </div>
      </div>
      <div class=\"footer-container\">
        <div class=\"footer-text\">
          <p>Created by a bored person...</p>
          <p>AKA: Oscar Freij</p>
        </div>
        <div class=\"media-container\">

          <div class=\"insta_button\" onclick=\"location.href='https://www.instagram.com/oscarf02/';\"><i class=\"fab fa-instagram\"></i></div>

          <div class=\"face_button\" onclick=\"location.href='https://www.facebook.com/oscar.freij';\"><i class=\"fab fa-facebook-square\"></i></div>

          <div class=\"git_button\" onclick=\"location.href='https://github.com/OggeTheGamer';\"><i class=\"fab fa-git-square\"></i></div>

          <div class=\"li_button\" onclick=\"location.href='https://www.linkedin.com/in/oscar-freij-4a5690165';\"><i class=\"fab fa-linkedin\"></i></div>
        </div>
        <div class=\"QR\">
          <img class=\"QR\" src=\"static/media/src-image/QR-Special.png\" alt=\"WHAT BROWSER ARE YOU USING?! REALLY?!\">
        </div>
      </div>
    </div>
  </body>
</html>
";
    }

    public function getTemplateName()
    {
        return "index.html";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "index.html", "/home/18osfr/private_html/templates/index.html");
    }
}
