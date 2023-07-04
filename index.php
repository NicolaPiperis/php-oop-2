

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <?php
           require_once("./data.php");
        ?>

        <title>

            <?php
                echo $shop1 -> getshopName();
            ?>

        </title>

        <style>
            img{
                width:200px;
            }
            .card{
                text-align:center;
                border: 1px, solid, black;
                padding:55px;
            }

            ul{
                list-style:none;
            }
        </style>

    </head>

    <body>

        <header>
            <h1>
                <?php
                    echo $shop1 -> getshopName();
                ?>
            </h1>
        </header>
        
        <main>
            <div class="card">
                <img src="
                <?php
                    echo $detailsFood -> getProductImage();
                ?>
                ">
                <ul>
                    <li>

                        NOME : 
                        <?php
                            echo $detailsFood -> getproductName();
                        ?>

                    </li>

                    <li>

                        ANIMALE : 
                        <?php
                            echo $detailsFood -> getpetCategory();
                        ?>

                    </li>

                    <li>

                        PREZZO : 
                        <?php
                            echo $detailsFood -> getproductPrice();
                        ?>
                        E

                    </li>

                    <li>

                        TIPOLOGIA : 
                        <?php
                            echo $detailsFood -> getTipology();
                        ?>

                    </li>

                    <li>

                        SCADENZA : 
                        <?php
                            echo $detailsFood -> getExpiry();
                        ?>

                    </li>

                    <li>

                        CODICE PRODOTTO : 
                        <?php
                            echo $detailsFood -> getProductCode();
                        ?>

                    </li>

                    <li>

                        PESO : 
                        <?php
                            echo $detailsFood -> getWeight();
                        ?>

                    </li>
                </ul>
            </div>

            <div class="card">
                <img src="
                <?php
                    echo $detailsObject -> getProductImage();
                ?>
                ">
                <ul>
                    <li>

                        NOME : 
                        <?php
                            echo $detailsObject -> getproductName();
                        ?>

                    </li>

                    <li>

                        ANIMALE : 
                        <?php
                            echo $detailsObject -> getpetCategory();
                        ?>

                    </li>

                    <li>

                        PREZZO : 
                        <?php
                            echo $detailsObject -> getproductPrice();
                        ?>
                        E

                    </li>

                    <li>

                        TIPOLOGIA : 
                        <?php
                            echo $detailsObject -> getTipology();
                        ?>

                    </li>

                    <li>

                        COLORE : 
                        <?php
                            echo $detailsObject -> getColor();
                        ?>

                    </li>

                    <li>

                        GRANDEZZA : 
                        <?php
                            echo $detailsObject -> getSize();
                        ?>

                    </li>
                </ul>
            </div>

        </main>
    </body>
    </html>