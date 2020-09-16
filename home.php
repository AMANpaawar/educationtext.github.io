
    <?php
        require_once "header.php";
    ?>   
  <div class="container-fluid px-0">
    <div class="content-image">
        <img class="p-0 m-0" src="conntenimg.jpg">
      <div class="text-block col-sm-12 p-0 m-0">
        <div class="content-btn col-lg-6 col-lg-7 mx-auto p-0">
          <div class="heading col-sm-12 mb-5">
              <h1>Education is about learning skills and knowledge.</h1>
          </div>
          <div class="btn-sec col-sm-7 col-md-9 d-flex mx-auto">
            <div class="btn-submit col-sm-6">
              <input type="button" name="submit" value="SIGN UP" id="myBtn" class="btn col-sm-12">
            </div>
            <div class="btn-login col-sm-6">
              <input type="button" name="submit" value="LOG IN" onclick="location.href='login.php';" class="btn col-sm-12">
            </div>
          </div>  
        </div>
      </div>
    </div>
  </div>
  <div class="container-fluid px-0">
    <div class="col-sm-12 p-2 bg-color ">
        <div class="education text-center mx-3" id="1">
         <h2 class="text-center m-0 pb-3">Education</h2>
        </div> 
      <div class="row m-0 pb-2 pt-3">
       <div class="col-sm-6 education-text text-white">
          <div class="pt-2">
            <h3>Importance of Education</h3>
              <p><i class="fa fa-check-circle pr-3" aria-hidden="true"></i>Education is the most significant tool in eliminating poverty and unemployment. Moreover, it enhances the commercial scenario and benefits the country overall. So, the higher the level of education in a country, the better the chances of development are.</p>
              <p><i class="fa fa-check-circle pr-3" aria-hidden="true"></i>In addition, this education also benefits an individual in various ways. It helps a person take a better and informed decision with the use of their knowledge. This increases the success rate of a person in life.</p>
          </div>
        </div>
        <div class="col-sm-6 education-text text-white">
          <div class="pt-2">
            <h3>Doorway to Success</h3>
              <p><i class="fa fa-check-circle pr-3" aria-hidden="true"></i>Education also improves the economic growth of a country. Above all, it aids in building a better society for the citizens of a country. It helps to destroy the darkness of ignorance and bring light to the world.</p>
              <p><i class="fa fa-check-circle pr-3" aria-hidden="true"></i>It is a doorway to success which requires hard work, dedication and more after which can you open it successfully. All of these things together will make you successful in life.</p>
          </div>
        </div>
      </div>
    </div>
    <div class="content-sec col-sm-12 p-0">
      <div class="parallax">
        <div class="text-block-content col-sm-12 text-center">
          <div class="heading col-sm-9 col-md-8 mx-auto pt-4">
            <h2 class="text-center pt-5 m-0">“Education is the most powerful weapon which you can use to change the world” </h2>
          </div>
        </div>
      </div>
  </div>
  <div id="myModal" class="modal">
     <!-- Modal content -->
    <div class="modal-content col-sm-5 col-md-5 mx-auto">
      <div class="modal-body">
        <span class="close">&times;</span>
        <h4 class="text-success py-2">You are sure Create new Account </h4>
            <div class="col-md-12 row">
              <div class="btn-submit toggle-btn col-md-6">
                <input type="button" name="submit" value="YES" onclick="location.href='signup.php';" class="btn col-sm-12">
              </div>
              <div class="btn-login col-md-6">
                <input type="button" name="submit" value="NO" onclick="location.href='home.php';" class="btn col-sm-12">
              </div>
            </div>
      </div>
    </div>
  </div>

</div>

</div>  
<script>
// Get the modal
var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
  modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script> 
  <?php require_once "footer.php"; ?>