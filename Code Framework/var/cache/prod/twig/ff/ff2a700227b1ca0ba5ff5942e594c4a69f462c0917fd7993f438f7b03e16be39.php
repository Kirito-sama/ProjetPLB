<?php

/* default/index.html.twig */
class __TwigTemplate_b688ff26723110e954f9fa1394c0cb52d843c3f41b4621a80e4ee3e29dad723e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "<div class=\"container\">
    <div class=\"row\">
        <div class=\"col-md-10 col-md-offset-1\">
            <div class=\"panel panel-success\">
                <div class=\"panel-heading\">List of Game of Thrones Characters</div>

                ";
        // line 12
        if (($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()) != null)) {
            // line 13
            echo "                  <table class=\"table\">
                      <tr>
                          <th>Character</th>
                          <th>Real Name</th>
                      </tr>

                      ";
            // line 19
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["character"]) ? $context["character"] : null));
            foreach ($context['_seq'] as $context["key"] => $context["item"]) {
                // line 20
                echo "                        <tr>
                          <td>";
                // line 21
                echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                echo "</td><td>";
                echo twig_escape_filter($this->env, $context["item"], "html", null, true);
                echo "</td>
                        </tr>
                      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 24
            echo "                  </table>
                ";
        }
        // line 26
        echo "

            </div>

            ";
        // line 30
        if (($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()) == null)) {
            // line 31
            echo "              <a href=\"/login\" class=\"btn btn-info\"> You need to login to see the list 😜😜 >></a>
            ";
        }
        // line 33
        echo "        </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "default/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 33,  79 => 31,  77 => 30,  71 => 26,  67 => 24,  56 => 21,  53 => 20,  49 => 19,  41 => 13,  39 => 12,  31 => 6,  28 => 5,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* */
/* */
/* {% block body %}*/
/* <div class="container">*/
/*     <div class="row">*/
/*         <div class="col-md-10 col-md-offset-1">*/
/*             <div class="panel panel-success">*/
/*                 <div class="panel-heading">List of Game of Thrones Characters</div>*/
/* */
/*                 {% if app.user != null %}*/
/*                   <table class="table">*/
/*                       <tr>*/
/*                           <th>Character</th>*/
/*                           <th>Real Name</th>*/
/*                       </tr>*/
/* */
/*                       {% for key, item in character %}*/
/*                         <tr>*/
/*                           <td>{{ key }}</td><td>{{ item }}</td>*/
/*                         </tr>*/
/*                       {% endfor %}*/
/*                   </table>*/
/*                 {% endif %}*/
/* */
/* */
/*             </div>*/
/* */
/*             {% if app.user == null %}*/
/*               <a href="/login" class="btn btn-info"> You need to login to see the list 😜😜 >></a>*/
/*             {% endif %}*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* {% endblock %}*/
/* */
