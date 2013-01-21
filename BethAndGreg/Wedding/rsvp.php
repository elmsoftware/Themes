<?php include "../inc/doctype.php" ?>

<body class="rsvp">

<?php include "../inc/header.php" ?>

  <div class="page-wrap">

    <div class="grid">

      <section class="grid-primary">

          <article>

            <h1>RSVP</h1>

            <p class="submitted">Previously submitted: <span>Monday, November 12, 2012 4:18 PM</span></p>

            <form id="rsvp-form" method="post">
              
              <input type="hidden" name="utc-offset" id="utc-offset" />

              <div class="block contact">
                <h2>Andrew Anderson</h2>
                <div class="fields">
                  <div class="field">
                    <label for="attending-1">Attending?</label>
                    <select class="dropdown attending" name="attending-1" id="attending-1">
                      <option value="0">Please select</option>
                      <option value="Y">Yes</option>
                      <option value="N">No</option>
                    </select>
                  </div>
                  <div class="field">
                    <label for="meal-1">Meal</label>
                    <select class="dropdown meal" name="meal-1" id="meal-1" disabled>
                      <option value="0">Please select</option>
                      <option value="1">Beef Wellington</option>
                      <option value="2">Chicken Marsala</option>
                      <option value="4">Kids</option>
                      <option value="3">Veggie</option>
                    </select>
                  </div>
                </div>
              </div>

              <div class="block contact">
                <h2>
                  <a class="guest-click-to-edit" title="Click to enter name">
                    Guest <span>click to enter name</span>
                  </a>
                  <span id="guest-name" class="guest-name">

                    <label for="guest-first-name" class="screen-reader">First Name</label>
                    <input name="guest-first-name" class="guest-first-name" type="text" placeholder="First Name" value="" maxlength="50">
                      
                    <label for="guest-last-name" class="screen-reader">Last Name</label>
                    <input name="guest-last-name" class="guest-last-name" type="text" placeholder="Last Name" value="" maxlength="50">
              
                  </span>
                </h2>

                <div class="fields">
                  <div class="field">
                    <label for="attending-8">Attending?</label>
                    <select class="dropdown attending" name="attending-8" id="attending-8">
                      <option value="0">Please select</option>
                      <option value="Y">Yes</option>
                      <option value="N">No</option>
                    </select>
                  </div>
                  <div class="field">
                    <label for="meal-8">Meal</label>
                    <select class="dropdown meal" name="meal-8" id="meal-8" disabled>
                      <option value="0">Please select</option>
                      <option value="1">Beef Wellington</option>
                      <option value="2">Chicken Marsala</option>
                      <option value="4">Kids</option>
                      <option value="3">Veggie</option>
                    </select>
                  </div>
                </div>
              </div>

              <div class="block note">
                <label class="note-label" for="note">Note</label>
                <textarea class="note-textarea" id="note" name="note" maxlength="255">Congratulations on your engagement!</textarea>                
                <div class="note-progressbar"></div>
              </div>

              <p class="required-fields">
                'Attending' and 'Meal' fields are required.
              </p>

              <div class="button-wrap">
                <input type="submit" id="submit-rsvp" class="button" name="submit-rsvp" value="Submit RSVP" />
              </div>
              
            </form>
            
          </article>

      </section>
    
    </div><!--.grid-->

  </div><!--.page-wrap-->

<?php include "../inc/footer.php" ?>