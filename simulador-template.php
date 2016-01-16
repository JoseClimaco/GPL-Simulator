<?php
/*
Template Name: Simulador
*/

function gpl_scripts_basic()
{
    // or
    // Register the script like this for a theme:
    wp_register_script( 'angular', get_stylesheet_directory_uri() . '/js/angular.min.js' );
    wp_register_script( 'simulador', get_stylesheet_directory_uri() . '/js/simulador.js' );

    // For either a plugin or a theme, you can then enqueue the script:
    wp_enqueue_script( 'angular' );
    wp_enqueue_script( 'simulador' );
}
add_action( 'wp_enqueue_scripts', 'gpl_scripts_basic' );

get_header(); ?>
    <div id="theme-page">
        <div id="mk-page-id-<?php echo $post->ID; ?>" class="theme-page-wrapper mk-main-wrapper full-layout vc_row-fluid mk-grid row-fluid">
            <div class="theme-content" itemprop="mainContentOfPage">
                <div ng-app="simuladorApp" ng-strict-di>
                    <div ng-controller="simuladorController">
                        <label>KM/Dia<input type="number" ng-model="kmdia" ng-change="change()"></label><br />
                        <label>KM/Mes <input type="number" ng-model="kmmes" ng-change="changemes()"></label><br />
                        <label>KM/Ano <input type="number" ng-model="kmano" ng-change="changeano()"></label><br />
                        <label>Consumo Gas<input type="number" ng-model="consumogas" ng-change="change()"> /100</label><br />
                        <label>Preco Gas <input type="number" ng-model="precogas" ng-change="change()"> /Litro</label><br />
                        <label>Consumo GPL<input type="number" ng-model="consumogpl" ng-change="change()"> /100</label><br />
                        <label>Preco GPL <input type="number" ng-model="precogpl" ng-change="change()"> /Litro</label><br />
                        <label>Investimento <input type="number" ng-model="investimento" ng-change="change()"> </label><br />

                        <div>
                                        <h1>Consumo Gasolina</h1>
                                        Dia: {{ custogasdia | currency:"&euro;"}} <br />
                                        Mes: {{ custogasdia * 30 | currency:"&euro;"}} <br />
                                        Ano: {{ custogasdia * 365 | currency:"&euro;"}} <br />
                                        <h1>Consumo GPL</h1>
                                        Dia: {{ custogpldia | currency:"&euro;"}} <br />
                                        Mes: {{ custogpldia * 30 | currency:"&euro;"}} <br />
                                        Ano: {{ custogpldia * 365 | currency:"&euro;"}} <br />

                            <h1>Resultados</h1>
                            Poupanca/Ano: {{ (custogasdia - custogpldia) * 365 | currency:"&euro;"}} <br />
                            Retorno em: {{ investimento / ( (custogasdia - custogpldia) * 12 ) | number : 1 }} Meses<br />

                        </div>


<!--                        <div class="shortcode pricing-table monocolor  no-pricing-offer">-->
<!--                            <ul class="pricing-cols">-->
<!--                                <li class="pricing-col four-table ">-->
<!--                                    <div class="pricing-heading">-->
<!--                                        <div class="pricing-plan">Gasolina</div>-->
<!--                                        <div class="pricing-price"><span><sup>€</sup>{{ custogasdia * 365 | currency:""}}<sub>Ano</sub></span></div>-->
<!--                                    </div>-->
<!--                                    <div class="pricing-features">-->
<!--                                        <ul>-->
<!--                                            <li>{{ custogasdia | currency:"&euro;"}} /dia</li>-->
<!--                                            <li>{{ custogasdia * 30 | currency:"&euro;"}} /mes</li>-->
<!--                                        </ul>-->
<!--                                    </div>-->
<!--                                    <div class="pricing-button">-->
<!--                                        <div class="mk-button-align center"><a href="#" target="_self"-->
<!--                                                                               class="mk-button custom button-5593dccc151a2 light mk-smooth outline-dimension medium pointed   "><span></span></a>-->
<!--                                        </div>-->
<!---->
<!--                                        <div class="clearboth"></div>-->
<!--                                    </div>-->
<!--                                </li>-->
<!--                                <li class="pricing-col four-table featured-plan">-->
<!--                                    <div class="pricing-heading">-->
<!--                                        <div class="pricing-plan">GPL</div>-->
<!--                                        <div class="pricing-price"><span><sup>€</sup>{{ custogpldia * 365 | currency:""}}<sub>Ano</sub></span></div>-->
<!--                                    </div>-->
<!--                                    <div class="pricing-features">-->
<!--                                        <ul>-->
<!--                                            <li>{{ custogpldia | currency:"&euro;"}} /dia</li>-->
<!--                                            <li>{{ custogpldia * 30 | currency:"&euro;"}} /mes</li>-->
<!--                                        </ul>-->
<!--                                    </div>-->
<!--                                    <div class="pricing-button">-->
<!--                                        <div class="mk-button-align center"><a href="#" target="_self"-->
<!--                                                                               class="mk-button custom button-5593dccc15764 light mk-smooth outline-dimension medium pointed   "><span>Aderir</span></a>-->
<!--                                        </div>-->
<!--                                        <div class="clearboth"></div>-->
<!--                                    </div>-->
<!--                                </li>-->
<!--                            </ul>-->
<!--                        </div>-->
                    </div>
                </div>
            </div>
            <div class="clearboth"></div>
        </div>
        <div class="clearboth"></div>
    </div>
<?php get_footer(); ?>