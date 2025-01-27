<h1 align="center">Introducing Datalayer</h1>

This composer package is intended to prepare a datalayer with basic set of values from your WordPress site to use it as you like.

For example, you would like to use the datalayer to send data of the page/post to GTM ads.

Features include:
 * Automated event targeting for:
     * Button Block clicks
     * Clickable image blocks
     * Query Block recirculation events
     * Post Terms block recirculation events
     * Navigation block clicks

<hr/>

## Parameters
| # |   Name   |  Description |
|----------|:-------------|:------|
| 1 | id         | ID of the post                  |
| 2 | title      | Title of the post               |
| 3 | url        | URL of the post                 |
| 4 | author     | Author of the post              |
| 5 | template   | Template Type of the post       |
| 6 | categories | Categories assigned to the post |
| 7 | tags       | Tags assigned to the post       |
| 8 | post_type  | Post Type of the post           |
| 9 | publish_date | Publish date of the post      |
| 10 | post_modified | Last modified date          |

<hr/>

##  Usage Instructions

There are multiple ways using which you can install datalayer to your project.

**Method 1:**

To install datalayer to any project, run the command:
```$ composer require 10up/datalayer```

**Method 2:**

1. Add `repositories` to your project's `composer.json` file
```
"repositories": [
    {
        "url": "https://github.com/10up/datalayer.git",
        "type": "git"
    }
],
```
2. Require 10up's datalayer project to your `composer.json` file
```
"require": {
    "10up/datalayer": "1.0.0"
}
```
3. Run the command: `composer install`

**Note:** If you still struggle with setting up the datalayer for your project, you can always [refer to the example files](https://github.com/10up/datalayer/tree/trunk/example) added to the repository.
