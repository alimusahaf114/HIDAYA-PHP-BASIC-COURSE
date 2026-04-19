<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <img src="../xml.PNG" alt="xml">
    <h3>Why does XML show a plain tree in the browser — but HTML renders a full page?</h3>
    <p align="justify">
        

Most beginners assume the browser renders anything you open in it. It doesn't. Here's what's actually happening:

XML is not a display language. It exists to store and transport data — not to show a UI. When you open an XML file, the browser parses it into a DOM tree and stops there. No CSS, no render tree, no pixels.

How a browser actually renders a page:
1. HTML/XML parser → builds the DOM
2. CSS parser → builds the CSSOM (HTML only — XML has no CSS step)
3. Rendering engine → merges DOM + CSSOM into a render tree
4. Layout engine → calculates positions and sizes
5. Paint engine → draws pixels on screen

XML exits at step 1. HTML goes through all five. That's the entire difference.

XML still has its place — legacy APIs, config files, enterprise systems. But for anything going to the screen, it was never the right tool. That's also why modern web development swapped XML for JSON — lighter syntax, same transport job, no confusion about rendering.

If you're just starting out in web dev, remember: the browser is a rendering engine, not a universal file viewer. What you see depends entirely on the pipeline the file triggers.
    </p>
</body>
</html>