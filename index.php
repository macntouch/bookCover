<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>Make a book cover</title>

        <!-- Bootstrap -->
        <link href="css/bootstrap.min.css" rel="stylesheet">

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body role="document">
        <div class="container theme-showcase" role="main">

            <!-- Main jumbotron for a primary marketing message or call to action -->
            <div class="jumbotron">
                <h1>Make a book cover</h1>
                <p>Export to PDF or JPG</p>
            </div>

            <div class="row">
                <form class="form-horizontal" action="exportPDF.php" method="get">

                    <div class="page-header">
                        <h1>Seleziona il tipo di copertina</h1>
                    </div>

                    <div class="row">
                        <div class="col-xs-6">
                            <div class="radio">
                                <label>
                                    <input type="radio" name="tipologia" id="senzaAlette" value="0" checked>
                                    Copertina senza alette/bandelle
                                </label>
                            </div>
                            <div class="radio">
                                <label>
                                    <input type="radio" name="tipologia" id="conAlette" value="1">
                                    Copertina con alette/bandelle
                                </label>
                            </div>
                        </div>
                        <div class="col-xs-6">
                            <img src="img/coverExample.png" class="img-responsive" alt="Copertina senza alette">
                        </div>
                    </div>

                    <div class="page-header">
                        <h1>Dimensioni</h1>
                    </div>

                    <div class="form-group">
                        <label for="inputLarghezza" class="col-sm-2 control-label">Larghezza pagina</label>
                        <div class="col-sm-10">
                            <input type="number" name="larghezza" class="form-control" id="inputLarghezza" placeholder="Larghezza in mm">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputAltezza" class="col-sm-2 control-label">Altezza pagina</label>
                        <div class="col-sm-10">
                            <input type="number" name="altezza" class="form-control" id="inputAltezza" placeholder="Altezza in mm">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputLarghezzaDorso" class="col-sm-2 control-label">Larghezza dorso</label>
                        <div class="col-sm-10">
                            <input type="number" name="dorso" class="form-control" id="inputLarghezzaDorso" placeholder="Larghezza dorso/costa in mm">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputAbbondanza" class="col-sm-2 control-label">Abbondanza</label>
                        <div class="col-sm-10">
                            <input type="number" name="abbondanza" class="form-control" id="inputAbbondanza" placeholder="Abbondanza in mm">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputTaglio" class="col-sm-2 control-label">Segni di taglio</label>
                        <div class="col-sm-10">
                            <input type="number" name="taglio" class="form-control" id="inputTaglio" placeholder="Lunghezza segni di taglio in mm">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputMargineInterno" class="col-sm-2 control-label">Margine interno</label>
                        <div class="col-sm-10">
                            <input type="number" name="margineInterno" class="form-control" id="inputMargineInterno" placeholder="Margine interno in mm">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputAletta" class="col-sm-2 control-label">Larghezza alette</label>
                        <div class="col-sm-10">
                            <input type="number" name="aletta" class="form-control" id="inputAletta" placeholder="Larghezza aletta/bandella in mm">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                            <div class="checkbox">
                                <label>
                                    <input name="stampaInfo" type="checkbox"> Stampa le informazioni sulle dimensioni
                                </label>
                            </div>
                        </div>
                    </div>
                    <!--
                    <div class="form-group">
                      <label for="inputDPI" class="col-sm-2 control-label">DPI</label>
                      <div class="col-sm-10">
                        <input type="number" name="DPI" class="form-control" id="inputDPI" placeholder="DPI (300 normale)">
                      </div>
                    </div>
                    -->
                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                            <button type="submit" class="btn btn-primary"> Export to PDF</button>
                        </div>
                    </div>
                </form>
            </div> <!-- Fine row del form -->
        </div> <!-- Fine div container -->

        <footer class="footer">
            <div class="container">
                <p class="text-muted text-center">Studio Archistico di Rollandin Emilie</p>
            </div>
        </footer>

        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="js/bootstrap.min.js"></script>
    </body>
</html>
