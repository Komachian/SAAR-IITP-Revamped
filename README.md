# SAAR-IITP-Revamped
Student Association for Alumni Relations (SAAR) is the cell for outreach and alumni relation of IIT Patna. This project is aimed to revamp the existing website with simple, elegant, and modern UI using HTML/SASS/JS framework.

# Before you start working
### Pre-requisites
* XAMPP v8.0.0+ (Download: https://www.apachefriends.org/download.html)
* VS Code with Live Sass Compiler plugin (Download: https://marketplace.visualstudio.com/items?itemName=ritwickdey.live-sass)
Add the following block in your VS Code's `settings.json` file.
```
    "liveSassCompile.settings.formats": [
        {
            "format": "compressed",
            "extensionName": ".min.css",
            "savePath": "~/../css/"
        }
    ]
 ```
* Basic knowledge of PHP, HTML, Sass, jQuery (depending on your work)
* Some experience with CSS (depending on your work)

 
#### NOTE: PHP and HTML share the same syntax so knowing either will be fine. Also, SASS is similar to CSS but has a cleaner syntax (no braces and semicolon). Also, the styling code is written in SASS but transcribed into CSS by a live SASS compiler (We recommend ritwickdey.live-sass vscode extension)

### How to run
1. Clone the `revamp2` branch of this repo in the `htdocs` folder in your XAMPP installation directory (generally, `C:\xampp` on Windows, `/opt/lampp` on Linux and `/Applications/XAMPP` on Mac OS X) using the command:
```
git clone -branch revamp2 --depth 1 https://github.com/StrixROX/SAAR-IITP-Revamped.git
```
2. Start the XAMPP Control Panel and start the `Apache` module
![start apache module](https://i.imgur.com/jLQc7o6.png)
3. Open your browser and go to `localhost/SAAR-IITP-Revamped`

Now you should be able to see the website.

#### NOTE: A good place to start would be the `/src/` folder in the repo or the `/index.php` file at the repo root.

#### NOTE: More comments will be added to the codebase soon.
