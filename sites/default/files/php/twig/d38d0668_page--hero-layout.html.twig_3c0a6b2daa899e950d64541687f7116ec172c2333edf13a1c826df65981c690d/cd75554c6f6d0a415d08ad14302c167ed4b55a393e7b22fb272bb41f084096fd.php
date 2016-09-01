<?php

/* themes/beanstalk/templates/page--hero-layout.html.twig */
class __TwigTemplate_da48524af9530b41c5ad753a0bd8af66ece3c50a779bce28ceeb4a596dffc739 extends Twig_Template
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
        $tags = array("if" => 56);
        $filters = array();
        $functions = array("attach_library" => 45);

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('if'),
                array(),
                array('attach_library')
            );
        } catch (Twig_Sandbox_SecurityError $e) {
            $e->setTemplateFile($this->getTemplateName());

            if ($e instanceof Twig_Sandbox_SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

        // line 45
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->env->getExtension('drupal_core')->attachLibrary("beanstalk/hero-layout"), "html", null, true));
        echo "

<div class=\"layout-container hero-layout\">

  <header role=\"banner\">
    ";
        // line 50
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "html", null, true));
        echo "
  </header>

  <main role=\"main\">
    <a id=\"main-content\" tabindex=\"-1\"></a>";
        // line 55
        echo "
    ";
        // line 56
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "hero", array())) {
            // line 57
            echo "      <div class=\"layout-hero\">
        ";
            // line 58
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "hero", array()), "html", null, true));
            echo "
      </div>";
            // line 60
            echo "    ";
        }
        // line 61
        echo "
    <div class=\"layout-content\">
      ";
        // line 63
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array()), "html", null, true));
        echo "
    </div>";
        // line 65
        echo "
  </main>

  ";
        // line 68
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer", array())) {
            // line 69
            echo "    <footer role=\"contentinfo\">
      ";
            // line 70
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer", array()), "html", null, true));
            echo "
    </footer>
  ";
        }
        // line 73
        echo "
</div>";
    }

    public function getTemplateName()
    {
        return "themes/beanstalk/templates/page--hero-layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  97 => 73,  91 => 70,  88 => 69,  86 => 68,  81 => 65,  77 => 63,  73 => 61,  70 => 60,  66 => 58,  63 => 57,  61 => 56,  58 => 55,  51 => 50,  43 => 45,);
    }
}
/* {#*/
/* /***/
/*  * @file*/
/*  * Theme override to display a single page.*/
/*  **/
/*  * The doctype, html, head and body tags are not in this template. Instead they*/
/*  * can be found in the html.html.twig template in this directory.*/
/*  **/
/*  * Available variables:*/
/*  **/
/*  * General utility variables:*/
/*  * - base_path: The base URL path of the Drupal installation. Will usually be*/
/*  *   "/" unless you have installed Drupal in a sub-directory.*/
/*  * - is_front: A flag indicating if the current page is the front page.*/
/*  * - logged_in: A flag indicating if the user is registered and signed in.*/
/*  * - is_admin: A flag indicating if the user has permission to access*/
/*  *   administration pages.*/
/*  **/
/*  * Site identity:*/
/*  * - front_page: The URL of the front page. Use this instead of base_path when*/
/*  *   linking to the front page. This includes the language domain or prefix.*/
/*  **/
/*  * Page content (in order of occurrence in the default page.html.twig):*/
/*  * - node: Fully loaded node, if there is an automatically-loaded node*/
/*  *   associated with the page and the node ID is the second argument in the*/
/*  *   page's path (e.g. node/12345 and node/12345/revisions, but not*/
/*  *   comment/reply/12345).*/
/*  **/
/*  * Regions:*/
/*  * - page.header: Items for the header region.*/
/*  * - page.primary_menu: Items for the primary menu region.*/
/*  * - page.secondary_menu: Items for the secondary menu region.*/
/*  * - page.highlighted: Items for the highlighted content region.*/
/*  * - page.help: Dynamic help text, mostly for admin pages.*/
/*  * - page.content: The main content of the current page.*/
/*  * - page.sidebar_first: Items for the first sidebar.*/
/*  * - page.sidebar_second: Items for the second sidebar.*/
/*  * - page.footer: Items for the footer region.*/
/*  * - page.breadcrumb: Items for the breadcrumb region.*/
/*  **/
/*  * @see template_preprocess_page()*/
/*  * @see html.html.twig*/
/*  *//* */
/* #}*/
/* {{ attach_library('beanstalk/hero-layout') }}*/
/* */
/* <div class="layout-container hero-layout">*/
/* */
/*   <header role="banner">*/
/*     {{ page.header }}*/
/*   </header>*/
/* */
/*   <main role="main">*/
/*     <a id="main-content" tabindex="-1"></a>{# link is in html.html.twig #}*/
/* */
/*     {% if page.hero %}*/
/*       <div class="layout-hero">*/
/*         {{ page.hero }}*/
/*       </div>{# /.layout-hero #}*/
/*     {% endif %}*/
/* */
/*     <div class="layout-content">*/
/*       {{ page.content }}*/
/*     </div>{# /.layout-content #}*/
/* */
/*   </main>*/
/* */
/*   {% if page.footer %}*/
/*     <footer role="contentinfo">*/
/*       {{ page.footer }}*/
/*     </footer>*/
/*   {% endif %}*/
/* */
/* </div>{# /.layout-container #}*/
/* */
