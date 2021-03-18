<?php ob_start(); ?>
    <!-- Meta -->
    <title>Kévin Derda / Contact</title>
    <meta name="description" content="Chef de projet avec 7 ans d’expérience en France et à l’international. Je maximise le potentiel de vos projets, dans le respect des plannings et des budgets.">
    <meta name="keywords" content="Chef de projet, Chef de projets, Gestion de projet, Gestion de projets"/>
    <meta name="author" content="Derda Kévin"/>
    <meta name="copyright" content="Derda Kévin"/>
    <meta name="robots" content="index"/>

    <!-- Open Graph meta pour Facebook et LinkedIn -->
    <meta property="og:title" content="Contact"/>
    <meta property="og:url" content="#"/>
    <meta property="og:image" content="/public/img/LogoBleu.png"/>
    <meta property="og:description" content="Chef de projet 7 ans d’exp. en France et à l’international."/>
        <meta property="og:site_name" content="Kévin Derda Chef de projet"/>
    <meta property="og:type" content="website"/>
<?php $meta = ob_get_clean(); ?>

<?php ob_start(); ?>
    <section style="background-color: #FFFFFF" id="topwhite" class="py-3">
        <div class="container">
            <h1 class="pb-3 text-center"> Contact</h1>
            <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                <ol class="breadcrumb" id="breadfont">
                    <li class="breadcrumb-item"><a href="/">Accueil</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Contact</li>
                </ol>
            </nav>

        </div>
    </section>
    <section style="background-color: #FFFFFF" id="botwhite" class="py-3">
        <form class="container-fluid" id="formecran" method="POST" action="/email/contact">
            <div class="row pt-2">
                <h2 class="text-center">Discutons ensemble</h2>
                <p class="text-center">email : kevin@kevinderda.com<p>
            </div>
            <div class="row pb-2">
                <div class="col-12 col-md-5 pt-3 ps-5 d-flex align-items-center justify-content-center animate__animated animate__backInLeft">
                    <img src="/public/img/contact1.png" class="img-fluid" alt="Communication">
                </div>
                <div class="col-12 col-md-6 pt-3 pe-5">
                    <div class="row">
                        <div class="col-12 col-md-6 pt-3 d-flex flex-column align-items-top justify-content-top">
                            <div class="mb-3" style="width: 100%;">
                                <div class="wrap-input2 validate-input" data-validate="Veuillez inscrire votre nom">
                                    <input class="input2 border-top-0 border-end-0 border-start-0 border border-1"
                                           type="text" name="name" placeholder="Votre nom"
                                           style="width: 100%; font-family: 'Open Sans';" required aria-label="Votre nom">
                                </div>
                            </div>
                            <div class="mb-3" style="width: 100%;">
                                <div class="wrap-input2 validate-input"
                                     data-validate="Veuillez inscrire votre email">
                                    <input type="email" placeholder="Votre email" name="email"
                                           class="border-top-0 border-end-0 border-start-0 border border-1"
                                           style="width: 100%; font-family: 'Open Sans';" required aria-label="Votre email">
                                </div>
                            </div>
                        </div>

                       
                    

                    <div class="col-12 col-md-6 pt-3 d-flex justify-content-center">
                        <div class="mb-3" style="width: 100%; height: 100%;">
                            <textarea rows="5" name="content" placeholder="Votre message"
                                      class="border-top-0 border-end-0 border-start-0 border border-1"
                                      style="width: 100%; height: 85%; font-family: 'Open Sans';"
                                      required aria-label="Votre message"></textarea>
                        </div>
                        
                    </div>
                    </div>
                    <div class="mb-3 form-check p-0">
                            <div class="mb-3 form-check p-0">
                                <p><input type="checkbox" name="rgpd" required aria-label="Acceptation formulaire"> En soumettant ce formulaire,
                                    j'accepte que les
                                    informations saisies dans ce formulaire soient utilisées, exploitées, traitées
                                    pour permettre de me recontacter, dans le cadre de la relation commerciale qui
                                    découle de cette demande.
                                </p>
                            </div>
                        </div>
                </div>

            </div>
            <div class="row pb-5">
                <div class="col-5 pt-1">
                </div>
                <div class="col-6 pt-1 d-flex justify-content-end">
                    <button type="submit" class="btn btn-primary ">Envoyer</button>
                </div>
                <div class="col-1 pt-1">
                </div>
            </div>
        </form>

        <!-- form telephone -->
        <form class="container-fluid" id="formtelephone" method="POST" action="/email">
            <div class="row pb-2">
                <div class="col-2 pt-1"></div>
                <div class="col-8 pt-3 d-flex align-items-center justify-content-center animate__animated animate__backInUp">
                    <img src="/public/img/contact1.png" class="img-fluid" alt="Communication">
                </div>
                <div class="col-2 pt-1"></div>
                <div class="row pt-5">
                    <h2 class="text-center">Discutons ensemble</h2>
                    <p class="text-center">email : kevin@kevinderda.com<p>
                </div>
                <div class="row pb-5">
                    <div class="col-1 col-md-2 pt-5">
                    </div>
                    <div class="col-10 col-md-8 pt-3">
                        <div class="row">
                            <div class="col-12 pt-1 d-flex flex-column align-items-center justify-content-center">
                                <div class="my-3" style="width: 100%;">
                                    <div class="wrap-input2 validate-input" data-validate="Veuillez inscrire votre nom">
                                        <input class="input2 border-top-0 border-end-0 border-start-0 border border-1"
                                               type="text" name="name" placeholder="Votre nom"
                                               style="width: 100%; font-family: 'Open Sans';" required aria-label="Votre nom">
                                    </div>
                                </div>
                                <div class="my-3" style="width: 100%;">
                                    <div class="wrap-input2 validate-input"
                                         data-validate="Veuillez inscrire votre email">
                                        <input type="email" name="email" placeholder="Votre email"
                                               class="border-top-0 border-end-0 border-start-0 border border-1"
                                               style="width: 100%; font-family: 'Open Sans';" required aria-label="Votre email">
                                    </div>
                                </div>
                                <div class="my-3" style="width: 100%; height: 100%;">
                                        <textarea rows="5" placeholder="Votre message" name="content"
                                                  class="border-top-0 border-end-0 border-start-0 border border-1"
                                                  style="width: 100%; height: 100%; font-family: 'Open Sans';"
                                                  required aria-label="Votre message"> </textarea>
                                </div>
                            </div>
                            <div class="my-3 form-check pt-3">
                                <p><input type="checkbox" name="rgpd" required aria-label="Acceptation formulaire"> En soumettant ce formulaire, j'accepte que les
                                    informations saisies dans ce formulaire soient utilisées, exploitées, traitées
                                    pour permettre de me recontacter, dans le cadre de la relation commerciale qui
                                    découle de cette demande.
                                </p>
                            </div>
                            <div class="d-flex justify-content-end">
                                <button type="submit" class="btn btn-primary">
                                    Envoyer
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </section>
<?php $content = ob_get_clean();
require 'template.php';

?>