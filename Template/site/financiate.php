<!DOCTYPE html>
<html class="wide wow-animation" lang="es">
<?php include("./componentes/header.php"); ?>

<body>
    <?php include("./componentes/encabezado.php") ?>
    <!-- Latest Articles-->

    <!-- Download Our Tax Guide App-->

    <section class="parallax-container" data-parallax-img="images/parallax-1-1920x1026.jpg">
        <div class="parallax-content section-xl context-dark text-center">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-10 col-xl-9">
                        <h2>Financia tu carrera<span class="text-light">.</span></h2>
                        <div class="heading-5 font-weight-normal">MĂșltiples oportunidades de financiamiento para que no dejes de estudiar.</div>
                        <!--TimeCircles
                        <div class="countdown" data-countdown data-to="2019-12-31">
                            <div class="countdown-block countdown-block-days">
                                <svg class="countdown-circle" x="0" y="0" width="200" height="200" viewbox="0 0 200 200" data-progress-days="">
                                    <circle class="countdown-circle-bg" cx="100" cy="100" r="90"></circle>
                                    <circle class="countdown-circle-fg clipped" cx="100" cy="100" r="90"></circle>
                                </svg>
                                <div class="countdown-wrap">
                                    <div class="countdown-counter" data-counter-days="">00</div>
                                    <div class="countdown-title">days</div>
                                </div>
                            </div>
                            <div class="countdown-block countdown-block-hours">
                                <svg class="countdown-circle" x="0" y="0" width="200" height="200" viewbox="0 0 200 200" data-progress-hours="">
                                    <circle class="countdown-circle-bg" cx="100" cy="100" r="90"></circle>
                                    <circle class="countdown-circle-fg clipped" cx="100" cy="100" r="90"></circle>
                                </svg>
                                <div class="countdown-wrap">
                                    <div class="countdown-counter" data-counter-hours="">00</div>
                                    <div class="countdown-title">hours</div>
                                </div>
                            </div>
                            <div class="countdown-block countdown-block-minutes">
                                <svg class="countdown-circle" x="0" y="0" width="200" height="200" viewbox="0 0 200 200" data-progress-minutes="">
                                    <circle class="countdown-circle-bg" cx="100" cy="100" r="90"></circle>
                                    <circle class="countdown-circle-fg clipped" cx="100" cy="100" r="90"></circle>
                                </svg>
                                <div class="countdown-wrap">
                                    <div class="countdown-counter" data-counter-minutes="">00</div>
                                    <div class="countdown-title">minutes</div>
                                </div>
                            </div>
                            <div class="countdown-block countdown-block-seconds">
                                <svg class="countdown-circle" x="0" y="0" width="200" height="200" viewbox="0 0 200 200" data-progress-seconds="">
                                    <circle class="countdown-circle-bg" cx="100" cy="100" r="90"></circle>
                                    <circle class="countdown-circle-fg clipped" cx="100" cy="100" r="90"></circle>
                                </svg>
                                <div class="countdown-wrap">
                                    <div class="countdown-counter" data-counter-seconds="">00</div>
                                    <div class="countdown-title">seconds</div>
                                </div>
                            </div>
                        </div>-->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section bg-default section-md">
        <div class="container">
            <h2 class="title-icon"><span class="icon icon-default mercury-icon-news"></span><span>ÂżCĂłmo puedes <span class="text-light">financiar tu carrera?</span></span></h2>
            <span>
                Conoce un poco mĂĄs sobre las becas, crĂ©ditos y otras oportunidades de financiamiento a las que puedes acceder para estudiar una carrera</span>
            <!-- <div class="col col-xs-12">
                    <iframe width='400' height='175' src='https://datosabiertos.pronabec.gob.pe/dataset/Credito18Postulacion' frameborder='0' style='border:1px solid #E2E0E0;padding:0;margin:0;'></iframe>
                    
                </div>-->
            <div class="row">
                <div id="becas" class="row"></div>
            </div>
            <div class="group-sm group-wrap-2"><a class="button button-primary" target="_blank" href="https://wa.link/wxknwn">Orientate en Whatsapp</a></div>

        </div>

    </section>
    <section class="section bg-default section-md">

        <div class="container">
            <h2 class="title-icon"><span class="icon icon-default mercury-icon-news"></span><span>Becas <span class="text-light">y </span><span>CrĂ©ditos</span></span></h2>
            <span>
                Conoce un poco mĂĄs sobre las becas, crĂ©ditos y otras oportunidades de financiamiento a las que puedes acceder para estudiar una carrera</span>
            <br>
            <div class="row">
                <div class="col col-xs-12 col-md-4">
                    <h3> <span>Becas: </span><br></h3>
                    <span class="text-light">Ayuda econĂłmica que se le entrega a una persona para pagar total o parcialmente los gastos que genera, por ejemplo,
                        seguir una carrera de educaciĂłn superior.</span>

                </div>
                <div class="col col-xs-12 col-md-4">
                    <h3> <span> CrĂ©dito educativo: </span><br></h3> <span class="text-light"> prĂ©stamo personal ofrecido a estudiantes y profesionales que buscan financiar sus estudios de pre y posgrado.</span>

                </div>
                <div class="col col-xs-12 col-md-4">
                    <h3> <span> Tasa de interĂ©s: </span><br></h3><span class="text-light">adicional que se debe pagar en funciĂłn del prĂ©stamo otorgado.</span>

                </div>
            </div>
            <div class="row">
                <!-- Latest Articles-->
                <?php
                $html = file_get_contents('https://www.ponteencarrera.pe/pec-portal-web/inicio/financiamiento'); //Convierte la informaciĂłn de la URL en cadena
                $doc = new DOMDocument();
                libxml_use_internal_errors(true);
                $doc->loadHTML($html);
                libxml_clear_errors();
                $xpath = new DomXPath($doc);

                $nodeList = $xpath->query("//div[@class='data-text data-carrera']");
                $nodeList2 = $xpath->query("//div[@class='data-text']");
                $metas    =     $doc->getElementsByTagName('a');
                $datos = array();
                $valor = "";
                // $metas    =   $xpath->query("//div[@class='data-inscribirse  show-popup-seccion']");
                //$node = $nodeList->item(0);
                //$node2 = $nodeList2->item(0);
                for ($i = 0; $i < $metas->length; $i++) {
                    $meta = $metas->item($i);

                    if ($meta->getAttribute('data-id-secdet')) {
                        //  echo $metas->length;
                        //  echo . "<br>";
                        $valor = $meta->getAttribute('data-id-secdet');
                        array_push($datos, $valor);
                    } elseif ($meta->getAttribute('href') && $meta->getAttribute('data-fin')) {
                        // echo $meta->getAttribute('href') . "<br>";
                        $valor = $meta->getAttribute('href');
                        array_push($datos, $valor);
                    }
                }
                //       print_r($datos);

                for ($i = 0; $i < $nodeList2->length; $i++) {
                    // $node3 = $nodeList3->item($i);

                    $node2 = $nodeList2->item($i);
                    $node = $nodeList->item($i);
                    //echo $node3->getAttribute('name')  <img src="..." class="card-img-top" alt="...">;
                    echo '<div class="col col-md-3 col-xs-12" style="width: 18rem;">
       
        <div class="card-body bg-success">
          <h5 class="card-title ">' . $node2->nodeValue . '</h5>
          <p class="card-text">' . $node->nodeValue . '</p>
          ';
                    if (isset($datos[$i])) {
                        if (is_numeric($datos[$i])) {
                            echo '<a href="' . $datos[$i] . '" target="_blank" class="btn btn-primary">Ir a</a>';
                        } else {
                            echo 'SerĂĄ un modal <a href="' . $datos[$i] . '"target="_blank" class="btn btn-primary">Ir a</a>';
                        }
                    }
                    echo ' </div>
          </div>';
                }

                ?>
            </div>
        </div>
    </section>
    <section class="section bg-default section-md">
        <div class="container">
            <h2 class="title-icon"><span class="icon icon-default mercury-icon-news"></span><span>Ăltimas <span class="text-light">Noticias</span></span></h2>
            <div class="box-image-small box-image-small-left">
                <iframe width='600' height='450' src='https://datosabiertos.pronabec.gob.pe/dataset/CambioDeEspecialidadBecario' frameborder='0' style='border:1px solid #E2E0E0;padding:0;margin:0;'></iframe>
                <div class="item-body wow fadeInRight">
                    <p><?php
                        date_default_timezone_set("America/Lima");
                        echo date("D d M Y H:i:s") ?></p>
                    <h4><a href="#">Becarios Cambio de Especialidad</a></h4>
                </div>
            </div>
            <div class="box-image-small box-image-small-right">
                <div class="item-image bg-image novi-nackground" style="background-image: url(images/index-1-3-580x334.jpg)"></div>
                <div class="item-body wow fadeInLeft">
                    <p>July 12, 2019</p>
                    <h4><a href="#">What Is a 1035 Exchange?</a></h4>
                    <p class="big">In this post, we will discuss what a 1035 exchange is and how it helps you manage and preserve your wealth and finances. A 1035 exchange is a specific transfer of funds from one life insurance policy...</p>
                </div>
            </div>
        </div>
    </section><a class="banner" href="https://www.templatemonster.com/website-templates/monstroid2.html" target="_blank"><img src="images/monstroid-big.jpg" alt="" height="0"></a>

    <?php include("./componentes/footer.php") ?>
    </div>
    <div class="snackbars" id="form-output-global"></div>
    <script src="js/core.min.js"></script>
    <script src="js/script.js"></script>
    <!--coded by Starlight-->
    <script>
        fetch('datajson/convocatoria.json')
            .then(function(response) {
                return response.json();
            })
            .then(function(data) {
                //data = JSON.parse(data);
                console.log(data);
                var count = Object.keys(data).length;
                var newhtml;
                
                for (var i = 0; i < count; i++) {


                    html = '<div class="col col-xs-12 col-md-3" style="width: 18rem;">';
                    html += '<div class="card-body">';
                    html += '<h5 class="card-title"><span style="font-color: green !important;" >' + data[i].Convocatoria + '</span></h5>';
                    html += '<p class="card-text"><h6>Becas ofertadas: </h6>' + data[i].Becas_ofertadas + '</p>';
                    html += '<p class="card-text"><h6>Modalidad :</h6> ' + data[i].ModalidadDescripcion + '</p>';
                    html += '<p class="card-text"><a class="btn btn-success" target="_blank" href="https://www.pronabec.gob.pe/beca-18-2021/">Ver en Pronabec</a></p>';

                    html += '</div>';
                    html += '</div>';
                    console.log(html);
                    $("#becas").append(html);
                }


                //  console.log(data[0].Apiguid);
            });
    </script>
</body>

</html>