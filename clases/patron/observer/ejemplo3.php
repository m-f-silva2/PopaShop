<?php
class Shirt implements \SplSubject
{
    protected $storage;
    public function __construct(\SplObjectStorage $storage)
    {
        $this->storage = $storage;
    }
    public function buy()
    {
        // comprar ..
        $this->notify('comprar');
    }
    public function sell()
    {
        // vender ..
        $this->notify('vender');
    }
    public function attach(\SplObserver $observer)
    {
        $this->storage->attach($observer);
    }
    public function detach(\SplObserver $observer)
    {
        $this->storage->detach($observer);
    }
    public function notify($event = '')
    {
        foreach ($this->storage as $observer)
            $observer->update($this, $event);
    }
}
class Notify implements \SplObserver
{
    public function update(\SplSubject $subject, $event = '')
    {
        if ($event == 'comprar')
            echo 'Se compró una camisa' . PHP_EOL;
        else if ($event == 'vender')
            echo 'Se vendió una camisa' . PHP_EOL;
    }
}
for ($i=0; $i < 5; $i++) { 
    $camisa = new Shirt(new \SplObjectStorage());
    $camisa->attach(new Notify());
    $camisa->buy();
    $camisa->sell();
    $camisa->buy();
    echo "<br>";
}
/**
 * Resultado:
 *
 * Se compró una camisa
 * Se vendió una camisa
 * Se compró una camisa
 */
?>