<?php

use MailPoetVendor\Twig\Environment;
use MailPoetVendor\Twig\Error\LoaderError;
use MailPoetVendor\Twig\Error\RuntimeError;
use MailPoetVendor\Twig\Markup;
use MailPoetVendor\Twig\Sandbox\SecurityError;
use MailPoetVendor\Twig\Sandbox\SecurityNotAllowedTagError;
use MailPoetVendor\Twig\Sandbox\SecurityNotAllowedFilterError;
use MailPoetVendor\Twig\Sandbox\SecurityNotAllowedFunctionError;
use MailPoetVendor\Twig\Source;
use MailPoetVendor\Twig\Template;

/* form/templates/toolbar/exports.hbs */
class __TwigTemplate_a8288fdac48cf3ae127abb40113e4995fc9ccf8eb0901bc111e46926e9f42edb extends \MailPoetVendor\Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo "{{#each exports}}
  <textarea class=\"mailpoet_form_export_output\" id=\"mailpoet_form_export_{{ @key }}\" onClick=\"this.focus();this.select();\" readonly=\"readonly\">{{ this }}</textarea>
{{/each}}";
    }

    public function getTemplateName()
    {
        return "form/templates/toolbar/exports.hbs";
    }

    public function getDebugInfo()
    {
        return array (  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "form/templates/toolbar/exports.hbs", "C:\\laragon\\www\\JipayGrasseBones\\wp-content\\plugins\\mailpoet\\views\\form\\templates\\toolbar\\exports.hbs");
    }
}
