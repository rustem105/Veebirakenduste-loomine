<?php
include_once('header.php');
include_once('contactHeader.php');
?>

<div class="container">
	<div class="row">
      <div class="col-md-9 col-md-offset-1">
        <div class="well well-sm">
          <form class="form-horizontal" action="sendContact.php" method="post">
          <fieldset>
            <legend class="text-center">Свяжитесь с нами!</legend>
    
            <!-- Name input-->
            <div class="form-group">
              <label class="col-md-3 control-label" for="name">Ваше Имя</label>
              <div class="col-md-9">
                <input id="name" name="name" type="text" placeholder="Your name" class="form-control">
              </div>
            </div>
    
            <!-- Email input-->
            <div class="form-group">
              <label class="col-md-3 control-label" for="email">Ваш адрес</label>
              <div class="col-md-9">
                <input id="address" name="address" type="text" placeholder="Your address" class="form-control">
              </div>
            </div>

            <div class="form-group">
              <label class="col-md-3 control-label" for="email">Ваш телефон</label>
              <div class="col-md-9">
                <input id="phone" name="phone" type="text" placeholder="Your phone" class="form-control">
              </div>
            </div>

            <div class="form-group">
              <label class="col-md-3 control-label" for="email">Ваш э-майл</label>
              <div class="col-md-9">
                <input id="email" name="email" type="text" placeholder="Your email" class="form-control">
              </div>
            </div>
    
            <!-- Message body -->
            <label for="sushi-select">Choose a pet:</label>

            <select name="sushi" id="sushi-select">
                <option value="">--Please choose sushi--</option>
                <option value="dog">Dog</option>
                <option value="cat">Cat</option>
                <option value="hamster">Hamster</option>
                <option value="parrot">Parrot</option>
                <option value="spider">Spider</option>
                <option value="goldfish">Goldfish</option>
            </select>
    
            <!-- Form actions -->
            <div class="form-group">
              <div class="col-md-12 text-right">
                <button type="submit" class="btn btn-primary btn-lg" name="send">Send Message</button>
              </div>
            </div>
          </fieldset>
          </form>
        </div>
      </div>
	</div>
</div>

<?php
include_once('footer.php');
?>