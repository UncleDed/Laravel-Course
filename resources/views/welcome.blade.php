<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
@php

Class ValueObject {
    private $red;
    private $green;
    private $blue;

    public function __construct($red, $green, $blue) {
        $this->setRed($red);
        $this->setGreen($green);
        $this->setBlue($blue);
    }


    private function setRed($red):void {
        if ($red >= 0 && $red <= 255) {
            $this->red = $red;
        } else {
            throw new Exception('Invalid value');
        }
    }
    public  function getRed() {
        return $this->red;
    }

    private function setGreen($green):void {
        if ($green >= 0 && $green <= 255) {
            $this->green = $green;
        } else {
            throw new Exception('Invalid value');
        }
    }
    public  function getGreen() {
        return $this->green;
    }

    private function setBlue($blue):void {
        if ($blue >= 0 && $blue <= 255) {
            $this->blue = $blue;
        } else {
            throw new Exception('Invalid value');
        }
    }
    public  function getBlue() {
        return $this->blue;
    }

    public function equal(ValueObject $valueObject) {
        if ($this->red == $valueObject->getRed() && $this->green == $valueObject->getGreen() && $this->blue == $valueObject->getBlue()) {
            return true;
        } else {
            return false;
        }
    }

    public static function random() {
        return new ValueObject(rand(0,300), rand(0,300), rand(0,300));
    }

    public function mix(ValueObject $valueObject) {
        return [
            ($this->red + $valueObject->getRed()) / 2,
            ($this->green + $valueObject->getGreen()) / 2,
            ($this->blue + $valueObject->getBlue()) / 2
        ];
    }
}


$model = new ValueObject(25,50,75);
$model1 = new ValueObject(25,50,75);
$model2 = $model->equal($model1);
$model3 = $model1::random();
$model4 = $model1->mix($model3);
var_dump($model1, $model2, $model3, $model4,);

@endphp

</body>
</html>
