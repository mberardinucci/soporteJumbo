<?php

/* C:\xampp\htdocs\soporte\vendor\cakephp\bake\src\Template\Bake\Element\Controller/delete.twig */
class __TwigTemplate_e0921f52eb313f370b044ab8c0329082c4166d2d1de6e241b7a4f9a2a5012117 extends Twig_Template
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
        $__internal_477dfd6ad802e49fc0cdf9697905170719755f57108b509ba0082a67f7107e00 = $this->env->getExtension("WyriHaximus\\TwigView\\Lib\\Twig\\Extension\\Profiler");
        $__internal_477dfd6ad802e49fc0cdf9697905170719755f57108b509ba0082a67f7107e00->enter($__internal_477dfd6ad802e49fc0cdf9697905170719755f57108b509ba0082a67f7107e00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "C:\\xampp\\htdocs\\soporte\\vendor\\cakephp\\bake\\src\\Template\\Bake\\Element\\Controller/delete.twig"));

        // line 16
        echo "
    /**
     * Delete method
     *
     * @param string|null \$id ";
        // line 20
        echo twig_escape_filter($this->env, ($context["singularHumanName"] ?? null), "html", null, true);
        echo " id.
     * @return \\Cake\\Http\\Response|null Redirects to index.
     * @throws \\Cake\\Datasource\\Exception\\RecordNotFoundException When record not found.
     */
    public function delete(\$id = null)
    {
        \$this->request->allowMethod(['post', 'delete']);
        \$";
        // line 27
        echo twig_escape_filter($this->env, ($context["singularName"] ?? null), "html", null, true);
        echo " = \$this->";
        echo twig_escape_filter($this->env, ($context["currentModelName"] ?? null), "html", null, true);
        echo "->get(\$id);
        if (\$this->";
        // line 28
        echo twig_escape_filter($this->env, ($context["currentModelName"] ?? null), "html", null, true);
        echo "->delete(\$";
        echo twig_escape_filter($this->env, ($context["singularName"] ?? null), "html", null, true);
        echo ")) {
            \$this->Flash->success(__('The ";
        // line 29
        echo twig_escape_filter($this->env, twig_lower_filter($this->env, ($context["singularHumanName"] ?? null)), "html", null, true);
        echo " has been deleted.'));
        } else {
            \$this->Flash->error(__('The ";
        // line 31
        echo twig_escape_filter($this->env, twig_lower_filter($this->env, ($context["singularHumanName"] ?? null)), "html", null, true);
        echo " could not be deleted. Please, try again.'));
        }

        return \$this->redirect(['action' => 'index']);
    }
";
        
        $__internal_477dfd6ad802e49fc0cdf9697905170719755f57108b509ba0082a67f7107e00->leave($__internal_477dfd6ad802e49fc0cdf9697905170719755f57108b509ba0082a67f7107e00_prof);

    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\soporte\\vendor\\cakephp\\bake\\src\\Template\\Bake\\Element\\Controller/delete.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 31,  50 => 29,  44 => 28,  38 => 27,  28 => 20,  22 => 16,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @since         2.0.0
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */
#}

    /**
     * Delete method
     *
     * @param string|null \$id {{ singularHumanName }} id.
     * @return \\Cake\\Http\\Response|null Redirects to index.
     * @throws \\Cake\\Datasource\\Exception\\RecordNotFoundException When record not found.
     */
    public function delete(\$id = null)
    {
        \$this->request->allowMethod(['post', 'delete']);
        \${{ singularName }} = \$this->{{ currentModelName }}->get(\$id);
        if (\$this->{{ currentModelName }}->delete(\${{ singularName }})) {
            \$this->Flash->success(__('The {{ singularHumanName|lower }} has been deleted.'));
        } else {
            \$this->Flash->error(__('The {{ singularHumanName|lower }} could not be deleted. Please, try again.'));
        }

        return \$this->redirect(['action' => 'index']);
    }
", "C:\\xampp\\htdocs\\soporte\\vendor\\cakephp\\bake\\src\\Template\\Bake\\Element\\Controller/delete.twig", "");
    }
}