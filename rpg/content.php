<body style="background-color: #c3b68f">
    <div class="container">
        <div class="row">
            <div class="col-12 introduction">
                <h2>Escolha um personagem e vamos para a aventura!</h2>
            </div>
        </div>
    </div>

    <div class="container-fluid caracter--bkg mt-5 col-12">
        <div class="container">
            <div class="row p-5">
                <div class="col-3">
                        <div class="p-5 caracter--letters caracter__values ">
                            <?php
                                include("class\Caracter.php");
                                $arqueiro = new Caracter('Arqueiro','Rodolfo', 20, 5);
                            ?>
                            <h5><?= $arqueiro->class; ?></h5>
                            <h6 class="class_values mt-3">
                                Nome <br> <?= $arqueiro->name; ?>
                            </h6>
                            <h6 class="class_values mt-3">
                                Vida <br> <?= $arqueiro->life; ?>
                            </h6>
                            <h6 class="class_values mt-3">
                                Dano <br> <?= $arqueiro->damage; ?>
                            </h6>

                        </div>
                        <button id="caracter_profile" class="p-5 caracter__perfil caracter__perfil--archer"></button>
                </div>
                <div class="col-3">
                        <div class=" p-5 caracter--letters caracter__values">
                            <?php
                                $guerreiro = new Caracter('Guerreiro','Ralf', 20, 8);
                            ?>
                            <h5><?= $guerreiro->class; ?></h5>
                            <h6 class="class_values mt-3">
                                Nome <br> <?= $guerreiro->name; ?>
                            </h6>
                            <h6 class="class_values mt-3">
                                Vida <br> <?= $guerreiro->life; ?>
                            </h6>
                            <h6 class="class_values mt-3">
                                Dano <br> <?= $guerreiro->damage; ?>
                            </h6>

                        </div>
                        <button id="caracter_profile" class="p-5 caracter__perfil caracter__perfil--warrior"></button>
                </div>
                <div class="col-3">
                        <div class=" p-5 caracter--letters caracter__values">
                            <?php
                                $ladino = new Caracter('Ladino','josé', 20, 6);
                            ?>
                            <h5><?= $ladino->class; ?></h5>
                            <h6 class="class_values mt-3">
                                Nome <br> <?= $ladino->name; ?>
                            </h6>
                            <h6 class="class_values mt-3">
                                Vida <br> <?= $ladino->life; ?>
                            </h6>
                            <h6 class="class_values mt-3">
                                Dano <br> <?= $ladino->damage; ?>
                            </h6>

                        </div>
                        <button id="caracter_profile" class="p-5  caracter__perfil  caracter__perfil--thief"></button>
                </div>
                <div class="col-3">
                        <div class=" p-5 caracter--letters caracter__values">
                            <?php
                                $mago = new Caracter('Mago','Yarm', 13, 15);
                            ?>
                            <h5><?= $mago->class; ?></h5>
                            <h6 class="class_values mt-3">
                                Nome <br> <?= $mago->name; ?>
                            </h6>
                            <h6 class="class_values mt-3">
                                Vida <br> <?= $mago->life; ?>
                            </h6>
                            <h6 class="class_values mt-3">
                                Dano <br> <?= $mago->damage; ?>
                            </h6>

                        </div>
                        <button id="caracter_profile" class="p-5 caracter__perfil caracter__perfil--mage"></button>
                </div>
            </div>
        </div>
    </div>