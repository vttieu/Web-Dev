<?php include ('includes/header.php');?>

<!-- START LEFT COL -->
<section>
 <h2 class="pageID">Flexbox Research</h2>
        <p>CSS flexbox is a property that allows you to manipulate the placement of containers. It is usually used to make use of the full width of the device the user is on to display            items with similar level of content next to each other. </br></br>

            There are two main axis: row and column. You give elements you want to place next to one another the property</br></br>
display: flex;	(to start)</br></br>
On a regular symmetrical webpage, that is usually all you need. Plus the justify-content property which allows you to space each flex element out evenly or centered. You can change the direction with the flex-direction property followed by one of four options: row, row-reverse, column, column-reverse. </br></br>

You can make your flex content responsive with the flex-wrap property which automatically moves elements to the next available space it could fit. You can also change the size of the container with shorthands flex: followed by 0 1 auto; for the default flexbox.</br></br>


According to the W3 school, flexbox property is supported in all modern browser. Although older browser versions may have bugs related to flexbox. Some useful fallback technique are: 
floating your containers: you can do this by setting the float property first then flex. This will ignore any float property if flex is working properly
Display: inline-block; is another option. Flexing the inline-block elements will remove any white space between them. And if the flexbox property fails, it is still treated as inline-block and white space will be added back.</br></br>
display: table; </br></br>
which has many useful properties similar to flexbox you can use as fallbacks like changing the height and width. This property works as far back as internet explorer 8</br></br>

Other options can be polyfils which are small javascript code that convert newer functions of the newer versions of browsers to support the older versions of browsers. I think this is worth getting into but the fallback options are easier to implement on your own.</p>

</section>
<!-- END LEFT COL -->

<!-- START RIGHT COL -->
<aside>
 <h3>Citations</h3>
    <p>“Basic Concepts of Flexbox.” MDN Web Docs, 23 Mar. 2019, developer.mozilla.org/en-US/docs/Web/CSS/CSS_Flexible_Box_Layout/Basic_Concepts_of_Flexbox.</p>
    <p>“Backwards Compatibility of Flexbox.” MDN Web Docs, 18 Mar. 2019, developer.mozilla.org/en-US/docs/Web/CSS/CSS_Flexible_Box_Layout/Backwards_Compatibility_of_Flexbox.</p>
</aside>
<!-- END RIGHT COL -->
<!-- START Footer -->
<?php include ('includes/footer.php');?>