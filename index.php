<!DOCTYPE html>
<html lang="fr">

<head>
    <title>Appetee</title>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1.0" />
    <meta name="description" content="Bonjour, bienvenue sur le site Appetee !" />
    <link rel="stylesheet" type="text/css" href="style.css" />
    <link rel="stylesheet" href="https://use.typekit.net/shr8lmn.css">
</head>

<body>

    <?php
        if (isset($_GET['error']) OR isset($_GET['error2']) OR isset($_GET['errorlink1']) OR isset($_GET['errorlink2']) OR isset($_GET['errorlink3']) OR isset($_GET['errorlink4']) OR isset($_GET['errorlength2']) OR isset($_GET['errorlength2']) OR isset($_GET['errorlength3']) OR isset($_GET['errorlength4'])){
            echo ('<p id="sendTextBox" style="display:flex;align-items:center;justify-content:center;height:auto;min-height:50px;margin:0;background-color:crimson;color:#FFFFFF;text-align:center;padding:0 5px;">');
        }
        if (isset($_GET['success'])) {
            echo ('<p id="sendTextBox" style="display:flex;align-items:center;justify-content:center;height:auto;min-height:50px;margin:0;background-color:#0dbf0d;color:#FFFFFF;text-align:center;padding:0 5px;">Le formulaire a bien été envoyé.</p>');
        }

        if (isset($_GET['error'])) { echo ('L\'email n\'a pas été envoyé : Toutes les infos nécessaires n\'ont pas été remplies.</p>'); } 
        else if (isset($_GET['error2'])) { echo ('L\'email n\'a pas été envoyé : Il y a eu une erreur.</p>'); }
        else if (isset($_GET['errorlink1'])) { echo ('L\'email n\'a pas été envoyé : Le caractère " / " n\'est pas permis dans l\'envoi</p>'); }
        else if (isset($_GET['errorlink2'])) { echo ('L\'email n\'a pas été envoyé : www n\'est pas permis dans l\'envoi</p>'); }
        else if (isset($_GET['errorlink3'])) { echo ('L\'email n\'a pas été envoyé :  http(s) n\'est pas permis dans l\'envoi</p>'); }
        else if (isset($_GET['errorlink4'])) { echo ('L\'email n\'a pas été envoyé :  les caractères \'<\' et \'>\' ne sont pas permis dans l\'envoi</p>'); }
        else if (isset($_GET['errorlength2'])) { echo ('L\'email n\'a pas été envoyé : Le champ nom et prénom ne peut contenir que 50 caractères</p>'); }
        else if (isset($_GET['errorlength2'])) { echo ('L\'email n\'a pas été envoyé : Le champ email ne peut contenir que 100 caractères</p>'); }
        else if (isset($_GET['errorlength3'])) { echo ('L\'email n\'a pas été envoyé : Le champ sujet ne peut contenir que 60 caractères</p>'); }
        else if (isset($_GET['errorlength4'])) { echo ('L\'email n\'a pas été envoyé : Le champ message ne peut contenir que 800 caractères</p>'); }
    ?>

    <!--_____PARTIE_1_____-->

    <header id="header">

        <nav>
            <div id="myNav" class="overlay">
                <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                <div class="overlay-content">
                    <a href="#concept" class="">Accueil</a>
                    <a href="#concept">Concept</a>
                    <a href="#tarifs">Notre offre</a>
                    <a href="#application">Application</a>
                    <a href="#presequipe">Présentation de l'équipe</a>
                    <a href="#contact">Contact</a>
                </div>
            </div>
            <span onclick="openNav()"><img src="img/menu-512.png" width="512" height="512" alt="Menu" id="navbutton"></span>

            <div class="div_logo_appetee_mobile">
                <img src="img/chatbot-logo.png" width="375" height="375" alt="logo Appetee" class="logo_appetee_mobile">
            </div>

            <ul id="nav">
                <li><a href="#header"><img src="img/logoappetee-2.png" width="314" alt="logo Appetee" height="259"></a></li>
                <li><a href="#concept">Concept</a></li>
                <li><a href="#tarifs">Notre offre</a></li>
                <li><a href="#application">Application</a></li>
                <li><a href="#presequipe">Présentation de l'équipe</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
        </nav>

        <section class="home" id="home">
            <article>
                <div>
                    <h1><hr />Appetee <br /></h1>
                    <p>Seul ou à plusieurs, c’est l'application qui propose des recettes adaptées à vos profils alimentaires !</p>
                    <div>
                        <a href="https://www.apple.com/fr/ios/app-store/" target="_blank" rel="noopener noreferrer"><img src="img/app-store.png" width="231" height="80" alt="App store logo"/></a>
                        <a href="https://store.google.com/fr/" target="_blank" rel="noopener noreferrer"><img src="img/google-play.png" width="232" height="81" alt="Google play logo"/></a>
                    </div>
                </div>
                <img id="frite" src="img/frites-2.png" alt="Illustration frite"/>
            </article>
            <article>
                <img src="img/phone-accueil-2.png" width="486" height="1064" alt="Image de l'application sur Téléphone" />
                <div class="phone_download_div">
                    <a href="https://www.apple.com/fr/ios/app-store/" target="_blank" rel="noopener noreferrer"><img class="phone_download_img" src="img/app-store.png" width="231" height="80" alt="App store logo"/></a>
                    <a href="https://store.google.com/fr/" target="_blank" rel="noopener noreferrer"><img class="phone_download_img phone_download_img_2" src="img/google-play.png" width="232" height="81" alt="Google play logo"/></a>
                </div>
            </article>
        </section>

        <img id="headerBg" src="img/headerbackground.png" alt="Image de Fond" />
    </header>

    <main>
        <section id="concept" class="concept">
            <article>
                <h2>Notre</h2>
                <section class="etape">
                    <div class="contener conteneur_anim_1">
                        <h3>Étape 1</h3>
                        <div>
                            <img src="img/undraw-people-tax5.png" width="329" height="254" alt="Illustration user"/>
                            <h4>Dis-nous tes habitudes alimentaires</h4>
                            <p>Création de ton profil alimentaire en prenant connaissance de tes goûts, allergies, intolérances et régimes alimentaires.</p>
                            <img class="contenerBg" src="img/trace-147.png" alt="Background contener" />
                        </div>
                    </div>

                    <div class="contener conteneur_anim_2">
                        <h3>Étape 2</h3>
                        <div>
                            <img src="img/undraw-eating-together-tjhx.png" width="329" height="254" alt="Illustration user" />
                            <h4>Sélectionne qui participe au repas</h4>
                            <p>Un repas seul, en famille ou entre amis ? Pas de problème ! Ajoute simplement leurs profils Appetee.</p>
                            <img class="contenerBg" src="img/trace-147.png" alt="Background contener" />
                        </div>
                    </div>

                    <div class="contener conteneur_anim_3">
                        <h3>Étape 3</h3>
                        <div>
                            <img src="img/undraw-breakfast-psiw.png" width="329" height="254" alt="Illustration user" />
                            <h4>Choisis ta recette</h4>
                            <p>On te propose une liste de recettes sur mesure et adaptées à ta recherche. Trouve la recette parfaite, cuisine-la et régale-toi !</p>
                            <img class="contenerBg" src="img/trace-147.png" alt="Background contener" />
                        </div>
                    </div>
                </section>
            </article>
        </section>

        <section id="projet" class="projet">
            <h2>Notre</h2>
            <img src="img/tomates-2.png" alt="tomates" id="projetBg" />

            <article>
                <section>

                    <article class="projetContener decale">
                        <div>
                            <h3>Partage</h3>
                            <p>Partager des repas n’a jamais été aussi simple et rapide. On s’occupe de la recette, tu gères l’ambiance.</p>
                        </div>
                        <div>
                            <img src="img/groupe-60.png" class="anim_picto_1" width="196" height="196" alt="illustration recette" />
                        </div>
                    </article>

                    <article class="projetContener">
                        <div>
                            <h3>Accessible</h3>
                            <p>Pas d’idée pour le repas de ce soir ? Un seul et même repas pour tout le monde en 1 clic.</p>
                        </div>
                        <div>
                            <img src="img/groupe-61.png" class="anim_picto_2" width="196" height="196" alt="illustration recette" />
                        </div>
                    </article>

                    <article class="projetContener decale">
                        <div>
                            <h3>Adaptable</h3>
                            <p>Seul ou à plusieurs, des recettes adaptées à tout le monde !</p>
                        </div>
                        <div>
                            <img src="img/groupe-62.png" class="anim_picto_3" width="196" height="196" alt="illustration recette" />
                        </div>
                    </article>

                    <article class="projetContener decale2">
                        <div>
                            <h3>Economies</h3>
                            <p>Des économies pour toi et pour la planète. Prévois tes courses en planifiant ce que tu vas manger cette semaine.</p>
                        </div>
                        <div>
                            <img src="img/groupe-63.png" class="anim_picto_4" width="196" height="196" alt="illustration recette" />
                        </div>
                    </article>

                    <div id="app">
                        <a href="https://www.apple.com/fr/ios/app-store/" target="_blank" rel="noopener noreferrer"><img src="img/app-store.png" width="231" height="80" alt="App store logo"/></a>
                        <a href="https://store.google.com/fr/" target="_blank" rel="noopener noreferrer"><img src="img/google-play.png" width="232" height="81" alt="Google play logo"/></a>
                    </div>
                </section>

                <section>
                    <img src="img/pizza-2.png" width="1386" height="1448" alt="pizza" class="img_pizza"/>
                </section>
            </article>
        </section>

        <section id="tarifs" class="tarifs">
            <h2>Notre offre</h2>
            <p id="desc">Tout comme nos recettes, les offres Appetee sont personnalisées. Choisissez celle qui vous correspond</p>

            <section>
                <article id="mensuel" class="select">
                    <h3 class="tarifs_h3">Mensuel</h3>
                    <p>Sans engagement</p>
                </article>

                <article id="trimestriel">
                    <div class="promo">
                        <p>Économisez 25%</p>
                    </div>
                    <h3 class="tarifs_h3">Trimestriel</h3>
                    <p>Engagement sur 3 mois</p>
                </article>

                <article id="annuel">
                    <div class="promo">
                        <p>Économisez 50%</p>
                    </div>
                    <h3 class="tarifs_h3">Annuel</h3>
                    <p>Engagement sur 12 mois</p>
                </article>
            </section>
        </section>

        <section class="affichageTarifs">
            <article>
                <img id="gratuitBg" src="img/gratuitbg.png" alt="Background" />
                <h2>Offre gratuite</h2>
                <p>Des recettes adaptées à votre profil ? C’est possible avec notre offre gratuite !</p>
                <ul>
                    <li><img src="img/ic-done-24px.png" width="51" height="39" alt="Validate" /> Recettes adaptées au profil</li>
                    <li><img src="img/ic-done-24px.png" width="51" height="39" alt="Validate" /> 300 recettes</li>
                    <li><img src="img/ic-done-24px.png" width="51" height="39" alt="Validate" /> Nombre de recherche limité<b>*</b></li>
                    <li><img src="img/ic-done-24px.png" width="51" height="39" alt="Validate" /> Nombre d'invités par recherche limité</li>
                    <li><img src="img/croix.png" width="51" height="51" alt="Non disponible" /> Recettes saisonnières et évènements</li>
                    <li><img src="img/croix.png" width="51" height="51" alt="Non disponible" /> Quantités adaptées</li>
                    <li><img src="img/croix.png" width="51" height="51" alt="Non disponible" /> Liste de course intelligente</li>
                    <li><img src="img/croix.png" width="51" height="51" alt="Non disponible" /> Planification des repas</li>
                    <li><img src="img/croix.png" width="51" height="51" alt="Non disponible" /> Mode hors ligne</li>
                    <li><img src="img/croix.png" width="51" height="51" alt="Non disponible" /> Recettes en favoris</li>
                    <li><img src="img/ic-done-24px.png" width="51" height="39" alt="Validate" /> Publicités</li>
                    <li style="font-size:12px"><b>* Illimité avec publicités</b></li>
                </ul>

                <div>
                    <a href="#">Commencer</a>
                </div>
            </article>

            <article>
                <div>
                    <img src="img/trace-153.png" alt="Background Premium" id="premiumBg" />
                    <h3>Premium</h3>
                    <p id="price">7.99 €</p>
                </div>
                <ul>
                    <li><img src="img/ic-done-24px.png" width="51" height="39" alt="Validate" /> Recettes adaptées au profil</li>
                    <li><img src="img/ic-done-24px.png" width="51" height="39" alt="Validate" /> 600 recettes (ajouts mensuels)</li>
                    <li><img src="img/ic-done-24px.png" width="51" height="39" alt="Validate" /> Nombre de recherches illimité</li>
                    <li><img src="img/ic-done-24px.png" width="51" height="39" alt="Validate" /> Nombre d'invités par recherche illimité</li>
                    <li><img src="img/ic-done-24px.png" width="51" height="39" alt="Validate" /> Recettes saisonnières et évènements</li>
                    <li><img src="img/ic-done-24px.png" width="51" height="39" alt="Validate" /> Quantités adaptées</li>
                    <li><img src="img/ic-done-24px.png" width="51" height="39" alt="Validate" /> Liste de course intelligente</li>
                    <li><img src="img/ic-done-24px.png" width="51" height="39" alt="Validate" /> Planification des repas</li>
                    <li><img src="img/ic-done-24px.png" width="51" height="39" alt="Validate" /> Mode hors ligne</li>
                    <li><img src="img/ic-done-24px.png" width="51" height="39" alt="Validate" /> Recettes en favoris</li>
                    <li><img src="img/croix.png" width="51" height="39" alt="Aucune" /> Publicités</li>
                </ul>

                <div class="flex">
                    <a href="#" id="redButton">Commencer</a>
                </div>
            </article>
        </section>
    </main>

    <!--_____PARTIE_2_____-->

    <section class="telecharger_appetee" id="application">
        <div class="telecharger_appetee_main_title">
            <h2><b>Télécharger Appetee</b></h2>
        </div>
        <div class="telecharger_appetee_flexbox">
            <img src="img/img-tel-2.png" width="600" height="464" class="tel_app_img" alt="images de l'application sur téléphones" />
            <div class="telecharger_appetee_div_text">
                <h3>Application Appetee</h3><br>
                <p>Appetee est disponible gratuitement sur App Store et Play Store. Découvre-la maintenant et révolutionne ton quotidien !<br><br>Bientôt disponible Laisse-nous ton mail et tu seras le premier à être au courant du lancement d’Appetee !<br>Pssssst… on me dit à l’oreillette qu’une surprise t’attendras 😍</p>
                <!--<div>
                    <input type="text" class="appli_input" placeholder="Nom"/>
                    <input type="text" class="appli_input" placeholder="Email"/>
                    <input type="submit" class="appli_submit"/><br>
                </div>-->
                <a href="https://www.apple.com/fr/ios/app-store/" target="_blank" rel="noopener noreferrer"><img src="img/app-store.png" width="200" height="68" alt="lien de téléchargement de l'application Appetee sur l'Appstore" /></a>
                <a href="https://play.google.com/store?hl=fr&gl=US" target="_blank" rel="noopener noreferrer"><img src="img/google-play.png" width="200" height="70" alt="lien de téléchargement de l'application Appetee sur Google play store" /></a>
            </div>
            <div class="blank_div"></div>
        </div>
    </section><!--
    
    --><section class="une_equipe_motivee" id="presequipe">

        <div class="une_equipe_motivee_titre">
            <h2><b>Une équipe <span>motivée</span></b></h2>
        </div>

        <div class="une_equipe_motivee_table">
            <div class="une_equipe_motivee_cell_img">
                <img src="img/carole.jpg" width="600" height="600" alt="photo de Carole">
            </div>
            <div class="div_espace"></div>
            <div class="une_equipe_motivee_cell_text">
                <h3>Carole - Fondatrice et développeuse Appetee</h3>
                <p>👨‍🍳 Grand attrait pour la cuisine<br>🍽Bonne connaissance dans le domaine nutritionnel<br>👩‍💻Etudiante ingénieure avec des compétences techniques</p>
                <button class="equipe_div_text_button" onclick="location.href='#';">LinkedIn</button>
            </div>
            <div class="div_espace"></div>
        </div>

        <div class="une_equipe_motivee_table flex_mobile">
            <div class="div_espace"></div>
            <div class="une_equipe_motivee_cell_text_2">
                <h3>Antony - Fondateur</h3>
                <p>👨‍🎓 Etudiant ingénieur manager<br>🍽 Grand passionné de la nourriture<br>🌍 International lover </p> 
                <button class="equipe_div_text_button" onclick="location.href='#';">LinkedIn</button>
            </div>
            <div class="div_espace"></div>
            <div class="une_equipe_motivee_cell_img_2">
                <img src="img/anto.jpg" width="600" height="600" alt="photo d'Antony">
            </div>
        </div>

        <div class="une_equipe_motivee_table no_margin">
            <div class="une_equipe_motivee_cell_img">
                <img src="img/mathieu.jpg" width="600" height="600" alt="photo de Mathieu">
            </div>
            <div class="div_espace"></div>
            <div class="une_equipe_motivee_cell_text">
                <h3>Mathieu - Développeur Appetee </h3>
                <p>👩‍💻 Etudiant ingénieur avec de solides compétences en développement<br>👨‍🍳 Passionné de la cuisine du monde<br>🤸‍️ Sportif de haut niveau</p> 
                <button class="equipe_div_text_button" onclick="location.href='#';">LinkedIn</button>
            </div>
            <div class="div_espace"></div>
        </div>

    </section><!--

    --><section class="nous_contacter" id="contact">

        <div class="nous_contacter_table_cell">
            <h2>Nous Contacter</h2>
            <p><b>Une petite question ?<br> Nous sommes là pour toi !</b></p>
        </div>

        <div class="nous_contacter_table_cell_2">
            <div class="div_formulaire">

                <h3>Envoyer un message</h3>

                <form action="form.php" method="post">

                    <div class="div_formulaire_section div_formulaire_section_margin">
                        <label class="div_formulaire_label" for="nomPrenomForm"><b>Nom et prénom</b> <span>*</span></label>
                        <input class="div_formulaire_input" type="text" id="nomPrenomForm" name="nomPrenomForm" placeholder="Tom Sandlers">
                    </div>

                    <div class="div_formulaire_section">
                        <label class="div_formulaire_label" for="emailForm"><b>Email</b> <span>*</span></label>
                        <input class="div_formulaire_input" type="email" id="emailForm" name="emailForm" placeholder="tom.sandlers@outlook.com">
                    </div>

                    <div class="div_formulaire_section">
                        <label class="div_formulaire_label" for="sujetForm"><b>Sujet</b> <span>*</span></label>
                        <input class="div_formulaire_input" type="text" id="sujetForm" name="sujetForm" placeholder="Information">
                    </div>

                    <div class="div_formulaire_section">
                        <label class="div_formulaire_label" for="messageForm"><b>Message</b> <span>*</span></label>
                        <input class="div_formulaire_input" type="text" id="messageForm" name="messageForm" placeholder="Bonjour, je souhaiterais avoir plus d'informations concernant votre...">
                    </div>

                    <div class="center_button_submit_form">
                        <input class="button_submit_form" type="submit" value="Envoyer" id="submitForm" name="submitForm">
                    </div>

                </form>

            </div>
        </div>

    </section>
    
    <footer>

        <div class="footer_text_div">
            <h3><b>Ils nous ont trouvé appetee-ssant...</b></h3>
        </div>

        <div class="footer_div_global_infos">
            <a href="https://www.franceinter.fr/emissions/l-esprit-d-initiative/l-esprit-d-initiative-21-mai-2019" target="_blank" rel="noopener noreferrer"><div class="footer_div_infos">
                <div class="footer_div_infos_div_img">
                    <img src="img/france-inter.jpg" width="300" height="300" alt="France Inter logo" />
                </div>
                <div class="footer_div_infos_div_text">
                    <p>L'esprit d'initiative</p>
                </div>
            </div></a>

            <a href="https://www.europe1.fr/emissions/la-france-bouge-avec-raphaelle-duchemin/raphaelle-duchemin-les-pouvoirs-et-les-potentiels-de-lenergie-solaire-3902755" target="_blank" rel="noopener noreferrer"><div class="footer_div_infos">
                    <img src="img/europe-1.jpg" width="300" height="110" alt="Europe 1 logo" />
                <div class="footer_div_infos_div_text">
                    <p>La france bouge</p>
                </div>
            </div></a>


            <a href="https://www.capital.fr/entreprises-marches/maillots-de-bains-issus-de-dechets-pinces-pour-drones-les-bonnes-idees-de-nos-etudiants-1354378" target="_blank" rel="noopener noreferrer"><div class="footer_div_infos">
                <div class="footer_div_infos_div_img">
                    <img src="img/capital.jpg" width="283" height="83" alt="Capital logo" />
                </div>
                <div class="footer_div_infos_div_text">
                    <p>Entreprises<br>et marché</p>
                </div>
            </div></a>

            <a href="https://www.capital.fr/entreprises-marches/maillots-de-bains-issus-de-dechets-pinces-pour-drones-les-bonnes-idees-de-nos-etudiants-1354378" target="_blank" rel="noopener noreferrer"><div class="footer_div_infos">
                <div class="footer_div_infos_div_img">
                    <img src="img/logo-vivatech.jpg" width="300" height="88" alt="Vivatech logo" />
                </div>
                <div class="footer_div_infos_div_text">
                    <p>Exposition</p>
                </div>
            </div></a>
        </div>

        <div class="footer_text2_div">
            <h3><b>Suivez nous sur les réseaux sociaux :</b></h3>
            <a href="#" target="_blank" rel="noopener noreferrer">Facebook</a><br><br>
            <a href="#" target="_blank" rel="noopener noreferrer">Instagram</a>
        </div>

    </footer>

    <!--_____CHATBOT_____-->

    <div class="chatbot" id="chatbot">
        <!-- Header -->
        <div class="info_chatbot">
            <span class="info_titre">Chatbot Appetee</span>
            <input type="button" id="closeChatbot" value="×">
        </div>
        <!-- Liste des messages -->
        <div class="liste_messages" id="listeMessages">
            <div class="message bot_message">
                <div class="message_absolute_box_bot">
                    <div class="message_absolute_box_flexbox">
                        <img src="img/chatbot-logo.png" width="104" height="104" alt="Logo robot">
                    </div>
                </div>
                <div class="message_text_bot">
                    <p>Bonjour ! Besoin d'un renseignement à propos d'Appetee ?</p>
                </div>
            </div>
        </div>
        <div class="separateur"></div>
        <!-- Boutons Réponses -->
        <div class="zone_reponse">
            <div class="flexbox" id="flexbox" style="overflow-y:auto;"></div>
        </div>
    </div>

    <input type="image" class="button_chatbot" id="openChatbot" value="?" src="img/ouvrir-bot.png" alt="Boutton chatbot"/>

    <link rel="stylesheet" type="text/css" href="stylechatbot.css" />
    <link rel="stylesheet" type="text/css" href="animation.css" />
    <script type="text/javascript" src="script.js"></script>
    <script type="text/javascript" src="scriptchatbot.js"></script>

</body>

</html>