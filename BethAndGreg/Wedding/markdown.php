<?php include "../inc/doctype.php" ?>

<body class="markdown">
  
  <div class="page-wrap">
    
    <div class="grid">

      <section class="grid-primary">

        <article class="post">
          <h1>Markdown</h1>
          <p>Markdown converts plain text into complex HTML.  Certain characters are typed to denote headings, font style, etc. For example, a # that precedes text denotes a heading.  Wrapping text in asterisks makes the text italicized. Simple, right?</p>
          <p>iDo websites rely on Markdown to format your posts. So if you would like to emphasize a word or create a bulleted list, use the proper Markdown syntax.  Below are some examples to help you get started.</p> 
          <p>The learning curve is short and well worth it. Happy Markdowning! For more information, visit the <a href="http://daringfireball.net/projects/markdown/" title="Markdown" target="_blank">Markdown Home Page</a> or visit the <a href="http://old-wp.slekx.com/the-markdown-tutorial/">interactive Markdown tutorial</a>.</p>
        </article>
        <article>
          <h1>Headings</h1>
          <pre class="md" rel="Markdown For Headings">
# Heading 1
## Heading 2
### Heading 3
#### Heading 4</pre>
          <h1>Heading 1</h1>
          <h2>Heading 2</h2>
          <h3>Heading 3</h3>
          <h4>Heading 4</h4>
        </article>
        <article>
          <h1>Paragraphs</h1>
          <pre class="md" rel="Markdown For Paragraphs">
Simply write text on a line to get a paragraph.</pre>
          <p>Simply write text on a line to get a paragraph.</p>
          <pre class="md" rel="Markdown For Paragraphs">
For multiple paragraphs you need to separate your text with a return.

See this is now a second paragraph.</pre>
          <p>For multiple paragraphs you need to separate your text with a return.</p>
          <p>See this is now a second paragraph.</p>
          <hr>
          <p>For manual line breaks, end a line with two or more spaces.</p>
          <pre class="md" rel="Markdown For Manual Line Breaks">
How do I love thee? Let me count the ways.
I love thee to the depth and breadth and height</pre>
          <p>How do I love thee? Let me count the ways.<br>
             I love thee to the depth and breadth and height</p>        
        </article>        
        <article>
          <h1>Emphasis</h1>
          <pre class="md" rel="Markdown For Emphasis">
This sentence has an *italicized* word and a **bold** word.</pre>
          <p>This sentence has an <em>italicized</em> word and a <strong>bold</strong> word.</p>
        </article>
        <article> 
          <h1>Blockquote</h1>         
          <pre rel="Markdown For Blockquote">
> Here is a blockquote.</pre>
          <blockquote>
            Here is a blockquote.
          </blockquote>
        </article>
        <article> 
          <h1>Lists</h1> 
          <pre class="md" rel="Markdown For Unordered (bulleted) lists">
* Carat
* Color
* Clarity
* Cut</pre>
          <ul>
            <li>Carat</li>
            <li>Color</li>
            <li>Clarity</li>
            <li>Cut</li>
          </ul>
          <pre class="md" rel="Markdown For Ordered (numbered) lists">
1. Something Old
2. Something New
3. Something Borrowed
4. Something Blue</pre>
          <ol>
            <li>Something Old</li>
            <li>Something New</li>
            <li>Something Borrowed</li>
            <li>Something Blue</li>
          </ol>
        </article>
        <article> 
          <h1>Horizontal Rule</h1>           
          <pre class="md" rel="Markdown For Horizontal Rule">
---</pre>
          <hr>
        </article>
        <article> 
          <h1>Links</h1> 
          <pre class="md" rel="Markdown For Links">
Visit [iDoHQ](http://www.idohq.com) if you are newly engaged!</pre>
          <p>Visit <a href="http://www.idohq.com">iDoHQ</a> if you are newly engaged!</p>
          <pre class="md" rel="Markdown For Links With Titles">
[Elm Software](http://www.elmsoftware.com "We love ice swans!") is located in Pennsylvania.</pre>
          <p><a href="http://www.elmsoftware.com" title="We love ice swans!">Elm Software</a> is located in Pennsylvania.</p>
        </article>

        <article class="post">
          <h1>Element Test</h1>
          <ol>
            <li><a href="\">Hyatt</a></li>
            <li><a href="\">Marriott</a></li>
            <ul>
              <li><a href="\">Zeke</a></li>
              <li><a href="\">Marriott</a></li>
              <li><a href="\">Hilton</a></li>
            </ul>
            <li><a href="\">Hilton</a></li>
          </ol>
          <ul>
            <li><a href="\">Hyatt</a></li>
            <li><a href="\">Marriott</a></li>
            <ol>
              <li><a href="\">Zeke</a></li>
              <li><a href="\">Marriott</a></li>
              <li><a href="\">Hilton</a></li>
            </ol>
            <li><a href="\">Hilton</a></li>
          </ul>
          <table>
            <thead>
              <tr>
                <th>Name</th>
                <th>Table #</th>
                <th>Meal</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>John Doe</td>
                <td>1</td>
                <td>Beef</td>
              </tr>
              <tr>
                <td>Sally Jones</td>
                <td>1</td>
                <td>Fish</td>
              </tr>
              <tr>
                <td>Peter Pepper</td>
                <td>20</td>
                <td>Veggie</td>
              </tr>
            </tbody>
          </table>
          <pre>
Testing a &lt;pre&gt; tag</pre>               
        </article>
        
      </section>

    </div><!-- END div.grid -->

  </div><!-- END div.page-wrap -->

<?php include "../inc/footer.php" ?>