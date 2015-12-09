<!---start-footer---->
<div class="footer">
    <div class="wrap">
        <div class="footer-grid">
            <h3>Location</h3>
            <div class="address">
                <script type="text/javascript" src="//maps.google.com/maps/api/js?sensor=false"></script>
            
              <iframe width="275" height="250" frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/place?q=place_id:ChIJX-LIOq2-oEwREplYiRge_lE&key=AIzaSyDH0sov3fTz92AymfFTn3Dlpc6hhC9BKwo" allowfullscreen></iframe>
            </div>
        </div>
        <div class="footer-grid twitts">
            <h3>Twitter</h3>
            <a class="twitter-timeline" href="https://twitter.com/StylesbyJudieM" data-widget-id="673879873035870208">Tweets by @StylesbyJudieM</a>
            <script>!function(d, s, id){var js, fjs = d.getElementsByTagName(s)[0], p = /^http:/.test(d.location)?'http':'https'; if (!d.getElementById(id)){js = d.createElement(s); js.id = id; js.src = p + "://platform.twitter.com/widgets.js"; fjs.parentNode.insertBefore(js, fjs); }}(document, "script", "twitter-wjs");</script>
        </div>
        <div class="footer-grid center-grid">
            <?php
            
            echo "<h3>My Hours</h3>";
            $sql = 'SELECT COUNT(*) FROM Hours';
            $stmt = $dbc->query($sql);
            $cnt = $stmt->fetchColumn();

            if ($cnt > 0) {
                //build the sql query to return the records
                $q = "SELECT `id`, `day`, TIME_FORMAT(open, '%h:%i%p') as 'open', TIME_FORMAT(close, '%h:%i%p') as  'close' FROM `hours` order by 'id'";

                //execute the query 
                $stmt = $dbc->query($q);
                $category_list = $stmt->fetchAll(PDO::FETCH_ASSOC);
                //$category_list = mysqli_fetch_array($r,MYSQLI_ASSOC)
                //prepare the ul list
                $output = "<ul>";

                //loop the rows 
                foreach ($category_list as $row) {
                    $output .= "<li>" . $row['day'] . " - " . $row['open'] . " - " . $row['close'] . "</li>";
                }

                //finish the ul
                $output .= "</ul>";

                //Display final output
                echo $output;
            }
            ?>
        </div>		
        <div class="footer-grid">
            <h3>DID YOU KNOW?</h3>
            <p>I regularly attend Hair Styling conference's to keep up to date on current hairstyling trends!</p>
            <a href="about">Read More</a>
            <h3>Products</h3>
            <p>You can learn more about Wella Products <a href="http://www.wella.com/professional/en-US/home"><img src="images/wella.png" alt="Wella"/></a></p>
            
            
        </div>
        <div class="clear"> </div>
    </div>
</div>
<div class="copy-right">
    <p>Design by <a href="http://w3layouts.com/"> W3layouts</a></p>
</div>
<!---End-footer---->
</body>
</html>
