<form action="/view-model/submit.php" method="post" enctype="multipart/form-data" class="box">
  <input type="hidden" name="returnURL" value="/thank-you">
  
  <div class="field">
    <label for="firstName" class="label">First Name</label>
    <div class="control">
      <input class="input" type="text" id="firstName" name="firstName">
    </div>
  </div>
  <div class="field">
    <label for="lastName" class="label">First Name</label>
    <div class="control">
      <input class="input" type="text" id="lastName" name="lastName">
    </div>
  </div>
  <div class="field">
    <label for="emailAddress" class="label">First Name</label>
    <div class="control">
      <input class="input" type="text" id="emailAddress" name="emailAddress">
    </div>
  </div>

  <div class="field">
    <div class="file has-name">
      <label class="file-label">
        <input id="file" class="file-input" type="file" name="contactFile">
        <span class="file-cta">
          <span class="file-icon">
            <i class="fas fa-upload"></i>
          </span>
          <span class="file-label">Choose a file…</span>
        </span>
        <span id="filename" class="file-name"></span>
      </label>
    </div>
  </div>

  <div class="field">
    <div class="control">
      <button class="button is-primary">Submit</button>
    </div>
  </div>

</form>

<script>
  var file = document.getElementById("file")
  file.onchange = function(){
    if(file.files.length > 0) {
      document.getElementById('filename').innerHTML = file.files[0].name
    }
  }
</script>
