rem npm ls
rem npm outdated
call npm update

robocopy node_modules\bootstrap\dist assets\vendors\bootstrap /MIR
robocopy node_modules\jquery\dist assets\vendors\jquery /MIR
robocopy node_modules\popper.js\dist assets\vendors\popper.js /MIR
robocopy node_modules\@fortawesome\fontawesome-free assets\vendors\fontawesome-free /MIR
robocopy node_modules\cookieconsent\src assets\vendors\cookieconsent /MIR
robocopy node_modules\photoswipe\dist assets\vendors\photoswipe /MIR
robocopy node_modules\waypoints\lib assets\vendors\waypoints /MIR
