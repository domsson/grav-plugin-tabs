# v0.3.2
## 2025-11-27

1. [](#improved)
    * Remove unused and unnecessary code from tabs.php
2. [](#bugfix)
    * Put `cfg.attribute` to use in the HTML; was hardcoded to `data-tabs` before

# v0.3.1
## 2025-11-27

1. [](#improved)
    * Retroactively remove v0.2.0 and v0.2.1 into v0.3.0 to hopefully fix issues with GPM
    * Remove `composer.json` since we're not using composer for this plugin

# v0.3.0
## 2025-11-17

1. [](#new)
    * Built-in CSS now included (from 0.2.0)
    * Updated to newest `tabs.js` version  (from 0.2.0)
    * New config options, `nav_class` and `btn_class`  (from 0.2.0)
2. [](#improved)
    * Built-in CSS now enabled by default  (from 0.2.0)
    * Hardcoded string in the blueprint are now coming from the language file (from 0.2.1)    
3. [](#bugfix)
    * Fixed crash caused by `autoload()` method trying to scan `vendor` directory when it doesn't exist

# v0.1.0
## 2020-04-07

1. [](#new)
    * Initial release
