Navigation Bar and Page Content using Dictionaries
---------------------------------------------------
I would like you to build a three page website for this assignment. The catch is that there should only be
a single PHP file named index.php. This should be a dynamic page so it should be able to load three
different pages worth of content based on data in the URL.
I would like the page to be structured so that all there is a navigation bar that is generated by running a
loop off a dictionary.
The structure of this dictionary should be that the keys are the human readable words for the links and
the actual data that will be passed to the URL in the href link location as the value. For example
$nav['About'] = 'about';
The idea is that when you visit
index.php?content=about
it will load the appropriate content.
You should have a loop on the page that creates the main navigation bar for your site by looping over
this structure and outputting the proper link for each of the three pages:
<a href="index.php?content=about">About</a>
When you can jump between the three versions of the page using the content data in the URL, you
should create the page content.
I would like all the content stored in a multi-dimensional or nested dictionary. So that on each page,
every chunk of content (header, footer, main content, images, aside tags) is stored as part of this
structure. That is to say, there should be no content that is within the HTML of the page directly (it must
all be stored in this single large content structure. I advise you to make each page an index or key in the
array to make it easier to get to all the data.
To be clear, this is not necessarily the best way to build a site like this (though it's actually not bad) but it
is a good chance to work on storing content in a centralized location and then using your logical code to
output the content to a page that is built at run-time.
