# local-settings-php

Related to blog post: http://realityloop.com/blog/2015/08/26/drupal-development-tips-common-problems

This is more of a personal touch. In my local development I’ve tried to create a local.settings.php that is relatively universal to all of my projects.

There are modules that always cause issues with local development such as securepages, or just need config, such as the before described stage_file_proxy. The local.settings.php is a file that is added to your docroot to provide these settings and make it faster for you to develop.

    # Local site configuration settings.
    if (is_readable('/path/to/site/sites/default/local.settings.php')) {
      include_once('/path/to/site/sites/default/local.settings.php');
    }

And on your local when you’re setting up your site, you just add your optimal local settings php.

This is my current version of the local.settings.php. Check out my latest one at GitHub and feel free to contribute to it, or add your comments below. The idea would be to include as much as I can in a file, as extra config doesn't really matter!
This will speed up your development by making sure that the settings you want are there, and most importantly done without clicking around the site!
