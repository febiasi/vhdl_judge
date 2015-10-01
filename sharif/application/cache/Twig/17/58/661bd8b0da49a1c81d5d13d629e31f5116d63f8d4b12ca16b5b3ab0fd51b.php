<?php

/* pages/assignments.twig */
class __TwigTemplate_1758661bd8b0da49a1c81d5d13d629e31f5116d63f8d4b12ca16b5b3ab0fd51b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("templates/base.twig");

        $this->blocks = array(
            'icon' => array($this, 'block_icon'),
            'title' => array($this, 'block_title'),
            'head_title' => array($this, 'block_head_title'),
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
        $context["selected"] = "assignments";
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 8
    public function block_icon($context, array $blocks = array())
    {
        echo "fa-folder-open";
    }

    // line 9
    public function block_title($context, array $blocks = array())
    {
        echo "Assignments";
    }

    // line 10
    public function block_head_title($context, array $blocks = array())
    {
        echo "Assignments";
    }

    // line 14
    public function block_title_menu($context, array $blocks = array())
    {
        // line 15
        if (($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "level") >= 2)) {
            // line 16
            echo "<span class=\"title_menu_item\"><a href=\"";
            echo site_url("assignments/add");
            echo "\"><i class=\"fa fa-plus color8\"></i> Add</a></span>
";
        }
    }

    // line 22
    public function block_main_content($context, array $blocks = array())
    {
        // line 23
        $context["msgclasses"] = array("success" => "shj_g", "notice" => "shj_o", "error" => "shj_r");
        // line 24
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["messages"]) ? $context["messages"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 25
            echo "\t<p class=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["msgclasses"]) ? $context["msgclasses"] : null), $this->getAttribute((isset($context["message"]) ? $context["message"] : null), "type"), array(), "array"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["message"]) ? $context["message"] : null), "text"), "html", null, true);
            echo "</p>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "
";
        // line 28
        if ((twig_length_filter($this->env, (isset($context["all_assignments"]) ? $context["all_assignments"] : null)) == 0)) {
            // line 29
            echo "\t<p style=\"text-align: center;\">Nothing to show...</p>
";
        } else {
            // line 31
            echo "<br/>
<table class=\"sharif_table\">
<thead>
<tr>
\t<th>Select</th>
\t<th>Name</th>
\t<th>Problems</th>
\t<th>Submissions</th>
\t<th>Coefficient</th>
\t<th>Start Time</th>
\t<th>Finish Time</th>
\t<th>Status</th>
\t<th>PDF</th>
\t";
            // line 44
            if (($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "level") > 0)) {
                // line 45
                echo "\t<th>Actions</th>
\t";
            }
            // line 47
            echo "</tr>
</thead>
";
            // line 49
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable(twig_reverse_filter($this->env, (isset($context["all_assignments"]) ? $context["all_assignments"] : null)));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 50
                echo "<tr>
\t<td><i class=\"pointer select_assignment fa ";
                // line 51
                echo ((($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "id") == $this->getAttribute($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "selected_assignment"), "id"))) ? ("fa-check-square-o color6") : ("fa-square-o"));
                echo " fa-2x\" data-id=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "id"), "html", null, true);
                echo "\"></i></td>
\t<td dir=\"auto\">";
                // line 52
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "name"), "html", null, true);
                echo "</td>
\t<td><a href=\"";
                // line 53
                echo site_url(("problems/" . $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "id")));
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "problems"), "html", null, true);
                echo " problem";
                echo ((($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "problems") != 1)) ? ("s") : (""));
                echo "</a></td>
\t<td>";
                // line 54
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "total_submits"), "html", null, true);
                echo " submission";
                echo ((($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "total_submits") != 1)) ? ("s") : (""));
                echo "</td>
\t<td>
\t\t";
                // line 56
                if ($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "finished")) {
                    // line 57
                    echo "\t\t\t<span style=\"color: red;\">Finished</span>
\t\t";
                } else {
                    // line 59
                    echo "\t\t\t";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "coefficient"), "html", null, true);
                    echo " %
\t\t";
                }
                // line 61
                echo "\t</td>
\t<td>";
                // line 62
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "start_time"), "html", null, true);
                echo "</td>
\t<td>";
                // line 63
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "finish_time"), "html", null, true);
                echo "</td>
\t<td>
\t\t";
                // line 65
                if ($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "open")) {
                    // line 66
                    echo "\t\t\t<span style=\"color: green;\">Open</span>
\t\t";
                } else {
                    // line 68
                    echo "\t\t\t<span style=\"color: red;\">Close</span>
\t\t";
                }
                // line 70
                echo "\t</td>
\t<td>
\t\t<a href=\"";
                // line 72
                echo site_url(("assignments/pdf/" . $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "id")));
                echo "\"><img src=\"";
                echo base_url("assets/images/pdf.svg");
                echo "\" /></a>
\t</td>
\t";
                // line 74
                if (($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "level") > 0)) {
                    // line 75
                    echo "\t<td>
\t\t";
                    // line 76
                    if (($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "level") >= 2)) {
                        // line 77
                        echo "\t\t\t<a href=\"";
                        echo site_url(("assignments/downloadtestsdesc/" . $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "id")));
                        echo "\"><i title=\"Download Tests and Descriptions\" class=\"fa fa-cloud-download fa-lg color11\"></i></a>
\t\t";
                    }
                    // line 79
                    echo "\t\t";
                    if (($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "level") >= 1)) {
                        // line 80
                        echo "\t\t\t<a href=\"";
                        echo site_url(("assignments/download_submissions/by_user/" . $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "id")));
                        echo "\"><i title=\"Download Final Submissions (by user)\" class=\"fa fa-download fa-lg color12\"></i></a>
\t\t\t<a href=\"";
                        // line 81
                        echo site_url(("assignments/download_submissions/by_problem/" . $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "id")));
                        echo "\"><i title=\"Download Final Submissions (by problem)\" class=\"fa fa-download fa-lg color2\"></i></a>
\t\t";
                    }
                    // line 83
                    echo "\t\t";
                    if (($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "level") >= 2)) {
                        // line 84
                        echo "\t\t\t<a href=\"";
                        echo site_url(("moss/" . $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "id")));
                        echo "\"><i title=\"Detect Similar Codes\" class=\"fa fa-shield fa-lg color7\"></i></a>
\t\t";
                    }
                    // line 86
                    echo "\t\t";
                    if (($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "level") >= 2)) {
                        // line 87
                        echo "\t\t\t<a href=\"";
                        echo site_url(("assignments/edit/" . $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "id")));
                        echo "\"><i title=\"Edit\" class=\"fa fa-pencil fa-lg color3\"></i></a>
\t\t";
                    }
                    // line 89
                    echo "\t\t";
                    if (($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "level") >= 2)) {
                        // line 90
                        echo "\t\t\t<a href=\"";
                        echo site_url(("assignments/delete/" . $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "id")));
                        echo "\"><i title=\"Delete\" class=\"fa fa-times fa-lg color1\"></i></a>
\t\t";
                    }
                    // line 92
                    echo "\t</td>
\t";
                }
                // line 94
                echo "</tr>
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 96
            echo "</table>
";
        }
    }

    public function getTemplateName()
    {
        return "pages/assignments.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  260 => 96,  253 => 94,  249 => 92,  243 => 90,  240 => 89,  234 => 87,  231 => 86,  225 => 84,  222 => 83,  217 => 81,  212 => 80,  209 => 79,  203 => 77,  201 => 76,  198 => 75,  196 => 74,  189 => 72,  185 => 70,  181 => 68,  177 => 66,  175 => 65,  170 => 63,  166 => 62,  163 => 61,  157 => 59,  153 => 57,  151 => 56,  144 => 54,  136 => 53,  132 => 52,  126 => 51,  123 => 50,  119 => 49,  115 => 47,  111 => 45,  109 => 44,  94 => 31,  90 => 29,  88 => 28,  85 => 27,  74 => 25,  70 => 24,  68 => 23,  65 => 22,  57 => 16,  55 => 15,  52 => 14,  46 => 10,  40 => 9,  34 => 8,  29 => 6,);
    }
}
