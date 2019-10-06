rem npm ls
rem npm outdated
call npm update

robocopy node_modules\bootstrap\dist kirby\assets\vendors\bootstrap /MIR
robocopy node_modules\jquery\dist kirby\assets\vendors\jquery /MIR
robocopy node_modules\popper.js\dist kirby\assets\vendors\popper.js /MIR
robocopy node_modules\@fortawesome\fontawesome-free kirby\assets\vendors\fontawesome-free /MIR
robocopy node_modules\cookieconsent\src kirby\assets\vendors\cookieconsent /MIR
robocopy node_modules\photoswipe\dist kirby\assets\vendors\photoswipe /MIR
