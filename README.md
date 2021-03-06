# Tabs Plugin

The **Tabs** Plugin is an extension for [Grav CMS](https://github.com/getgrav/grav). It adds partial template and blueprint files that enable the rendering of content in tabs by using [tabs.js](http:/github.com/domsson/tabs.js). For details on features, check over there.

Note that the Grav Team also provides tab functionality with their [Shortcode UI Plugin](https://github.com/getgrav/grav-plugin-shortcode-ui). Some pointers that can help you decide which one suits you better: 

- This plugin provides tabs - and nothing else
- This plugin does not use shortcodes, it reads tabs from the Page Frontmatter
- Tabs created with this plugin can retain their state via URL fragments
- Tabs created with this plugin degradge gracefully for users withut JS (haven't tested the shortcode version in this regard)

## Installation

Installing the Tabs plugin can be done in one of three ways: The GPM (Grav Package Manager) installation method lets you quickly install the plugin with a simple terminal command, the manual method lets you do so via a zip file, and the admin method lets you do so via the Admin Plugin.

### GPM Installation (Preferred)

To install the plugin via the [GPM](https://learn.getgrav.org/advanced/grav-gpm), through your system's terminal (also called the command line), navigate to the root of your Grav-installation, and enter:

    bin/gpm install tabs

This will install the Tabs plugin into your `/user/plugins`-directory within Grav. Its files can be found under `/your/site/grav/user/plugins/tabs`.

### Manual Installation

To install the plugin manually, download the zip-version of this repository and unzip it under `/your/site/grav/user/plugins`. Then rename the folder to `tabs`. You can find these files on [GitHub](https://github.com//grav-plugin-tabs) or via [GetGrav.org](https://getgrav.org/downloads/plugins#extras).

You should now have all the plugin files under

    /your/site/grav/user/plugins/tabs
	
### Admin Plugin

If you use the Admin Plugin, you can install the plugin directly by browsing the `Plugins`-menu and clicking on the `Add` button.

## Configuration

Before configuring this plugin, you should copy the `user/plugins/tabs/tabs.yaml` to `user/config/plugins/tabs.yaml` and only edit that copy.

Here is the default configuration and an explanation of available options:

```yaml
enabled: true
active: true

defer_js: true
built_in_css: true 
tabset_attribute: "data-tabs"
nav_element: "ul"
nav_class: "tab-nav"
tab_element: "div"
tab_class: "tab"
tab_class_active: "active"
tab_class_hidden: "hidden"
btn_class: "tab-button"
btn_class_active: "active"
```

- `defer_js`: Use the `defer` attribute to load `tabs.js` after the page has loaded
- `built_in_css`: Apply some basic CSS to the tabs (adds `tabs.css` to the page)
- `tabset_attribute`: HTML attribute to use for the tab sets
- `nav_element`: HTML element to use for the tab navigation
- `nav_class`: CSS class to add to the tab navigation
- `tab_element`: HTML element to use for tab elements
- `tab_class`: CSS class to add to each tab element
- `tab_class_active`: CSS class to add to the currently visible tab
- `tab_class_hidden`: CSS class to add to all currently hidden tabs
- `btn_class`: CSS class to add to all tab buttons
- `btn_class_active`: CSS class to add to the currently active tab button

If you use the Admin Plugin, a file with your configuration named `tabs.yaml` will be saved in the `user/config/plugins/`-folder once the configuration is saved in the Admin.

## Usage

First, define the tabs in the page headers. Example:

    tabs:
        -
            title: "Features"
            content: "The content field will be processed via **markdown**"
        -
            title: "Help"
            content: "For help, visit [the repository](https://github.com/domsson/grav-plugin-tabs)"

Second, use the provided partial template in your page template:

    {% include "/partials/tabs.html.twig" %}

Optionally, you can also use the provided partial blueprint. For example, in your page blueprint:

    forms:
        fields:
            tabs:
                fields:
                    tabs:
                        type: tab
                        title: Tabs
                        import@:
                            type: partials/tabs
                            context: blueprints://


