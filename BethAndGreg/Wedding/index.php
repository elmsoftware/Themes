<?php include "../inc/doctype.php" ?>

<body class="blog right-sidebar">

<?php include "../inc/header.php" ?>
  
  <div class="page-wrap">
    
    <div class="grid">

      <section class="grid-primary">

<?php # include "../inc/gallery.php" ?>

        <article class="post">
          <h1>Something New</h1>
          <p>You are currently previewing the <em>Something New</em> theme.</p>
          <p>All themes are designed to be web responsive, so that your site will look great on all devices: desktops, laptops, tablets and phones.</p>
          <blockquote>Resize your browser to see how it works.</blockquote>
        </article>

        <article class="post">
          <h1>iDo Website Overview</h1>
          <p>Every event in iDo comes with its own website. The website will be available at idohq.com<code>/{cloud-name}/{event-name}</code>. The cloud name and event name will be provided by you. Your website is 'public' by default, but you can make it private by requiring a password, its your choise. Each website has three pages, each with its own purpose:</p>
          <h3>Event Page</h3>
          <p>The page that you are currently reading is the event page. Use this page to communicate details about your event and to share your story. Think of it as a one-page blog. You will create your blog by writing and publishing posts.</p>
          <h3><a href="/BethAndGreg/Wedding/invitation.php">Invitation Page</a></h3>
          <p>Guests who receive the invitation email will be directed to this page to view your online invitation.</p>
          <h3><a href="/BethAndGreg/Wedding/rsvp.php">RSVP Page</a></h3>
          <p>This is where guests who view the online invitation may RSVP to your event, indicate their menu selection and add a special note for you.</p>

        </article>
        
        <article>
          <h1>Types of Posts</h1>
          <p>Event pages may contain manythree different types of posts. Add various types of posts when creating your Event page to make your page come to life.</p>
          <h3>Text</h3>
          <p>The most common post type. Eventhough the name is 'Text', it can do way more. Insert text, lists, images, a map, videos, tweets, slideshows...you name it. This type of post is built using Markdown.</p>
          <blockquote>iDo posts are created via <a href="/BethAndGreg/Wedding/markdown.php">Markdown</a>.</blockquote>                  
          <h3>Quote</h3>
          <p>Perfect for an inspirational message or passage. It is styled with a bold, colorful background to stand out.</p>
          <h3>Image</h3>
          <p>Share a individual image and provide a descriptive caption.</p>
        </article>

        <article class="quote">
          <p>This is a 'Quote' post. It will appear just like this ... Big, Bold and Beautiful. ☻</p>
          <cite>John Lueders</cite>
        </article>
        
        <article>
          <h1>Embed stuff</h1>
          <p>You can embed anything inside your posts.</p>
          <a id="embed-image" href="#">Image</a> · 
          <a id="embed-map" href="#">Map</a> · 
          <a id="embed-video" href="#">Video</a> · 
          <a id="embed-tweet" href="#">Tweet</a>
          <hr>
          <div id="embed-here"></div>
        </article>

      </section>
      
      <aside class="grid-secondary">

        <article class="quote">
          <p>Love is patient, love is kind.</p>
          <cite>1 Corinthians 13:4</cite>
        </article>
        
        <article class="post">
          <h1>Sidebar</h1>
          <p>Place content in the sidebar that is short and sweet, yet important.</p>  
          <p><em>See examples below.</em></p>
          <hr>
          <p>In iDo, you can specify the location of your sidebar...right or left.</p>
          <p><a id="toggle-sidebar" href="#">Move Sidebar</a></p>
        </article>
        
        <article class="post">
          <h1>Registries</h1>
          <p>The following gift registries are styled as an "unordered list" with embedded links:</p>
          <ul>
            <li><a href="#">The Hope Chest</a></li>
            <li><a href="#">Shower Me</a></li>
            <li><a href="#">GravyBoats 'R Us</a></li>
          </ul>
        </article>
        
        <article class="post">
          <h1>Hotels</h1>
          <p>The following hotels are styled as an "ordered list" with embedded links:</p>
          <ol>
            <li><a href="#">The Palace</a></li>
            <li><a href="#">The Manor</a></li>
            <li><a href="#">The Castle</a></li>
          </ol>
          <p><em>Note: You may also style the text to be italicized.</em></p>
        </article>
        <article class="image">
          <a href="/images/lobster.jpg" >
            <figure>
              <img src="/images/lobster.jpg" />
              <figcaption>This is an "Image" Post</figcaption>
            </figure>
          </a>
        </article>
      </aside>

    </div><?php # .grid ?>

  </div><?php # .page-wrap ?>

  <div id='heart-info' class='heart-info'>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorem beatae voluptatibus sed ullam cupiditate totam doloremque excepturi ipsum debitis doloribus iure laboriosam ducimus eveniet ipsam non earum adipisci. Ipsam quibusdam. </p>
    <p>#2</p>
    <p>#3</p>
  </div>

<?php include "../inc/footer.php" ?>