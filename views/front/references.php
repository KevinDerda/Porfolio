<?php ob_start(); ?>
    <section style="background-color: #FFFFFF" id="topwhite" class="py-3">
        <div class="container">
            <h1 class="pb-3 text-center"> Références</h1>
            <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                <ol class="breadcrumb" id="breadfont">
                    <li class="breadcrumb-item"><a href="/">Accueil</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Références</li>
                </ol>
            </nav>
            <div class="row py-2">
                <div class="col-12 col-md-9 d-flex align-items-center" style="background-color: #FFFFFF;">
                    <p class="px-3 lh-lg">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras incongue
                        tellus.
                        Vestibulum at
                        tortor
                        posuere, hendrerit felis quis, condimentum nunc. Nulla facilisi.</p>
                </div>
                <div class="col-12 col-md-3 text-center" style="background-color: #FFFFFF;">
                    <div class="row ">
                        <div class="col-6 col-md-12 p-3 d-flex justify-content-center">
                            <a class="btn btn-primary btn-lg" href="/" role="button">Parcours</a>
                        </div>
                        <div class="col-6 col-md-12 p-3 d-flex justify-content-center">
                            <a class="btn btn-secondary btn-lg" href="/contact" role="button">Contact</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section style="background-color: #FFFFFF" id="botwhite" class="py-3">
        <div class="container px-4">
            <div class="row">
                <div class="col-12 col-md-5 d-flex align-items-center">
                    <img src="public/img/worldmap.png" class="img-fluid" alt="Carte du monde" id=map>
                </div>
                <div class="col-12 col-md-7 ps-3">
                    <h2 class="pb-3"> Projets</h2>
                    <div class="accordion accordion-flush pb-5" id="accordionFlushExample">
                        <div class="accordion-item">
                            <h3 class="accordion-header" id="flush-headingOne">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#flush-collapseOne" aria-expanded="false"
                                        aria-controls="flush-collapseOne">
                                    Digitaux
                                </button>
                            </h3>
                            <div id="flush-collapseOne" class="accordion-collapse collapse"
                                 aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    <p>Placeholder content for this accordion, which is intended to
                                        demonstrate the <code>.accordion-flush</code> class. This is the first
                                        item's
                                        accordion body.</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h3 class="accordion-header" id="flush-headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#flush-collapseTwo" aria-expanded="false"
                                        aria-controls="flush-collapseTwo">
                                    Documentaires
                                </button>
                            </h3>
                            <div id="flush-collapseTwo" class="accordion-collapse collapse"
                                 aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    <p>Placeholder content for this accordion, which is intended to
                                        demonstrate the <code>.accordion-flush</code> class. This is the second
                                        item's
                                        accordion body. Let's imagine this being filled with some actual content.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h3 class="accordion-header" id="flush-headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#flush-collapseThree" aria-expanded="false"
                                        aria-controls="flush-collapseThree">
                                    Fictions
                                </button>
                            </h3>
                            <div id="flush-collapseThree" class="accordion-collapse collapse"
                                 aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    <p>Placeholder content for this accordion, which is intended to
                                        demonstrate the <code>.accordion-flush</code> class. This is the third
                                        item's
                                        accordion body. Nothing more exciting happening here in terms of content,
                                        but
                                        just
                                        filling up the space to make it look, at least at first glance, a bit more
                                        representative of how this would look in a real-world application.</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h3 class="accordion-header" id="flush-headingFor">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#flush-collapseFor" aria-expanded="false"
                                        aria-controls="flush-collapseThree">
                                    Événementiel
                                </button>
                            </h3>
                            <div id="flush-collapseFor" class="accordion-collapse collapse"
                                 aria-labelledby="flush-headingFor" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    <p>Placeholder content for this accordion, which is intended to
                                        demonstrate the <code>.accordion-flush</code> class. This is the third
                                        item's
                                        accordion body. Nothing more exciting happening here in terms of content,
                                        but just
                                        filling up the space to make it look, at least at first glance, a bit more
                                        representative of how this would look in a real-world application.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 pb-5 d-md-none d-flex align-items-center">
                <img src="public/img/worldmap.png" class="img-fluid" alt="Carte du monde">
            </div>
        </div>
    </section>
<?php $content = ob_get_clean();
require 'template.php';

?>