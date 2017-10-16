<footer>
  <div class="row">
    <div class="col-md-3 copyright">
      2016 &copy; ScripTehInfo
    </div>
    <div class="col-md-3 social navbar-right">
      <a href=""> <img src="images/rss.png" alt=""> </a>
      <a href=""> <img src="images/linkedin.png" alt=""> </a>
      <a href=""> <img src="images/facebook.png" alt=""> </a>
      <a href=""> <img src="images/youtube.png" alt=""> </a>
      <a href=""> <img src="images/twitter.png" alt=""> </a>
    </div>
  </div>
</footer>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="PgwSlideshow/pgwslideshow.min.js"></script>
<script>
  $(document).ready(
    function() {
      $('.pgwSlideshow').pgwSlideshow({
        autoSlide: true,
        displayList: false,
      });
    });
  </script>
  <script>
    $(document).ready(
      function (){
        $('#subject_id').change(
            function(){
              var subj_id = $(this).val();
              $.ajax(
                {
                url: "js/ajax.php",
                data: {
                  'subject_id': subj_id
                },
                type: "GET",
                success: 
                  function(result){
                    console.log(result);
                    $('#page_position').html(result);
                  }
                }
              );
          });
      });

  </script>
</body>

</html>
<?php 
// 4 step - close connection
$connection = null;
?>