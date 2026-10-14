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

/* reset_password/email.html.twig */
class __TwigTemplate_23687f720ab8092150b45829c6b980b74312aa3813f1bc8a08034a6668518394 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!DOCTYPE html>
<html xmlns=\"http://www.w3.org/1999/xhtml\" xmlns:v=\"urn:schemas-microsoft-com:vml\"
    xmlns:o=\"urn:schemas-microsoft-com:office:office\">

<head>
    <title>Réinitialisation de mot de passe</title>
    <!--[if !mso]><!-->
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\" />
    <!--<![endif]-->
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\" />
    <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
    <style type=\"text/css\">
        #outlook a {
            padding: 0;
        }

        body {
            margin: 0;
            padding: 0;
            -webkit-text-size-adjust: 100%;
            -ms-text-size-adjust: 100%;
        }

        table,
        td {
            border-collapse: collapse;
            mso-table-lspace: 0pt;
            mso-table-rspace: 0pt;
        }

        img {
            border: 0;
            height: auto;
            line-height: 100%;
            outline: none;
            text-decoration: none;
            -ms-interpolation-mode: bicubic;
        }

        p {
            display: block;
            margin: 13px 0;
        }
    </style>
    <!--[if mso]>
  <noscript>
  <xml>
  <o:OfficeDocumentSettings>
    <o:AllowPNG/>
    <o:PixelsPerInch>96</o:PixelsPerInch>
  </o:OfficeDocumentSettings>
  </xml>
  </noscript>
  <![endif]-->
    <!--[if lte mso 11]>
  <style type=\"text/css\">
    .mj-outlook-group-fix { width:100% !important; }
  </style>
  <![endif]-->
    <style type=\"text/css\">
        @media only screen and (min-width:480px) {
            .mj-column-per-100 {
                width: 100% !important;
                max-width: 100%;
            }
        }
    </style>
    <style media=\"screen and (min-width:480px)\">
        .moz-text-html .mj-column-per-100 {
            width: 100% !important;
            max-width: 100%;
        }
    </style>
    <style type=\"text/css\">
        [owa] .mj-column-per-100 {
            width: 100% !important;
            max-width: 100%;
        }
    </style>
    <style type=\"text/css\">
        @media only screen and (max-width:480px) {
            table.mj-full-width-mobile {
                width: 100% !important;
            }

            td.mj-full-width-mobile {
                width: auto !important;
            }
        }
    </style>
</head>

<body style=\"word-spacing:normal;background-color:#F4F4F4;\">
    <div style=\"background-color:#F4F4F4;\">

        <!--[if mso | IE]></td></tr></table><table align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" class=\"\" role=\"presentation\" style=\"width:600px;\" width=\"600\" bgcolor=\"#ffffff\" ><tr><td style=\"line-height:0px;font-size:0px;mso-line-height-rule:exactly;\"><![endif]-->
        <div style=\"background:#ffffff;background-color:#ffffff;margin:0px auto;max-width:600px;\">
            <table align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" role=\"presentation\"
                style=\"background:#ffffff;background-color:#ffffff;width:100%;\">
                <tbody>
                    <tr>
                        <td
                            style=\"direction:ltr;font-size:0px;padding:0px 0px 0px 0px;padding-bottom:0px;padding-left:0px;padding-right:0px;padding-top:0px;text-align:center;\">
                            <!--[if mso | IE]><table role=\"presentation\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\"><tr><td class=\"\" style=\"vertical-align:top;width:600px;\" ><![endif]-->
                            <div class=\"mj-column-per-100 mj-outlook-group-fix\"
                                style=\"font-size:0px;text-align:left;direction:ltr;display:inline-block;vertical-align:top;width:100%;\">
                                <table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" role=\"presentation\"
                                    style=\"vertical-align:top;\" width=\"100%\">
                                    <tbody>
                                        <tr>
                                            <td align=\"center\"
                                                style=\"font-size:0px;padding:10px 25px 10px 25px;padding-right:25px;padding-left:25px;word-break:break-word;\">
                                                <p
                                                    style=\"border-top:solid 4px #98d6cb;font-size:1px;margin:0px auto;width:100%;\">
                                                </p>
                                                <!--[if mso | IE]><table align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" style=\"border-top:solid 4px #98d6cb;font-size:1px;margin:0px auto;width:550px;\" role=\"presentation\" width=\"550px\" ><tr><td style=\"height:0;line-height:0;\">  
</td></tr></table><![endif]-->
                                            </td>
                                        </tr>
                                        <tr>
                                            <td align=\"center\"
                                                style=\"font-size:0px;padding:10px 30px 10px 30px;padding-top:10px;padding-right:30px;padding-bottom:10px;padding-left:30px;word-break:break-word;\">
                                                <table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" role=\"presentation\"
                                                    style=\"border-collapse:collapse;border-spacing:0px;\">
                                                    <tbody>
                                                        <tr>
                                                            <td style=\"width:540px;\"><img alt=\"\" height=\"auto\"
                                                                    src=\"https://0pmjn.mjt.lu/img/0pmjn/b/mpu/xgpi.png\"
                                                                    style=\"border:none;border-radius:px;display:block;outline:none;text-decoration:none;height:auto;width:100%;font-size:13px;\"
                                                                    width=\"540\" /></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td align=\"center\"
                                                style=\"font-size:0px;padding:10px 25px 10px 25px;padding-right:25px;padding-left:25px;word-break:break-word;\">
                                                <p
                                                    style=\"border-top:solid 4px #98d6cb;font-size:1px;margin:0px auto;width:100%;\">
                                                </p>
                                                <!--[if mso | IE]><table align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" style=\"border-top:solid 4px #98d6cb;font-size:1px;margin:0px auto;width:550px;\" role=\"presentation\" width=\"550px\" ><tr><td style=\"height:0;line-height:0;\">  
</td></tr></table><![endif]-->
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <!--[if mso | IE]></td></tr></table><![endif]-->
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <!--[if mso | IE]></td></tr></table><table align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" class=\"\" role=\"presentation\" style=\"width:600px;\" width=\"600\" bgcolor=\"#ffffff\" ><tr><td style=\"line-height:0px;font-size:0px;mso-line-height-rule:exactly;\"><![endif]-->
        <div style=\"background:#ffffff;background-color:#ffffff;margin:0px auto;max-width:600px;\">
            <table align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" role=\"presentation\"
                style=\"background:#ffffff;background-color:#ffffff;width:100%;\">
                <tbody>
                    <tr>
                        <td style=\"direction:ltr;font-size:0px;padding:20px 0px 20px 0px;text-align:center;\">
                            <!--[if mso | IE]><table role=\"presentation\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\"><tr><td class=\"\" style=\"vertical-align:top;width:600px;\" ><![endif]-->
                            <div class=\"mj-column-per-100 mj-outlook-group-fix\"
                                style=\"font-size:0px;text-align:left;direction:ltr;display:inline-block;vertical-align:top;width:100%;\">
                                <table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" role=\"presentation\"
                                    style=\"vertical-align:top;\" width=\"100%\">
                                    <tbody>
                                        <tr>
                                            <td align=\"left\"
                                                style=\"font-size:0px;padding:0px 25px 0px 25px;padding-top:0px;padding-bottom:0px;word-break:break-word;\">
                                                <div
                                                    style=\"font-family:Arial, sans-serif;font-size:13px;letter-spacing:normal;line-height:1;text-align:left;color:#000000;\">
                                                    <h1 class=\"text-build-content\" data-testid=\"rmR9q2R5bT\"
                                                        style=\"margin-top: 10px; margin-bottom: 10px; font-weight: normal;\">
                                                        Réinitialisation de votre mot de passe</h1>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td align=\"left\"
                                                style=\"font-size:0px;padding:0px 25px 0px 25px;padding-top:0px;padding-bottom:0px;word-break:break-word;\">
                                                <div
                                                    style=\"font-family:Arial, sans-serif;font-size:13px;letter-spacing:normal;line-height:1;text-align:left;color:#000000;\">
                                                    <p class=\"text-build-content\" data-testid=\"mohDRqRISr\"
                                                        style=\"margin: 10px 0; margin-top: 10px;\"><span
                                                            style=\"color:#55575d;font-family:Arial;font-size:13px;line-height:22px;\">Bonjour
                                                            ! </span></p>
                                                    <p class=\"text-build-content\" data-testid=\"mohDRqRISr\"
                                                        style=\"margin: 10px 0; margin-bottom: 10px;\"><span
                                                            style=\"color:#55575d;font-family:Arial;font-size:13px;line-height:22px;\">Pour
                                                            Réinitialiser votre mot de passe, veuillez suivre le lien
                                                            suivant :</span></p>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <!--[if mso | IE]></td></tr></table><![endif]-->
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <!--[if mso | IE]></td></tr></table><table align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" class=\"\" role=\"presentation\" style=\"width:600px;\" width=\"600\" bgcolor=\"#ffffff\" ><tr><td style=\"line-height:0px;font-size:0px;mso-line-height-rule:exactly;\"><![endif]-->
        <div style=\"background:#ffffff;background-color:#ffffff;margin:0px auto;max-width:600px;\">
            <table align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" role=\"presentation\"
                style=\"background:#ffffff;background-color:#ffffff;width:100%;\">
                <tbody>
                    <tr>
                        <td
                            style=\"direction:ltr;font-size:0px;padding:20px 0;padding-bottom:0px;padding-top:0px;text-align:center;\">
                            <!--[if mso | IE]><table role=\"presentation\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\"><tr><td class=\"\" style=\"vertical-align:top;width:600px;\" ><![endif]-->
                            <div class=\"mj-column-per-100 mj-outlook-group-fix\"
                                style=\"font-size:0px;text-align:left;direction:ltr;display:inline-block;vertical-align:top;width:100%;\">
                                <table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" role=\"presentation\"
                                    style=\"vertical-align:top;\" width=\"100%\">
                                    <tbody>
                                        <tr>
                                            <td align=\"center\" vertical-align=\"middle\"
                                                style=\"font-size:0px;padding:10px 25px;word-break:break-word;\">
                                                <table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" role=\"presentation\"
                                                    style=\"border-collapse:separate;line-height:100%;\">
                                                    <tbody>
                                                        <tr>
                                                            <td align=\"center\" bgcolor=\"#98d6cb\" role=\"presentation\"
                                                                style=\"border:none;border-radius:3px;cursor:auto;mso-padding-alt:10px 25px;background:#98d6cb;\"
                                                                valign=\"middle\">
                                                                <p
                                                                    style=\"display:inline-block;background:#98d6cb;color:#ffffff;font-family:Arial, sans-serif;font-size:13px;font-weight:normal;line-height:120%;margin:0;text-decoration:none;text-transform:none;padding:10px 25px;mso-padding-alt:0px;border-radius:3px;\">
                                                                    <a href=\"";
        // line 231
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("app_reset_password", ["token" => twig_get_attribute($this->env, $this->source, ($context["resetToken"] ?? null), "token", [], "any", false, false, false, 231)]), "html", null, true);
        echo "\"><span style=\"color:#000000;\">Lien de Réinitialisation</span>
                                                                    </a>
                                                                </p>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <!--[if mso | IE]></td></tr></table><![endif]-->
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <!--[if mso | IE]></td></tr></table><table align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" class=\"\" role=\"presentation\" style=\"width:600px;\" width=\"600\" bgcolor=\"#ffffff\" ><tr><td style=\"line-height:0px;font-size:0px;mso-line-height-rule:exactly;\"><![endif]-->
        <div style=\"background:#ffffff;background-color:#ffffff;margin:0px auto;max-width:600px;\">
            <table align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" role=\"presentation\"
                style=\"background:#ffffff;background-color:#ffffff;width:100%;\">
                <tbody>
                    <tr>
                        <td style=\"direction:ltr;font-size:0px;padding:20px 0;text-align:center;\">
                            <!--[if mso | IE]><table role=\"presentation\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\"><tr><td class=\"\" style=\"vertical-align:top;width:600px;\" ><![endif]-->
                            <div class=\"mj-column-per-100 mj-outlook-group-fix\"
                                style=\"font-size:0px;text-align:left;direction:ltr;display:inline-block;vertical-align:top;width:100%;\">
                                <table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" role=\"presentation\"
                                    style=\"vertical-align:top;\" width=\"100%\">
                                    <tbody>
                                        <tr>
                                            <td align=\"left\"
                                                style=\"font-size:0px;padding:10px 25px;padding-top:0px;padding-bottom:0px;word-break:break-word;\">
                                                <div
                                                    style=\"font-family:Arial, sans-serif;font-size:13px;letter-spacing:normal;line-height:1;text-align:left;color:#000000;\">
                                                    <p class=\"text-build-content\" data-testid=\"0tqEvD6FVQy\"
                                                        style=\"margin: 10px 0; margin-top: 10px;\"><span
                                                            style=\"color:#55575d;font-family:Arial;font-size:13px;line-height:22px;\">Ce
                                                            lien expirera dans ";
        // line 270
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, ($context["resetToken"] ?? null), "expirationMessageKey", [], "any", false, false, false, 270), twig_get_attribute($this->env, $this->source, ($context["resetToken"] ?? null), "expirationMessageData", [], "any", false, false, false, 270), "ResetPasswordBundle"), "html", null, true);
        echo ".</span></p>
                                                    <p class=\"text-build-content\" data-testid=\"0tqEvD6FVQy\"
                                                        style=\"margin: 10px 0;\"><span
                                                            style=\"color:#55575d;font-family:Arial;font-size:13px;line-height:22px;\">Cordialement,
                                                            l&#39;équipe Astrolabe</span></p>
                                                    <p class=\"text-build-content\" data-testid=\"0tqEvD6FVQy\"
                                                        style=\"margin: 10px 0; margin-bottom: 10px;\"> </p>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <!--[if mso | IE]></td></tr></table><![endif]-->
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <!--[if mso | IE]></td></tr></table><table align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" class=\"\" role=\"presentation\" style=\"width:600px;\" width=\"600\" ><tr><td style=\"line-height:0px;font-size:0px;mso-line-height-rule:exactly;\"><![endif]-->
    </div>
</body>

</html>
";
    }

    public function getTemplateName()
    {
        return "reset_password/email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  311 => 270,  269 => 231,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "reset_password/email.html.twig", "/home/lastrolalx-mem/memoireastrolabe/templates/reset_password/email.html.twig");
    }
}
