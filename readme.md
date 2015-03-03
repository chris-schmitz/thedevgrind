# The Dev Grind

TheDevGrind is my personal blog. 

TheDevGrind is a [Laravel5](http://laravel.com/) project. It also uses the packages:

- [Illuminate/HTML](https://github.com/illuminate/html/tree/master)
- [PHP Markdown]( https://michelf.ca/projects/php-markdown/ )

The Bootstrap theme is [Flatly](http://bootswatch.com/flatly/)

Really, I have the project tailored for what I need, but the project is a general Page and Post too.

Important
---------
**This is an in progress project**. 
Not everything's finished and web interfaces don't exist for all of the tools.

Users
-----
TheDevGrind uses the standard Laravel5 user and authentication setup. The only addition so far is the inclusion of an admin flag on the user table.

At the moment there is no web interface way of marking a user as an administrator, but I'll add it in at some point. To manually mark a user as an adiministrator set the boolean flag for `admin` in the `users` table to true for the given user. 

Pages
-----
Pages can be added/edited/deleted by authenticated users. Only admin users can see some of the controls (edit/delete). I'll eventually unhide the controls. This was a piece I added that was unneeded. 

Pages that are marked as `showInNavbar` will appear as links in the navbar in creation order. The `order` column allows you to change the order in which the pages will show in the navbar.


Posts
-----
Posts work much the same ay that pages do, but they do not display in the navbar. An index of posts can be found under the `Blog` section of the navbar.

The most recent 6 posts also show by default on the welcome page. 

---

# Progress

If you would like to see how I'm organizing the work on this project you can visit my Trello board for [TheDevGrind](https://trello.com/b/WBkK19Ji/the-dev-grind).
