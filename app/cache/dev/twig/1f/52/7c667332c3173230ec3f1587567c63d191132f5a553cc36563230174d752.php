<?php

/* SvkWelcomeBundle::index.html.twig */
class __TwigTemplate_1f527c667332c3173230ec3f1587567c63d191132f5a553cc36563230174d752 extends Twig_Template
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
        // line 1
        echo "<!DOCTYPE html>
<html>
  <head>
    <title>Silversmoke | Smoke healthier</title>
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <!-- Bootstrap -->
    <link href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" media=\"screen\">
    <link href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/font.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" media=\"screen\">
    <link href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/landing-page.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" media=\"screen\">

    <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/icon.png"), "html", null, true);
        echo "\" />

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
      <!--[if lt IE 9]>
        <script src=\"../../assets/js/html5shiv.js\"></script>
        <script src=\"../../assets/js/respond.min.js\"></script>
        <![endif]-->
    </head>
    <body>

      <!-- NAVBAR -->
      <section>
        <nav class=\"navbar navbar-default navbar-fixed-top\" role=\"navigation\">
          <!-- Brand and toggle get grouped for better mobile display -->
          <div class='container'>
            <div class=\"navbar-header\">
              <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-ex1-collapse\">
                <span class=\"sr-only\">Toggle navigation</span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
              </button>
              <a class=\"navbar-brand\" href=\"#\"><img src=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/logo-navbar.png"), "html", null, true);
        echo "\" width=\"200px\" alt=\"Quit smoking using a connected electronic cigarette!\"></a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class=\"collapse navbar-collapse navbar-ex1-collapse\">


              <ul class=\"nav navbar-nav navbar-right\">
                <li><a href=\"#\">Link</a></li>
                <li><a href=\"#\">Link</a></li>
                <li><a href=\"#\"><button class='btn btn-success'>BUY NOW | \$129</button></a></li>
              </ul>
            </div><!-- /.navbar-collapse -->
          </div>
        </nav>
      </section>


      <!-- HOMESCREEN -->
      <section id='homescreen' style=\"background-image: url('../img/homescreen-bck.png')\" data-stellar-background-ratio=\"0.5\" >
        <div class='container'>
          <div class='row'>
            <div class=\"col-md-5\" style=\"padding-top: 150px; text-align:center\">
              <h1>The Smart, Simple and Fun way to reduce smoking</h1>
              <h3>The cigaret that tracks your nicotine consumption</h3>
              <button class='btn btn-primary btn-lg'>BUY NOW | \$129</button>
            </div>
            <div class=\"col-md-6\">
            </div>
          </div>
        </div>
      </section>

      <section style='height:100px; background-color: transparent;border-top: dashed 4px rgba(115,124,147,0)'></section>

      <!-- How it works -->
      <section id='how-it-works'>
        <div class='container'>
          <div class='row'>
            <div class=\"col-md-12\">
              <h5>HERE'S HOW IT WORKS:</h5>
            </div>
            <div id='usp1' class=\"col-md-12\">
              <div class=\"col-md-3 usp1\">
                <div class=\"usp1-1\">
                  <div class=\"usp-number\">1</div>
                  <font>SMOKE WHEREVER YOU LIKE IT</font>
                  <img src=\"";
        // line 80
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/smoke-wherever.png"), "html", null, true);
        echo "\" alt=\"Quit smoking using a connected electronic cigarette!\">
                </div>
                <div class='usp1-2'>
                  hahahahah
                </div>
              </div>
              <div class=\"col-md-3 usp2\">
                <div class='usp2-1'>
                  <div class=\"usp-number\">2</div>
                  <font>TRACK YOUR CONSUMPTION</font>
                  <img src=\"";
        // line 90
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/connect-wirelessly.png"), "html", null, true);
        echo "\"  alt=\"Quit smoking using a connected electronic cigarette!\">
                </div>
                <div class='usp2-2'>
                  <font>TRACK YOUR CONSUMPTION</font>
                </div>
              </div>
              <div class=\"col-md-3 usp3\">
                <div class='usp3-1'>
                  <div class=\"usp-number\">3</div>
                  <font>SYNC YOUR STATS WIRELESSLY</font>
                  <img src=\"";
        // line 100
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/monitor.png"), "html", null, true);
        echo "\"  alt=\"Quit smoking using a connected electronic cigarette!\">
                </div>
                <div class='usp3-2'>
                  SYNC YOUR STATS WIRELESSLY 
                </div>
              </div>
              <div class=\"col-md-3 usp4\">
                <div class='usp4-1'>
                  <div class=\"usp-number\">4</div>
                  <font>SHARE YOUR REAL-TIME PROGRESS</font>
                  <img src=\"";
        // line 110
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/tweet-result.png"), "html", null, true);
        echo "\"  alt=\"Quit smoking using a connected electronic cigarette!\"> 
                </div>
                <div class='usp4-2'>
                  SHARE YOUR REAL-TIME PROGRESS
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section><div class=\"container\"><div class=\"row\">
        <div class=\"col-md-12\" style=\"text-align:center; padding: 50px 0px;\">
          <img src=\"";
        // line 123
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/rounded-cigs.png"), "html", null, true);
        echo "\" width=\"900\">
        </div></div></div></section>


        <!-- Monitor your consumption -->
        <section id='monitor'>
          <div class='container'>
            <div class='row'>
              <div class=\"col-md-12\">
                <div class=\"col-md-6\">
                  <img src=\"";
        // line 133
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/woman-electronic-cigarette.jpg"), "html", null, true);
        echo "\" width=\"350\">
                </div>
                <div class='col-md-6 desc'>
                  <div class='desc-header'>
                    <h2>Use your Smartphone to see how you smoke</h2>
                  </div>
                  <div class='desc-body'>
                    Have you ever thought of using your smartphone as a screen for cigarette? <br>
                    Silversmoke helps you keep track of what you smoked. At any time, Silvermoke tracks:
                    <table>
                      <tr>
                        <td><div class=\"monitor-table-icon\"><img src=\"";
        // line 144
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/cigarette-smoked.png"), "html", null, true);
        echo "\" width=\"30\"></div><div>HOW MANY CIGARETTES YOU SMOKED</div></td>
                        <td><div class=\"monitor-table-icon\"><img src=\"";
        // line 145
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/smoking-trend.png"), "html", null, true);
        echo "\" width=\"25\"></div><div>YOUR SMOKING TRENDS</div></td>
                      </tr>
                      <tr>
                        <td><div class=\"monitor-table-icon\"><img src=\"";
        // line 148
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/money-saved.png"), "html", null, true);
        echo "\" width=\"25\"></div class=\"monitor-table-icon\"><div>THE MONEY YOU SAVED</div></td>
                        <td><div class=\"monitor-table-icon\"><img src=\"";
        // line 149
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/money-spend.png"), "html", null, true);
        echo "\" width=\"30\"></div><div>THE MONEY YOU SPEND</div></td>
                      </tr>
                      <tr>
                        <td><div class=\"monitor-table-icon\"><img src=\"";
        // line 152
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/battery.png"), "html", null, true);
        echo "\" width=\"30\"></div><div>BATTERY LEFT IN YOUR CIGARETTE</div></td>
                        <td><div class=\"monitor-table-icon\"><img src=\"";
        // line 153
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/puff-left.png"), "html", null, true);
        echo "\" width=\"20\"></div><div>PUFFS LEFT IN YOUR CARTRIDGE</div></td>
                      </tr>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>


        <!-- Set Goal -->
        <section id='consumption-cap'>
          <div class='container'>
            <div class='row'>
              <div class=\"col-md-6 cap-desc\">
                <h2>Set Cap to your Consumption</h2>
                <div>
                  <p>Take the guilt out knowing exactly what you smoked and capping your weekly consumption</p>

                  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                </div>

                <div class='progress-container'>
              <!--
                <div class=\"progress progress-top\">
                  <div class=\"progress-bar progress-top\" role=\"progressbar\" aria-valuenow=\"60\" aria-valuemin=\"0\" aria-valuemax=\"100\">
                    <p><span class=\"percent-text\">12</span></p>
                  </div>
                </div>
              -->  

              <div class=\"progress\">
                <div class=\"progress-bar\" role=\"progressbar\" aria-valuenow=\"60\" aria-valuemin=\"0\" aria-valuemax=\"100\">
                  <p><span class=\"percent-text\">12</span></p>
                </div>
              </div>
              <div class=\"percent-container\">
                <div class='percent'>
                  <font class='puffs'></font> <br>Puffs 
                  <div>
                    <font class=\"goal\">YOUR GOAL</font>
                    <br><font class=\"goal-figure\">1200</font>
                  </div>
                </div>
                <div class='percent'><font class='cigs'></font> <br>Cigs
                  <div>
                    <font class=\"goal\">YOUR GOAL</font>
                    <br><font class=\"goal-figure\">100</font>
                  </div>
                </div>
                <div class='percent'><font class='packs'></font> <br>Packs
                  <div>
                    <font class=\"goal\">YOUR GOAL</font>
                    <br><font class=\"goal-figure\">5</font>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class=\"col-md-6 iphone-screenshot\">
            <img src=\"";
        // line 215
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/iphone-screenshot.png"), "html", null, true);
        echo "\" alt=\"Quit smoking using a connected electronic cigarette!\">
          </div>
        </div>
      </div>
    </section>



    <!-- Set Goal -->
    <section id='tweet'>
      <div class='container'>
        <div class='row'>
          <div class=\"col-md-12\">
            <div class=\"col-md-6 tweet\">
              <div class=\"tweet-progress\">
                <div class='tweet-header'>
                  <div>
                    <img src=\"";
        // line 232
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/blond-smoker.jpg"), "html", null, true);
        echo "\" class='img img-rounded' width=\"60px\" height=\"60px\" alt=\"Quit smoking using a connected electronic cigarette!\">
                  </div>
                  <div class=\"tweeter-name\">
                    <font style=\"color: #292F33; font-weight:bold; font-size: 20px\">Emily</font><br>
                    <small>@EmilySmithfields</small>
                  </div>
                  <div class=\"tweeter-button\">
                    <img src=\"";
        // line 239
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/follow.png"), "html", null, true);
        echo "\"  alt=\"Quit smoking using a connected electronic cigarette!\">
                  </div>
                </div>
                <div class='tweet-body'>
                  Just reached my target for the week! I smoked a pack less than last month!!
                  <a href=\"\">#ThanksSilversmoke</a>
                </div>
                <div class='tweet-footer'>
                  <span class=\"glyphicon glyphicon-share-alt\"></span>
                  <span class=\"glyphicon glyphicon-retweet\"></span>
                  <span class=\"glyphicon glyphicon-star\"></span>
                </div>
              </div>

            </div>
            <div class=\"col-md-6 tweet-desc\">
              <h2>Tweet your real-time progress</h2>
              <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Competition -->
    <section id='competition'>
      <div class='container'>
        <div class='row'>
          <div class=\"col-md-12\">
            <div class=\"col-md-6\">
              <img src=\"";
        // line 270
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/compete-picture.png"), "html", null, true);
        echo "\" width=\"100%\" alt=\"Quit smoking using a connected electronic cigarette!\">
            </div>
            <div class='col-md-6 desc'>
              <div class='desc-header' style=\"background-color:#FFA72F\">
                <h2>Share and Compete with Friends</h2>
              </div>
              <div class='desc-body'>
                <div class='iphone-competition-desc'>
                 Decide to curb your consumption as a group and share your weekly consumption with your friends.
               </div>
               <div class='iphone-competition'>
                <img src=\"";
        // line 281
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/iphone-competition.png"), "html", null, true);
        echo "\" width=\"180\" alt=\"Quit smoking using a connected electronic cigarette!\">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


  <!-- REWARD -->
  <section id='reward-section'>
    <div class='container'>
      <div class='row'>
        <div class=\"col-md-12\">
          <h2>Join people around the world managing their consumption one milestone at a time</h2>
        </div>
        <div class=\"row badge-container\">
          <h5>GET BADGES TO REWARD YOUR PROGRESS:</h5>
          <div class='col-md-12'>
            <div class='col-md-2'>
              <img src=\"";
        // line 302
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/heart-badge.png"), "html", null, true);
        echo "\" alt=\"Quit smoking using a connected electronic cigarette!\">
              <h6>10 YEARS SAVED</h6>
            </div>
            <div class='col-md-2'>
              <img src=\"";
        // line 306
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/best-twitter.png"), "html", null, true);
        echo "\" alt=\"Quit smoking using a connected electronic cigarette!\">
              <h6>20 TWEETS</h6>
            </div>
            <div class='col-md-2'>
              <img src=\"";
        // line 310
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/rocket-badge.png"), "html", null, true);
        echo "\" alt=\"Quit smoking using a connected electronic cigarette!\">
              <h6>LIFETIME ACHIEVEMENT</h6>
            </div>
            <div class='col-md-2'>
              <img src=\"";
        // line 314
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/crown-badge.png"), "html", null, true);
        echo "\" alt=\"Quit smoking using a connected electronic cigarette!\">
              <h6>I RULE SMOKING</h6>
            </div>
            <div class='col-md-2'>
              <img src=\"";
        // line 318
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/stat-badge.png"), "html", null, true);
        echo "\" alt=\"Quit smoking using a connected electronic cigarette!\">
              <h6>1 MONTH DECREASE</h6>
            </div>
            <div class='col-md-2'>
              <img src=\"";
        // line 322
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/award-badge.png"), "html", null, true);
        echo "\" alt=\"Quit smoking using a connected electronic cigarette!\">
              <h6>TARGET REACHED</h6>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Parallax -->
<section id=\"parallax\" data-stellar-background-ratio=\"0.5\" style=\"background-position: 10% 484.5px;\">
  <div class=\"container\">
    <div class='row'>
      <div class='col-md-4 col-md-offset-1'>
        <h3>See your Progress in real-time</h3>
        <p>
          Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
        </p>
      </div>
    </div>
  </div>

</section>



<section id=\"cig-spec\">
  <img src=\"";
        // line 350
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/sliversmoke-hori.png"), "html", null, true);
        echo "\" alt=\"Quit smoking using a connected electronic cigarette!\">
</section>

  <section id='whats-included'>
    <div class='container'>
      <div class='row'>
        <div class='col-md-8 col-offset-2'>
          <div class=\"logo\">
            <div>
              <img src=\"";
        // line 359
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/silver-logo-big.png"), "html", null, true);
        echo "\" alt=\"Quit smoking using a connected electronic cigarette!\">
            </div>
          </div>
          <h2>Get your Silversmoke Starter Pack Today</h2>
          <div>
            <div class='col-md-6 package-content'>
              <div>
                <div class='item item-1'>
                  <img src=\"";
        // line 367
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/silversmoke-cig-icon.png"), "html", null, true);
        echo "\" width=\"15\" alt=\"Quit smoking using a connected electronic cigarette!\">
                </div> 
                <div class='item-desc'>
                  <h4>The Silversmoke Electronic Cigarette</h4>
                  <ul>
                    <li>Rechargeable Battery</li>
                    <li>Rechargeable Battery</li>
                    <li>Rechargeable Battery</li>
                  </ul>
                </div>
              </div>
              <div>
                <div class='item item-2'>
                  <img src=\"";
        // line 380
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/silversmoke-sensor.png"), "html", null, true);
        echo "\" width=\"55\" alt=\"Quit smoking using a connected electronic cigarette!\"></div> 
                  <div class='item-desc'>
                    <h4>The Silversmoke Bluetooth Sensor</h4>
                    <ul>
                      <li>Bluetooth 4.0</li>
                      <li>Rechargeable Battery</li>
                      <li>Rechargeable Battery</li>
                    </ul>
                  </div>
                </div>
                <div>
                  <div class='item item-3'>
                    <img src=\"";
        // line 392
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/cartridge.png"), "html", null, true);
        echo "\" width=\"50\" alt=\"Quit smoking using a connected electronic cigarette!\">
                  </div> 
                  <div class='item-desc'>
                    <h4>Flavor Cartridges</h4>
                    <ul>
                      <li>1 Cartridge: 250 Puffs</li>
                      <li>Rechargeable Battery</li>
                      <li>Rechargeable Battery</li>
                    </ul>
                  </div>
                </div>
                <div>
                  <div class='item item-4'>
                    <img src=\"";
        // line 405
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/usb-charger.png"), "html", null, true);
        echo "\" width=\"50\" alt=\"Quit smoking using a connected electronic cigarette!\">
                  </div> 
                  <div class='item-desc'>
                    <h4>Lightning Fast Charger</h4>
                    <ul>
                      <li>Rechargeable Battery</li>
                      <li>Rechargeable Battery</li>
                      <li>Rechargeable Battery</li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class='col-md-6 order-today'>
                <h4>Order yours Today</h4>
                ";
        // line 419
        echo $this->env->getExtension('actions')->renderUri($this->env->getExtension('http_kernel')->controller("SvkWelcomeBundle:Welcome:subscribe"), array());
        // line 420
        echo "              </div>
            </div>
          </div>
        </div>
      </div>
    </section>






    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src=\"https://code.jquery.com/jquery.js\"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src=\"";
        // line 435
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 436
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.stellar.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 437
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/landing-page.js"), "html", null, true);
        echo "\"></script>
  </body>
</html>";
    }

    public function getTemplateName()
    {
        return "SvkWelcomeBundle::index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  568 => 437,  564 => 436,  560 => 435,  543 => 420,  541 => 419,  524 => 405,  508 => 392,  493 => 380,  477 => 367,  466 => 359,  454 => 350,  423 => 322,  416 => 318,  409 => 314,  402 => 310,  395 => 306,  388 => 302,  364 => 281,  350 => 270,  316 => 239,  306 => 232,  286 => 215,  221 => 153,  217 => 152,  211 => 149,  207 => 148,  201 => 145,  197 => 144,  183 => 133,  170 => 123,  154 => 110,  141 => 100,  128 => 90,  115 => 80,  65 => 33,  40 => 11,  35 => 9,  31 => 8,  27 => 7,  19 => 1,);
    }
}
