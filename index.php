<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootswatch/4.4.1/pulse/bootstrap.min.css">
  <title>Kseniia PHP-WebSite</title>
</head>
<body style="background-color: pink">
  <?php require 'blocks/header.php'; ?>
      <div class="container mt-5">
        <h1 style="color: white"class="mb-5"><b>The most famous Goats</b></h3>
          <div class="d-flex flex-wrap">
           <?php
            for ($i=0; $i < 6 ; $i++):
           ?>
           <div class="card mb-4 box-shadow">
             <div class="card-header">
               <h4 class="my-0 font-weight-normal"><strong>
                 <?php
                   switch ($i) {
                      case 0:
                          echo "Benjamin";
                          break;
                      case 1:
                          echo "The cool goat";
                          break;
                      case 2:
                          echo "Baphomet";
                          break;
                      case 3:
                          echo "Cyborg";
                          break;
                      case 4:
                          echo "Spirit";
                          break;
                      case 5:
                          echo "Baby";
                          break;
                      default:
                          echo "I'am not a goat!";
                    };?>
               </strong></h4>
             </div>
             <div class="card-body">
               <img src="img/<?php echo ($i + 1) ?>.jpg" class="img-thumbnail">
               <ul class="list-unstyled mt-3 mb-4">
                 <li><strong>Hello, Human, I am a Goat number <?=$i + 1?>.</strong></li>
               </ul>
               <button type="button" class="btn btn-lg btn-block btn-outline-primary">Description</button>
               <ul>
                 <li>
                   <?php
                     switch ($i) {
                        case 0:
                            echo "My  favorite food is grass..and...plants!";
                            break;
                        case 1:
                            echo "I am the COOLEST GOAT IN THE WHOLE WORLD!";
                            break;
                        case 2:
                            echo "Baphomet is a deity that the Knights Templar were accused of worshipping
                            and that subsequently was incorporated into occult and mystical traditions";
                            break;
                        case 3:
                            echo "I am ukranian Cyber-Goat.<br>I was founded in 2015.<br>I am friendly =)";
                            break;
                        case 4:
                            echo "I found some infromation about my wool:
                            Although mountain goats have never been domesticated and commercialized for their wool, pre-Columbian
                            indigenous peoples of the Pacific Northwest Coast did incorporate their wool into their weaving by collecting
                            spring moulted wool left by wild goats.";
                            break;
                        case 5:
                            echo "Im a beby, im six mons old!..";
                            break;
                        default:
                            echo "I'am not a goat!";
                    }; ?>
                   </li>
                </ul>
             </div>
           </div>
         <?php  endfor; ?>
         </div>
         </div>
        <?php require 'blocks/footer.php'; ?>
</body>
</html>
