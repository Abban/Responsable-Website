<?php include_once('header.php'); ?>

	<div id="content">
			
		<section id="page">

			<h2>Setting it up</h2>

			<p>Everything comes more or less preconfigured for usage. There are a couple of things you'll want to do before getting started though, set up a less compiler and add the htaccess for allowing the IE7 polyfill to work on your server.</p>

			<h3>Codekit</h3>

			<p>We can't recommend <a href="http://incident57.com/codekit/">Codekit</a> enough, it hugely changed our workflow and to be honest Responsable works best with it.</p>

			<p><strong>Note:</strong> When importing your project into Codekit it will set both the style.less and the style.scss to compile to style.css. This could lead to styles being overwritten so you need to uncheck the compile directly checkbox on either the Less or the SCSS sheet depending on which one you're using.</p>

			<h3>Less</h3>

			<p>The grid is built and runs on <a href="http://lesscss.org">Less</a>. Less is a dynamic stylesheet compiler that makes it faster and easier to style your pages. In order to use it you need set it to compile using either the <a href="http://incident57.com/less/">Less App</a> or Codekit. You can also set Less to compile on the fly but don't do that. Just don't.</p>

			<h3>SCSS</h3>

			<p>The core files are also provided in <a href="http://sass-lang.com/">SCSS</a> for those that prefer it to Less. Compiling works the same as w/ Less, though you also have the option of compiling locally from the command line or server-side for anyone brave enough. Again, Codekit is your best friend for compiling locally with css browser injection.</p>

			<h3>Polyfill</h3>

			<p>The reason this grid works so simply is down to a CSS rule called box-sizing. This changes the box model so padding doesn't affect the declared width of an element. You can read more about it <a href="http://paulirish.com/2012/box-sizing-border-box-ftw/">here</a>. IE6 and 7 don't support it however, so if you want to support them you need to add in the polyfill. To do so simple uncomment the following from line 33 of grid.less and line 17 of normalize-baseline.less:</p>

			<pre>*behavior: url(/assets/js/libs/boxsizing.htc)</pre>

			<p>Remember to keep the * at the start as thats a CSS hack to only apply the rule to IE6 and 7. Next you might need to add the following to your .htaccess:</p>

			<pre>AddType text/x-component .htc</pre>

			<p>This updates the content type on your server configuration.</p>

			<h2>The Basics</h2>

			<p>Responsable is pretty simple to use. Here is some sample html and css:</p>

			<strong>HTML</strong>

<pre>
&lt;body&gt;
   &lt;section&gt;This is your section&lt;/section&gt;
   &lt;aside&gt;This is your sidebar&lt;/aside&gt;
&lt;/body&gt;
</pre>
			
			<strong>CSS</strong>

<pre>
article{
   .column(8);
}
aside{
   .column(4);
}
</pre>

			<p>You can see the columns are set right in the CSS. The actual with is being set as a percentage so the article will be 8/12ths of the container and the aside will be 4/12ths.</p>

			<h2>The Not So Basics</h2>

			<p>Responsable has a few more features you might want to check out.</p>

			<h3>Custom Gutters</h3>

			<p>If you want to change the gutter on a column, you can pass through a custom value as the second parameter when you call the <code>.column()</code> function. For example if you have your gutter set to 20 pixels and you hava a content box that need to be 40 you declare the column like this:</p>

<pre>
article{
    .column(8, 40px);
}
</pre>

			<p>Because we're using the border box model this won't affect the width of the column.</p>

			<h3>Nesting Columns</h3>

			<p>You can pass values through for nesting columns as the third parameter. Because the column widths are set as percentages you need to pass the number of columns in the parent element so that the width of the child elements can be properly calculated. Here's sample html and css:</p>

			<strong>HTML</strong>
<pre>
&lt;body&gt;
   &lt;section&gt;This is your section
       &lt;div&gt;This is a subcolumn&lt;/div&gt;
       &lt;div&gt;This is a subcolumn&lt;/div&gt;
   &lt;/section&gt;
   &lt;aside&gt;This is your sidebar&lt;/aside&gt;
&lt;/body&gt;
</pre>

			<strong>CSS</strong>

<pre>
article{
   .column(8, 0);
   div{
       .column(4, @gutter_width, 8);
    }
}
aside{
   .column(4);
}
</pre>

			<p>One thing you need to note is that you have to pass the gutter width through as the second parameter for the child elements. To keep the same gutter as the rest of the grid in this example we passed through the <code>@gutter_width</code> variable. We also set the gutter to 0 on he parent element which ensures the children adhere to the overall grid but that isn't required.</p>

			<h3>Push &amp; Pull</h3>

			<p>Pushing and pulling simply adds the amount of columns as the left or right padding of the element. You can push and pull like this:</p>

<pre>
article{
    .column(8);
    .push(1);
    .pull(1);
}
aside{
    .column(4);
}
</pre>

			<p>As the padding on the element doesn't affect the width with our box model you still declare it as a <code>.column(8);</code> the push and pull declarations then add the padding to each side of the element.</p>

			<h3>Responsive Images</h3>

			<figure class="responsive" data-media="http://placehold.it/300x<?php echo 24*2; ?>" data-media420="http://placehold.it/420x<?php echo 24*4; ?>" data-media670="http://placehold.it/672x<?php echo 24*6; ?>" title="A Half Brained Idea">
				<noscript>
					<img src="http://placehold.it/672x<?php echo 24*6; ?>" alt="">
				</noscript>
				<figcaption>Check out the responsive images!</figcaption>
			</figure>

			<script type="text/javascript">
				$(function(){
					$('.responsive').picture({ container : '#page'});
				});
			</script>

			<p>The framework also integrates jQuery Picture to allow you to add responsivity to your images. You can read about jQuery Picture <a href="http://jquerypicture.com">here</a>.</p>

			<h2>Limitations</h2>

			<p>Because the framework uses set gutter width, this means that smaller elements have a minimum width. For example, if you have 12 single columns with a 24px gutter the grid will break on smaller screens as the 12 columns will shrink down until they get to 48px then stop. To fix this you need to change the number of columns you're using in your media queries. Heres a small example that changes them from a single column to 3 columns on smaller screens:</p>

<pre>
div{
    .column(1);
}
@media screen and (max-width: 750px){
    div{
        .column(3);
    }
}
</pre>
				
		</section>

	</div>

<?php include_once('footer.php'); ?>