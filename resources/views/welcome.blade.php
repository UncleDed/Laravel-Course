<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel Course</title>
</head>
<body>
@php

Class ValueObject {
    private $red;
    private $green;
    private $blue;

    public function __construct($red,$green,$blue) {
        $this->setRed($red);
        $this->setGreen($green);
        $this->setBlue($blue);
    }

    private function trueValue($color) {
        if ($color < 0 || $color > 255) {
            throw new Exception("Invalid value");
        }
        return $color;
    }

    public function getRed() {
        return $this->red;
    }
    private function setRed($red) {
        $this->red = $this->trueValue($red);
    }

    public function getGreen() {
        return $this->green;
    }
    private function setGreen($green) {
        $this->green = $this->trueValue($green);
    }

    public function getBlue() {
        return $this->blue;
    }
    private function setBlue($blue) {
        $this->blue = $this->trueValue($blue);
    }

    public function equals(ValueObject $valueObject) {
        if ($this->red == $valueObject->getRed() && $this->green == $valueObject->getGreen() && $this->blue == $valueObject->getBlue()){
            return "The colors are the same";
        } else {
            return "The colors are different";
        }
    }

    static function random() {
        return new ValueObject(rand(0, 255), rand(0, 255), rand(0,255));
    }

    public function mix(ValueObject $valueObject) {
        return new ValueObject(
            $this->red = (($this->getRed() + $valueObject->getRed()) / 2),
            $this->green = (($this->getGreen() + $valueObject->getGreen()) / 2),
            $this->blue = (($this->getBlue() + $valueObject->getBlue()) / 2)
        );
    }
}

$objectFirst = new ValueObject(100, 150, 200);
$objectSecond = new ValueObject(50, 75, 100);

echo $objectFirst->equals($objectSecond)."<hr>";

var_dump(ValueObject::random());

var_dump($objectFirst->mix(ValueObject::random()));

@endphp
</body>
</html>
