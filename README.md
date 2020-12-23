# gdo6-jquery-mobile
GDO6 module bindings for jQuery Mobile assets and theme.
This module uses the source distribution from jQueryMobile.
This file describes the process.
Building jQuery Mobile from source takes quite a while... but i prefer using yarn sources over making a bindist.
To have more icons i added JQueryMobile Icon Pack, but those icons look bad, misplaced, not centered correctly.
It is recommended to use FontAwesome or UTF8 icons.


## Installation

Read https://github.com/gizmore/gdo6 for an installation guide of the gdo6 system.
Clone the module as usual in the GDO folder.

    cd gdo6/GDO/
    git clone --recursive https://github.com/gizmore/gdo6-jquery-mobile JQueryMobile
    
Build JQueryMobile with grunt.

     cd gdo6/
     ./gdo6_yarn.sh # install jquery components via yarn
     cd GDO/JQueryMobile/bower_components/jquery-mobile
     npm install
     grunt # build jquery-mobile from src

     
### Features

- Autocompletion
- JQueryMobile Icon Pack


#### Enjoy!
gizmore
