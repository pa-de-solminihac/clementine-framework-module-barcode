# clementine-module-barcode

Wrap [tc-lib-barcode library](https://github.com/tecnickcom/tc-lib-barcode) in a Clementine helper.

## Usage

```php
echo $this->getHelper('barcode')
          ->getBarcodeObj('QRCODE', 'hello world');
          ->getSvgCode();
```
