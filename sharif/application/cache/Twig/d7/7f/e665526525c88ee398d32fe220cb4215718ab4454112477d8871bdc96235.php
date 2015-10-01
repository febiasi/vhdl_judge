<?php

/* pages/admin/moss.twig */
class __TwigTemplate_d77fe665526525c88ee398d32fe220cb4215718ab4454112477d8871bdc96235 extends Twig_Template
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
        $context["selected"] = "assignments";
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 8
    public function block_icon($context, array $blocks = array())
    {
        echo "fa-shield";
    }

    // line 9
    public function block_title($context, array $blocks = array())
    {
        echo "Detect Similar Codes";
    }

    // line 10
    public function block_head_title($context, array $blocks = array())
    {
        echo "Detect Similar Codes";
    }

    // line 14
    public function block_other_assets($context, array $blocks = array())
    {
        // line 15
        echo "\t<script type='text/javascript' src=\"";
        echo base_url("assets/js/taboverride.min.js");
        echo "\"></script>
\t<script>
\t\t\$(document).ready(function(){
\t\t\ttabOverride.set(document.getElementById('md_editor'));
\t\t});
\t</script>
";
    }

    // line 26
    public function block_main_content($context, array $blocks = array())
    {
        // line 27
        echo "<h3>What is Moss?</h3>
<p>
\t<a href=\"http://theory.stanford.edu/~aiken/moss/\" target=\"_blank\">Moss</a> (for a Measure Of Software Similarity)
\tis an automatic system for determining the similarity of programs.
\tTo date, the main application of Moss has been in detecting plagiarism in programming classes. Since its
\tdevelopment in 1994, Moss has been very effective in this role. The algorithm behind moss is a significant
\timprovement over other cheating detection algorithms.
</p>

<br>

<h3>Moss user id</h3>
";
        // line 39
        if ((!(isset($context["moss_userid"]) ? $context["moss_userid"] : null))) {
            // line 40
            echo "\t<p class=\"shj_error\">You have not entered your Moss user id.</p>
";
        }
        // line 42
        echo "<p>
\tRead <a href=\"http://theory.stanford.edu/~aiken/moss/\" target=\"_blank\">this page</a> and register for Moss,
\tthen find your user id in the script sent to your email by Moss and enter your user id here.
</p>
";
        // line 46
        echo form_open(("moss/update/" . $this->getAttribute((isset($context["moss_assignment"]) ? $context["moss_assignment"] : null), "id")));
        echo "
<p class=\"input_p\">
\t<label for=\"moss_uid\">Your Moss user id is:</label>
\t<input id=\"moss_uid\" type=\"text\" name=\"moss_userid\" class=\"sharif_input\" value=\"";
        // line 49
        echo twig_escape_filter($this->env, (isset($context["moss_userid"]) ? $context["moss_userid"] : null), "html", null, true);
        echo "\"/>
</p>
<input type=\"submit\" class=\"sharif_input\" value=\"Save\"/>
</form>

<br>

<h3>Detect similar submissions of assignment \"<span dir=\"auto\">";
        // line 56
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["moss_assignment"]) ? $context["moss_assignment"] : null), "name"), "html", null, true);
        echo "</span>\":</h3>
<p>
";
        // line 58
        echo form_open(("moss/" . $this->getAttribute((isset($context["moss_assignment"]) ? $context["moss_assignment"] : null), "id")));
        echo "
<input type=\"hidden\" name=\"detect\" value=\"detect\" />
You can send final submissions of assignment \"<span dir=\"auto\">";
        // line 60
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["moss_assignment"]) ? $context["moss_assignment"] : null), "name"), "html", null, true);
        echo "</span>\" to Moss
by clicking on this button.<br>
Zip and PDF files will not be sent.<br>
It may take a minute. Please be patient.<br>
<input type=\"submit\" class=\"sharif_input\" value=\"Detect similar codes\"/>
</form>
</p>

<br>

<h3>Moss results for assignment \"<span dir=\"auto\">";
        // line 70
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["moss_assignment"]) ? $context["moss_assignment"] : null), "name"), "html", null, true);
        echo "</span>\":</h3>
<p>
\tLinks will expire after some time. (last update: ";
        // line 72
        echo twig_escape_filter($this->env, (isset($context["update_time"]) ? $context["update_time"] : null), "html", null, true);
        echo ") <br>
\t<ul>
\t";
        // line 74
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["moss_problems"]) ? $context["moss_problems"] : null));
        foreach ($context['_seq'] as $context["i"] => $context["moss_problem"]) {
            // line 75
            echo "\t\t<li>Problem ";
            echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : null), "html", null, true);
            echo ":
\t\t\t";
            // line 76
            if ((null === (isset($context["moss_problem"]) ? $context["moss_problem"] : null))) {
                // line 77
                echo "\t\t\t\tLink Not Found.
\t\t\t";
            } elseif ((!trim((isset($context["moss_problem"]) ? $context["moss_problem"] : null)))) {
                // line 79
                echo "\t\t\t\tLink Not Found. Maybe you have entered wrong user id.
\t\t\t";
            } else {
                // line 81
                echo "\t\t\t\t<a href=\"";
                echo twig_escape_filter($this->env, (isset($context["moss_problem"]) ? $context["moss_problem"] : null), "html", null, true);
                echo "\" target=\"_black\">";
                echo twig_escape_filter($this->env, (isset($context["moss_problem"]) ? $context["moss_problem"] : null), "html", null, true);
                echo "</a>
\t\t\t";
            }
            // line 83
            echo "\t\t</li>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['i'], $context['moss_problem'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 85
        echo "\t</ul>
</p>
";
    }

    public function getTemplateName()
    {
        return "pages/admin/moss.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  179 => 85,  172 => 83,  164 => 81,  160 => 79,  156 => 77,  154 => 76,  149 => 75,  145 => 74,  140 => 72,  135 => 70,  122 => 60,  117 => 58,  112 => 56,  102 => 49,  96 => 46,  90 => 42,  86 => 40,  84 => 39,  70 => 27,  67 => 26,  55 => 15,  52 => 14,  46 => 10,  40 => 9,  34 => 8,  29 => 6,);
    }
}
