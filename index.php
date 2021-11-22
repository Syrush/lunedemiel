<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Voyage - Lune de miel</title>

        <!-- STYLES -->
        <!-- Font Awesome -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.2/css/all.css" />
        <!-- Google Fonts Roboto -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap"/>
        <!-- MDB -->
        <link rel="stylesheet" href="mdb/css/mdb.min.css" />

        <!-- SCRIPTS -->
        <!-- JQuery -->
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

        <link href="justify.js/justifiedGallery.min.css" rel="stylesheet">
        <script type="text/javascript" src="justify.js/jquery.justifiedGallery.min.js"></script>
    </head>

    <body>

        <nav id="header" class="navbar navbar-light" style='background-image: url(bandeau.jpg);height: 300px;justify-content:center;background-size: cover;font-size: 38px;font-weight: 700;letter-spacing: 2px;'>
        </nav>
        
        <div id="nb_photos" class="navbar navbar-light mb-5 text-center" style="display: block!important;background-color: aliceblue;">
            <h1 class="m-3 px-3" style="white-space: nowrap;overflow: hidden;text-overflow: ellipsis;">Lune de miel à l'île Maurice</h1>
            <h3 class="m-3 px-3" style="white-space: nowrap;overflow: hidden;text-overflow: ellipsis;">Amély & Gaëtan</h3>
            <span class="link-text">269 photos</span>
        </div>

        <div id="content" class="mx-5">
            <div class="lightbox justified-gallery">
                <?php 
                    $legendes = array(
                        "1" => "Notre suite - Hôtel LUX* Belle Mare",
                        "300" => "Vue depuis notre chambre - Hôtel LUX* Belle Mare",
                        "400" => "Hôtel LUX* Belle Mare",
                        "700" => "Plage de Belle Mare",
                        "800" => "Hôtel LUX* Belle Mare",
                        "1600" => "Plage de Belle Mare",
                        "2100" => "Hôtel LUX* Belle Mare",
                        "2600" => "Plage de Belle Mare",
                        "3100" => "Petit déjeuner au LUX* Belle Mare",
                        "3200" => "Jardin Botanique de Pamplemousse",
                        "5700" => "Musée l'aventure du sucre",
                        "6500" => "Restaurant Le Fangourin",
                        "7000" => "Restaurant Le Beach Rouge",
                        "7100" => "Hôtel LUX* Belle Mare",
                        "7200" => "Plage de Belle Mare",
                        "8200" => "Hôtel LUX* Belle Mare",
                        "8400" => "Hôtel LUX* Belle Mare",
                        "8700" => "Petit déjeuner avec vue - Hôtel LUX* Belle Mare",
                        "9000" => "Hôtel LUX* Belle Mare",
                        "9400" => "Sur la route du Sud Est",
                        "9600" => "L'île des deux cocos",
                        "10900" => "Sur la route",
                        "11000" => "Fin de journée sur la plage de Belle Mare",
                        "11400" => "Hôtel LUX* Belle Mare",
                        "11500" => "Restaurant indien Amadi",
                        "11800" => "Lever de soleil sur la plage de Belle Mare - heure : 05h30",
                        "12500" => "Spa de l'hôtel LUX* Belle Mare",
                        "12750" => "Soirée à l'hôtel LUX* Belle Mare",
                        "12800" => "Restaurant le Beach Rouge",
                        "12900" => "Hôtel Telfair Heritage à Bel Ombre",
                        "13100" => "Notre suite - Hôtel Telfair Heritage à Bel Ombre",
                        "13300" => "La vue de notre balcon - Hôtel Telfair Heritage à Bel Ombre",
                        "13600" => "Hôtel Telfair Heritage à Bel Ombre",
                        "13900" => "Bar Le Cavendish - Hôtel Telfair Heritage à Bel Ombre",
                        "14100" => "Hôtel Telfair Heritage à Bel Ombre",
                        "15300" => "Coucher de soleil sur la plage de Bel Ombre",
                        "15700" => "La plage de Bel Ombre",
                        "16200" => "Restaurant l'Annabella's",
                        "16250" => "oiseau Bulbul",
                        "16300" => "Grand Bassin",
                        "16700" => "Culture de thé de Bois Chéri",
                        "16900" => "Bois Chéri",
                        "17000" => "Parc national de Rivière Noire",
                        "17900" => "Rhumerie de Chamarel",
                        "19300" => "Cascade de Chamarel",
                        "19500" => "Terre de 7 couleurs à Chamarel",
                        "19900" => "Les oiseaux Bulbul à Chamarel",
                        "20600" => "Terre de 7 couleurs à Chamarel",
                        "21500" => "Le Morne",
                        "22200" => "Hôtel Telfair Heritage à Bel Ombre",
                        "22400" => "Apéro au Bar Le Cavendish",
                        "22600" => "Restaurant Le Palmier",
                        "22700" => "Randonnée dans la réserve naturelle Frederica à Bel Ombre",
                        "23800" => "De Bel Ombre à Souillac en vélo éléctrique",
                        "25200" => "Heritage Golf Club",
                        "25300" => "Le chateau de Bel Ombre",
                        "25900" => "Hôtel Telfair Heritage à Bel Ombre",
                        "26000" => "initiation au golf - Heritage Golf Club",
                        "26100" => "Lecture de fin de journée",
                        "26200" => "Apéro au bar Le Cavendish",
                        "26300" => "Hôtel Telfair Heritage à Bel Ombre",
                        "26800" => "Plage de Bel Ombre",
                        "26900" => "Les retrouvailles",
                    );

                    $file_list = array();
                    $files = glob('photos/*');
                    foreach ($files as $file)
                        $file_list[str_replace(array("photos/", ".jpg", ".JPG"), "", $file)] = $file;

                    ksort($file_list);

                    $numdisponibles = array_keys($legendes);
                    foreach($file_list as $numfile => $file) {
                        $description = "";


                        
                        foreach($legendes as $numlegende => $legende) {
                            if(($numlegende == $numfile || $numlegende < $numfile) && )
                        }

                        echo "<a class='a-tag-image'>
                            <img alt='$description' data-mdb-img='$file' src='$file'/>
                        </a>";
                    }
                ?>
            </div>
        </div>

        <script>
            $(".lightbox").justifiedGallery({
                // images : photos,
                rowHeight: 200,
                maxRowHeight: 400,
                lastRow: 'nojustify',
                captions: false,
                margins: 4,
            });

        </script>

        <!-- SCRIPTS -->
        <!-- MDB -->
        <script type="text/javascript" src="mdb/js/mdb.min.js"></script>
    </body>

</html>