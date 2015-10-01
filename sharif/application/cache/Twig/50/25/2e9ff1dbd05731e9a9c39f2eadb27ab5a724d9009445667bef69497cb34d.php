<?php

/* pages/admin/edit_problem_html.twig */
class __TwigTemplate_50252e9ff1dbd05731e9a9c39f2eadb27ab5a724d9009445667bef69497cb34d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("templates/base.twig");

        $this->blocks = array(
            'icon' => array($this, 'block_icon'),
            'title' => array($this, 'block_title'),
            'head_title' => array($this, 'block_head_title'),
            'other_assets' => array($this, 'block_other_assets'),
            'main_content' => array($this, 'block_main_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "templates/base.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 6
        $context["selected"] = "problems";
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 8
    public function block_icon($context, array $blocks = array())
    {
        echo "fa-edit";
    }

    // line 9
    public function block_title($context, array $blocks = array())
    {
        echo "Edit Problem Description (HTML)";
    }

    // line 10
    public function block_head_title($context, array $blocks = array())
    {
        echo "Edit Problem Description (HTML)";
    }

    // line 14
    public function block_other_assets($context, array $blocks = array())
    {
        // line 15
        echo "<script type='text/javascript' src=\"";
        echo base_url("assets/tinymce/tinymce.min.js");
        echo "\"></script>
<script>
\$(document).ready(function(){
\ttinymce.init({
\t\tselector: 'textarea',
\t\ttoolbar_items_size: 'small',
\t\trelative_urls: false,
\t\twidth: 700,
\t\theight: 300,
\t\tresize: false,
\t\tplugins: 'directionality emoticons textcolor link code',
\t\ttoolbar1: 'undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | ltr rtl',
\t\ttoolbar2: 'forecolor backcolor | emoticons | link unlink anchor image media code | removeformat'
\t});
});
</script>
";
    }

    // line 35
    public function block_main_content($context, array $blocks = array())
    {
        // line 36
        echo "<p>
\tAssignment ";
        // line 37
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["description_assignment"]) ? $context["description_assignment"] : null), "id"), "html", null, true);
        echo " (<span dir=\"auto\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["description_assignment"]) ? $context["description_assignment"] : null), "name"), "html", null, true);
        echo "</span>)<br>
\tProblem ";
        // line 38
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["problem"]) ? $context["problem"] : null), "id"), "html", null, true);
        echo "
</p>
<p>
\t<i class=\"fa fa-warning color3\"></i>
\tWhen you edit as html, the markdown code will be removed.
</p>
";
        // line 44
        echo form_open(((("problems/edit/html/" . $this->getAttribute((isset($context["description_assignment"]) ? $context["description_assignment"] : null), "id")) . "/") . $this->getAttribute((isset($context["problem"]) ? $context["problem"] : null), "id")));
        echo "
<p class=\"input_p\">
\t<textarea name=\"text\">";
        // line 46
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["problem"]) ? $context["problem"] : null), "description"), "html", null, true);
        echo "</textarea>
</p>
<p class=\"input_p\">
\t<input type=\"submit\" value=\"Save\" class=\"sharif_input\"/>
</p>
</form>
";
    }

    public function getTemplateName()
    {
        return "pages/admin/edit_problem_html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  103 => 46,  98 => 44,  89 => 38,  83 => 37,  80 => 36,  77 => 35,  55 => 15,  52 => 14,  46 => 10,  40 => 9,  34 => 8,  29 => 6,);
    }
}
