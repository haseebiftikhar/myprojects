<?php 
// Interfaces
interface BookInterface {

    public function open();

    public function turnPage();

}

interface eReaderInterface {

    public function turnOn();

    public function pressNextButton();

}


/**
*  Adapter
*/
class eReaderAdapter implements BookInterface
{
    private $reader;
    
    function __construct(eReaderInterface $reader)
    {
        $this->reader = $reader;
    }

    public function open()
    {
        return $this->reader->turnOn();
    }
    public function turnpage()
    {
        return $this->reader->pressNextButton();
    }
}

//Classes
class Book implements BookInterface {
	public function open()
	{
        var_dump('opening the paper book.');
    }

    public function turnPage()
    {
        var_dump('turning the page of the paper book.');
    }
}

// not own by YOU
class Kindle implements eReaderInterface {
    
    public function turnOn()
    {
        var_dump('turn the Kindle on');
    }
    
    public function pressNextButton()
    {
        var_dump('press the next button on the Kindle');
    }

} 
class Nook implements eReaderInterface {

    public function turnOn()
    {
        var_dump('turn the Nook on');
    }

    public function pressNextButton()
    {
        var_dump('press the next button on the Nook');
    }

}



class Person {
    public function read(BookInterface $book)
    {
        $book->open();
        $book->turnPage();
    }
}



(new Person)->read(new eReaderAdapter(new Nook));
