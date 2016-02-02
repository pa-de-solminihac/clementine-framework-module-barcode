<?php
/**
 * barcodeBarcodeHelper : wraps barcode library so that you can override its methods
 *  Usage :
 *      $barcode = $this->getHelper('barcode')->getBarcodeObj('QRCODE', 'hello world');
 *      echo $barcode->getSvgCode();
 *
 * @package
 * @version $id$
 * @copyright
 * @author Pierre-Alexis de Solminihac <pa@quai13.com>
 * @license
 */
require_once __FILES_ROOT_BARCODE__ . '/lib/autoload.php';
class barcodeBarcodeHelper extends barcodeBarcodeHelper_Parent
{

    public function __construct()
    {
        $this->barcodeInstance = new \Com\Tecnick\Barcode\Barcode();
    }

    public function getBarCodeObj($type, $code, $width = -1, $height = -1, $color = 'black', $padding = array(0, 0, 0, 0))
    {
        $this->bobj = $this->barcodeInstance->getBarCodeObj($type, $code, $width, $height, $color, $padding);
        return $this;
    }

    // forward unknown calls to barcode object
    public function __call($method, $arguments)
    {
        return call_user_func_array(array($this->bobj, $method), $arguments);
    }

    //public function getSvgCode()
    //{
        //return str_replace('<svg ', '<svg class="coucou" ', parent::getSvgCode());
    //}

}
