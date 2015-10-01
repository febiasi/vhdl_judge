<?php

/* pages/problems.twig */
class __TwigTemplate_34d3e8946cea01c86ffedbcbf6cee785d326602547eabcac420d1a3acaa35dd7 extends Twig_Template
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
            'title_menu' => array($this, 'block_title_menu'),
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
        echo "fa-puzzle-piece";
    }

    // line 9
    public function block_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["all_problems"]) ? $context["all_problems"] : null), $this->getAttribute((isset($context["problem"]) ? $context["problem"] : null), "id"), array(), "array"), "name"), "html", null, true);
    }

    // line 10
    public function block_head_title($context, array $blocks = array())
    {
        echo "Problem ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["problem"]) ? $context["problem"] : null), "id"), "html", null, true);
    }

    // line 14
    public function block_other_assets($context, array $blocks = array())
    {
        // line 15
        echo "<link rel='stylesheet' type='text/css' href='";
        echo base_url("assets/snippet/jquery.snippet.css");
        echo "'/>
<link rel='stylesheet' type='text/css' href='";
        // line 16
        echo base_url("assets/snippet/themes/github.css");
        echo "'/>
<script type='text/javascript' src=\"";
        // line 17
        echo base_url("assets/snippet/jquery.snippet.js");
        echo "\"></script>
<script>
\$(document).ready(function(){
\t// Syntax highlighting increases the page's height, and we need to update the scroll-bar
\t\$('.problem_description').resize(function(){
\t\t\$('.scroll-wrapper').nanoScroller();
\t});
\t// Fix text directions for rtl text
\t\$.each(\$('.problem_description [dir=\"auto\"]'), function(i, element){
\t\tif (getComputedStyle(element).direction == 'rtl')
\t\t{
\t\t\t\$(element).css('direction', 'rtl');
\t\t\t\$(element).parent('ul, ol').css('direction', 'rtl');
\t\t}
\t});
\t// Syntax highlighting
\t\$('pre code.language-c').parent().snippet('c', {style: shj.color_scheme});
\t\$('pre code.language-cpp').parent().snippet('cpp', {style: shj.color_scheme});
\t\$('pre code.language-python').parent().snippet('python', {style: shj.color_scheme});
\t\$('pre code.language-java').parent().snippet('java', {style: shj.color_scheme});
});
</script>
";
    }

    // line 43
    public function block_title_menu($context, array $blocks = array())
    {
        // line 44
        if (($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "level") >= 2)) {
            // line 45
            echo "<span class=\"title_menu_item\"><a href=\"";
            echo site_url(((("problems/edit/md/" . $this->getAttribute((isset($context["description_assignment"]) ? $context["description_assignment"] : null), "id")) . "/") . $this->getAttribute((isset($context["problem"]) ? $context["problem"] : null), "id")));
            echo "\"><i class=\"fa fa-pencil color2\"></i> Edit Markdown</a></span>
<span class=\"title_menu_item\"><a href=\"";
            // line 46
            echo site_url(((("problems/edit/html/" . $this->getAttribute((isset($context["description_assignment"]) ? $context["description_assignment"] : null), "id")) . "/") . $this->getAttribute((isset($context["problem"]) ? $context["problem"] : null), "id")));
            echo "\"><i class=\"fa fa-pencil color10\"></i> Edit HTML</a></span>
<span class=\"title_menu_item\"><a href=\"";
            // line 47
            echo site_url(((("problems/edit/plain/" . $this->getAttribute((isset($context["description_assignment"]) ? $context["description_assignment"] : null), "id")) . "/") . $this->getAttribute((isset($context["problem"]) ? $context["problem"] : null), "id")));
            echo "\"><i class=\"fa fa-pencil color8\"></i> Edit Plain HTML</a></span>
";
            // line 48
            if ($this->getAttribute((isset($context["problem"]) ? $context["problem"] : null), "has_pdf")) {
                // line 49
                echo "<span class=\"title_menu_item\"><a href=\"";
                echo site_url(((("assignments/pdf/" . $this->getAttribute((isset($context["description_assignment"]) ? $context["description_assignment"] : null), "id")) . "/") . $this->getAttribute((isset($context["problem"]) ? $context["problem"] : null), "id")));
                echo "\"><i class=\"fa fa-download color1\"></i> PDF</a></span>
";
            }
        }
    }

    // line 56
    public function block_main_content($context, array $blocks = array())
    {
        // line 57
        echo "<div class=\"problem_description\">
\t";
        // line 58
        echo $this->getAttribute((isset($context["problem"]) ? $context["problem"] : null), "description");
        echo "
</div>

<div id=\"right_sidebar\">

\t<div class=\"problems_widget\">
\t\t<p dir=\"auto\"><i class=\"fa fa-file-text fa-lg color9\"></i> ";
        // line 64
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["description_assignment"]) ? $context["description_assignment"] : null), "name"), "html", null, true);
        echo "</p>

\t\t";
        // line 66
        if ((twig_length_filter($this->env, (isset($context["all_problems"]) ? $context["all_problems"] : null)) == 0)) {
            // line 67
            echo "\t\t\t<p style=\"text-align: center;\">Nothing to show...</p>
\t\t";
        }
        // line 69
        echo "
\t\t<table class=\"sharif_table\">
\t\t\t<thead>
\t\t\t<tr>
\t\t\t\t<th rowspan=\"2\">#</th>
\t\t\t\t<th rowspan=\"2\">Problem</th>
\t\t\t\t<th rowspan=\"2\">Score</th>
\t\t\t\t<th rowspan=\"2\">Upload<br>Only</th>
\t\t\t</tr>
\t\t\t</thead>
\t\t\t";
        // line 79
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["all_problems"]) ? $context["all_problems"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["one_problem"]) {
            // line 80
            echo "\t\t\t\t<tr";
            echo ((($this->getAttribute((isset($context["problem"]) ? $context["problem"] : null), "id") == $this->getAttribute((isset($context["one_problem"]) ? $context["one_problem"] : null), "id"))) ? (" class=\"hl\"") : (""));
            echo ">
\t\t\t\t\t<td>";
            // line 81
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["one_problem"]) ? $context["one_problem"] : null), "id"), "html", null, true);
            echo "</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t<a dir=\"auto\" href=\"";
            // line 83
            echo site_url(((("problems/" . $this->getAttribute((isset($context["description_assignment"]) ? $context["description_assignment"] : null), "id")) . "/") . $this->getAttribute((isset($context["one_problem"]) ? $context["one_problem"] : null), "id")));
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["one_problem"]) ? $context["one_problem"] : null), "name"), "html", null, true);
            echo "</a>
\t\t\t\t\t</td>
\t\t\t\t\t<td>";
            // line 85
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["one_problem"]) ? $context["one_problem"] : null), "score"), "html", null, true);
            echo "</td>
\t\t\t\t\t<td>";
            // line 86
            echo (($this->getAttribute((isset($context["one_problem"]) ? $context["one_problem"] : null), "is_upload_only")) ? ("Yes") : ("No"));
            echo "</td>
\t\t\t\t</tr>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['one_problem'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 89
        echo "\t\t</table>
\t</div>

\t";
        // line 92
        if ((isset($context["can_submit"]) ? $context["can_submit"] : null)) {
            // line 93
            echo "\t<div class=\"problems_widget\">
\t\t<p><i class=\"fa fa-upload fa-lg color11\"></i> Submit</p>
\t\t";
            // line 95
            echo form_open_multipart("submit");
            echo "
\t\t<input type=\"hidden\" name=\"problem\" value=\"";
            // line 96
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["problem"]) ? $context["problem"] : null), "id"), "html", null, true);
            echo "\"/>

\t\t<p class=\"input_p\">
\t\t\t<select id=\"languages\" name=\"language\" class=\"sharif_input full-width\">
\t\t\t\t<option value=\"0\" selected=\"selected\">-- Select Language --</option>
\t\t\t\t";
            // line 101
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["problem"]) ? $context["problem"] : null), "allowed_languages"));
            foreach ($context['_seq'] as $context["_key"] => $context["l"]) {
                // line 102
                echo "\t\t\t\t\t<option value=\"";
                echo twig_escape_filter($this->env, (isset($context["l"]) ? $context["l"] : null), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, (isset($context["l"]) ? $context["l"] : null), "html", null, true);
                echo "</option>
\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['l'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 104
            echo "\t\t\t</select>
\t\t</p>
\t\t<p class=\"input_p\">
\t\t\t<input type=\"file\" id=\"file\" class=\"sharif_input full-width\" name=\"userfile\"/>
\t\t</p>
\t\t<p class=\"input_p\">
\t\t\t<input type=\"submit\" value=\"Submit\" class=\"sharif_input\"/>
\t\t</p>
\t\t</form>
\t</div>
\t";
        }
        // line 115
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "pages/problems.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  245 => 115,  232 => 104,  221 => 102,  217 => 101,  209 => 96,  205 => 95,  201 => 93,  199 => 92,  194 => 89,  185 => 86,  181 => 85,  174 => 83,  169 => 81,  164 => 80,  160 => 79,  148 => 69,  144 => 67,  142 => 66,  137 => 64,  128 => 58,  125 => 57,  122 => 56,  113 => 49,  111 => 48,  107 => 47,  103 => 46,  98 => 45,  96 => 44,  93 => 43,  66 => 17,  62 => 16,  57 => 15,  54 => 14,  47 => 10,  41 => 9,  35 => 8,  30 => 6,);
    }
}
