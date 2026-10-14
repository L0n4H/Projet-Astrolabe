<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* @EasyAdmin/crud/form_theme.html.twig */
class __TwigTemplate_5e05207c9a90c52d69402f7c05e2cd149d9689f476a174dfc6495cc4402467d1 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        // line 2
        $_trait_0 = $this->loadTemplate("@EasyAdmin/symfony-form-themes/bootstrap_5_layout.html.twig", "@EasyAdmin/crud/form_theme.html.twig", 2);
        if (!$_trait_0->isTraitable()) {
            throw new RuntimeError('Template "'."@EasyAdmin/symfony-form-themes/bootstrap_5_layout.html.twig".'" cannot be used as a trait.', 2, $this->source);
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            [
                'form_start' => [$this, 'block_form_start'],
                'form_end' => [$this, 'block_form_end'],
                'form_errors' => [$this, 'block_form_errors'],
                'form_widget_simple' => [$this, 'block_form_widget_simple'],
                'datetime_widget' => [$this, 'block_datetime_widget'],
                'date_widget' => [$this, 'block_date_widget'],
                'time_widget' => [$this, 'block_time_widget'],
                'file_widget' => [$this, 'block_file_widget'],
                'form_row' => [$this, 'block_form_row'],
                'choice_widget_collapsed' => [$this, 'block_choice_widget_collapsed'],
                'collection_row' => [$this, 'block_collection_row'],
                'collection_widget' => [$this, 'block_collection_widget'],
                'collection_entry_widget' => [$this, 'block_collection_entry_widget'],
                'form_widget_compound' => [$this, 'block_form_widget_compound'],
                'button_row' => [$this, 'block_button_row'],
                'form_label' => [$this, 'block_form_label'],
                'empty_collection' => [$this, 'block_empty_collection'],
                'vich_file_row' => [$this, 'block_vich_file_row'],
                'vich_file_widget' => [$this, 'block_vich_file_widget'],
                'vich_image_row' => [$this, 'block_vich_image_row'],
                'vich_image_widget' => [$this, 'block_vich_image_widget'],
                'ea_crud_rest' => [$this, 'block_ea_crud_rest'],
                'ea_crud_widget' => [$this, 'block_ea_crud_widget'],
                'ea_crud_widget_panels' => [$this, 'block_ea_crud_widget_panels'],
                'ea_autocomplete_widget' => [$this, 'block_ea_autocomplete_widget'],
                'ea_autocomplete_inner_label' => [$this, 'block_ea_autocomplete_inner_label'],
                'ea_code_editor_widget' => [$this, 'block_ea_code_editor_widget'],
                'ea_text_editor_widget' => [$this, 'block_ea_text_editor_widget'],
                'ea_form_row_row' => [$this, 'block_ea_form_row_row'],
                'ea_section_row' => [$this, 'block_ea_section_row'],
                'ea_filters_widget' => [$this, 'block_ea_filters_widget'],
                'ea_numeric_filter_widget' => [$this, 'block_ea_numeric_filter_widget'],
                'ea_datetime_filter_widget' => [$this, 'block_ea_datetime_filter_widget'],
                'ea_fileupload_widget' => [$this, 'block_ea_fileupload_widget'],
                'TODO_ea_fileupload_widget' => [$this, 'block_TODO_ea_fileupload_widget'],
                'ea_slug_widget' => [$this, 'block_ea_slug_widget'],
            ]
        );
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
        echo "
";
        // line 4
        $this->displayBlock('form_start', $context, $blocks);
        // line 14
        echo "
";
        // line 15
        $this->displayBlock('form_end', $context, $blocks);
        // line 22
        echo "
";
        // line 23
        $this->displayBlock('form_errors', $context, $blocks);
        // line 30
        echo "
";
        // line 32
        echo "
";
        // line 33
        $this->displayBlock('form_widget_simple', $context, $blocks);
        // line 43
        echo "
";
        // line 44
        $this->displayBlock('datetime_widget', $context, $blocks);
        // line 48
        echo "
";
        // line 49
        $this->displayBlock('date_widget', $context, $blocks);
        // line 54
        echo "
";
        // line 55
        $this->displayBlock('time_widget', $context, $blocks);
        // line 60
        echo "
";
        // line 61
        $this->displayBlock('file_widget', $context, $blocks);
        // line 69
        echo "
";
        // line 71
        echo "
";
        // line 72
        $this->displayBlock('form_row', $context, $blocks);
        // line 129
        echo "
";
        // line 130
        $this->displayBlock('choice_widget_collapsed', $context, $blocks);
        // line 141
        echo "
";
        // line 142
        $this->displayBlock('collection_row', $context, $blocks);
        // line 158
        echo "
";
        // line 159
        $this->displayBlock('collection_widget', $context, $blocks);
        // line 188
        echo "
";
        // line 189
        $this->displayBlock('collection_entry_widget', $context, $blocks);
        // line 228
        echo "
";
        // line 229
        $this->displayBlock('form_widget_compound', $context, $blocks);
        // line 246
        echo "
";
        // line 247
        $this->displayBlock('button_row', $context, $blocks);
        // line 252
        echo "
";
        // line 254
        echo "
";
        // line 255
        $this->displayBlock('form_label', $context, $blocks);
        // line 295
        echo "
";
        // line 297
        echo "
";
        // line 298
        $this->displayBlock('empty_collection', $context, $blocks);
        // line 303
        echo "
";
        // line 304
        $this->displayBlock('vich_file_row', $context, $blocks);
        // line 308
        echo "
";
        // line 309
        $this->displayBlock('vich_file_widget', $context, $blocks);
        // line 351
        echo "
";
        // line 352
        $this->displayBlock('vich_image_row', $context, $blocks);
        // line 356
        echo "
";
        // line 357
        $this->displayBlock('vich_image_widget', $context, $blocks);
        // line 411
        echo "
";
        // line 412
        $this->displayBlock('ea_crud_rest', $context, $blocks);
        // line 415
        echo "
";
        // line 417
        $this->displayBlock('ea_crud_widget', $context, $blocks);
        // line 464
        echo "
";
        // line 465
        $this->displayBlock('ea_crud_widget_panels', $context, $blocks);
        // line 519
        echo "
";
        // line 521
        $this->displayBlock('ea_autocomplete_widget', $context, $blocks);
        // line 524
        echo "
";
        // line 525
        $this->displayBlock('ea_autocomplete_inner_label', $context, $blocks);
        // line 529
        echo "
";
        // line 531
        $this->displayBlock('ea_code_editor_widget', $context, $blocks);
        // line 548
        echo "
";
        // line 550
        $this->displayBlock('ea_text_editor_widget', $context, $blocks);
        // line 568
        echo "
";
        // line 570
        $this->displayBlock('ea_form_row_row', $context, $blocks);
        // line 573
        echo "
";
        // line 574
        $this->displayBlock('ea_section_row', $context, $blocks);
        // line 586
        echo "
";
        // line 588
        $this->displayBlock('ea_filters_widget', $context, $blocks);
        // line 636
        echo "
";
        // line 637
        $this->displayBlock('ea_numeric_filter_widget', $context, $blocks);
        // line 653
        echo "
";
        // line 654
        $this->displayBlock('ea_datetime_filter_widget', $context, $blocks);
        // line 657
        echo "
";
        // line 658
        $this->displayBlock('ea_fileupload_widget', $context, $blocks);
        // line 720
        echo "
";
        // line 721
        $this->displayBlock('TODO_ea_fileupload_widget', $context, $blocks);
        // line 788
        echo "
";
        // line 789
        $this->displayBlock('ea_slug_widget', $context, $blocks);
    }

    // line 4
    public function block_form_start($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 5
        echo "    ";
        if (((1 === twig_compare(twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 5), "errors", [], "any", false, false, false, 5)), 0)) && twig_in_filter("ea_crud", ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 5), "block_prefixes", [], "any", true, true, false, 5)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 5), "block_prefixes", [], "any", false, false, false, 5), [])) : ([]))))) {
            // line 6
            echo "        ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'errors', ["attr" => ["class" => "global-invalid-feedback"]]);
            echo "
    ";
        }
        // line 8
        echo "
    ";
        // line 9
        $this->displayParentBlock("form_start", $context, $blocks);
        echo "

    <div class=\"row\"> ";
        // line 12
        echo "        <input type=\"hidden\" name=\"referrer\" value=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "request", [], "any", false, false, false, 12), "query", [], "any", false, false, false, 12), "get", [0 => "referrer"], "method", false, false, false, 12), "html", null, true);
        echo "\">
";
    }

    // line 15
    public function block_form_end($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 16
        echo "            ";
        if (( !array_key_exists("render_rest", $context) || ($context["render_rest"] ?? null))) {
            // line 17
            echo "                ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'rest');
            echo "
            ";
        }
        // line 19
        echo "        </div> ";
        // line 20
        echo "    </form>
";
    }

    // line 23
    public function block_form_errors($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 24
        echo "    ";
        if ((1 === twig_compare(twig_length_filter($this->env, ($context["errors"] ?? null)), 0))) {
            // line 25
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["errors"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 26
                echo "            <div class=\"";
                echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 26)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 26), "")) : ("")), "html", null, true);
                echo " invalid-feedback d-block\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 26), "html", null, true);
                echo "</div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 28
            echo "    ";
        }
    }

    // line 33
    public function block_form_widget_simple($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 34
        if (( !array_key_exists("type", $context) || !twig_in_filter(($context["type"] ?? null), [0 => "file", 1 => "hidden"]))) {
            // line 35
            $context["attr"] = twig_array_merge(($context["attr"] ?? null), ["class" => twig_trim_filter(((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 35)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 35), "")) : ("")))]);
        }
        // line 37
        if ((array_key_exists("type", $context) && ((0 === twig_compare(($context["type"] ?? null), "range")) || (0 === twig_compare(($context["type"] ?? null), "color"))))) {
            // line 38
            echo "        ";
            // line 39
            $context["required"] = false;
        }
        // line 41
        $this->displayParentBlock("form_widget_simple", $context, $blocks);
    }

    // line 44
    public function block_datetime_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 45
        echo "    ";
        $context["attr"] = twig_array_merge(($context["attr"] ?? null), ["class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 45)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 45), "")) : ("")) . " form-inline"))]);
        // line 46
        echo "    ";
        $this->displayParentBlock("datetime_widget", $context, $blocks);
        echo "
";
    }

    // line 49
    public function block_date_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 50
        echo "<div class=\"datetime-widget datetime-widget-date\">";
        // line 51
        $this->displayParentBlock("date_widget", $context, $blocks);
        // line 52
        echo "</div>";
    }

    // line 55
    public function block_time_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 56
        echo "<div class=\"datetime-widget datetime-widget-time\">";
        // line 57
        $this->displayParentBlock("time_widget", $context, $blocks);
        // line 58
        echo "</div>";
    }

    // line 61
    public function block_file_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 62
        if (((array_key_exists("vich", $context)) ? (_twig_default_filter(($context["vich"] ?? null), false)) : (false))) {
            // line 63
            $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter(($context["type"] ?? null), "file")) : ("file"));
            // line 64
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 66
            $this->displayBlock("form_widget_simple", $context, $blocks);
        }
    }

    // line 72
    public function block_form_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 73
        echo "    ";
        $context["row_attr"] = twig_array_merge(($context["row_attr"] ?? null), ["class" => (((twig_get_attribute($this->env, $this->source,         // line 74
($context["row_attr"] ?? null), "class", [], "any", true, true, false, 74)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["row_attr"] ?? null), "class", [], "any", false, false, false, 74), "")) : ("")) . " form-group")]);
        // line 76
        echo "
    <div class=\"";
        // line 77
        echo twig_escape_filter($this->env, (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 77), "ea_crud_form", [], "any", false, true, false, 77), "ea_field", [], "any", false, true, false, 77), "columns", [], "any", true, true, false, 77) &&  !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 77), "ea_crud_form", [], "any", false, true, false, 77), "ea_field", [], "any", false, true, false, 77), "columns", [], "any", false, false, false, 77)))) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 77), "ea_crud_form", [], "any", false, true, false, 77), "ea_field", [], "any", false, true, false, 77), "columns", [], "any", false, false, false, 77)) : ((((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 77), "ea_crud_form", [], "any", false, true, false, 77), "ea_field", [], "any", false, true, false, 77), "defaultColumns", [], "any", true, true, false, 77) &&  !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 77), "ea_crud_form", [], "any", false, true, false, 77), "ea_field", [], "any", false, true, false, 77), "defaultColumns", [], "any", false, false, false, 77)))) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 77), "ea_crud_form", [], "any", false, true, false, 77), "ea_field", [], "any", false, true, false, 77), "defaultColumns", [], "any", false, false, false, 77)) : ("")))), "html", null, true);
        echo "\">
        <div ";
        // line 78
        $__internal_compile_0 = $context;
        $__internal_compile_1 = ["attr" => ($context["row_attr"] ?? null)];
        if (!twig_test_iterable($__internal_compile_1)) {
            throw new RuntimeError('Variables passed to the "with" tag must be a hash.', 78, $this->getSourceContext());
        }
        $__internal_compile_1 = twig_to_array($__internal_compile_1);
        $context = $this->env->mergeGlobals(array_merge($context, $__internal_compile_1));
        $this->displayBlock("attributes", $context, $blocks);
        $context = $__internal_compile_0;
        echo ">";
        // line 79
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'label');
        // line 80
        echo "<div class=\"form-widget\">
                ";
        // line 81
        $context["has_prepend_html"] =  !(null === ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "field", [], "any", false, true, false, 81), "prepend_html", [], "any", true, true, false, 81)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "field", [], "any", false, true, false, 81), "prepend_html", [], "any", false, false, false, 81), null)) : (null)));
        // line 82
        echo "                ";
        $context["has_append_html"] =  !(null === ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "field", [], "any", false, true, false, 82), "append_html", [], "any", true, true, false, 82)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "field", [], "any", false, true, false, 82), "append_html", [], "any", false, false, false, 82), null)) : (null)));
        // line 83
        echo "                ";
        $context["has_input_groups"] = (($context["has_prepend_html"] ?? null) || ($context["has_append_html"] ?? null));
        // line 84
        echo "
                ";
        // line 85
        if (($context["has_input_groups"] ?? null)) {
            echo "<div class=\"input-group\">";
        }
        // line 86
        echo "                    ";
        if (($context["has_prepend_html"] ?? null)) {
            // line 87
            echo "                        <div class=\"input-group-prepend\">
                            <span class=\"input-group-text\">";
            // line 88
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "field", [], "any", false, false, false, 88), "prepend_html", [], "any", false, false, false, 88);
            echo "</span>
                        </div>
                    ";
        }
        // line 91
        echo "
                    ";
        // line 92
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget');
        echo "

                    ";
        // line 94
        if (($context["has_append_html"] ?? null)) {
            // line 95
            echo "                        <span class=\"input-group-text\">";
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "field", [], "any", false, false, false, 95), "append_html", [], "any", false, false, false, 95);
            echo "</span>
                    ";
        }
        // line 97
        echo "                    ";
        if (($context["has_input_groups"] ?? null)) {
            echo "</div>";
        }
        // line 98
        echo "
                ";
        // line 99
        $context["nullable_fields_fqcn"] = [0 => "EasyCorpBundleEasyAdminBundleFieldDateTimeField", 1 => "EasyCorpBundleEasyAdminBundleFieldDateField", 2 => "EasyCorpBundleEasyAdminBundleFieldTimeField"];
        // line 104
        echo "                ";
        if ((twig_in_filter(((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 104), "ea_crud_form", [], "any", false, true, false, 104), "ea_field", [], "any", false, true, false, 104), "fieldFqcn", [], "any", true, true, false, 104)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 104), "ea_crud_form", [], "any", false, true, false, 104), "ea_field", [], "any", false, true, false, 104), "fieldFqcn", [], "any", false, false, false, 104), false)) : (false)), ($context["nullable_fields_fqcn"] ?? null)) && ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "field", [], "any", false, true, false, 104), "nullable", [], "any", true, true, false, 104)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "field", [], "any", false, true, false, 104), "nullable", [], "any", false, false, false, 104), false)) : (false)))) {
            // line 105
            echo "                    <div class=\"nullable-control\">
                        <label>
                            <input type=\"checkbox\" ";
            // line 107
            if ((null === ($context["data"] ?? null))) {
                echo "checked=\"checked\"";
            }
            echo ">
                            ";
            // line 108
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.nullable_field", [], "EasyAdminBundle"), "html", null, true);
            echo "
                        </label>
                    </div>
                ";
        }
        // line 112
        echo "
                ";
        // line 113
        if ((((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "field", [], "any", false, true, false, 113), "help", [], "any", true, true, false, 113) &&  !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "field", [], "any", false, true, false, 113), "help", [], "any", false, false, false, 113)))) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "field", [], "any", false, true, false, 113), "help", [], "any", false, false, false, 113)) : (false))) {
            // line 114
            echo "                    <small class=\"form-help\">";
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "field", [], "any", false, false, false, 114), "help", [], "any", false, false, false, 114);
            echo "</small>
                ";
        } elseif ((((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 115
($context["form"] ?? null), "vars", [], "any", false, true, false, 115), "help", [], "any", true, true, false, 115) &&  !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 115), "help", [], "any", false, false, false, 115)))) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 115), "help", [], "any", false, false, false, 115)) : (false))) {
            // line 116
            echo "                    <small class=\"form-help\">";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 116), "help", [], "any", false, false, false, 116), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 116), "help_translation_parameters", [], "any", false, false, false, 116), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 116), "translation_domain", [], "any", false, false, false, 116));
            echo "</small>
                ";
        }
        // line 119
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'errors');
        // line 120
        echo "</div>
        </div>
    </div>

    ";
        // line 125
        echo "    ";
        if ((null === ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 125), "ea_crud_form", [], "any", false, true, false, 125), "ea_field", [], "any", false, true, false, 125), "columns", [], "any", true, true, false, 125)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 125), "ea_crud_form", [], "any", false, true, false, 125), "ea_field", [], "any", false, true, false, 125), "columns", [], "any", false, false, false, 125), null)) : (null)))) {
            // line 126
            echo "        <div class=\"flex-fill\"></div>
    ";
        }
    }

    // line 130
    public function block_choice_widget_collapsed($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 131
        echo "    ";
        if ((0 === twig_compare("ea-autocomplete", ((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "data-ea-widget", [], "array", true, true, false, 131)) ? (_twig_default_filter((($__internal_compile_2 = ($context["attr"] ?? null)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["data-ea-widget"] ?? null) : null), false)) : (false))))) {
            // line 132
            echo "        ";
            $context["attr"] = twig_array_merge(($context["attr"] ?? null), ["data-ea-i18n-no-results-found" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("autocomplete.no-results-found", [], "EasyAdminBundle"), "data-ea-i18n-no-more-results" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("autocomplete.no-more-results", [], "EasyAdminBundle"), "data-ea-i18n-loading-more-results" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("autocomplete.loading-more-results", [], "EasyAdminBundle")]);
            // line 137
            echo "    ";
        }
        // line 138
        echo "
    ";
        // line 139
        $this->displayParentBlock("choice_widget_collapsed", $context, $blocks);
        echo "
";
    }

    // line 142
    public function block_collection_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 143
        echo "    ";
        if ((array_key_exists("prototype", $context) &&  !twig_get_attribute($this->env, $this->source, ($context["prototype"] ?? null), "rendered", [], "any", false, false, false, 143))) {
            // line 144
            echo "        ";
            $context["row_attr"] = twig_array_merge(($context["row_attr"] ?? null), ["data-prototype" => $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["prototype"] ?? null), 'row')]);
            // line 145
            echo "    ";
        }
        // line 146
        echo "
    ";
        // line 147
        $context["row_attr"] = twig_array_merge(($context["row_attr"] ?? null), ["data-ea-collection-field" => "true", "data-entry-is-complex" => (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 149
($context["form"] ?? null), "vars", [], "any", false, false, false, 149), "ea_crud_form", [], "any", false, false, false, 149), "ea_field", [], "any", false, false, false, 149) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 149), "ea_crud_form", [], "any", false, false, false, 149), "ea_field", [], "any", false, false, false, 149), "customOptions", [], "any", false, false, false, 149), "get", [0 => "entryIsComplex"], "method", false, false, false, 149))) ? ("true") : ("false")), "data-allow-add" => ((        // line 150
($context["allow_add"] ?? null)) ? ("true") : ("false")), "data-allow-delete" => ((        // line 151
($context["allow_delete"] ?? null)) ? ("true") : ("false")), "data-num-items" => ((twig_test_empty(twig_get_attribute($this->env, $this->source,         // line 152
($context["form"] ?? null), "children", [], "any", false, false, false, 152))) ? (0) : (max(twig_get_array_keys_filter(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "children", [], "any", false, false, false, 152))))), "data-form-type-name-placeholder" => ((        // line 153
array_key_exists("prototype", $context)) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["prototype"] ?? null), "vars", [], "any", false, false, false, 153), "name", [], "any", false, false, false, 153)) : (""))]);
        // line 155
        echo "
    ";
        // line 156
        $this->displayBlock("form_row", $context, $blocks);
        echo "
";
    }

    // line 159
    public function block_collection_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 160
        echo "    ";
        // line 162
        echo "    ";
        $context["isEmptyCollection"] = ((null === ($context["value"] ?? null)) || (twig_test_iterable(($context["value"] ?? null)) && twig_test_empty(($context["value"] ?? null))));
        // line 163
        echo "    ";
        $context["is_array_field"] = (0 === twig_compare("EasyCorp\\Bundle\\EasyAdminBundle\\Field\\ArrayField", (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 163), "ea_crud_form", [], "any", false, true, false, 163), "ea_field", [], "any", false, true, false, 163), "fieldFqcn", [], "any", true, true, false, 163) &&  !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 163), "ea_crud_form", [], "any", false, true, false, 163), "ea_field", [], "any", false, true, false, 163), "fieldFqcn", [], "any", false, false, false, 163)))) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 163), "ea_crud_form", [], "any", false, true, false, 163), "ea_field", [], "any", false, true, false, 163), "fieldFqcn", [], "any", false, false, false, 163)) : (false))));
        // line 164
        echo "
    <div class=\"ea-form-collection-items\">
        ";
        // line 166
        if (($context["isEmptyCollection"] ?? null)) {
            // line 167
            echo "            ";
            $this->displayBlock("empty_collection", $context, $blocks);
            echo "
        ";
        } elseif (        // line 168
($context["is_array_field"] ?? null)) {
            // line 169
            echo "            ";
            $this->displayBlock("form_widget", $context, $blocks);
            echo "
        ";
        } else {
            // line 171
            echo "            <div class=\"accordion\">
                ";
            // line 172
            $this->displayBlock("form_widget", $context, $blocks);
            echo "
            </div>
        ";
        }
        // line 175
        echo "    </div>

    ";
        // line 177
        if ((($context["isEmptyCollection"] ?? null) || twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 177), "prototype", [], "any", true, true, false, 177))) {
            // line 178
            echo "        ";
            $context["attr"] = twig_array_merge(($context["attr"] ?? null), ["data-empty-collection" =>             $this->renderBlock("empty_collection", $context, $blocks)]);
            // line 179
            echo "    ";
        }
        // line 180
        echo "
    ";
        // line 181
        if (((array_key_exists("allow_add", $context)) ? (_twig_default_filter(($context["allow_add"] ?? null), false)) : (false))) {
            // line 182
            echo "        <button type=\"button\" class=\"btn btn-link field-collection-add-button\">
            <i class=\"fa fa-plus pr-1\"></i>
            ";
            // line 184
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("action.add_new_item", [], "EasyAdminBundle"), "html", null, true);
            echo "
        </button>
    ";
        }
    }

    // line 189
    public function block_collection_entry_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 190
        echo "    ";
        $context["is_array_field"] = (0 === twig_compare("EasyCorp\\Bundle\\EasyAdminBundle\\Field\\ArrayField", (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, Symfony\Bridge\Twig\Extension\twig_get_form_parent(($context["form"] ?? null)), "vars", [], "any", false, true, false, 190), "ea_crud_form", [], "any", false, true, false, 190), "ea_field", [], "any", false, true, false, 190), "fieldFqcn", [], "any", true, true, false, 190) &&  !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, Symfony\Bridge\Twig\Extension\twig_get_form_parent(($context["form"] ?? null)), "vars", [], "any", false, true, false, 190), "ea_crud_form", [], "any", false, true, false, 190), "ea_field", [], "any", false, true, false, 190), "fieldFqcn", [], "any", false, false, false, 190)))) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, Symfony\Bridge\Twig\Extension\twig_get_form_parent(($context["form"] ?? null)), "vars", [], "any", false, true, false, 190), "ea_crud_form", [], "any", false, true, false, 190), "ea_field", [], "any", false, true, false, 190), "fieldFqcn", [], "any", false, false, false, 190)) : (false))));
        // line 191
        echo "    ";
        $context["is_complex"] = (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, Symfony\Bridge\Twig\Extension\twig_get_form_parent(($context["form"] ?? null)), "vars", [], "any", false, true, false, 191), "ea_crud_form", [], "any", false, true, false, 191), "ea_field", [], "any", false, true, false, 191), "customOptions", [], "any", false, true, false, 191), "get", [0 => "entryIsComplex"], "method", true, true, false, 191) &&  !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, Symfony\Bridge\Twig\Extension\twig_get_form_parent(($context["form"] ?? null)), "vars", [], "any", false, true, false, 191), "ea_crud_form", [], "any", false, true, false, 191), "ea_field", [], "any", false, true, false, 191), "customOptions", [], "any", false, true, false, 191), "get", [0 => "entryIsComplex"], "method", false, false, false, 191)))) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, Symfony\Bridge\Twig\Extension\twig_get_form_parent(($context["form"] ?? null)), "vars", [], "any", false, true, false, 191), "ea_crud_form", [], "any", false, true, false, 191), "ea_field", [], "any", false, true, false, 191), "customOptions", [], "any", false, true, false, 191), "get", [0 => "entryIsComplex"], "method", false, false, false, 191)) : (false));
        // line 192
        echo "    ";
        $context["allows_deleting_items"] = ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, Symfony\Bridge\Twig\Extension\twig_get_form_parent(($context["form"] ?? null)), "vars", [], "any", false, true, false, 192), "allow_delete", [], "any", true, true, false, 192)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, Symfony\Bridge\Twig\Extension\twig_get_form_parent(($context["form"] ?? null)), "vars", [], "any", false, true, false, 192), "allow_delete", [], "any", false, false, false, 192), false)) : (false));
        // line 193
        echo "    ";
        $context["render_expanded"] = (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, Symfony\Bridge\Twig\Extension\twig_get_form_parent(($context["form"] ?? null)), "vars", [], "any", false, true, false, 193), "ea_crud_form", [], "any", false, true, false, 193), "ea_field", [], "any", false, true, false, 193), "customOptions", [], "any", false, true, false, 193), "get", [0 => "renderExpanded"], "method", true, true, false, 193) &&  !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, Symfony\Bridge\Twig\Extension\twig_get_form_parent(($context["form"] ?? null)), "vars", [], "any", false, true, false, 193), "ea_crud_form", [], "any", false, true, false, 193), "ea_field", [], "any", false, true, false, 193), "customOptions", [], "any", false, true, false, 193), "get", [0 => "renderExpanded"], "method", false, false, false, 193)))) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, Symfony\Bridge\Twig\Extension\twig_get_form_parent(($context["form"] ?? null)), "vars", [], "any", false, true, false, 193), "ea_crud_form", [], "any", false, true, false, 193), "ea_field", [], "any", false, true, false, 193), "customOptions", [], "any", false, true, false, 193), "get", [0 => "renderExpanded"], "method", false, false, false, 193)) : (false));
        // line 194
        echo "    ";
        ob_start(function () { return ''; });
        // line 195
        echo "        <button type=\"button\" class=\"btn btn-link btn-link-danger field-collection-delete-button\"
                title=\"";
        // line 196
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("action.remove_item", [], "EasyAdminBundle"), "html", null, true);
        echo "\">
            <i class=\"far fa-trash-alt\"></i>
        </button>
    ";
        $context["delete_item_button"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 200
        echo "
    <div class=\"field-collection-item ";
        // line 201
        echo ((($context["is_complex"] ?? null)) ? ("field-collection-item-complex") : (""));
        echo "\">
        ";
        // line 202
        if (((array_key_exists("is_array_field", $context)) ? (_twig_default_filter(($context["is_array_field"] ?? null), false)) : (false))) {
            // line 203
            echo "            ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget');
            echo "
            ";
            // line 204
            if (($context["allows_deleting_items"] ?? null)) {
                // line 205
                echo "                ";
                echo twig_escape_filter($this->env, ($context["delete_item_button"] ?? null), "html", null, true);
                echo "
            ";
            }
            // line 207
            echo "        ";
        } else {
            // line 208
            echo "            <div class=\"accordion-item\">
                <h2 class=\"accordion-header\">
                    <button class=\"accordion-button ";
            // line 210
            echo ((($context["render_expanded"] ?? null)) ? ("") : ("collapsed"));
            echo "\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#";
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo "-contents\">
                        <i class=\"fas fw fa-chevron-right form-collection-item-collapse-marker\"></i>
                        ";
            // line 212
            echo twig_escape_filter($this->env, $this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->representAsString(($context["value"] ?? null)), "html", null, true);
            echo "
                    </button>

                    ";
            // line 215
            if (($context["allows_deleting_items"] ?? null)) {
                // line 216
                echo "                        ";
                echo twig_escape_filter($this->env, ($context["delete_item_button"] ?? null), "html", null, true);
                echo "
                    ";
            }
            // line 218
            echo "                </h2>
                <div id=\"";
            // line 219
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo "-contents\" class=\"accordion-collapse collapse ";
            echo ((($context["render_expanded"] ?? null)) ? ("show") : (""));
            echo "\">
                    <div class=\"accordion-body\">
                        ";
            // line 221
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget');
            echo "
                    </div>
                </div>
            </div>
        ";
        }
        // line 226
        echo "    </div>
";
    }

    // line 229
    public function block_form_widget_compound($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 230
        echo "    <div class=\"form-widget-compound\">
        ";
        // line 231
        if (twig_in_filter("collection", ($context["block_prefixes"] ?? null))) {
            // line 232
            echo "            ";
            // line 234
            echo "            ";
            $context["isEmptyCollection"] = ((null === ($context["value"] ?? null)) || (twig_test_iterable(($context["value"] ?? null)) && twig_test_empty(($context["value"] ?? null))));
            // line 235
            echo "            ";
            if (($context["isEmptyCollection"] ?? null)) {
                // line 236
                echo "                ";
                $this->displayBlock("empty_collection", $context, $blocks);
                echo "
            ";
            }
            // line 238
            echo "            ";
            if ((($context["isEmptyCollection"] ?? null) || twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 238), "prototype", [], "any", true, true, false, 238))) {
                // line 239
                echo "                ";
                $context["attr"] = twig_array_merge(($context["attr"] ?? null), ["data-empty-collection" =>                 $this->renderBlock("empty_collection", $context, $blocks)]);
                // line 240
                echo "            ";
            }
            // line 241
            echo "        ";
        }
        // line 242
        echo "
        ";
        // line 243
        $this->displayParentBlock("form_widget_compound", $context, $blocks);
        echo "
    </div>
";
    }

    // line 247
    public function block_button_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 248
        echo "<div class=\"form-group field-";
        echo twig_escape_filter($this->env, twig_first($this->env, twig_slice($this->env, ($context["block_prefixes"] ?? null),  -2)), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "field", [], "any", false, true, false, 248), "css_class", [], "any", true, true, false, 248)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "field", [], "any", false, true, false, 248), "css_class", [], "any", false, false, false, 248), "")) : ("")), "html", null, true);
        echo "\">";
        // line 249
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget');
        // line 250
        echo "</div>";
    }

    // line 255
    public function block_form_label($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 256
        if ((($context["label"] ?? null) === false)) {
            // line 257
            echo "<label>";
            echo "</label>";
        } else {
            // line 259
            if ((array_key_exists("compound", $context) && ($context["compound"] ?? null))) {
                // line 260
                $context["element"] = "legend";
                // line 261
                $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? null), ["class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", true, true, false, 261)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", false, false, false, 261), "")) : ("")) . " col-form-label"))]);
            } else {
                // line 263
                $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? null), ["for" => ($context["id"] ?? null), "class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", true, true, false, 263)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", false, false, false, 263), "")) : ("")) . " form-control-label"))]);
            }
            // line 265
            if (($context["required"] ?? null)) {
                // line 266
                $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? null), ["class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", true, true, false, 266)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", false, false, false, 266), "")) : ("")) . " required"))]);
            }
            // line 268
            if (twig_test_empty(($context["label"] ?? null))) {
                // line 269
                if ( !twig_test_empty(($context["label_format"] ?? null))) {
                    // line 270
                    $context["label"] = twig_replace_filter(($context["label_format"] ?? null), ["%name%" =>                     // line 271
($context["name"] ?? null), "%id%" =>                     // line 272
($context["id"] ?? null)]);
                } else {
                    // line 275
                    $context["label"] = $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->humanize(($context["name"] ?? null));
                }
            }
            // line 278
            echo "<";
            echo twig_escape_filter($this->env, ((array_key_exists("element", $context)) ? (_twig_default_filter(($context["element"] ?? null), "label")) : ("label")), "html", null, true);
            if (($context["label_attr"] ?? null)) {
                $__internal_compile_3 = $context;
                $__internal_compile_4 = ["attr" => ($context["label_attr"] ?? null)];
                if (!twig_test_iterable($__internal_compile_4)) {
                    throw new RuntimeError('Variables passed to the "with" tag must be a hash.', 278, $this->getSourceContext());
                }
                $__internal_compile_4 = twig_to_array($__internal_compile_4);
                $context = $this->env->mergeGlobals(array_merge($context, $__internal_compile_4));
                $this->displayBlock("attributes", $context, $blocks);
                $context = $__internal_compile_3;
            }
            echo ">";
            // line 279
            if ((($context["translation_domain"] ?? null) === false)) {
                // line 280
                if ((((array_key_exists("label_html", $context)) ? (_twig_default_filter(($context["label_html"] ?? null), false)) : (false)) === false)) {
                    // line 281
                    echo twig_escape_filter($this->env, ($context["label"] ?? null), "html", null, true);
                } else {
                    // line 283
                    echo ($context["label"] ?? null);
                }
            } else {
                // line 286
                if ((((array_key_exists("label_html", $context)) ? (_twig_default_filter(($context["label_html"] ?? null), false)) : (false)) === false)) {
                    // line 287
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(($context["label"] ?? null), ($context["label_translation_parameters"] ?? null), ($context["translation_domain"] ?? null)), "html", null, true);
                } else {
                    // line 289
                    echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(($context["label"] ?? null), ($context["label_translation_parameters"] ?? null), ($context["translation_domain"] ?? null));
                }
            }
            // line 292
            echo "</";
            echo twig_escape_filter($this->env, ((array_key_exists("element", $context)) ? (_twig_default_filter(($context["element"] ?? null), "label")) : ("label")), "html", null, true);
            echo ">";
        }
    }

    // line 298
    public function block_empty_collection($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 299
        echo "    <div class=\"empty collection-empty\">
        ";
        // line 300
        echo twig_include($this->env, $context, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "templatePath", [0 => "label/empty"], "method", false, false, false, 300));
        echo "
    </div>
";
    }

    // line 304
    public function block_vich_file_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 305
        echo "    ";
        $context["force_error"] = true;
        // line 306
        echo "    ";
        $this->displayBlock("form_row", $context, $blocks);
        echo "
";
    }

    // line 309
    public function block_vich_file_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 310
        echo "    <div class=\"ea-vich-file\">
        ";
        // line 311
        if ( !twig_test_empty(((array_key_exists("download_uri", $context)) ? (_twig_default_filter(($context["download_uri"] ?? null), "")) : ("")))) {
            // line 312
            echo "            ";
            $context["file_extension"] = twig_last($this->env, twig_split_filter($this->env, ($context["download_uri"] ?? null), "."));
            // line 313
            echo "            ";
            $context["extension_icons"] = ["gif" => "fa-file-image-o", "jpg" => "fa-file-image-o", "pdf" => "fa-file-pdf-o", "png" => "fa-file-image-o", "zip" => "fa-file-archive-o"];
            // line 320
            echo "            <a class=\"ea-vich-file-name\" href=\"";
            echo twig_escape_filter($this->env, (((($context["asset_helper"] ?? null) === true)) ? ($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(($context["download_uri"] ?? null))) : (($context["download_uri"] ?? null))), "html", null, true);
            echo "\">
                <i class=\"fa fa-fw ";
            // line 321
            (((twig_get_attribute($this->env, $this->source, ($context["extension_icons"] ?? null), ($context["file_extension"] ?? null), [], "array", true, true, false, 321) &&  !(null === (($__internal_compile_5 = ($context["extension_icons"] ?? null)) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5[($context["file_extension"] ?? null)] ?? null) : null)))) ? (print (twig_escape_filter($this->env, (($__internal_compile_6 = ($context["extension_icons"] ?? null)) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6[($context["file_extension"] ?? null)] ?? null) : null), "html", null, true))) : (print ("fa-file-o")));
            echo "\"></i>";
            // line 322
            if (((array_key_exists("download_label", $context)) ? (_twig_default_filter(($context["download_label"] ?? null), false)) : (false))) {
                // line 323
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(($context["download_label"] ?? null), [], "VichUploaderBundle"), "html", null, true);
            } else {
                // line 325
                echo twig_escape_filter($this->env, ((twig_last($this->env, twig_split_filter($this->env, ($context["download_uri"] ?? null), "/"))) ? (twig_last($this->env, twig_split_filter($this->env, ($context["download_uri"] ?? null), "/"))) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("download", [], "VichUploaderBundle"))), "html", null, true);
            }
            // line 327
            echo "</a>
        ";
        }
        // line 329
        echo "
        ";
        // line 330
        ob_start(function () { return ''; });
        // line 331
        echo "            var newFile = document.getElementById('";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "file", [], "any", false, false, false, 331), "vars", [], "any", false, false, false, 331), "id", [], "any", false, false, false, 331), "html", null, true);
        echo "').files[0];
            var fileSizeInMegabytes = newFile.size > 1024 * 1024;
            var fileSize = fileSizeInMegabytes ? newFile.size / (1024 * 1024) : newFile.size / 1024;
            document.getElementById('";
        // line 334
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "file", [], "any", false, false, false, 334), "vars", [], "any", false, false, false, 334), "id", [], "any", false, false, false, 334), "html", null, true);
        echo "_new_file_name').innerText = newFile.name + ' (' + fileSize.toFixed(2) + ' ' + (fileSizeInMegabytes ? 'MB' : 'KB') + ')';
        ";
        $context["file_upload_js"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 336
        echo "
        <div class=\"ea-vich-file-actions\">
            ";
        // line 339
        echo "            <div class=\"btn btn-secondary input-file-container\">
                <i class=\"fa fa-fw fa-upload\"></i> ";
        // line 340
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("action.choose_file", [], "EasyAdminBundle"), "html", null, true);
        echo "
                ";
        // line 341
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "file", [], "any", false, false, false, 341), 'widget', ["attr" => ["onchange" => ($context["file_upload_js"] ?? null)], "vich" => true]);
        echo "
            </div>

            ";
        // line 344
        if (twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "delete", [], "any", true, true, false, 344)) {
            // line 345
            echo "                ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "delete", [], "any", false, false, false, 345), 'row', ["label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("vich_uploader.form_label.delete_confirm", [], "VichUploaderBundle")]);
            echo "
            ";
        }
        // line 347
        echo "        </div>
        <div class=\"small\" id=\"";
        // line 348
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "file", [], "any", false, false, false, 348), "vars", [], "any", false, false, false, 348), "id", [], "any", false, false, false, 348), "html", null, true);
        echo "_new_file_name\"></div>
    </div>
";
    }

    // line 352
    public function block_vich_image_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 353
        echo "    ";
        $context["force_error"] = true;
        // line 354
        echo "    ";
        $this->displayBlock("form_row", $context, $blocks);
        echo "
";
    }

    // line 357
    public function block_vich_image_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 358
        echo "    ";
        $context["formTypeOptions"] = ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea_crud_form"] ?? null), "ea_field", [], "any", false, true, false, 358), "formTypeOptions", [], "any", true, true, false, 358)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea_crud_form"] ?? null), "ea_field", [], "any", false, true, false, 358), "formTypeOptions", [], "any", false, false, false, 358), "")) : (""));
        // line 359
        echo "    <div class=\"ea-vich-image\">
        ";
        // line 360
        if ( !twig_test_empty(((array_key_exists("image_uri", $context)) ? (_twig_default_filter(($context["image_uri"] ?? null), "")) : ("")))) {
            // line 361
            echo "            ";
            if (twig_test_empty(((array_key_exists("download_uri", $context)) ? (_twig_default_filter(($context["download_uri"] ?? null), "")) : ("")))) {
                // line 362
                echo "                <div class=\"ea-lightbox-thumbnail\">
                    ";
                // line 363
                if ((twig_get_attribute($this->env, $this->source, ($context["formTypeOptions"] ?? null), "imagine_pattern", [], "any", true, true, false, 363) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["formTypeOptions"] ?? null), "imagine_pattern", [], "any", false, false, false, 363)))) {
                    // line 364
                    echo "                        <img style=\"cursor: initial\" src=\"";
                    echo twig_escape_filter($this->env, $this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->applyFilterIfExists($this->env, (((($context["asset_helper"] ?? null) === true)) ? ($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(($context["image_uri"] ?? null))) : (($context["image_uri"] ?? null))), "imagine_filter", twig_get_attribute($this->env, $this->source, ($context["formTypeOptions"] ?? null), "imagine_pattern", [], "any", false, false, false, 364)), "html", null, true);
                    echo "\">
                    ";
                } else {
                    // line 366
                    echo "                        <img style=\"cursor: initial\" src=\"";
                    echo twig_escape_filter($this->env, (((($context["asset_helper"] ?? null) === true)) ? ($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(($context["image_uri"] ?? null))) : (($context["image_uri"] ?? null))), "html", null, true);
                    echo "\">
                    ";
                }
                // line 368
                echo "                </div>
            ";
            } else {
                // line 370
                echo "                ";
                $context["_lightbox_id"] = ("ea-lightbox-" . ($context["id"] ?? null));
                // line 371
                echo "
                <a href=\"#\" class=\"ea-lightbox-thumbnail\" data-ea-lightbox-content-selector=\"#";
                // line 372
                echo twig_escape_filter($this->env, ($context["_lightbox_id"] ?? null), "html", null, true);
                echo "\">
                    ";
                // line 373
                if ((twig_get_attribute($this->env, $this->source, ($context["formTypeOptions"] ?? null), "imagine_pattern", [], "any", true, true, false, 373) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["formTypeOptions"] ?? null), "imagine_pattern", [], "any", false, false, false, 373)))) {
                    // line 374
                    echo "                        <img src=\"";
                    echo twig_escape_filter($this->env, $this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->applyFilterIfExists($this->env, (((($context["asset_helper"] ?? null) === true)) ? ($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(($context["download_uri"] ?? null))) : (($context["download_uri"] ?? null))), "imagine_filter", twig_get_attribute($this->env, $this->source, ($context["formTypeOptions"] ?? null), "imagine_pattern", [], "any", false, false, false, 374)), "html", null, true);
                    echo "\">
                    ";
                } else {
                    // line 376
                    echo "                        <img src=\"";
                    echo twig_escape_filter($this->env, (((($context["asset_helper"] ?? null) === true)) ? ($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(($context["download_uri"] ?? null))) : (($context["download_uri"] ?? null))), "html", null, true);
                    echo "\">
                    ";
                }
                // line 378
                echo "                </a>

                <div id=\"";
                // line 380
                echo twig_escape_filter($this->env, ($context["_lightbox_id"] ?? null), "html", null, true);
                echo "\" class=\"ea-lightbox\">
                    ";
                // line 381
                if ((twig_get_attribute($this->env, $this->source, ($context["formTypeOptions"] ?? null), "imagine_pattern", [], "any", true, true, false, 381) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["formTypeOptions"] ?? null), "imagine_pattern", [], "any", false, false, false, 381)))) {
                    // line 382
                    echo "                        <img src=\"";
                    echo twig_escape_filter($this->env, $this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->applyFilterIfExists($this->env, (((($context["asset_helper"] ?? null) === true)) ? ($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(($context["download_uri"] ?? null))) : (($context["download_uri"] ?? null))), "imagine_filter", twig_get_attribute($this->env, $this->source, ($context["formTypeOptions"] ?? null), "imagine_pattern", [], "any", false, false, false, 382)), "html", null, true);
                    echo "\">
                    ";
                } else {
                    // line 384
                    echo "                        <img src=\"";
                    echo twig_escape_filter($this->env, (((($context["asset_helper"] ?? null) === true)) ? ($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(($context["download_uri"] ?? null))) : (($context["download_uri"] ?? null))), "html", null, true);
                    echo "\">
                    ";
                }
                // line 386
                echo "                </div>
            ";
            }
            // line 388
            echo "        ";
        }
        // line 389
        echo "
        ";
        // line 390
        ob_start(function () { return ''; });
        // line 391
        echo "            var newFile = document.getElementById('";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "file", [], "any", false, false, false, 391), "vars", [], "any", false, false, false, 391), "id", [], "any", false, false, false, 391), "html", null, true);
        echo "').files[0];
            var fileSizeInMegabytes = newFile.size > 1024 * 1024;
            var fileSize = fileSizeInMegabytes ? newFile.size / (1024 * 1024) : newFile.size / 1024;
            document.getElementById('";
        // line 394
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "file", [], "any", false, false, false, 394), "vars", [], "any", false, false, false, 394), "id", [], "any", false, false, false, 394), "html", null, true);
        echo "_new_file_name').innerText = newFile.name + ' (' + fileSize.toFixed(2) + ' ' + (fileSizeInMegabytes ? 'MB' : 'KB') + ')';
        ";
        $context["file_upload_js"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 396
        echo "
        <div class=\"ea-vich-image-actions\">
            ";
        // line 399
        echo "            <div class=\"btn btn-secondary input-file-container\">
                <i class=\"fa fa-fw fa-upload\"></i> ";
        // line 400
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("action.choose_file", [], "EasyAdminBundle"), "html", null, true);
        echo "
                ";
        // line 401
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "file", [], "any", false, false, false, 401), 'widget', ["attr" => ["onchange" => ($context["file_upload_js"] ?? null)], "vich" => true]);
        echo "
            </div>

            ";
        // line 404
        if (twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "delete", [], "any", true, true, false, 404)) {
            // line 405
            echo "                ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "delete", [], "any", false, false, false, 405), 'row', ["label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("vich_uploader.form_label.delete_confirm", [], "VichUploaderBundle")]);
            echo "
            ";
        }
        // line 407
        echo "        </div>
        <div class=\"small\" id=\"";
        // line 408
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "file", [], "any", false, false, false, 408), "vars", [], "any", false, false, false, 408), "id", [], "any", false, false, false, 408), "html", null, true);
        echo "_new_file_name\"></div>
    </div>
";
    }

    // line 412
    public function block_ea_crud_rest($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 413
        echo "    ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'rest');
        echo "
";
    }

    // line 417
    public function block_ea_crud_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 418
        echo "    ";
        if ((1 === twig_compare(twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["ea_crud_form"] ?? null), "form_tabs", [], "any", false, false, false, 418)), 0))) {
            // line 419
            echo "        <div class=\"col-12\">
            <div class=\"nav-tabs-custom form-tabs\">
                <ul class=\"nav nav-tabs\">
                    ";
            // line 422
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["ea_crud_form"] ?? null), "form_tabs", [], "any", false, false, false, 422));
            foreach ($context['_seq'] as $context["tab_name"] => $context["tab_config"]) {
                // line 423
                echo "                        <li class=\"nav-item\">
                            <a class=\"nav-link ";
                // line 424
                if (twig_get_attribute($this->env, $this->source, $context["tab_config"], "active", [], "any", false, false, false, 424)) {
                    echo "active";
                }
                echo "\" href=\"#";
                echo twig_escape_filter($this->env, (($__internal_compile_7 = $context["tab_config"]) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess ? ($__internal_compile_7["id"] ?? null) : null), "html", null, true);
                echo "\" id=\"";
                echo twig_escape_filter($this->env, (($__internal_compile_8 = $context["tab_config"]) && is_array($__internal_compile_8) || $__internal_compile_8 instanceof ArrayAccess ? ($__internal_compile_8["id"] ?? null) : null), "html", null, true);
                echo "-tab\" data-bs-toggle=\"tab\">";
                // line 425
                if (((twig_get_attribute($this->env, $this->source, $context["tab_config"], "icon", [], "any", true, true, false, 425)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["tab_config"], "icon", [], "any", false, false, false, 425), false)) : (false))) {
                    // line 426
                    echo "<i class=\"fa fa-fw fa-";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tab_config"], "icon", [], "any", false, false, false, 426), "html", null, true);
                    echo "\"></i>";
                }
                // line 428
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((($__internal_compile_9 = $context["tab_config"]) && is_array($__internal_compile_9) || $__internal_compile_9 instanceof ArrayAccess ? ($__internal_compile_9["label"] ?? null) : null), array(), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "i18n", [], "any", false, false, false, 428), "translationDomain", [], "any", false, false, false, 428)), "html", null, true);
                // line 429
                if ((1 === twig_compare(twig_get_attribute($this->env, $this->source, $context["tab_config"], "errors", [], "any", false, false, false, 429), 0))) {
                    // line 430
                    echo "<span class=\"badge badge-danger\" title=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("form.tab.error_badge_title", ["%count%" => twig_get_attribute($this->env, $this->source, $context["tab_config"], "errors", [], "any", false, false, false, 430)], "EasyAdminBundle"), "html", null, true);
                    echo "\">";
                    // line 431
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tab_config"], "errors", [], "any", false, false, false, 431), "html", null, true);
                    // line 432
                    echo "</span>";
                }
                // line 434
                echo "</a>
                        </li>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['tab_name'], $context['tab_config'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 437
            echo "                </ul>
                <div class=\"tab-content\">
                    ";
            // line 439
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["ea_crud_form"] ?? null), "form_tabs", [], "any", false, false, false, 439));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["tab_name"] => $context["tab_config"]) {
                // line 440
                echo "                        <div id=\"";
                echo twig_escape_filter($this->env, (($__internal_compile_10 = $context["tab_config"]) && is_array($__internal_compile_10) || $__internal_compile_10 instanceof ArrayAccess ? ($__internal_compile_10["id"] ?? null) : null), "html", null, true);
                echo "\" class=\"tab-pane ";
                if (twig_get_attribute($this->env, $this->source, $context["tab_config"], "active", [], "any", false, false, false, 440)) {
                    echo "active";
                }
                echo " ";
                echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["tab_config"], "css_class", [], "array", true, true, false, 440)) ? (_twig_default_filter((($__internal_compile_11 = $context["tab_config"]) && is_array($__internal_compile_11) || $__internal_compile_11 instanceof ArrayAccess ? ($__internal_compile_11["css_class"] ?? null) : null), "")) : ("")), "html", null, true);
                echo "\">
                            ";
                // line 441
                if (((twig_get_attribute($this->env, $this->source, $context["tab_config"], "help", [], "array", true, true, false, 441)) ? (_twig_default_filter((($__internal_compile_12 = $context["tab_config"]) && is_array($__internal_compile_12) || $__internal_compile_12 instanceof ArrayAccess ? ($__internal_compile_12["help"] ?? null) : null), false)) : (false))) {
                    // line 442
                    echo "                                <div class=\"content-header-help tab-help\">
                                    ";
                    // line 443
                    echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((($__internal_compile_13 = $context["tab_config"]) && is_array($__internal_compile_13) || $__internal_compile_13 instanceof ArrayAccess ? ($__internal_compile_13["help"] ?? null) : null), array(), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "i18n", [], "any", false, false, false, 443), "translationDomain", [], "any", false, false, false, 443));
                    echo "
                                </div>
                            ";
                }
                // line 446
                echo "
                            <div class=\"row\">
                                ";
                // line 448
                if ((array_key_exists("tab_name", $context) && $context["tab_name"])) {
                    // line 449
                    echo "                                    ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_array_filter($this->env, ($context["form"] ?? null), function ($__field__) use ($context, $macros) { $context["field"] = $__field__; return ( !twig_array_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["ea_crud_form"] ?? null), "form_panels", [], "any", false, false, false, 449), function ($__panel_config__, $__form_panel__) use ($context, $macros) { $context["panel_config"] = $__panel_config__; $context["form_panel"] = $__form_panel__; return (0 === twig_compare(($context["form_panel"] ?? null), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["field"], "vars", [], "any", false, false, false, 449), "ea_crud_form", [], "any", false, false, false, 449), "form_panel", [], "any", false, false, false, 449))); }) && (0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["field"], "vars", [], "any", false, false, false, 449), "ea_crud_form", [], "any", false, false, false, 449), "form_tab", [], "any", false, false, false, 449), $context["tab_name"]))); }));
                    foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
                        // line 450
                        echo "                                        ";
                        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["field"], 'row');
                        echo "
                                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 452
                    echo "                                ";
                }
                // line 453
                echo "                                ";
                $this->displayBlock("ea_crud_widget_panels", $context, $blocks);
                echo "
                            </div>
                        </div>
                    ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['tab_name'], $context['tab_config'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 457
            echo "                </div>
            </div>
        </div>
    ";
        } else {
            // line 461
            echo "        ";
            $this->displayBlock("ea_crud_widget_panels", $context, $blocks);
            echo "
    ";
        }
    }

    // line 465
    public function block_ea_crud_widget_panels($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 466
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_array_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["ea_crud_form"] ?? null), "form_panels", [], "any", false, false, false, 466), function ($__panel_config__) use ($context, $macros) { $context["panel_config"] = $__panel_config__; return ( !twig_get_attribute($this->env, $this->source, $context["panel_config"], "form_tab", [], "any", false, false, false, 466) || (0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["panel_config"], "form_tab", [], "any", false, false, false, 466), ($context["tab_name"] ?? null)))); }));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["panel_name"] => $context["panel_config"]) {
            // line 467
            echo "        ";
            $context["panel_has_header"] = ((((twig_get_attribute($this->env, $this->source, $context["panel_config"], "label", [], "any", true, true, false, 467)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["panel_config"], "label", [], "any", false, false, false, 467), false)) : (false)) || ((twig_get_attribute($this->env, $this->source, $context["panel_config"], "icon", [], "any", true, true, false, 467)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["panel_config"], "icon", [], "any", false, false, false, 467), false)) : (false))) || ((twig_get_attribute($this->env, $this->source, $context["panel_config"], "help", [], "any", true, true, false, 467)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["panel_config"], "help", [], "any", false, false, false, 467), false)) : (false)));
            // line 468
            echo "
        ";
            // line 469
            $context["collapsible"] = twig_get_attribute($this->env, $this->source, $context["panel_config"], "collapsible", [], "any", false, false, false, 469);
            // line 470
            echo "        ";
            $context["collapsed"] = twig_get_attribute($this->env, $this->source, $context["panel_config"], "collapsed", [], "any", false, false, false, 470);
            // line 471
            echo "
        <div class=\"";
            // line 472
            (((twig_get_attribute($this->env, $this->source, $context["panel_config"], "css_class", [], "any", true, true, false, 472) &&  !(null === twig_get_attribute($this->env, $this->source, $context["panel_config"], "css_class", [], "any", false, false, false, 472)))) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["panel_config"], "css_class", [], "any", false, false, false, 472), "html", null, true))) : (print ("")));
            echo "\">
            <div class=\"form-panel\">
                ";
            // line 474
            if (($context["panel_has_header"] ?? null)) {
                // line 475
                echo "                    <div class=\"form-panel-header ";
                echo ((($context["collapsible"] ?? null)) ? ("collapsible") : (""));
                echo " ";
                echo (( !twig_test_empty(((twig_get_attribute($this->env, $this->source, $context["panel_config"], "help", [], "any", true, true, false, 475)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["panel_config"], "help", [], "any", false, false, false, 475), false)) : (false)))) ? ("with-help") : (""));
                echo "\">
                        <div class=\"form-panel-title\">
                            <a ";
                // line 477
                if ( !($context["collapsible"] ?? null)) {
                    // line 478
                    echo "                                    href=\"#\" class=\"not-collapsible\"
                               ";
                } else {
                    // line 480
                    echo "                                    href=\"#content-";
                    echo twig_escape_filter($this->env, $context["panel_name"], "html", null, true);
                    echo "\" data-bs-toggle=\"collapse\"
                                    class=\"form-panel-collapse ";
                    // line 481
                    echo ((($context["collapsed"] ?? null)) ? ("collapsed") : (""));
                    echo "\"
                                    aria-expanded=\"";
                    // line 482
                    echo ((($context["collapsed"] ?? null)) ? ("false") : ("true"));
                    echo "\" aria-controls=\"content-";
                    echo twig_escape_filter($this->env, $context["panel_name"], "html", null, true);
                    echo "\"
                               ";
                }
                // line 484
                echo "                            >
                                ";
                // line 485
                if (($context["collapsible"] ?? null)) {
                    // line 486
                    echo "                                    <i class=\"fas fw fa-chevron-right form-panel-collapse-marker\"></i>
                                ";
                }
                // line 488
                echo "
                                ";
                // line 489
                if (((twig_get_attribute($this->env, $this->source, $context["panel_config"], "icon", [], "any", true, true, false, 489)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["panel_config"], "icon", [], "any", false, false, false, 489), false)) : (false))) {
                    // line 490
                    echo "                                    <i class=\"form-panel-icon ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["panel_config"], "icon", [], "any", false, false, false, 490), "html", null, true);
                    echo "\"></i>
                                ";
                }
                // line 492
                echo "                                ";
                echo twig_get_attribute($this->env, $this->source, $context["panel_config"], "label", [], "any", false, false, false, 492);
                echo "
                            </a>

                            ";
                // line 495
                if (((twig_get_attribute($this->env, $this->source, $context["panel_config"], "help", [], "any", true, true, false, 495)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["panel_config"], "help", [], "any", false, false, false, 495), false)) : (false))) {
                    // line 496
                    echo "                                <div class=\"form-panel-help\">";
                    echo twig_get_attribute($this->env, $this->source, $context["panel_config"], "help", [], "any", false, false, false, 496);
                    echo "</div>
                            ";
                }
                // line 498
                echo "                        </div>
                    </div>
                ";
            }
            // line 501
            echo "
                <div id=\"content-";
            // line 502
            echo twig_escape_filter($this->env, $context["panel_name"], "html", null, true);
            echo "\" class=\"form-panel-body ";
            echo (( !($context["panel_has_header"] ?? null)) ? ("without-header") : (""));
            echo " ";
            echo ((($context["collapsible"] ?? null)) ? ("collapse") : (""));
            echo " ";
            echo (( !($context["collapsed"] ?? null)) ? ("show") : (""));
            echo "\">
                    <div class=\"row\">
                        ";
            // line 504
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_array_filter($this->env, ($context["form"] ?? null), function ($__field__) use ($context, $macros) { $context["field"] = $__field__; return (!twig_in_filter("hidden", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["field"], "vars", [], "any", false, false, false, 504), "block_prefixes", [], "any", false, false, false, 504)) && (0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["field"], "vars", [], "any", false, false, false, 504), "ea_crud_form", [], "any", false, false, false, 504), "form_panel", [], "any", false, false, false, 504), $context["panel_name"]))); }));
            foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
                // line 505
                echo "                            ";
                if (( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["field"], "vars", [], "any", false, false, false, 505), "ea_crud_form", [], "any", false, false, false, 505), "form_tab", [], "any", false, false, false, 505) || (0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["field"], "vars", [], "any", false, false, false, 505), "ea_crud_form", [], "any", false, false, false, 505), "form_tab", [], "any", false, false, false, 505), ($context["tab_name"] ?? null))))) {
                    // line 506
                    echo "                                ";
                    echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["field"], 'row');
                    echo "
                            ";
                }
                // line 508
                echo "                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 509
            echo "                    </div>
                </div>
            </div>
        </div>
    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 514
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_array_filter($this->env, ($context["form"] ?? null), function ($__field__) use ($context, $macros) { $context["field"] = $__field__; return (!twig_in_filter("hidden", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["field"], "vars", [], "any", false, false, false, 514), "block_prefixes", [], "any", false, false, false, 514)) &&  !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["field"], "vars", [], "any", false, false, false, 514), "ea_crud_form", [], "any", false, false, false, 514), "form_tab", [], "any", false, false, false, 514)); }));
            foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
                // line 515
                echo "            ";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["field"], 'row');
                echo "
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 517
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['panel_name'], $context['panel_config'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    // line 521
    public function block_ea_autocomplete_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 522
        echo "    ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "autocomplete", [], "any", false, false, false, 522), 'widget', ["attr" => twig_array_merge(($context["attr"] ?? null), ["required" => ($context["required"] ?? null)])]);
        echo "
";
    }

    // line 525
    public function block_ea_autocomplete_inner_label($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 526
        echo "    ";
        $context["name"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, Symfony\Bridge\Twig\Extension\twig_get_form_parent(($context["form"] ?? null)), "vars", [], "any", false, false, false, 526), "name", [], "any", false, false, false, 526);
        // line 527
        echo "    ";
        $this->displayBlock("form_label", $context, $blocks);
        echo "
";
    }

    // line 531
    public function block_ea_code_editor_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 532
        echo "    ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget', ["attr" => twig_array_merge(($context["attr"] ?? null), ["data-ea-code-editor-field" => "true", "data-language" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 534
($context["form"] ?? null), "vars", [], "any", false, false, false, 534), "ea_crud_form", [], "any", false, false, false, 534), "ea_field", [], "any", false, false, false, 534), "customOptions", [], "any", false, false, false, 534), "get", [0 => "language"], "method", false, false, false, 534), "data-tab-size" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 535
($context["form"] ?? null), "vars", [], "any", false, false, false, 535), "ea_crud_form", [], "any", false, false, false, 535), "ea_field", [], "any", false, false, false, 535), "customOptions", [], "any", false, false, false, 535), "get", [0 => "tabSize"], "method", false, false, false, 535), "data-indent-with-tabs" => ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 536
($context["form"] ?? null), "vars", [], "any", false, false, false, 536), "ea_crud_form", [], "any", false, false, false, 536), "ea_field", [], "any", false, false, false, 536), "customOptions", [], "any", false, false, false, 536), "get", [0 => "indentWithTabs"], "method", false, false, false, 536)) ? ("true") : ("false")), "data-show-line-numbers" => ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 537
($context["form"] ?? null), "vars", [], "any", false, false, false, 537), "ea_crud_form", [], "any", false, false, false, 537), "ea_field", [], "any", false, false, false, 537), "customOptions", [], "any", false, false, false, 537), "get", [0 => "showLineNumbers"], "method", false, false, false, 537)) ? ("true") : ("false"))])]);
        // line 538
        echo "

    ";
        // line 540
        $context["numOfRows"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 540), "ea_crud_form", [], "any", false, false, false, 540), "ea_field", [], "any", false, false, false, 540), "customOptions", [], "any", false, false, false, 540), "get", [0 => "numOfRows"], "method", false, false, false, 540);
        // line 541
        echo "    ";
        if ( !(null === ($context["numOfRows"] ?? null))) {
            // line 542
            echo "        <style type=\"text/css\">
            ";
            // line 544
            echo "            #";
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo " + .CodeMirror { height: ";
            echo twig_escape_filter($this->env, twig_round((21 * ($context["numOfRows"] ?? null))), "html", null, true);
            echo "px !important; max-height: none; }
        </style>
    ";
        }
    }

    // line 550
    public function block_ea_text_editor_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 551
        echo "    ";
        $context["numOfRows"] = ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 551), "ea_crud_form", [], "any", false, true, false, 551), "ea_field", [], "any", false, true, false, 551), "customOptions", [], "any", false, true, false, 551), "get", [0 => "numOfRows"], "method", true, true, false, 551)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 551), "ea_crud_form", [], "any", false, true, false, 551), "ea_field", [], "any", false, true, false, 551), "customOptions", [], "any", false, true, false, 551), "get", [0 => "numOfRows"], "method", false, false, false, 551), 5)) : (5));
        // line 552
        echo "
    ";
        // line 553
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget', ["attr" => twig_array_merge(($context["attr"] ?? null), ["style" => "display: none", "class" => "ea-text-editor-content"])]);
        echo "

    <div class=\"ea-text-editor-wrapper\">
        <trix-editor input=\"";
        // line 556
        echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
        echo "\" class=\"trix-content\"></trix-editor>
    </div>

    ";
        // line 559
        if (($context["numOfRows"] ?? null)) {
            // line 560
            echo "        <style type=\"text/css\">
            trix-editor[input=";
            // line 561
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo "].trix-content {
                ";
            // line 563
            echo "                min-height: ";
            echo twig_escape_filter($this->env, twig_round((($context["numOfRows"] ?? null) * 21)), "html", null, true);
            echo "px;
            }
        </style>
    ";
        }
    }

    // line 570
    public function block_ea_form_row_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 571
        echo "    <div class=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 571), "row_attr", [], "any", false, false, false, 571), "class", [], "any", false, false, false, 571), "html", null, true);
        echo "\"></div>
";
    }

    // line 574
    public function block_ea_section_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 575
        echo "    <div class=\"form-section ";
        echo ((((0 === twig_compare(((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "field", [], "any", false, true, false, 575), "icon", [], "any", true, true, false, 575)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "field", [], "any", false, true, false, 575), "icon", [], "any", false, false, false, 575), false)) : (false)), false)) && (0 === twig_compare(((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "field", [], "any", false, true, false, 575), "label", [], "any", true, true, false, 575)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "field", [], "any", false, true, false, 575), "label", [], "any", false, false, false, 575), false)) : (false)), false)))) ? ("form-section-empty") : (""));
        echo " ";
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "field", [], "any", false, true, false, 575), "css_class", [], "any", true, true, false, 575)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "field", [], "any", false, true, false, 575), "css_class", [], "any", false, false, false, 575), "")) : ("")), "html", null, true);
        echo "\">
        <h2>
            ";
        // line 577
        if (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "field", [], "any", false, true, false, 577), "icon", [], "any", true, true, false, 577)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "field", [], "any", false, true, false, 577), "icon", [], "any", false, false, false, 577), false)) : (false))) {
            echo "<i class=\"fa fa-fw fa-";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "field", [], "any", false, false, false, 577), "icon", [], "any", false, false, false, 577), "html", null, true);
            echo "\"></i>";
        }
        // line 578
        echo "            <span>";
        if (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "field", [], "any", false, true, false, 578), "label", [], "any", true, true, false, 578)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "field", [], "any", false, true, false, 578), "label", [], "any", false, false, false, 578), false)) : (false))) {
            echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "field", [], "any", false, true, false, 578), "label", [], "any", true, true, false, 578)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "field", [], "any", false, true, false, 578), "label", [], "any", false, false, false, 578), "")) : ("")), array(), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "i18n", [], "any", false, false, false, 578), "translationDomain", [], "any", false, false, false, 578));
        }
        echo "</span>
        </h2>

        ";
        // line 581
        if (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "field", [], "any", false, true, false, 581), "help", [], "any", true, true, false, 581)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "field", [], "any", false, true, false, 581), "help", [], "any", false, false, false, 581), false)) : (false))) {
            // line 582
            echo "            <p class=\"form-section-help\">";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "field", [], "any", false, false, false, 582), "help", [], "any", false, false, false, 582), array(), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "i18n", [], "any", false, false, false, 582), "translationDomain", [], "any", false, false, false, 582));
            echo "</p>
        ";
        }
        // line 584
        echo "    </div>
";
    }

    // line 588
    public function block_ea_filters_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 589
        echo "    ";
        $context["applied_filters"] = twig_get_array_keys_filter(((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "request", [], "any", false, true, false, 589), "query", [], "any", false, true, false, 589), "get", [0 => "filters"], "method", true, true, false, 589)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "request", [], "any", false, true, false, 589), "query", [], "any", false, true, false, 589), "get", [0 => "filters"], "method", false, false, false, 589), [])) : ([])));
        // line 590
        echo "
    ";
        // line 591
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["form"] ?? null));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
            // line 592
            echo "        <div class=\"col-12\">
            <div class=\"filter-field ";
            // line 593
            if ( !twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 593)) {
                echo "border-bottom";
            }
            echo " py-1 px-3 ";
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 593)) {
                echo "pb-2";
            }
            echo "\" data-filter-property=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["field"], "vars", [], "any", false, false, false, 593), "name", [], "any", false, false, false, 593), "html", null, true);
            echo "\">
                <div class=\"filter-heading\" id=\"filter-heading-";
            // line 594
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 594), "html", null, true);
            echo "\">
                    <input type=\"checkbox\" class=\"filter-checkbox\" ";
            // line 595
            if (twig_in_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["field"], "vars", [], "any", false, false, false, 595), "name", [], "any", false, false, false, 595), ($context["applied_filters"] ?? null))) {
                echo "checked";
            }
            echo ">
                    <a data-bs-toggle=\"collapse\" href=\"#filter-content-";
            // line 596
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 596), "html", null, true);
            echo "\" aria-expanded=\"";
            echo ((twig_in_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["field"], "vars", [], "any", false, false, false, 596), "name", [], "any", false, false, false, 596), ($context["applied_filters"] ?? null))) ? ("true") : ("false"));
            echo "\" aria-controls=\"filter-content-";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 596), "html", null, true);
            echo "\"
                        ";
            // line 597
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["field"], "vars", [], "any", false, true, false, 597), "label_attr", [], "any", true, true, false, 597)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["field"], "vars", [], "any", false, true, false, 597), "label_attr", [], "any", false, false, false, 597), [])) : ([])));
            foreach ($context['_seq'] as $context["name"] => $context["value"]) {
                echo twig_escape_filter($this->env, $context["name"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["value"], "html_attr");
                echo "\" ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['name'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo ">
                        ";
            // line 598
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["field"], "vars", [], "any", false, true, false, 598), "label", [], "any", true, true, false, 598)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["field"], "vars", [], "any", false, true, false, 598), "label", [], "any", false, false, false, 598), $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->humanize(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["field"], "vars", [], "any", false, false, false, 598), "name", [], "any", false, false, false, 598)))) : ($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->humanize(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["field"], "vars", [], "any", false, false, false, 598), "name", [], "any", false, false, false, 598)))), array(), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "i18n", [], "any", false, false, false, 598), "translationDomain", [], "any", false, false, false, 598)), "html", null, true);
            echo "
                    </a>
                </div>
                <div id=\"filter-content-";
            // line 601
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 601), "html", null, true);
            echo "\" class=\"filter-content collapse ";
            if (twig_in_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["field"], "vars", [], "any", false, false, false, 601), "name", [], "any", false, false, false, 601), ($context["applied_filters"] ?? null))) {
                echo "show";
            }
            echo "\" aria-labelledby=\"filter-heading-";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 601), "html", null, true);
            echo "\">
                    <div class=\"form-widget my-2\">
                        ";
            // line 603
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["field"], 'widget');
            echo "
                    </div>
                </div>
            </div>
        </div>
    ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 609
        echo "
    <script>
        document.querySelectorAll('.filter-checkbox').forEach((filterCheckbox) => {
            filterCheckbox.addEventListener('change', () => {
                const filterToggleLink = filterCheckbox.nextElementSibling;
                const filterExpandedAttribute = filterCheckbox.nextElementSibling.getAttribute('aria-expanded');

                if ((filterCheckbox.checked && 'false' === filterExpandedAttribute) || (!filterCheckbox.checked && 'true' === filterExpandedAttribute)) {
                    filterToggleLink.click();
                }
            });
        });

        // TODO: when using the native datepicker, 'change' isn't fired (either in plain JavaScript
        // or jQuery) unless you input the entire date + time information
        document.querySelector('form#";
        // line 624
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 624), "id", [], "any", false, false, false, 624), "html", null, true);
        echo "').addEventListener('change', (event) => {
            if (event.target.classList.contains('filter-checkbox')) {
                return;
            }

            const filterCheckbox = event.target.closest('.filter-field').querySelector('.filter-checkbox');
            if (!filterCheckbox.checked) {
                filterCheckbox.checked = true;
            }
        });
    </script>
";
    }

    // line 637
    public function block_ea_numeric_filter_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 638
        echo "    <div class=\"form-widget-compound\">
        ";
        // line 639
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "comparison", [], "any", false, false, false, 639), 'row');
        echo "
        ";
        // line 640
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "value", [], "any", false, false, false, 640), 'row');
        echo "
        <div id=\"wrapper_";
        // line 641
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "value2", [], "any", false, false, false, 641), "vars", [], "any", false, false, false, 641), "id", [], "any", false, false, false, 641), "html", null, true);
        echo "\" ";
        if ((0 !== twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "comparison", [], "any", false, false, false, 641), "vars", [], "any", false, false, false, 641), "value", [], "any", false, false, false, 641), "between"))) {
            echo "style=\"display: none\"";
        }
        echo ">
            ";
        // line 642
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "value2", [], "any", false, false, false, 642), 'row');
        echo "
        </div>
        <script>
            document.querySelector('#";
        // line 645
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "comparison", [], "any", false, false, false, 645), "vars", [], "any", false, false, false, 645), "id", [], "any", false, false, false, 645), "html", null, true);
        echo "').addEventListener('change', (event) => {
                const input = document.querySelector('#wrapper_";
        // line 646
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "value2", [], "any", false, false, false, 646), "vars", [], "any", false, false, false, 646), "id", [], "any", false, false, false, 646), "html", null, true);
        echo "');
                input.style.display = event.currentTarget.value === 'between' ? '' : 'none';
            });
        </script>
    </div>";
        // line 651
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'errors');
    }

    // line 654
    public function block_ea_datetime_filter_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 655
        echo "    ";
        $this->displayBlock("ea_numeric_filter_widget", $context, $blocks);
        echo "
";
    }

    // line 658
    public function block_ea_fileupload_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 659
        echo "    <div class=\"ea-fileupload\">
        <div class=\"input-group\">
            ";
        // line 661
        $context["placeholder"] = "";
        // line 662
        echo "            ";
        $context["title"] = "";
        // line 663
        echo "            ";
        $context["filesLabel"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("files", [], "EasyAdminBundle");
        // line 664
        echo "            ";
        if (($context["currentFiles"] ?? null)) {
            // line 665
            echo "                ";
            if (($context["multiple"] ?? null)) {
                // line 666
                echo "                    ";
                $context["placeholder"] = ((twig_length_filter($this->env, ($context["currentFiles"] ?? null)) . " ") . ($context["filesLabel"] ?? null));
                // line 667
                echo "                ";
            } else {
                // line 668
                echo "                    ";
                $context["placeholder"] = twig_get_attribute($this->env, $this->source, twig_first($this->env, ($context["currentFiles"] ?? null)), "filename", [], "any", false, false, false, 668);
                // line 669
                echo "                    ";
                $context["title"] = twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_first($this->env, ($context["currentFiles"] ?? null)), "mTime", [], "any", false, false, false, 669));
                // line 670
                echo "                ";
            }
            // line 671
            echo "            ";
        }
        // line 672
        echo "            <div class=\"custom-file\">
                ";
        // line 673
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "file", [], "any", false, false, false, 673), 'widget', ["attr" => twig_array_merge(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "file", [], "any", false, false, false, 673), "vars", [], "any", false, false, false, 673), "attr", [], "any", false, false, false, 673), ["placeholder" => ($context["placeholder"] ?? null), "title" => ($context["title"] ?? null), "data-files-label" => ($context["filesLabel"] ?? null), "style" => "display: none"])]);
        echo "
                ";
        // line 674
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "file", [], "any", false, false, false, 674), 'label', ["label_attr" => ["class" => "custom-file-label"]] + (twig_test_empty($_label_ = ($context["placeholder"] ?? null)) ? [] : ["label" => $_label_]));
        echo "
            </div>
            <div class=\"input-group-text\">";
        // line 677
        if (($context["currentFiles"] ?? null)) {
            // line 678
            if (($context["multiple"] ?? null)) {
                // line 679
                echo "                        ";
                echo twig_escape_filter($this->env, $this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->fileSize(twig_array_reduce($this->env, ($context["currentFiles"] ?? null), function ($__carry__, $__file__) use ($context, $macros) { $context["carry"] = $__carry__; $context["file"] = $__file__; return (($context["carry"] ?? null) + twig_get_attribute($this->env, $this->source, ($context["file"] ?? null), "size", [], "any", false, false, false, 679)); })), "html", null, true);
                echo "
                    ";
            } else {
                // line 681
                echo "                        ";
                echo twig_escape_filter($this->env, $this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->fileSize(twig_get_attribute($this->env, $this->source, twig_first($this->env, ($context["currentFiles"] ?? null)), "size", [], "any", false, false, false, 681)), "html", null, true);
                echo "
                    ";
            }
        }
        // line 684
        if (($context["allow_delete"] ?? null)) {
            // line 685
            echo "                    <label class=\"btn ea-fileupload-delete-btn\" ";
            if (twig_test_empty(($context["currentFiles"] ?? null))) {
                echo "style=\"display: none\"";
            }
            echo " for=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "delete", [], "any", false, false, false, 685), "vars", [], "any", false, false, false, 685), "id", [], "any", false, false, false, 685), "html", null, true);
            echo "\">
                        <i class=\"fa fa-trash-o\"></i>
                    </label>
                ";
        }
        // line 689
        echo "                <label class=\"btn\" for=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "file", [], "any", false, false, false, 689), "vars", [], "any", false, false, false, 689), "id", [], "any", false, false, false, 689), "html", null, true);
        echo "\">
                    <i class=\"fa fa-folder-open-o\"></i>
                </label>
            </div>
        </div>
        ";
        // line 694
        if ((($context["multiple"] ?? null) && ($context["currentFiles"] ?? null))) {
            // line 695
            echo "            <div class=\"form-control fileupload-list\">
                <table class=\"fileupload-table\">
                    <tbody>
                    ";
            // line 698
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["currentFiles"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["file"]) {
                // line 699
                echo "                        <tr>
                            <td>
                                ";
                // line 701
                if (($context["download_path"] ?? null)) {
                    echo "<a href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl((($context["download_path"] ?? null) . twig_get_attribute($this->env, $this->source, $context["file"], "filename", [], "any", false, false, false, 701))), "html", null, true);
                    echo "\">";
                }
                // line 702
                echo "                                    <span title=\"";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["file"], "mTime", [], "any", false, false, false, 702)), "html", null, true);
                echo "\">
                                        <i class=\"fa fa-file-o\"></i> ";
                // line 703
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["file"], "filename", [], "any", false, false, false, 703), "html", null, true);
                echo "
                                    </span>
                                ";
                // line 705
                if (($context["download_path"] ?? null)) {
                    echo "</a>";
                }
                // line 706
                echo "                            </td>
                            <td class=\"text-right file-size\">";
                // line 707
                echo twig_escape_filter($this->env, $this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->fileSize(twig_get_attribute($this->env, $this->source, $context["file"], "size", [], "any", false, false, false, 707)), "html", null, true);
                echo "</td>
                        </tr>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['file'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 710
            echo "                    </tbody>
                </table>
            </div>
        ";
        }
        // line 714
        echo "        ";
        if (($context["allow_delete"] ?? null)) {
            // line 715
            echo "            <div style=\"display: none\">";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "delete", [], "any", false, false, false, 715), 'widget', ["label" => false]);
            echo "</div>
        ";
        }
        // line 717
        echo "    </div>
    ";
        // line 718
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "file", [], "any", false, false, false, 718), 'errors');
        echo "
";
    }

    // line 721
    public function block_TODO_ea_fileupload_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 722
        echo "    ";
        $context["placeholder"] = "";
        // line 723
        echo "    ";
        $context["title"] = "";
        // line 724
        echo "    ";
        $context["filesLabel"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("files", [], "EasyAdminBundle");
        // line 725
        echo "    ";
        if (($context["currentFiles"] ?? null)) {
            // line 726
            echo "        ";
            if (($context["multiple"] ?? null)) {
                // line 727
                echo "            ";
                $context["placeholder"] = ((twig_length_filter($this->env, ($context["currentFiles"] ?? null)) . " ") . ($context["filesLabel"] ?? null));
                // line 728
                echo "        ";
            } else {
                // line 729
                echo "            ";
                $context["placeholder"] = twig_get_attribute($this->env, $this->source, twig_first($this->env, ($context["currentFiles"] ?? null)), "filename", [], "any", false, false, false, 729);
                // line 730
                echo "            ";
                $context["title"] = twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_first($this->env, ($context["currentFiles"] ?? null)), "mTime", [], "any", false, false, false, 730));
                // line 731
                echo "        ";
            }
            // line 732
            echo "    ";
        }
        // line 733
        echo "
    <div class=\"ea-fileupload\">
        <div class=\"input-group\">
            ";
        // line 736
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "file", [], "any", false, false, false, 736), 'widget', ["attr" => twig_array_merge(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "file", [], "any", false, false, false, 736), "vars", [], "any", false, false, false, 736), "attr", [], "any", false, false, false, 736), ["placeholder" => ($context["placeholder"] ?? null), "title" => ($context["title"] ?? null), "data-files-label" => ($context["filesLabel"] ?? null), "class" => "form-control"])]);
        echo "

            ";
        // line 738
        if (($context["currentFiles"] ?? null)) {
            // line 739
            echo "                <span class=\"input-group-text\">
                    ";
            // line 740
            if (($context["multiple"] ?? null)) {
                // line 741
                echo "                        ";
                echo twig_escape_filter($this->env, $this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->fileSize(twig_array_reduce($this->env, ($context["currentFiles"] ?? null), function ($__carry__, $__file__) use ($context, $macros) { $context["carry"] = $__carry__; $context["file"] = $__file__; return (($context["carry"] ?? null) + twig_get_attribute($this->env, $this->source, ($context["file"] ?? null), "size", [], "any", false, false, false, 741)); })), "html", null, true);
                echo "
                    ";
            } else {
                // line 743
                echo "                        ";
                echo twig_escape_filter($this->env, $this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->fileSize(twig_get_attribute($this->env, $this->source, twig_first($this->env, ($context["currentFiles"] ?? null)), "size", [], "any", false, false, false, 743)), "html", null, true);
                echo "
                    ";
            }
            // line 745
            echo "                </span>
            ";
        }
        // line 747
        echo "
            ";
        // line 748
        if ((($context["currentFiles"] ?? null) && ($context["allow_delete"] ?? null))) {
            // line 749
            echo "                <button class=\"btn ea-fileupload-delete-btn\">
                    <i class=\"fa fa-trash-o\"></i>
                </button>
            ";
        }
        // line 753
        echo "
            ";
        // line 754
        if (($context["currentFiles"] ?? null)) {
            // line 755
            echo "                <button class=\"btn\">
                    <i class=\"fa fa-folder-open-o\"></i>
                </button>
            ";
        }
        // line 759
        echo "        </div>

        ";
        // line 761
        if ((($context["multiple"] ?? null) && ($context["currentFiles"] ?? null))) {
            // line 762
            echo "            <div class=\"form-control fileupload-list\">
                <table class=\"fileupload-table\">
                    <tbody>
                    ";
            // line 765
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["currentFiles"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["file"]) {
                // line 766
                echo "                        <tr>
                            <td>
                                ";
                // line 768
                if (($context["download_path"] ?? null)) {
                    echo "<a href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl((($context["download_path"] ?? null) . twig_get_attribute($this->env, $this->source, $context["file"], "filename", [], "any", false, false, false, 768))), "html", null, true);
                    echo "\">";
                }
                // line 769
                echo "                                    <span title=\"";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["file"], "mTime", [], "any", false, false, false, 769)), "html", null, true);
                echo "\">
                                        <i class=\"fa fa-file-o\"></i> ";
                // line 770
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["file"], "filename", [], "any", false, false, false, 770), "html", null, true);
                echo "
                                    </span>
                                    ";
                // line 772
                if (($context["download_path"] ?? null)) {
                    echo "</a>";
                }
                // line 773
                echo "                            </td>
                            <td class=\"text-right file-size\">";
                // line 774
                echo twig_escape_filter($this->env, $this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->fileSize(twig_get_attribute($this->env, $this->source, $context["file"], "size", [], "any", false, false, false, 774)), "html", null, true);
                echo "</td>
                        </tr>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['file'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 777
            echo "                    </tbody>
                </table>
            </div>
        ";
        }
        // line 781
        echo "        ";
        if (($context["allow_delete"] ?? null)) {
            // line 782
            echo "            <div style=\"display: none\">";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "delete", [], "any", false, false, false, 782), 'widget', ["label" => false]);
            echo "</div>
        ";
        }
        // line 784
        echo "    </div>

    ";
        // line 786
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "file", [], "any", false, false, false, 786), 'errors');
        echo "
";
    }

    // line 789
    public function block_ea_slug_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 790
        echo "    ";
        $context["attr"] = twig_array_merge(($context["attr"] ?? null), ["data-ea-slug-field" => "", "data-target" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_14 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 792
($context["form"] ?? null), "parent", [], "any", false, false, false, 792), "children", [], "any", false, false, false, 792)) && is_array($__internal_compile_14) || $__internal_compile_14 instanceof ArrayAccess ? ($__internal_compile_14[($context["target"] ?? null)] ?? null) : null), "vars", [], "any", false, false, false, 792), "id", [], "any", false, false, false, 792)]);
        // line 794
        echo "
    <div class=\"input-group\">
        ";
        // line 796
        $this->displayBlock("form_widget", $context, $blocks);
        echo "
        <button type=\"button\" class=\"btn\">
            <i class=\"fas fa-lock fa-fw\"></i>
        </button>
    </div>
";
    }

    public function getTemplateName()
    {
        return "@EasyAdmin/crud/form_theme.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  2228 => 796,  2224 => 794,  2222 => 792,  2220 => 790,  2216 => 789,  2210 => 786,  2206 => 784,  2200 => 782,  2197 => 781,  2191 => 777,  2182 => 774,  2179 => 773,  2175 => 772,  2170 => 770,  2165 => 769,  2159 => 768,  2155 => 766,  2151 => 765,  2146 => 762,  2144 => 761,  2140 => 759,  2134 => 755,  2132 => 754,  2129 => 753,  2123 => 749,  2121 => 748,  2118 => 747,  2114 => 745,  2108 => 743,  2102 => 741,  2100 => 740,  2097 => 739,  2095 => 738,  2090 => 736,  2085 => 733,  2082 => 732,  2079 => 731,  2076 => 730,  2073 => 729,  2070 => 728,  2067 => 727,  2064 => 726,  2061 => 725,  2058 => 724,  2055 => 723,  2052 => 722,  2048 => 721,  2042 => 718,  2039 => 717,  2033 => 715,  2030 => 714,  2024 => 710,  2015 => 707,  2012 => 706,  2008 => 705,  2003 => 703,  1998 => 702,  1992 => 701,  1988 => 699,  1984 => 698,  1979 => 695,  1977 => 694,  1968 => 689,  1956 => 685,  1954 => 684,  1947 => 681,  1941 => 679,  1939 => 678,  1937 => 677,  1932 => 674,  1928 => 673,  1925 => 672,  1922 => 671,  1919 => 670,  1916 => 669,  1913 => 668,  1910 => 667,  1907 => 666,  1904 => 665,  1901 => 664,  1898 => 663,  1895 => 662,  1893 => 661,  1889 => 659,  1885 => 658,  1878 => 655,  1874 => 654,  1870 => 651,  1863 => 646,  1859 => 645,  1853 => 642,  1845 => 641,  1841 => 640,  1837 => 639,  1834 => 638,  1830 => 637,  1814 => 624,  1797 => 609,  1777 => 603,  1766 => 601,  1760 => 598,  1746 => 597,  1738 => 596,  1732 => 595,  1728 => 594,  1716 => 593,  1713 => 592,  1696 => 591,  1693 => 590,  1690 => 589,  1686 => 588,  1681 => 584,  1675 => 582,  1673 => 581,  1664 => 578,  1658 => 577,  1650 => 575,  1646 => 574,  1639 => 571,  1635 => 570,  1625 => 563,  1621 => 561,  1618 => 560,  1616 => 559,  1610 => 556,  1604 => 553,  1601 => 552,  1598 => 551,  1594 => 550,  1583 => 544,  1580 => 542,  1577 => 541,  1575 => 540,  1571 => 538,  1569 => 537,  1568 => 536,  1567 => 535,  1566 => 534,  1564 => 532,  1560 => 531,  1553 => 527,  1550 => 526,  1546 => 525,  1539 => 522,  1535 => 521,  1527 => 517,  1518 => 515,  1513 => 514,  1504 => 509,  1498 => 508,  1492 => 506,  1489 => 505,  1485 => 504,  1474 => 502,  1471 => 501,  1466 => 498,  1460 => 496,  1458 => 495,  1451 => 492,  1445 => 490,  1443 => 489,  1440 => 488,  1436 => 486,  1434 => 485,  1431 => 484,  1424 => 482,  1420 => 481,  1415 => 480,  1411 => 478,  1409 => 477,  1401 => 475,  1399 => 474,  1394 => 472,  1391 => 471,  1388 => 470,  1386 => 469,  1383 => 468,  1380 => 467,  1374 => 466,  1370 => 465,  1362 => 461,  1356 => 457,  1337 => 453,  1334 => 452,  1325 => 450,  1320 => 449,  1318 => 448,  1314 => 446,  1308 => 443,  1305 => 442,  1303 => 441,  1292 => 440,  1275 => 439,  1271 => 437,  1263 => 434,  1260 => 432,  1258 => 431,  1254 => 430,  1252 => 429,  1250 => 428,  1245 => 426,  1243 => 425,  1234 => 424,  1231 => 423,  1227 => 422,  1222 => 419,  1219 => 418,  1215 => 417,  1208 => 413,  1204 => 412,  1197 => 408,  1194 => 407,  1188 => 405,  1186 => 404,  1180 => 401,  1176 => 400,  1173 => 399,  1169 => 396,  1164 => 394,  1157 => 391,  1155 => 390,  1152 => 389,  1149 => 388,  1145 => 386,  1139 => 384,  1133 => 382,  1131 => 381,  1127 => 380,  1123 => 378,  1117 => 376,  1111 => 374,  1109 => 373,  1105 => 372,  1102 => 371,  1099 => 370,  1095 => 368,  1089 => 366,  1083 => 364,  1081 => 363,  1078 => 362,  1075 => 361,  1073 => 360,  1070 => 359,  1067 => 358,  1063 => 357,  1056 => 354,  1053 => 353,  1049 => 352,  1042 => 348,  1039 => 347,  1033 => 345,  1031 => 344,  1025 => 341,  1021 => 340,  1018 => 339,  1014 => 336,  1009 => 334,  1002 => 331,  1000 => 330,  997 => 329,  993 => 327,  990 => 325,  987 => 323,  985 => 322,  982 => 321,  977 => 320,  974 => 313,  971 => 312,  969 => 311,  966 => 310,  962 => 309,  955 => 306,  952 => 305,  948 => 304,  941 => 300,  938 => 299,  934 => 298,  927 => 292,  923 => 289,  920 => 287,  918 => 286,  914 => 283,  911 => 281,  909 => 280,  907 => 279,  892 => 278,  888 => 275,  885 => 272,  884 => 271,  883 => 270,  881 => 269,  879 => 268,  876 => 266,  874 => 265,  871 => 263,  868 => 261,  866 => 260,  864 => 259,  860 => 257,  858 => 256,  854 => 255,  850 => 250,  848 => 249,  842 => 248,  838 => 247,  831 => 243,  828 => 242,  825 => 241,  822 => 240,  819 => 239,  816 => 238,  810 => 236,  807 => 235,  804 => 234,  802 => 232,  800 => 231,  797 => 230,  793 => 229,  788 => 226,  780 => 221,  773 => 219,  770 => 218,  764 => 216,  762 => 215,  756 => 212,  749 => 210,  745 => 208,  742 => 207,  736 => 205,  734 => 204,  729 => 203,  727 => 202,  723 => 201,  720 => 200,  713 => 196,  710 => 195,  707 => 194,  704 => 193,  701 => 192,  698 => 191,  695 => 190,  691 => 189,  683 => 184,  679 => 182,  677 => 181,  674 => 180,  671 => 179,  668 => 178,  666 => 177,  662 => 175,  656 => 172,  653 => 171,  647 => 169,  645 => 168,  640 => 167,  638 => 166,  634 => 164,  631 => 163,  628 => 162,  626 => 160,  622 => 159,  616 => 156,  613 => 155,  611 => 153,  610 => 152,  609 => 151,  608 => 150,  607 => 149,  606 => 147,  603 => 146,  600 => 145,  597 => 144,  594 => 143,  590 => 142,  584 => 139,  581 => 138,  578 => 137,  575 => 132,  572 => 131,  568 => 130,  562 => 126,  559 => 125,  553 => 120,  551 => 119,  545 => 116,  543 => 115,  538 => 114,  536 => 113,  533 => 112,  526 => 108,  520 => 107,  516 => 105,  513 => 104,  511 => 99,  508 => 98,  503 => 97,  497 => 95,  495 => 94,  490 => 92,  487 => 91,  481 => 88,  478 => 87,  475 => 86,  471 => 85,  468 => 84,  465 => 83,  462 => 82,  460 => 81,  457 => 80,  455 => 79,  444 => 78,  440 => 77,  437 => 76,  435 => 74,  433 => 73,  429 => 72,  424 => 66,  421 => 64,  419 => 63,  417 => 62,  413 => 61,  409 => 58,  407 => 57,  405 => 56,  401 => 55,  397 => 52,  395 => 51,  393 => 50,  389 => 49,  382 => 46,  379 => 45,  375 => 44,  371 => 41,  368 => 39,  366 => 38,  364 => 37,  361 => 35,  359 => 34,  355 => 33,  350 => 28,  339 => 26,  334 => 25,  331 => 24,  327 => 23,  322 => 20,  320 => 19,  314 => 17,  311 => 16,  307 => 15,  300 => 12,  295 => 9,  292 => 8,  286 => 6,  283 => 5,  279 => 4,  275 => 789,  272 => 788,  270 => 721,  267 => 720,  265 => 658,  262 => 657,  260 => 654,  257 => 653,  255 => 637,  252 => 636,  250 => 588,  247 => 586,  245 => 574,  242 => 573,  240 => 570,  237 => 568,  235 => 550,  232 => 548,  230 => 531,  227 => 529,  225 => 525,  222 => 524,  220 => 521,  217 => 519,  215 => 465,  212 => 464,  210 => 417,  207 => 415,  205 => 412,  202 => 411,  200 => 357,  197 => 356,  195 => 352,  192 => 351,  190 => 309,  187 => 308,  185 => 304,  182 => 303,  180 => 298,  177 => 297,  174 => 295,  172 => 255,  169 => 254,  166 => 252,  164 => 247,  161 => 246,  159 => 229,  156 => 228,  154 => 189,  151 => 188,  149 => 159,  146 => 158,  144 => 142,  141 => 141,  139 => 130,  136 => 129,  134 => 72,  131 => 71,  128 => 69,  126 => 61,  123 => 60,  121 => 55,  118 => 54,  116 => 49,  113 => 48,  111 => 44,  108 => 43,  106 => 33,  103 => 32,  100 => 30,  98 => 23,  95 => 22,  93 => 15,  90 => 14,  88 => 4,  85 => 3,  30 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("", "@EasyAdmin/crud/form_theme.html.twig", "/home/lastrolalx-mem/memoireastrolabe/vendor/easycorp/easyadmin-bundle/src/Resources/views/crud/form_theme.html.twig");
    }
}
