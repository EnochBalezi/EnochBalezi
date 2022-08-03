<div id="layoutSidenav_nav">
    <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
        <div class="sb-sidenav-menu">
            <div class="nav">

                <a class="nav-link" href="dashbordy.php">
                    <div class="sb-nav-link-icon"><i class="fa fa-tachometer-alt"></i></div>
                    Dashboard
                </a>
                <div class="sb-sidenav-menu-heading">Interface</div>
                <?php if (isset($_SESSION['token'])) { ?>
                    <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                        <div class="sb-nav-link-icon"><i class="fa fa-columns"></i></div>
                        Gest Paiements
                        <div class="sb-sidenav-collapse-arrow"><i class="fa fa-angle-down"></i></div>
                    </a>
                    <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                        <nav class="sb-sidenav-menu-nested nav">
                            <a class="nav-link" href="paiement.php">Paiement</a>
                            <a class="nav-link" href="typeFrais.php">Type Frais</a>
                            <a class="nav-link" href="">Rapports</a>
                        </nav>
                    </div>
                    <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages">
                        <div class="sb-nav-link-icon"><i class="fa fa-book-open"></i></div>
                        Gest Communications
                        <div class="sb-sidenav-collapse-arrow"><i class="fa fa-angle-down"></i></div>
                    </a>
                    <div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                        <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                            <a class="nav-link" href="formSMS.php">SMS</a>
                            <a class="nav-link" href="">Mails</a>
                            <a class="nav-link" href="">Appel</a>
                            <a class="nav-link" href="">Rapports</a>
                        </nav>
                    </div>
                    <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayout" aria-expanded="false" aria-controls="collapseLayout">
                        <div class="sb-nav-link-icon"><i class="fa fa-book-open"></i></div>
                        Gest Eleve
                        <div class="sb-sidenav-collapse-arrow"><i class="fa fa-angle-down"></i></div>
                    </a>
                    <div class="collapse" id="collapseLayout" aria-labelledby="headingThree" data-bs-parent="#sidenavAccordion">
                        <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                            <a class="nav-link" href="index.php?controller=eleve">Eleves</a>
                            <a class="nav-link" href="index.php?controller=cursus">Cursurs</a>
                            <a class="nav-link" href="index.php?controller=rapports">Rapports</a>
                        </nav>
                    </div>
                    <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapse4" aria-expanded="false" aria-controls="collapse4">
                        <div class="sb-nav-link-icon"><i class="fa fa-book-open"></i></div>
                        Gest Classes
                        <div class="sb-sidenav-collapse-arrow"><i class="fa fa-angle-down"></i></div>
                    </a>
                    <div class="collapse" id="collapse4" aria-labelledby="headingFour" data-bs-parent="#sidenavAccordion">
                        <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                            <a class="nav-link" href="index.php?controller=promotion">Promotion</a>
                            <a class="nav-link" href="index.php?controller=annee">Annee</a>
                        </nav>
                    </div>
                    <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapse5" aria-expanded="false" aria-controls="collapse5">
                        <div class="sb-nav-link-icon"><i class="fa fa-book-open"></i></div>
                        Gest Cours & Enseignant
                        <div class="sb-sidenav-collapse-arrow"><i class="fa fa-angle-down"></i></div>
                    </a>
                    <div class="collapse" id="collapse5" aria-labelledby="headingFive" data-bs-parent="#sidenavAccordion">
                        <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                            <a class="nav-link" href="index.php?controller=periode">Periode</a>
                            <a class="nav-link" href="index.php?controller=cour">Cours</a>
                            <a class="nav-link" href="index.php?controller=cote">Cotes</a>
                            <a class="nav-link" href="index.php?controller=enseignant">Enseignants</a>
                        </nav>
                    </div>

                    <?php if (isset($_SESSION['autherized']) === "Admin") { ?>
                        <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapse6" aria-expanded="false" aria-controls="collapse6">
                            <div class="sb-nav-link-icon"><i class="fa fa-columns"></i></div>
                            Gest Utilisateurs
                            <div class="sb-sidenav-collapse-arrow"><i class="fa fa-angle-down"></i></div>
                        </a>
                        <div class="collapse" id="collapse6" aria-labelledby="headingSix" data-bs-parent="#sidenavAccordion">
                            <nav class="sb-sidenav-menu-nested nav">
                                <a class="nav-link" href="utilisateur.php">Utilisateurs</a>
                                <a class="nav-link" href="formUtilisateur.php">Création compte</a>
                            </nav>
                        </div>
                    <?php } ?>
                <?php } ?>
            </div>
        </div>
    </nav>
</div>