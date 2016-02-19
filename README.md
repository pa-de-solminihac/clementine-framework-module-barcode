# Clementine Framework : module Barcode

Wrap [tc-lib-barcode library](https://github.com/tecnickcom/tc-lib-barcode) in a Clementine helper.

## Usage

```php
// generate a QRCODE through a resizable SVG with "qrcode" CSS class
echo $this->getHelper('barcode')
          ->getBarcodeObj('QRCODE', 'hello world');
          ->getResizableSvgCode('class="qrcode"');
```
