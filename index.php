<!DOCTYPE html>
<?php
require_once("db_scripts/connect_db.php");
?>

<html>
    <head>
        <meta charset="utf-8">
        <title>Arbeitsjournal Prototyp</title>

        <!--Werden für die Reiter benötigt-->
        <script src="javascript/jquery-1.7.1.min.js" type="text/javascript"></script> 
        <script src="javascript/jquery.hashchange.min.js" type="text/javascript"></script>
        <script src="javascript/jquery.easytabs.min.js" type="text/javascript"></script>

        <!--Standard-Style der Reiter -->
        <style>
            /* Example Styles for Demo */
            .etabs { margin: 0; padding: 0; }
            .tab { display: inline-block; zoom:1; *display:inline; background: #eee; border: solid 1px #999; border-bottom: none; -moz-border-radius: 4px 4px 0 0; -webkit-border-radius: 4px 4px 0 0; }
            .tab a { font-size: 14px; line-height: 2em; display: block; padding: 0 10px; outline: none; }
            .tab a:hover { text-decoration: underline; }
            .tab.active { background: #fff; padding-top: 6px; position: relative; top: 1px; border-color: #666; }
            .tab a.active { font-weight: bold; }
            .tab-container .panel-container { background: #fff; border: solid #666 1px; padding: 10px; -moz-border-radius: 0 4px 4px 4px; -webkit-border-radius: 0 4px 4px 4px; }
            .panel-container { margin-bottom: 10px; }
        </style>

        <!--Standard-Verhalten der Reiter-->
        <script type="text/javascript">
            $(document).ready(function() {
                $('#tab-container').easytabs();
            });
        </script>
    </head>
    <body>
        <div id="tab-container" class='tab-container'>
            <ul class='etabs'>
                <li class='tab'><a href="#eintrag_erstellen">Eintrag erstellen</a></li>
                <li class='tab'><a href="#eintrag_anzeigen">Eintraege anzeigen</a></li>
                <li class='tab'><a href="#eintrag_sortieren">Eintraege sortieren</a></li>
            </ul>

            <div class='panel-container'>

                <div id="eintrag_erstellen">
                    <form method="post" action="menu/eintrag/hinzufuegen.php">

                        <table>

                            <tr>
                                <td>Titel: </td>
                                <td><input type="textfield" id="titel" name="titel"></td>
                            </tr>

                            <tr>
                                <td>Kurzbeschreibung: </td>
                                <td><textarea rows="8" cols="50" id="kurzbeschreibung" name="kurzbeschreibung"></textarea></td>
                            </tr>

                            <tr>
                                <td>Datum: </td>
                                <td><input type="date" id="datum" name="datum"></td>
                            </tr>

                            <tr>
                                <td>Beschreibung: </td>
                                <td><textarea rows="16" cols="50" id="beschreibung" name="beschreibung"></textarea></td>
                            </tr>


                            <tr>
                                <td>To Do: </td>
                                <td><textarea rows="8" cols="50" id="naechstes_ziel" name="naechstes_ziel"></textarea></td>
                            </tr>

                            <tr>
                                <td>
                                    <input type="submit" value="Speichern" name="submit">

                                </td> 

                            </tr>

                        </table>

                    </form>

                </div>


                <div id="eintrag_anzeigen">
                    <?php
                    include "menu/eintrag/anzeigen.php";
                    ?>

                </div>

                <div id="eintrag_sortieren">

                    <form methdo="post" action="sortieren.php">
                        <fieldset>
                            <legend>Sortieren:</legend>
                            
                            <table>
                                
                                <tr>
                                    <td>Nummer </td>
                                    <td><input type="checkbox" type="submit"></td>
                                    
                                </tr>
                                
                                <tr>
                                    <td>Titel </td>
                                    <td><input type="checkbox"></td>
                                    
                                </tr>
                                
                                <tr>
                                    <td>Datum </td>
                                    <td><input type="checkbox"></td>
                                </tr>
                                
                            </table>
                        </fieldset>
                    </form>
                    
                    <br>
                    <br>

                    <?php
                    include "menu/eintrag/anzeigen.php";
                    ?>

                </div>



            </div>
        </div>

    </body>
</html>
