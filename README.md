# Clementine Framework : module Barcode

Wrap [tc-lib-barcode library](https://github.com/tecnickcom/tc-lib-barcode) in a Clementine helper, in a way that enables you to override it easyly.

## Usage

```php
// generate a QRCODE through a resizable SVG with "qrcode" CSS class
echo $this->getHelper('barcode')
          ->getBarcodeObj('QRCODE', 'hello world');
          ->getResizableSvgCode('class="qrcode"');
```

## Overriding

```php
// inject class="foo" in the SVG tag
public function getSvgCode()
{
    return str_replace('<svg ', '<svg class="foo" ', parent::getSvgCode());
}
```
