

<html>
        <head></head>
        <title>AnonChat</title>
        <body onload="Autoscroll();">
                <div>
                        <link type="text/css" rel="stylesheet" href="Stylesheet.css">
                        <img class="direction" src="/src/images/anon chat neon.png" width="320" height="200">
                        <div class="textContainer">
                                <?php      
                                
                                      
                                      function saveFile(){
                                        $IDstr = file_get_contents("src/messageHandler/id.txt");
                                        $ID = (int) $IDstr;
                                        $name = "Anon";
                                        $ID++;
                                        
                                        $data_file = fopen("message.txt", "a+");
                                        $IDsave = fopen("src/messageHandler/id.txt", "w+");
                                        $message = $_POST["message"];
                                        $text_to_write = $name . ": " . $message . "\n";
                                        fwrite($IDsave, $ID);
                                        fwrite($data_file, $text_to_write);
                                        fclose($data_file);
                                        header('Location: /anonchat.php');
                                        fwrite($IDsave, $ID);
                                       }
                                ?>
                                <?php
                                        $serverID = file_get_contents("src/messageHandler/id.txt");
                                ?>			
                                
                                <script> 
                                        var serverId = "<?php echo $serverID; ?>";
                                        var clientId=0;
                                        var x=true;
                                        while(x){
                                                if(serverId!=clientId){
                                                        clientId=serverId;
                                                        saveFile();
                                                }
                                        }
                                </script>



                                    
                                
                                      <iframe id="GFG" src = "/src/messageHandler/message.txt" width = "100%" height = "100%"style="border: 0px">
                                        Sorry your browser does not support inline frames. Use GNU IceCat.
                                      </iframe>

                                      

                        </div>

                      

                            <script>
                                Autoscroll();
                            </script>




                            <script>
                                function Autoscroll() { // this is good
                                var iframeID = document.getElementById("GFG");

                                var iframeCW = (iframeID.contentWindow || iframeID.contentDocument);
                                document.getElementById('GFG').onload = function(){ setTimeout("document.getElementById('GFG').contentWindow.scrollTo(0, 99999999)", 1) }
                                if (iframeCW.document) iframeCW = iframeCW.document;
                                iframeCW.body.style.color = "white";
                                }
                           </script>
                        <form method="POST" action="src/messageHandler/submit.php">

                                <input name="message" placeholder="Isn't avian so pog?!" type="text">
                                <button type="submit" value="submit">Send</button>
                        </form>
                      
                </div>
        </body>

</html>
